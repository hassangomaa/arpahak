<?php



namespace App\Http\Controllers;

    use App\Models\Payment;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }


    public function index()
    {
        $payments = Payment::where('payment_status','=','pending')->get();
        return view('admin.pages.payment',compact('payments') );
    }



    public function update(Request $request, $id)
    {
//        dd($id);

        //go to user service and update status to
        //
        $request -> validate([
//            'category_id' => 'required',
//            'type' => 'required|string',
//            'status' => 'required',
        ]);
        DB::table('payments')
            ->where('id', (int) $id )
            ->update([
                'payment_status' =>  'Accepted' ,
            ]);
        return redirect()->back()->with('success_message','تم قبول طلب المستخدم');
    }


    public function destroy($id)
    {
//        dd($id);
        Payment::where('id',$id)->delete();
        return redirect()->back()->with('success','تم حذف الرسالة.');

    }


    public function update_user(Request $request, $id)
    {
//        dd($id);

        //go to user service and update status to
        //
        $request -> validate([
//            'category_id' => 'required',
//            'type' => 'required|string',
//            'status' => 'required',
        ]);
        DB::table('payments')
            ->where('id', (int) $id )
            ->update([
                'payment_status' =>  'pending' ,
            ]);
        return redirect()->back()->with('success','تم ايداع طلبك في قائمة اﻻنتظار');
    }


    public function destroy_user(Request $request,$id)
    {
//        dd($id);######################################################################

        $payment = Payment::find($id);
       $balance = $payment->amount + $request->balance ;
       User::find(Auth::id())->increment('balance', $balance);

//        DB::table('users')
//            ->where('id', (int) $id )
//            ->update([
//                'balance' =>  'في اﻻنتظار' ,
//            ]);

        Payment::where('id',$id)->delete();
        return redirect()->back()->with('error','تم اعاده اضافه رصيدكم الي المحفظه و التراجع بنجاح.');

    }



    public function pay_page($id)
    {
        session(['prod_id' => $id]);
        return view('users.pages.payment.paypal');
    }


    public function pay(Request $request)
    {

//        dd($request->amount);

        try {

            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

//            return redirect()->route('payment.success');

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {

        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];

                $payment->save();

                return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];

            } else {
                return $response->getMessage();
            }
        } else {
            return 'Payment declined!!';
        }
    }

    public function error()
    {
        return 'User declined the payment!';
    }

}


<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller

{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTransaction()
    {
//        return view('users.pages.payment.paypal');
        return view('users.pages.payment.transaction');

//        encrypt()
//            decrypt()

    }


    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "1000.00"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createTransaction')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}


//{

//    public function payment()
//    {
//
//        $data = [];
//        $data['items'] = [
//            [
//                'name' => 'ItSolutionStuff.com',
//                'price' => 100,
//                'desc'  => 'Description for ItSolutionStuff.com',
//                'qty' => 1
//            ]
//        ];
//
//        $data['invoice_id'] = 1;
//        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
//        $data['return_url'] = route('payment.success');
//        $data['cancel_url'] = route('payment.cancel');
//        $data['total'] = 100;
//
//        $provider = new ExpressCheckout;
//
//        $response = $provider->setExpressCheckout($data);
//
//        $response = $provider->setExpressCheckout($data, true);
//
//        return redirect($response['paypal_link']);
//    }
//
//
//
//    public function cancel()
//    {
//        dd('Your payment is canceled. You can create cancel page here.');
//    }
//
//
//
//    public function success(Request $request)
//    {
//        $provider = new ExpressCheckout;
//        $response = $provider->getExpressCheckoutDetails($request->token);
//
//        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
//            dd('Your payment was successfully. You can create success page here.');
//        }
//
//        dd('Something is wrong.');
//    }
//
//}

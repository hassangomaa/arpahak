<?php

namespace App\Http\Controllers;


use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    use GeneralTrait;
    //
    public function loginWithGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle(Request $request)
        // {
    {
        $userdata = Socialite::driver('google')->user();
        //check login
        $user = User::where('email', $userdata->email)->first();
        if($user)
        {
            Auth::login($user);
            return redirect('/dashboard');
        }
        else
        {
            // dd($userdata);
            // die();
            //do register
            $uuid = Str::uuid()->toString();
            $user =new User();
            $user->name =$userdata->name;
            $user->email  =$userdata->email;
            $user->password = Hash::make($uuid.now());
            $user->email_verified_at =date('Y-m-d H:i:s');
            // $user->remember_token =$userdata->token;
            //  'google_id' => $user->getId(),
            //      'name' => $user->getName(),
            //       'email_verified_at' => date('Y-m-d H:i:s'),
            //     'email' => $user->getEmail(),
            //     'remember_token' => $user->token ,
            //     'password' => Hash::make($user->getName().'@'.$user->getId()
            $user->save();
            Auth::login($user);
            return redirect('/');
        }

    }

    // try {
    // $user = Socialite::driver('google')->user();
//            dd($user);
//            die();
    // Check Users Email If Already There
//             $is_user = User::where('email', $user->getEmail())->first();
//             if(!$is_user){

//                 $saveUser = User::updateOrCreate([
//                     'google_id' => $user->getId(),
//                 ],[
//                     'name' => $user->getName(),
// //                    'user_phone' => $user->getMobile(),
// //                    'country' => $user->getCountry(),
//                     'email_verified_at' => date('Y-m-d H:i:s'),
//                     'email' => $user->getEmail(),
//                     'remember_token' => $user->token ,
//                     'password' => Hash::make($user->getName().'@'.$user->getId())
//                 ]);
//             }else{
//                 $saveUser = User::where('email',  $user->getEmail())->update([
//                     'google_id' => $user->getId(),
//                 ]);
//                 $saveUser = User::where('email', $user->getEmail())->first();
//             }


//             $credentials = ['email' => $user->getEmail(), 'password' => $user->getName().'@'.$user->getId()];

//             $token = Auth::guard('api-jwt')->attempt($credentials);

//             if (!$token)
//                 return $this->returnError('E001', 'it is not valid!');

//             $admin = Auth::guard('api-jwt')->user();
//             $admin->api_token = $token;
//             Auth::login($saveUser);

// //            return $this->returnData("user",$admin);
//             return redirect()->intended('homepage');

    // } catch (\Throwable $th) {
    // dd('حدث خطأ, اعد المحاوله ﻻحقا #404'.$th);
    // }
    // }
    public function logoutFromGoogle(Request $request)
    {
        Auth::logout();
//        $token = $request -> header('auth-token');
//        if($token){
//            try {
//
//                JWTAuth::setToken($token)->invalidate(); //logout
//            }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
//                return  $this -> returnError('','some thing went wrongs');
//            }
//            return $this->returnSuccessMessage('Logged out successfully');
//        }else{
//            $this -> returnError('','some thing went wrongs');
//        }
    }
}

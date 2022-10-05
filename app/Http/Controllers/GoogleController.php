<?php

namespace App\Http\Controllers;


use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Tymon\JWTAuth\Facades\JWTAuth;

class GoogleController extends Controller
{
    use GeneralTrait;
    //
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function callbackFromGoogle()
    {

        try {
            $user = Socialite::driver('google')->stateless()->user();
//            dd($user);
//            die();
            // Check Users Email If Already There
            $is_user = User::where('email', $user->getEmail())->first();
            if(!$is_user){

                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId(),
                ],[
                    'name' => $user->getName(),
//                    'user_phone' => $user->getMobile(),
//                    'country' => $user->getCountry(),
                    'email_verified_at' => date('Y-m-d H:i:s'),
                    'email' => $user->getEmail(),
                    'remember_token' => $user->token ,
                    'password' => Hash::make($user->getName().'@'.$user->getId())
                ]);
            }else{
                $saveUser = User::where('email',  $user->getEmail())->update([
                    'google_id' => $user->getId(),
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }


            $credentials = ['email' => $user->getEmail(), 'password' => $user->getName().'@'.$user->getId()];

            $token = Auth::guard('api-jwt')->attempt($credentials);

            if (!$token)
                return $this->returnError('E001', 'it is not valid!');

            $admin = Auth::guard('api-jwt')->user();
            $admin->api_token = $token;

//            return $this->returnData("user",$admin);
            return redirect()->intended('homepage');

        } catch (\Throwable $th) {
            dd('حدث خطأ, اعد المحاوله ﻻحقا #404'.$th);
        }
    }
    public function logoutFromGoogle(Request $request)
    {
        $token = $request -> header('auth-token');
        if($token){
            try {

                JWTAuth::setToken($token)->invalidate(); //logout
            }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
                return  $this -> returnError('','some thing went wrongs');
            }
            return $this->returnSuccessMessage('Logged out successfully');
        }else{
            $this -> returnError('','some thing went wrongs');
        }
    }
}

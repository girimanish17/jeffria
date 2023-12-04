<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public const BASE_PATH_AUTH = 'auth.user.';

    public function login(){
        return view(self::BASE_PATH_AUTH .'login');
    }

    public function register(){
        return view(self::BASE_PATH_AUTH .'register');
    }

    public function registration(Request $request){
        $userdata = [
            'email' => $request['email'],
        ];

        $user = User::create($userdata);
        // Auth::login();

        return redirect()->intended('/')->withSuccess('You have Successfully Registerd');
    }

    public function email_validation(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
        ],[
            'email.required' => __('Email Required.'),
            'email.unique' => __('Email Already Registerd.'),
            'email.email' => __('Invalid Email Format'),
            'email.regex' => __('Invalid Email Format'),
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
                'status' => 0
            ]);
        } 
    }

    public function OTP_code(Request $request){

        $validator = Validator::make($request->all(), [
            'OTP' => ['required',function($attribute, $value,$fail){
                if($value != 1234){
                    return $fail('The code you entered is incorrect.');
                }

             }],
        ],[
            'OTP.required' => __('Verification Code Required.'),
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
                'status' => 0
            ]);
        } 
    }
}

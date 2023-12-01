<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public const BASE_PATH_AUTH = 'auth.user.';

    public function login(){
        return view(self::BASE_PATH_AUTH .'login');
    }

    public function register(){
        return view(self::BASE_PATH_AUTH .'register');
    }
}

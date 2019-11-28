<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function GetLogin()
    {
    	Return view('container.login');
    }

    public function PostVali(LoginRequest $request)
    {
    	$email = $request->email;
    	$password= $request->password;
    	if (Auth::attempt(['email'=> $email,'password'=> $password])) {
    		Return view('container.home'); 
    	}
    }
}

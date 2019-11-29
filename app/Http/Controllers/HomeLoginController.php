<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeLoginController extends Controller
{
    public function GetLogin()
    {
    	Return view('container.login');
    }

    public function PostVali(LoginRequest $request)
    {
    // 	$emailrq = $request->email;
    // 	$passwordrq= $request->password;
    // 	if (Auth::attempt(['email'=> $emailrq,'password'=> $passwordrq])) {
    		Return view('container.home'); 
    	// }
    }
}

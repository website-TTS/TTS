<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function GetRegister()
    {
    	return view('container.register');
    }

    public function PostVali(RegisterRequest $request)
    {
    	return view('container.home');
    }

}

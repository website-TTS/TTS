<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeRegister extends Controller
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

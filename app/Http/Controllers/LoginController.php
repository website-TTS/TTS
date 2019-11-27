<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function GetLogin()
    {
    	Return view('container.login');
    }
}

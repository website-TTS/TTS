<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;

class UserController extends Controller
{
    
    public function showRegisterForm()
    {
      return view('container.Register');
    }

    public function storeUser(Request $request){
      //dd($request->all());

    }

}

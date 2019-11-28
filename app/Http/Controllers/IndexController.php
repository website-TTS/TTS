<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function GetIndex()
    {
    	return view('container.home');
    }

    public function GetSanPham()
    {
    	return view('container.san_pham');
    }
}

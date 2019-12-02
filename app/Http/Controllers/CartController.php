<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table;
use Auth;
use App\cart;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{



    public function GetaddCart($id)
	{
		$add_cart = DB::table('laptop')->where('id',$id)->first();
        cart::add( array('id' => $id,'tenlt'=>$add_cart->tenlt,'sluong'=>1,'dongia'=>$add_cart->dongia,'image'=>$add_cart->img));
        $content = cart::content();
        return redirect()->route('giohang');

	}

	public function GetshowCart()
	{
        $content = cart::content();
        return view('container.ShoppingCart',compact('content'));
	}
}



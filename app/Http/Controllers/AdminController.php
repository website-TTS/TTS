<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function GetHome()
    {
    	return view('admin.home');
    }

    public function GetLogin()
    {
    	return view('admin.login');
    }

    public function GetBill()
    {
        return view('admin.bill');
    }

    public function GetProduct()
    {
    	return view('admin.product');
    }

    public function GetAddProduct()
    {
    	return view('admin.addproduct');
    }

    public function GetUser()
    {
    	return view('admin.user');
    }

    public function GetCategory()
    {
    	return view('admin.category');
    }

    public function GetEdit()
    {
    	return view('admin.edit');
    }

    public function GetEditCategory()
    {
    	return view('admin.editcategory');
    }

    public function GetEditProduct()
    {
    	return view('admin.editproduct');
    }


}

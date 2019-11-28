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

    public function GetAdd()
    {
    	return view('admin.add');
    }


    public function GetProduct()
    {
    	return view('admin.product');
    }

    public function GetAddProduct()
    {
    	return view('admin.addproduct');
    }

    public function GetAdmin()
    {
    	return view('admin.admin');
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
    	return view('admin.editcategory');
    }


}

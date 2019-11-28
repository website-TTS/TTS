<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','IndexController@GetIndex');
<<<<<<< HEAD
Route::get('/san_pham','IndexController@GetSanPham');

//Route cho tới trang admin
Route::group(['prefix' => 'admin'], function(){
	Route::get('','AdminController@GetHome');
	Route::get('home','AdminController@GetHome');
	Route::get('login','AdminController@GetLogin');	
	Route::get('admin','AdminController@GetAdmin');
	Route::get('add','AdminController@GetAdd');
	Route::get('product','AdminController@GetProduct');
	Route::get('addproduct','AdminController@GetAddProduct');
	Route::get('category','AdminController@GetCategory');
	Route::get('edit','AdminController@GetEdit');
	Route::get('editcategory','AdminController@GetEditCategory');
	Route::get('editproduct','AdminController@GetEditProduct');

});
=======
Route::get('/login','LoginController@GetLogin');
Route::get('/register','RegisterController@GetRegister');
Route::post('/register','UserController@storeUser');
>>>>>>> 673e5e77ba0451a5fd9add727d427c91e36d0827

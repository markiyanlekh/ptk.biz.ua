	<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Product;
use App\Category;
use App\Order;

use App\Http\Controllers\mailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VisitorController;

use App\Http\Controllers\Auth;
use App\Http\Middleware\Authentication;
use App\Http\Middleware\LocaleMiddleware;
use App\Http\Middleware\VisitorMiddleware;


Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
{	
	Route::get('/',function()
	{
		return redirect('admin/visitors');
	});
	Route::group(['prefix'=>'products'],function()
	{	
		Route::get('/','ProductController@index');
		Route::get('/add','ProductController@create');
		Route::post('/save','ProductController@store');
		Route::post('/update/{id}', 'ProductController@update');
		Route::get('/delete/{id}','ProductController@destroy');
		Route::get('edit/{id}',function($id)
		{
			$current=new Product();
			$products=Product::all();
			$categories=Category::all();
			foreach ($products as $product) 
			{
				if($product->id==$id)
					$current=$product;
			}
		    return view('products.editproduct',compact('current','categories'));
		});
	});

	Route::group(['prefix'=>'categories'],function()
	{
		Route::get('/','CategoryController@index');
		Route::get('/add','CategoryController@create');
		Route::post('/save','CategoryController@store');
		Route::post('/update/{id}','CategoryController@update');
		Route::get('/delete/{id}','CategoryController@destroy');
		Route::get('edit/{id}',function($id)
		{
			$current=new Category();
			$categories=Category::all();
			foreach ($categories as $category) 
			{
				if($category->id==$id)
					$current=$category;
			}
		    return view('categories/editcategory',compact('current'));
		});
	});
	Route::group(['prefix'=>'orders'],function()
	{
		Route::get('/','OrderController@index');
		Route::get('/delete/{id}','OrderController@destroy');	
	});
	Route::group(['prefix'=>'visitors'],function()
	{
		Route::get('/','VisitorController@index');
		Route::get('/delete/{id}','VisitorController@destroy');	
	});

});


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){

	Route::group(['prefix'=>'public','middleware'=>['visitor','product']],function()
	{
	   Route::get('/','HomeController@show');
	   Route::get('/catalog','HomeController@showcase');
	   Route::get('/product/{id}',function($id)
		{
			$current=new Product();
			$products=Product::all();
			$categories=Category::all();
			foreach ($products as $product) 
			{
				if($product->id==$id)
					$current=$product;
			}
		    return view('public.item',compact('current','categories'));
		});
	   Route::get('/orders','HomeController@order');
	   Route::get('/{id}/doc','OrderController@download');
	   Route::post('order/{id}','OrderController@store');
	  
	   Route::get('/contact',function()
		{
				return view('public.contact');
		});
	   Route::get('/about',function()
		{
				return view('public.about');
		});

	});

});

Route::post('send','mailController@send');
Route::post('search','HomeController@search');
Route::get('/',function()
{
		return redirect('ru/public');
});
Route::get('/home','HomeController@check');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



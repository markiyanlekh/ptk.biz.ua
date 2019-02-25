<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Product;
use App\Category;
use App\Order;
use DB;
use Redirect;
use URL;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function show()
    {
        $categories=Category::all();
        $products=Product::all();
        return view('public.app',compact('categories','products'));
    }

    public function check()
    {
        return redirect('admin/visitors');

    }

    public function showcase()
    {
        $categories=Category::all();
        $products=Product::all();
        return view('public.catalog',compact('categories','products'));
    }
    public function locale($lang)
    {
        App::setlocale($lang);
        return redirect('public');
    }
    public function search(Request $request)
    {
       $keyword=$request->search;

        $categories=Category::all();
        $products=Product::all();

        $results=Product::where('name','like', "%{$keyword}%")->get();

        $result_category= Category::where('description','like', "%{$keyword}%")->orWhere('uk_name','like', "%{$keyword}%")->
        orWhere('ru_name','like', "%{$keyword}%")->get();
            foreach ($result_category as $res) 
            {
                $tmp=Product::where('id_category',$res->id)->get();
                $results=$results->merge($tmp);
            }
        
       Session::flash('results',$results);
       return Redirect::to(URL::previous())->with('keyword',$keyword);  
    }
}

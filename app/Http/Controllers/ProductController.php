<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(20);
        $categories=Category::all();
        $views=DB::table('views')->get();

        return view('products.dashboard',compact('products','categories','views'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all(); 
        return view('products.addproduct',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->name;
        $all_str=$request->description;
        $id_category=$request->category;

        $pictures_name="";
        $currentDir=getcwd();
        $uploadDirectory="\pics\\";
        
        if($all_str!=null)
        $description=implode("|", $all_str);
        else
        $description="";
        $pictures=$_FILES['picture'];
        $files=$request->file('picture');
        $array_names=array_values($pictures['name']);
        $array_tmps=array_values($pictures['type']);
        
        $index=0;
        foreach ($files as $file) 
        {
            $picture_name = $array_names[$index];
            $tmp_picture_name = $array_tmps[$index];
            $pictures_name.=$picture_name.",";
            $uploadPath = $currentDir.$uploadDirectory.$picture_name; 
            $file->move(public_path().'/pics/', $uploadPath);
            $index++;
        }
       
        $save=DB::table('products')->insert([
            'name'=>$name, 
            'id_category'=>$id_category,
            'ru_description'=>$description,
            'uk_description'=>$description,
            'pics'=>$pictures_name,
            'remember_token'=>""
        ]);
        return redirect('admin/products');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $id=$request->id;
        $name=$request->name;
        $all_str=$request->description;
        $category=$request->category;

        if($all_str!=null)
        $description=implode("|", $all_str);
        else
        $description="";
        $pictures=$_FILES['picture'];
        $files=$request->file('picture');

        $currentDir=getcwd();
        $uploadDirectory="\pics\\";
        $pictures_name="";

            if($files[0]!=null)
                {
                    $array_names=array_values($pictures['name']);
                    $array_tmps=array_values($pictures['type']);
                    $index=0;
                    foreach ($files as $file) 
                    {
                        $picture_name = $array_names[$index];
                        $tmp_picture_name = $array_tmps[$index];
                        $pictures_name.=$picture_name.",";
                        $uploadPath = $currentDir.$uploadDirectory.$picture_name; 
                        $file->move(public_path().'/pics/', $uploadPath);
                        $index++;
                    }
                }
                else
                {
                    $pictures_name=DB::table('products')->where('id',$id)->value('pics');
                }

                $edit=DB::table('products')->where('id',$id)->update([
                    'name'=>$name,
                    'uk_description'=>$description,
                    'ru_description'=>$description,
                    'id_category'=>$category,
                    'pics'=>$pictures_name,
                    'remember_token'=>""
                ]);
                return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $delete=DB::table('products')->where('id',$request->id)->delete();
        return redirect('admin/products');   
     }
}

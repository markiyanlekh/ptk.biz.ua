<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('categories.dashboard')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uk_name=$request->uk_name;
        $ru_name=$request->ru_name;
        $picture=$_FILES['picture'];

        $currentDir=getcwd();
        $uploadDirectory="\pics\\";

        $array=array_values($picture);
        $picture_name = $array[0];
        $tmp_picture_name = $array[1];

        $uploadPath = $currentDir.$uploadDirectory.$picture_name; 
      
        $file = $request->file('picture');
        $file->move(public_path().'/pics/', $uploadPath);

        $edit=DB::table('categories')->insert([
            'uk_name'=>$uk_name,
            'ru_name'=>$ru_name,
            'pic'=>$picture_name,
            'remember_token'=>""
        ]);

        return redirect('admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $uk_name=$request->uk_name;
        $ru_name=$request->ru_name;
        $picture=array_values($_FILES['picture']);
        $picture_name="";
        if($picture[0]!=null)
            {
                $currentDir=getcwd();
                $uploadDirectory="\pics\\";

                $picture_name = $picture[0];
                $tmp_picture_name = $picture[1];

                $uploadPath = $currentDir.$uploadDirectory.$picture_name; 
              
                $file = $request->file('picture');
                $name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();

                $file->move(public_path().'/pics/', $uploadPath);
            }
        else
        {
            $picture_name=DB::table('categories')->where('id',$request->id)->value('pic');
        }
        $edit=DB::table('categories')->where('id',$request->id)->update([
            'uk_name'=>$uk_name,
            'ru_name'=>$ru_name,
            'pic'=>$picture_name,
            'remember_token'=>""
        ]);

        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $categories=DB::table('categories')->where('id',$request->id)->delete();
        return redirect('admin/categories');   
    }
}

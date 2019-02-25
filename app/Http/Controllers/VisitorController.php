<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \DB;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors=DB::table('visitors')->orderBy('visit_date','desc')->paginate(10);

        $count_unique= DB::table('visitors')->select('ip')->count();
        $count_visit=DB::table('visitors')->sum('hits');

        $firstDay = new Carbon('first day of this month'); 
        $lastDay = new Carbon('last day of this month'); 
        $today = Carbon::now();
        
        $monthly=DB::table('visitors')->whereBetween('visit_date', [$firstDay,$lastDay] )->count();
        $views=DB::table('views')->orderBy('hits','desc')->paginate(10);
        foreach ($views as $view)
        {
            $product=DB::table('products')->where('id',$view->id)->pluck('name');
            $pid_cat=DB::table('products')->where('id',$view->id)->pluck('id_category');
            $category=array_reverse(explode('|',DB::table('categories')->where('id',$pid_cat)->pluck('description')))[0];
            $view->id=$category." ".$product;

        }        
        $count_views=DB::table('views')->sum('hits');
 
        return view('visitors.dashboard',compact('visitors','views','count_unique','count_visit','monthly','count_views'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $ip
     * @return \Illuminate\Http\Response
     */
    public function destroy($ip)
    {
        $delete=DB::table('visitors')->where('ip',$ip)->delete();
        return redirect('admin/visitors');
    }
}

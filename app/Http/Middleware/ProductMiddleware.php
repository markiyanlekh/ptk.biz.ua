<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Request;
use DB;
use Session;



class ProductMiddleware
{
        
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    

public function handle($request, Closure $next)
    {


        $ip=$_SERVER['REMOTE_ADDR'];

        $url = Request::url(); 

        $id = array_reverse(explode('/',$url))[0]; 
    if (is_numeric($id)) {
        $raw=DB::table('views')->where('id',$id)->count();
        
        if($raw!=0)
            {
                        DB::table('views')->where('id',$id)->increment('hits');
            }
            else
            {
                DB::insert("insert into views (id,hits) values(?,'1')",
                    [$id]);
            }
        }
        return $next($request);

    }
}

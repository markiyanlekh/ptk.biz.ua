<?php
namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Request;
use DB;
use Session;



class VisitorMiddleware
{
        
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     **/

    public function handle($request, Closure $next)
    {


        $ip=$_SERVER['REMOTE_ADDR'];

        $raw=DB::table('visitors')->where('ip',$ip)->first();
        
            
        
        $access_key = 'your_key';

        $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $json = curl_exec($ch);
        curl_close($ch);

        $api_result = json_decode($json, true);
        $country=$api_result['country_name'];
        $city=$api_result['city'];


        $today= Carbon::today();
        if($raw!=null)
            {
                if(strcmp($raw->visit_date,$today->toDateString())!=0)
                    {
                            DB::update('update visitors set visit_date=? where ip=?',[$today,$ip]);

                            DB::table('visitors')->where('ip',$ip)->increment('hits');
                             
                    }
            }
            else
            {
                DB::insert("insert into visitors (ip,country,city,hits,visit_date) values(?,?,?,'1',?)",
                    [$ip,$country,$city,$today]);

                Session::put('location',$api_result);
//                dd(Session::all());
            }


        return $next($request);
    }
}

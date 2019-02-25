<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Session;
use Redirect;
use Validator;
use URL;
class mailController extends Controller
{
    public function send(Request $request)
    {
        
         $this->validate($request, [

        'email' => 'email|required',
        'name' => 'required|required',
        'message'=>'required',
        ]);

        $subject='Від '.$request->name.' !';
        $data = array(
            'email' => $request->email,
            'subject' => $subject,
            'message_tmp' => $request->message
            );

        Mail::send('public.moduls.mail1', $data, function($message) use ($data){
            $message->from('admin@ptk.biz.ua');
            $message->to('admin@ptk.biz.ua');
            $message->subject($data['subject']);
        });
        
        
                Session::flash('success', trans('messages.success_sending'));


        return Redirect::to(URL::previous() ."#alert");
    }
    
}
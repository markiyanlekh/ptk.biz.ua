<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use \DB;
use \Mail;
use Session;
use URL;
use Storage;
use Redirect;
use Encoding;
use Response;
use App\Product;
use App\Category;
use Carbon;

class OrderController extends Controller
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
        $orders=Order::all();
        return view('orders.dashboard')->with('orders',$orders);
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
         $this->validate($request, [

        'email' => 'email|required',
        'name' => 'required|alpha',
        'tel'=>'required|numeric',
        'plain'=>'mimes:docx,doc,txt,rtf,pdf,xml,odt',
        'width'=>'numeric',
        'height'=>'numeric',
        ]);
       
        $name=$request->name;
        $org=$request->corp;
        $email=$request->email;
        $tel=$request->tel;
        $comment=$request->comment;
        $size=$request->width." | ".$request->height;
        $product=$request->id;
        $plain=$_FILES['plain'];
        $currentDir=getcwd();
    
        if($plain)
            {
                
                $tmp_name=$_FILES['plain']['tmp_name'];
                $uploadDirectory="/order_docs";
                $filename = basename($_FILES["plain"]["name"]);  
                $uploadPath = $currentDir.$uploadDirectory;
                $upload= "$uploadPath/$filename";
                move_uploaded_file($tmp_name, "$uploadPath/$filename");
             }

                $current=DB::table('products')->where('id',$product)->pluck('pics');
                $p_name=DB::table('products')->where('id',$product)->pluck('name');
                $category_id=DB::table('products')->where('id',$product)->pluck('id_category');
                $p_category=DB::table('categories')->where('id',$category_id)->pluck('uk_name');
                $p_name = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
                     return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
                     }, $p_name);
                $p_category = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
                     return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
                     }, $p_category);
                $c_pic=explode(",",$current)[0];
                $n_pic=substr($c_pic, 0 ,strlen($c_pic) );
                $sendDirectory="/pics/";
                $sendPath=$currentDir.$sendDirectory.$n_pic;
            
           $id_order=DB::table('orders')->insertGetId([
            'id_product'=>$product,
            'c_name'=>$name,
            'c_org'=>$org,
            'c_email'=>$email,
            'c_tel'=>$tel,
            'size'=>$size,
            'comment'=>$comment,
            'plain'=>$filename,
            'remember_token'=>$upload,
        ]);

        setlocale(LC_TIME, 'uk_UA.UTF8','Ukrainian_Ukraine','Ukrainian');

        $date=strftime('%d %B %Y %A');

        $data = array(
            'id'=>$id_order,
            'email' => $email,
            'tel'=> $tel,
            'name'=>$name,
            'corp'=>$org,
            'size'=>$size,
            'p_name'=>$p_name,
            'p_category'=>$p_category,
            'p_id'=>$product,   
            'comment' => $comment,
            'pic'=>$n_pic,
            'path'=>$sendPath,
            'plain'=> $upload,
            'filename'=>$filename,
            'date'=>$date
            );
       
        Mail::send('public.moduls.mail_done', $data, function($message) use ($data){
$headers = $message->getHeaders();

            

            $sub = $message->getHeaders()->get('Subject');
            $sub->setValue("Нове замовлення");


            $type = $message->getHeaders()->get('Content-Type');
            $type->setValue('text/html');
            $type->setParameter('charset', 'utf-8');
            $headers->addTextHeader('Content-Transfer-Encoding','quoted-printable');
            $headers->addTextHeader('MIME-Version','1.0');

            if($data['filename']!="")
            {
                $message->attach($data['plain']);
            }
            $message->from('admin@ptk.biz.ua');
            $message->to('admin@ptk.biz.ua');
            $message->bcc($data['email']);

           
            // if(count(Mail::failures())==0)
            // {
            //      Mail::send('public.moduls.mail_done',$data,function($msg) use ($data){
               

            //     $msg->getSwiftMessage();
            //     $headers = $swiftMessage->getHeaders();
            //     $headers->addTextHeader('x-mailgun-native-send', 'true');

            //     $msg->from('admin@ptk.biz.ua');
            //     $msg->subject("Готово");

            //     if($data['filename']!=null)
            //     $msg->attach($data['plain']);

            //     $msg->to('admin@ptk.biz.ua');
            //     $msg->Cc(array($data['email'] => "Admin"));
            //     });
            // }
});
       Session::flash('success_order', trans('messages.ordering'));
       return Redirect::to(URL::previous());  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $delete=DB::table('orders')->where('id',$request->id)->delete();
        return redirect('admin/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function download(Request $request)
    {
        $pathToFile = public_path("docs/".$request->id.".docx");        
        $name = $request->id.'.docx';
        $headers = ['Content-Type: application/msword'];
        if(file_exists($pathToFile))
            return response()->download($pathToFile, $name, $headers);
        else
  return Redirect::to(URL::previous() ."#dload_success")->with('success_order',trans('messages.nofile'));    }
}

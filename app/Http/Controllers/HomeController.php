<?php

namespace App\Http\Controllers;
// namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    // public function mail()
    // {
    // $to_name = 'RECEIVER_NAME';
    // $to_email = 'RECEIVER_EMAIL_ADDRESS';
    // $data = array('name'=>"Cloudways (sender_name)", 'body' =>" A test mail");
      
    // Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
    // $message->to($to_email, $to_name)
    // ->subject('Laravel Test Mail');
    // $message->from('SENDER_EMAIL_ADDRESS','Test Mail');
    // });
       
    //    return 'Email sent Successfully';
    // }
    
}
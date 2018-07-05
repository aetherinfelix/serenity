<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\CxForm;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function gallery(){
        return view('pages.gallery');
    }

    public function about(){
        return view('pages.about');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        //Send email
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message,
            'love' => $request->love
        );
            if($request['love'] !== 'fan'){
        

        Mail::send('emails.email', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('mmattini@icloud.com');
        });}
        else{

        Mail::send('emails.email2', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('mmattini@icloud.com');
        });}

        

        return redirect()->route('index')->with('success','Your Email Was Sent Successfully');
        }
}

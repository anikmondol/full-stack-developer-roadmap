<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //

    public function sendEmail()
    {
        $toEmail = 'anik558363@gmail.com';
        $moreUer = "anikmondol558363@gmail.com";
        $message = "Hello, Welcome to our website";
        $subject = "Welcome to YahooBaba";
        $details = [
            'name' => 'anik',
            'product' => 'test product',
            'price' => 255
        ];


        $request =   Mail::to($toEmail)->cc($moreUer)->send(new welcomeemail($message, $subject, $details));

        dd($request);
    }

    public function contactForm()
    {
        return view('contact-form');
    }


    public function sendContactFormEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:10|max:255',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:100',
            'message' => 'required',
            'attachment' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:2048',
        ]);


        $fileName = time() . "." . $request->file('attachment')->extension();

        $request->file('attachment')->move('uploads', $fileName);

        $adminEmail = 'anik558363@gmail.com';

        $response =   Mail::to($adminEmail)->send(new welcomeemail ($request->all(),$fileName));

        if ($response) {
           return back()->with('success', 'Thanks you for contacting us.');
        } else {
            return back()->with('error', 'Unable to submit form, Please try again');
        }

    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\ContactFormsMail;
use App\Mail\YachtFormMail;
class EmailController extends Controller
{
    public function exc(Request $request)
    {
 
        $validator = Validator::make($request->all(), [
            'pud' => 'required',
            'dofd' => 'required',
            'put' => 'required',
            'doft' => 'required',
            'pul' => 'required',
            'dofl' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'phoneNo' => 'required',
            'email' => 'required'

        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
      
  
           Mail::to('test.qqriq@gmail.com')->send(new ContactFormsMail($request));
          
           return redirect()->back()->with('contact', 'Message Sent! Our representative will contact you back through e-mail with the confirmation as soon as possible. ');
    }

    public function exy(Request $request){

        $validator = Validator::make($request->all(),[
            'pud' => 'required',
            'dofd' => 'required',
            'put' => 'required',
            'doft' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()
                   ->withErrors($validator)
                   ->withInput();
        }

        Mail::to('test.qqriq@gmail.com')->send(new YachtFormMail($request));

        return redirect()->back()->with('contact', 'Message Sent! Our representative will contact you back through e-mail with the confirmation as soon as possible. ');

    }
}

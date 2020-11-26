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
        //! Transfers,excoursions i rentacar isti
        $validator = Validator::make($request->all(), [
            'pud' => 'required|date',
            'dofd' => 'required|date',
            'put' => 'required',
            'doft' => 'required',
            'pul' => 'required|string|max:255',
            'dofl' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phoneNo' => 'required|integer',
            'email' => 'required|email',
            'title' => 'required|string|max:255',

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
            'nofpeople' => 'required|integer',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phoneNo' => 'required|integer',
            'email' => 'required|email',
            'title' => 'required|string|max:255',

        ]);
        if($validator->fails()){
            return redirect()->back()
                   ->withErrors($validator)
                   ->withInput();
        }
        Mail::to('test.qqriq@gmail.com')->send(new YachtFormMail($request));
        return redirect()->back()->with('contact', 'Message Sent! Our representative will contact you back through e-mail with the confirmation as soon as possible. ');
    }

    public function propertyInquiry(Request $request){
        $validator = Validator::make($request->all(),[
            'checkin' => 'required',
            'ckeckout' => 'required',
            'guests' => 'required|integer',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phoneNo' => 'required|integer',
            'email' => 'required|email',
            'title' => 'required|string|max:255',

        ]);

        if($validator->fails()){
            return redirect()->back()
                   ->withErrors($validator)
                   ->withInput();
        }
        Mail::to('test.qqriq@gmail.com')->send(new PropertyInquiryMail($request));
        return redirect()->back()->with('contact', 'Message Sent! Our representative will contact you back through e-mail with the confirmation as soon as possible. ');
    }
   /*  public function ExcoursionInquiry(Request $request){
        $validator = Validator::make($request->all(),[
            'checkin' => 'required',
            'ckeckout' => 'required',
            'guests' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'phoneNo' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()
                   ->withErrors($validator)
                   ->withInput();
        }
        Mail::to('test.qqriq@gmail.com')->send(new PropertyInquiryMail($request));
        return redirect()->back()->with('contact', 'Message Sent! Our representative will contact you back through e-mail with the confirmation as soon as possible. ');
    } */
}

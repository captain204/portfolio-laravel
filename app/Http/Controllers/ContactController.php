<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactStoreRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    
    public function store(ContactStoreRequest $request)
    {

        $data = array(
            
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message'=> $request->message
        );

        $contact = Contact::create($data);

        Mail::to('nurudeenakindele@gmail.com')->send(new SendMail($data));
        
        return back()->with('success','Thanks for contacting us');
        
    }
}

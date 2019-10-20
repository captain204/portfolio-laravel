<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    
    public function contact(Request $request)
    {

        $data = array(
            
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'message'=> $request->message,
        );

        $contact = Contact::create($data)
    }
}

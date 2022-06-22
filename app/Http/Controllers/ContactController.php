<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // store data

    public function store(Request $request)
    {
    


        Contact::create([

            'name'    => $request -> name,
            'email'   => $request -> email,
            'subject' => $request -> subject,
            'message' => $request -> message,


        
        ]);


        return back();
        
    }
}

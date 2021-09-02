<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contacts()
    {
        // pass
    }
    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required|numeric|min:11',
            'message' => 'required',
        ]);
        Contact::create(['name'=>$request['name'],
        'phone'=>$request['phone'],
        'email'=>$request['email'],
        'message'=>$request['message']
        ])
    }
}

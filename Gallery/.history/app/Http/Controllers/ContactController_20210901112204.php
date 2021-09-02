<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function Contacts()
    {

    }
    public function storeContact(Request $request)
    {
        $this->validate([
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required|numeric|min:11',
            'text' => 'required'
        ]);

    }
}

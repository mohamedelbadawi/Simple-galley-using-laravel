<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contacts()
    {

    }
    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required|numeric|min:11',
            'text' => 'required',
        ]);

    }
}

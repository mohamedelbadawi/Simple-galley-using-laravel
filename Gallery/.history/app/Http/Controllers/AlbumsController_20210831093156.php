<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        
    }

    public function create(){

return view('admin.albums.create')
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requestl

class AlbumsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

        return view('admin.albums.create');
    }

    public function strore(Request $request)
    {

    }
}
<?php

namespace App\Http\Controllers;
use App\Models\Album;
class FrontController extends Controller
{
    public function index()
    {
        $Albums = Album::all();
        return view('gallery.index',compact('Albums'));
    }
}

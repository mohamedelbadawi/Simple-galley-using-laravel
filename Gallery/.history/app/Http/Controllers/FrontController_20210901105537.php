<?php

namespace App\Http\Controllers;
use App\Models\Album;
class FrontController extends Controller
{
    public function Albums()
    {
        $Albums = Album::all();
        return view('gallery.index',compact('Albums'));
    }
}

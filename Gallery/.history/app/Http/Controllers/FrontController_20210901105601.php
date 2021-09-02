<?php

namespace App\Http\Controllers;

use App\Models\Album;

class FrontController extends Controller
{
    public function albumsIndex()
    {
        $Albums = Album::all();
        return view('gallery.index', compact('Albums'));
    }
    public function galleryIndex()
    {

    }
}

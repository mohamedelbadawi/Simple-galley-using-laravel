<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;

class FrontController extends Controller
{
    public function albumsIndex()
    {
        $Albums = Album::all();
        return view('gallery.index', compact('Albums'));
    }
    public function galleryIndex()
    {

        $photos = Photo::all();
        return view('gallery.gallery', compact('photos'));
    }
}

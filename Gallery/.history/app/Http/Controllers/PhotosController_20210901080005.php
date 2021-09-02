<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    // public function index()
    // {

    // }

    public function upload(Request $request)
    {
        // dd($request);
        $path = 'images/'. $request['name'];
        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $name = time() . '.' . $request->image->extension();
                $name = 
                $request->image->storeAs($path, $image);
                Photo::create([
                    'album_id' => $request->route('id'),
                    'photo' => $name,
                ]);
            }
        }
    }
}

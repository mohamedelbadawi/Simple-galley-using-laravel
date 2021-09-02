<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    // public function index()
    // {

    // }

    public function upload(Request $request)
    {
            // dd($request);
        $path = 'images/' . $request['name'];
        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = $path.'.'.$image->getClientOriginalExtension();
                
                Image::create([
                    'name' => $name,
                    'path' => '/storage/'.$path
                  ]);
            }
         }
        }
    }
}

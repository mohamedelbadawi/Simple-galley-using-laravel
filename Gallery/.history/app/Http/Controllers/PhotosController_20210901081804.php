<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    // public function index()
    // {

    // }

    public function upload(Request $request)
    {
        // dd($request);
        $path = 'images' . '/' . $request['name'];
        if ($request->hasfile('imageFile')) {
            foreach ($request->file('images') as $file) {
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path($path), $name);
                $imgData[] = $name;
            }
            Photo::create([
                'album_id'=>$request->route('id'),
                'photo'=>$path.'/'.$name
            ]);

        }
    }
}

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
        $path = 'images' . '/' . $request['name'];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time() . '.' . $file->extension();
                $file->move(public_path($path) , $name);
                $data[] = $name;
            }
        }
        // dd($data);
        foreach ($data as $image) {
            print_r($image);
            // Photo::create([
            //     'photo' => $path . '/' . $image,
            //     'album_id' => $request->route('id'),
            // ]);
        }

    }
}

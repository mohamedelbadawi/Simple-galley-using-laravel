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
        foreach ($request->file('images') as $image) {
            $imageName =time(). $image->getClientOriginalName();
            $image->move(public_path($path), $imageName);
            $fileNames[] = $imageName;
        }

        $images = json_encode($fileNames);
    }
}

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
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time() . '.' . $file->extension();
                $file->move(public_path() . '/images/', $name);
                $data[] = $name;
            }
        }

        $file = new File();
        $file->filenames = json_encode($data);
        $file->save();

    }
}

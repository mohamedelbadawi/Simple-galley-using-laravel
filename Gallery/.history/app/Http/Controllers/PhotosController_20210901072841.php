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
        dd($request);
        $request->validate(['images' => 'required']);
        if ($request->hasFile('images')) {
            $images = $request->images;
            foreach ($images as $image) {
                $image = $request->file('images');
                $input['images'] = time() . '.' . $image->getClientOriginalExtension();
                $path = 'images/' . Album::find($request['name'])->name;
            }
        }
    }
}

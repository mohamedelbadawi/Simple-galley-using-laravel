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
        $request->validate(['images' => 'required']);
        if ($request->hasFile('images')) {
            $images = $request->images;
            foreach ($images as $image) {
                $image = $request->file('image');
                $input['image'] = time() . '.' . $image->getClientOriginalExtension();
                $imgFile = Image::make($image->getRealPath());
                $imgFile->orientate()->fit(700, 700, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();})->save($path.'/'.$input['image'],100);

            }
        }
    }
}

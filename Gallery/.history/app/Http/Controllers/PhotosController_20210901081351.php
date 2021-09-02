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
        $path = 'images/' . $request['name'];
        if ($request->hasfile('images')) {
            $images = $request->file('images')->getClientOriginalName();

            foreach ($images as $image) {
                $filenameWithExt = $request->file($image)->getC lientOriginalName ();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                $name = time() . '.' . $request->image->extension();
                
                $request->image->move(public_path($path), $name);
                
                $request->image->storeAs($path, $image);

                Photo::create([
                    'album_id' => $request->route('id'),
                    'photo' => $path . '/' . $name,
                ]);
            }
        }
    }
}

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
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path($path), $name);
                $data[] = $name;
            }
        }
        foreach ($data as $image) {
            Photo::create([
                'photo' => $path . '/' . $image,
                'album_id' => $request->route('id'),
            ]);
        }

        return redirect()->back();

    }

    public function deletePhoto(Request $request)
    {
        $photo = Photo::find($request->id);
        unlink($photo->photo);
        Photo::where("id", $photo->id)->delete();
        return back();
    }

}

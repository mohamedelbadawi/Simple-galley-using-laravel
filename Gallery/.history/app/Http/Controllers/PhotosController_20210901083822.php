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
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                //dd($check);
                if ($check) {
                    $items = Item::create($request->all());
                    foreach ($request->photos as $photo) {
                        $filename = $photo->store('photos');
                        ItemDetail::create([
                            'item_id' => $items->id,
                            'filename' => $filename,
                        ]);
                    }
                }

            }
        }
    }
}

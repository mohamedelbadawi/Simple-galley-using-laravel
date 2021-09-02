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
        $path='images'.'/'.$request['name'];
        if($req->hasfile('imageFile')) {
            foreach($req->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path($path), $name);  
                $imgData[] = $name;  
            }
    
            $fileModal = new Image();
            $fileModal->name = json_encode($imgData);
            $fileModal->image_path = json_encode($imgData);
            
            
            $fileModal->save();
            }
        }
    }
}

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
            foreach($req->file('images') as $file)
            {
                $name = time().$file->getClientOriginalName();
                $file->move(public_path($path), $name);  
                $imgData[] = $name;  
            }
    
            }
        }
    }


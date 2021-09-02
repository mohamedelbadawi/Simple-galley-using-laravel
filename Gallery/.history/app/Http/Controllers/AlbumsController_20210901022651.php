<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

        return view('admin.albums.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $path = 'images/albums';
        $this->validate($request, ['title' => 'required',
        'cover_name'=>'required|image|mimes:png,jpg,jpeg,gif,svg'
        ]);
        $imageName=time().'.'.$request->cover_name->extension();
        $request->cover_name->move(public_path($path),$imageName);
        album::create([
            'title'=>'title',
            'cover_image'=>$path.'/'.$imageName,
            'dicription'=>'discription'
        ]);

        return redirect()->route('dashboard')->with('success','you have successfully upload image.')
        ->with('image',$imageName);
    }
}

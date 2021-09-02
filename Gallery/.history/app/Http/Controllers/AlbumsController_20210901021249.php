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
        $this->validate($request, ['title' => 'required',
        'cover_name'=>'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048'
        ]);
        $imageName=time().'.'.$request->cover_name->extension();
        $request->cover_name->move(public_path('images/albums'),$imageName);
        dd($imageName);

        return redirect()->route('dashboard')->with('success','you have successfully upload image.')
        ->with('image',$imageName);
    }
}

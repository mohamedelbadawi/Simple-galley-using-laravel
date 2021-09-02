<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
    return view('admin.albums.index');
    }

    public function create()
    {

        return view('admin.albums.create');
    }

    public function store(Request $request)
    {
        $path = 'images/albums';
        $this->validate($request, ['title' => 'required',
        'cover_name'=>'required|image|mimes:png,jpg,jpeg,gif,svg'
        ]);
        $imageName=time().'.'.$request->cover_name->extension();
        $request->cover_name->move(public_path($path),$imageName);
        Album::create([
            'name'=>'title',
            'cover_image'=>$path.'/'.$imageName,
            'description'=>'description'
        ]);

        return redirect()->route('dashboard')->with('success','you have successfully upload image.')
        ->with('image',$imageName);
    }
}

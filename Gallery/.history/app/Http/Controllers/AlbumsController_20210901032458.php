<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Image;

class AlbumsController extends Controller
{
    public function index()
    {
        $Albums = Album::all();
        return view('admin.albums.index', compact('Albums'));
    }

    public function create()
    {

        return view('admin.albums.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required',
            'cover_name' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);
        $image = $request->file('cover_name');
        $input['cover_name'] = time() . '.' . $image->getClientOriginalExtension();
        $path = 'images/albums';
        $imgFile=Image::make($image->getRealPath());
        $imgFile->resize(500,500,function($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($path.'/'.$input['cover_name']);
        // dd ($imgFile);

        // $imageName = time() . '.' . $request->cover_name->extension();
        // $request->cover_name->move(public_path($path), $imageName);
        // $img = Image::make($imageName->path());
        Album::create([
            'name' => 'title',
            'cover_image' => $path.'/'.$input['cover_name'],
            'description' => 'description',
        ]);

        return redirect()->route('albums')->with('success', 'you have successfully upload image.');
    }
}

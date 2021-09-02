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
        $imgFile = Image::make($image->getRealPath());

        $imgFile->orientate()->fit(700, 700, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($path . '/' . $input['cover_name'], 100);

        Album::create([
            'name' => $request['title'],
            'cover_image' => $path . '/' . $input['cover_name'],
            'description' => $request['description'],
        ]);

        return redirect()->route('album.index')->with('success', 'you have successfully upload image.');
    }

    public function showImages($id)
    {
        $album = Album::with('photos')->find($id);
        $Photos = $album->photos()->get();
        dd($Photos);
        return view('admin.albums.show', compact('album', 'Photos'));
    }
}

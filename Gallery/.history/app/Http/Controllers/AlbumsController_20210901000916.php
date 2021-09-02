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

    public function strore(Request $request)
    {
        $this->validate($request, ['name' => 'required',
            'cover_image' => 'image|max:1999',

        ]);
        $fileNamewithEx= $request->file('cover_name')->getClientOriginalName();
        $fileName = pathinfo($fileName)
    }
}

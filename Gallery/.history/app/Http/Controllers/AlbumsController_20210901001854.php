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
        dd($request);
        $this->validate($request, ['title' => 'required',
            'cover_name' => 'image|max:1999',

        ]);
        $fileNamewithEx = $request->file('cover_name')->getClientOriginalName();
        $fileName = pathinfo($fileNamewithEx, PATHINFO_FILENAME);
        dd($fileName);
    }
}

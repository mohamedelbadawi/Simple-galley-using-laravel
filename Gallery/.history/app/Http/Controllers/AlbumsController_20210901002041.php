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
            
        ]);
        dd($request);
        $fileNamewithEx = $request->file($request['cover_name'])->getClientOriginalName();
        $fileName = pathinfo($fileNamewithEx, PATHINFO_FILENAME);
        dd($fileName);
    }
}

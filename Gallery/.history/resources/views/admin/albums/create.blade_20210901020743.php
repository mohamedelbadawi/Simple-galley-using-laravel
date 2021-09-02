@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
        <form action="{{ route('album.store') }}" method="post" class="col-md-6" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <textarea name="discription" id="" cols="30" class="form-control" rows="10"
                    placeholder="Discription"></textarea>
            </div>
            <div class="form-group">
                <input type="file"  placeholder="Choose Album image" name="cover_name" alt="albumimage">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"> Make Album</button>
            </div>
        </form>
    </div>
@endsection

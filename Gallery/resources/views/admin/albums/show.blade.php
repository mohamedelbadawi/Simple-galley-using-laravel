@extends('layouts.app')

@section('content')
    <div class="row justify-content-around">
        <a href="{{ route('album.index') }}" class="btn btn-danger m-4">Back</a>

        <form action="{{ route('photos.upload', [$album->id]) }}" method="post" enctype="multipart/form-data"
            class="form">
            @csrf
            <input type="file" name="images[]" class="btn btn-primary" multiple="multiple">
            <input type="text" value="{{ $album->name }}" name="name" hidden>
            <button type="submit" class="btn secondry btn-primary m-4">Upload to Album</button>
        </form>
    </div>
    <div class="row m-2">
        @foreach ($Photos as $photo)
            <div class="card col-md-2 m-3">
                <a class="fresco" href="{{ asset($photo->photo) }}">
                    <img src="{{ asset($photo->photo) }}" class="card-img-top" alt="">
                </a>

                <a class="btn btn-danger mb-0" href="{{ route('photo.delete', [$photo->id]) }}">Delete</a>
            </div>
        @endforeach
    </div>
@endsection

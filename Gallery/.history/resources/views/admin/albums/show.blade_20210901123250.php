@extends('layouts.app')

@section('content')
    <div class="row justify-content-around">
        <a href="{{ url()->previous() }}" class="btn btn-danger m-4">Back</a>

        <form action="{{ route('photos.upload', [$album->id]) }}" method="post" enctype="multipart/form-data"
            class="form">
            @csrf
            <input type="file" name="images[]" class="btn btn-primary" multiple="multiple">
            <input type="text" value="{{ $album->name }}" name="name" hidden>
            <button type="submit" class="btn secondry btn-primary m-4">Upload to Album</button>
        </form>
    </div>
    @foreach ($Photos as $photo)
        <div class="card">
            <img src="" class="card-img-top" alt="">
        </div>
    @endforeach
@endsection
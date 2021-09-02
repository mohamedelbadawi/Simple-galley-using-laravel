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
    <hr class="m-5">
    <div class="gallery__page">
        <div class="gallery__warp">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a class="gallery__item fresco" href="" data-fresco-group="gallery">
                        <img src="{{ asset($album->cover_image) }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

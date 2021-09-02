@extends('layouts.app')

@section('content')
<div class="row ">
    <a href="{{ url()->previous() }}" class="btn btn-danger m-4">Back</a>
    <a href="{{ url()->previous() }}" class="btn btn-danger m-4">upload Photo to Album</a>
</div>
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
    <!-- About Page end -->

@endsection

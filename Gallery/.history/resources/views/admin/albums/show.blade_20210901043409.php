@extends('layouts.app')
@section('content')

    <!-- About Page -->
@section('content')

    <div class="gallery__warp">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="gallery__item fresco" href="img/gallery/1.jpg" data-fresco-group="gallery">
                    <img src="{{ asset($album->cover_image) }}" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- About Page end -->

@endsection

@endsection

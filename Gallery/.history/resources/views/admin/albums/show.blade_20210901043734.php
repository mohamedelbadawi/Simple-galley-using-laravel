@extends('layouts.app')
<div class="row">
    <button href="{{ route()->redirect()->back() }}"></button>
</div>

@section('content')
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

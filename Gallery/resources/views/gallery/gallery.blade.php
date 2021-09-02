@extends('app')

<!-- About Page -->
@section('content')
    <div class="gallery__page">
        <div class="gallery__warp">
            <div class="row">
                @foreach ($Photos as $photo)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a class="gallery__item fresco" href="{{ asset($photo->photo) }}">
                            <img src="{{ asset($photo->photo) }}" alt="">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- About Page end -->

@endsection

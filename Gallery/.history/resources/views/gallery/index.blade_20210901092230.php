@extends('app')
@section('content')
    <!-- Hero Section -->
    <section class="hero__section">
        <div class="hero-slider">
            @foreach ($Albums as $album)

                <div class="slide-item">
                    <a class="fresco" href="" data-fresco-group="projects">
                        <img src="{{ asset($album->cover_image) }}" alt="">
                    </a>
                </div>

                <div class="hero-text-slider">
                    <div class="text-item">
                        <h2>Nature</h2>
                        <p>Photography</p>
                    </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section end -->

@endsection
<!-- Footer Section -->
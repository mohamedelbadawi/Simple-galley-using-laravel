@extends('app')
@section('content')
    <!-- Hero Section -->
    <section class="hero__section">
        <div class="hero-slider">
			
            @foreach ($Albums as $album)
                <div class="slide-item">
                    <a class="fresco" href="{{ asset($album->cover_image) }}" data-fresco-group="projects">
                        <img src="{{ asset($album->cover_image) }}" alt="">
                    </a>
					<h3 class="text-center">{{ $album->name }}</h3>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section end -->

@endsection
<!-- Footer Section -->

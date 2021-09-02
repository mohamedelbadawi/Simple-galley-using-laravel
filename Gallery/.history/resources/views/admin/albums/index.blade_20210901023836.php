@extends('layouts.app')

@section('content')
    <!-- Blog Page -->
    <section class="blog__page">
        <div class="blog__warp">
            <div class="row blog__grid text-white">
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        @foreach ($Albums as $album)

                            <div class="col-md-8 col-lg-7 col-xl-8">
                                <div class="blog__item set-bg" data-setbg="{{ asset($album->cover_image) }}">
                                    <div class="blog__content">
                                        <div class="blog__date">DEC 18, 2019</div>
                                        <h3><a href="./blog-single.html">9 Reasons to Buy a 50mm Prime Lens & Skip the Kit
                                                Lens</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    </section>
@endsection

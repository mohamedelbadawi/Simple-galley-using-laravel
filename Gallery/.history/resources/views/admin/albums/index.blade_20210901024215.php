@extends('layouts.app')

@section('content')
    <!-- Blog Page -->
    <section class="blog__page">
        <div class="blog__warp">
            <div class="row blog__grid text-white">
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        @foreach ($Albums as $album)

                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    </section>
@endsection

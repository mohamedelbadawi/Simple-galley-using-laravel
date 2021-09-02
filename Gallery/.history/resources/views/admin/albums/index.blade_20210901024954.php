@extends('layouts.app')

@section('content')
    <!-- Blog Page -->
    @if ($Albums->isNotEmpty())

        @foreach ($Albums->chunk(4) as $chunk)
            <div class="card-group ">
                @foreach ($chunk as $album)
                    <div class="card col-md-3 m-3" style="">
                        <img src="{{ asset($album->cover_image) }}"  class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $album->title }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @else
        <h2 class="col-md-12 text-center m-0">No Comments Found in this date</h2>
    @endif
    </div>
@endsection

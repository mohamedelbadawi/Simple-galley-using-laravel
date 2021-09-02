@extends('layouts.app')

@section('content')
    <!-- Blog Page -->
    @if ($Albums->isNotEmpty())

        @foreach ($Albums->chunk(6) as $chunk)
            <div class="card-group m-3">

                @foreach ($chunk as $album)
                    <div class="card col-md-2 m-3 border-raduis-100" style="">
                        <img src="{{ asset($album->cover_image) }}"  class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $album->name }}</h5>
                            <p class="card-text">{{ $album->description }}</p>
                            <a href="#" class="btn btn-primary">View images</a>
                        </div>
                    </div>
                @endforeach
            
            </div>
        @endforeach

    @else
        <h2 class="col-md-12 text-center m-0">No Albums</h2>
    @endif
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <!-- Blog Page -->
  <div class="container-fluid m-auto">
        @if ($Albums->isNotEmpty())
    
            @foreach ($Albums->chunk(4) as $chunk)
                <div class="card-group ">
    
                    @foreach ($chunk as $album)
                        <div class="card col-md-3 m-2 rounded" style="">
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
  </div>
@endsection

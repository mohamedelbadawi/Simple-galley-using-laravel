@extends('layouts.app')

@section('content')
    <!-- Blog Page -->

    <div class="row justify-content-around">
        <a href="{{ url()->previous() }}" class="btn btn-danger m-4">Back</a>
        <a type="submit" href="{{ route('album.create') }}" class="btn secondry btn-primary m-4">Create Album</a>

        <div class="container-fluid m-auto">
            @if ($Albums->isNotEmpty())

                @foreach ($Albums->chunk(4) as $chunk)
                    <div class="card-group ">

                        @foreach ($chunk as $album)
                            <div class="card col-md-3 m-2 rounded" style="">
                                <img src="{{ asset($album->cover_image) }}" class="card-img-top fit" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $album->name }}</h5>
                                    <p class="card-text">{{ $album->description }}</p>
                                    <div class="row justify-content-between">
                                        <a href="{{ route('album.show', [$album->id]) }}" class="btn btn-primary">View
                                            images</a>
                                        <a href="{{ route('album.delete',[$album]) }}" class="btn btn-danger">Delete Album</a>

                                    </div>
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

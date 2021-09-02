@extends('layouts.app')

@section('content')
    <!-- Blog Page -->
    @if ($Albums->isNotEmpty())

        @foreach ($Albums->chunk(4) as $chunk)
            <div class="card-group ">
                @foreach ($chunk as $album)
                    @if ($album->cover_image)
                        <div class="card m-1 col-lg-3 col-md-4 col-xs-3 rounded-3">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-between">
                                    <h5>{{ $data->name }}</h5>
                                    <div class="span bg-primary text-center rounded-3" style="width: 20px; height:20px;">
                                        {{ $data->Overall_Experience }}</div>
                                </div>
                                <h6 class="card-subtitle mb-2 text-muted"> Room:{{ $data->room }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted"> Date:{{ $data->created_at->format('Y/m/d') }}
                                </h6>
                                <p class="card-text">{{ $data->comment }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach
    @else
        <h2 class="col-md-12 text-center m-0">No Comments Found in this date</h2>
    @endif
    </div>
@endsection

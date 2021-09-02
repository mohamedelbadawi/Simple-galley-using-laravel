@extends('layouts.app')

@section('content')
    {{-- @include('messages') --}}
    <div class="container">
        <h1 class="text-center">Weclome to Dashboard</h1>

        <div class="card">
            <div class="card-header">
                Features
            </div>
            <div class="card-body">
                <a class="card-title h5" href="{{ route('album.index') }}">Albums</a>
                <p class="card-text">view Albums or Create Albums</p>
                <hr>
            </div>
            <div class="card-body">
                <a class="card-title h5" href="{{ route('album.index') }}">Albums</a>
                <p class="card-text">view Albums or Create Albums</p>

            </div>
        </div>

    </div>



@endsection

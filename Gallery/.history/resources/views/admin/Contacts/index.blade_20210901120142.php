@extends('layouts.app')
@section('content')

    @foreach ($contacts as $contact)
        <div class="card">
            <h5 class="card-header">{{ $contact->name }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $contact->email }}</h5>
                <h5 class="sub-title">{{ $contact->phone }}</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
@endsection

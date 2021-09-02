@extends('layouts.app')
@section('content')

    @foreach ($contacts as $contact)
        <div class="card">
            <h5 class="card-header">{{ $contact->name }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $contact->email }}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
@endsection

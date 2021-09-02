@extends('layouts.app')
@section('content')

    @foreach ($Contacts as $contact)
        <div class="card m-5">
            <h5 class="card-header">{{ $contact->name }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $contact->email }}</h5>
                <h5 class="sub-title">{{ $contact->phone }}</h5>
                <p class="card-text">{{ $contact->message }}</p>
            </div>
        </div>
    @endforeach
@endsection

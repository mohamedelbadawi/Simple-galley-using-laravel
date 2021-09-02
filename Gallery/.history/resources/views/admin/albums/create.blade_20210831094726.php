@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center" >

        <form action="" class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <textarea name="discription" id="" cols="30" class="form-control" rows="10" placeholder="Discription"></textarea>
            </div>
            <div class="form-group">
            <input type="img" placeholder="Image">
            </div>

        </form>
    </div>


@endsection

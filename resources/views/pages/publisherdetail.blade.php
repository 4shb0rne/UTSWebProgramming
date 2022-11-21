@extends('index')
@section('content')
    <div class="d-flex justify-content-around p-3 flex-wrap">
        <div class="card mt-5" style="width: 30rem">
            <img class="card-img-top" src="{{ asset('storage/Assets/' . $publisher->image) }}" style="min-height: 350px">
            <div class="card-body">
                <p class="card-text">Name : {{ $publisher->name }}</p>
                <p class="card-text">Address : {{ $publisher->address }}</p>
                <p class="card-text">Email : {{ $publisher->email }}</p>
                <p class="card-text">Phone : {{ $publisher->phone }}</p>
            </div>
        </div>
    </div>
@endsection

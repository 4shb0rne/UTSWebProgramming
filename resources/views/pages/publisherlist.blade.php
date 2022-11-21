@extends('index')
@section('content')
    <div class="d-flex justify-content-evenly p-3 flex-wrap">
        @foreach ($publishers as $publisher)
            <div class="card mt-5" style="width: 18rem;">
                <img src="{{ asset('storage/Assets/' . $publisher->image) }}" class="card-img-top" style="min-height: 250px">
                <div class="card-body">
                    <h5 class="card-title">{{ $publisher->name }}</h5>
                    <p class="card-text">Address : {{ $publisher->address }}</p>
                    <p class="card-text">Phone : {{ $publisher->phone }}</p>
                    <p class="card-text">Email : {{ $publisher->email }}</p>
                </div>
                <div class="card-footer">
                    <a href={{ '/publisherdetail/' . $publisher->id }} class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

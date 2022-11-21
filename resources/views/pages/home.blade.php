@extends('index')
@section('content')
    <div class="d-flex justify-content-evenly p-3 flex-wrap">
        @foreach ($books as $book)
            <div class="card mt-5" style="width: 15rem;">
                <img class="card-img-top" src="{{ asset('storage/Assets/' . $book->image) }}" style="min-height: 350px">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">By</p>
                    <p class="card-text">{{ $book->author }}</p>
                </div>
                <div class="card-footer">
                    <a href={{ '/bookdetail/' . $book->id }} class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

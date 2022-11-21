@extends('index')
@section('content')
    <div>
        <div>
            <h2 class="text-center p-3">{{ $booksfilter[0]->category->name }}</h2>
        </div>
        <div class="d-flex justify-content-evenly p-3 flex-wrap">
            @foreach ($booksfilter as $b)
                <div class="card mt-5" style="width: 15rem;">
                    <img class="card-img-top" src="{{ asset('storage/Assets/' . $b->book->image) }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $b->book->title }}</h5>
                        <p class="card-text">By</p>
                        <p class="card-text">{{ $b->book->author }}</p>
                    </div>
                    <div class="card-footer">
                        <a href={{ '/bookdetail/' . $b->book->id }} class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

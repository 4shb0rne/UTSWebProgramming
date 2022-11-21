@extends('index')
@section('content')
    <div class="d-flex justify-content-around p-3 flex-wrap">
        <div class="card mt-5" style="width: 30rem">
            <img class="card-img-top" src="{{ asset('storage/Assets/' . $book->image) }}">
            <div class="card-body">
                <p class="card-text"><b>Title</b> : {{ $book->title }}</p>
                <p class="card-text"><b>Author</b> : {{ $book->author }}</p>
                <p class="card-text"><b>Publisher</b> : {{ $book->publisher->name }}</p>
                <p class="card-text"><b>Year</b> : {{ $book->year }}</p>
                <p class="card-text"><b>Synopsis</b> : {{ $book->synopsis }}</p>
                <div class="card-text"><b>Genre</b> : </div>
                @foreach ($currentcategories as $cat)
                    <a href={{ '/filterbook/' . $cat->category->id }}
                        class="btn btn-primary btn-sm">{{ $cat->category->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

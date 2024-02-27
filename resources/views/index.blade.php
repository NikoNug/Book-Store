@extends('layouts/main')

@section('container')
    <h1 class="mb-5 text-center">{{ $title }}</h1>

    @if ($books->count())

    <div class="container">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="/assets/BookCover.jpg" class="card-img-top" alt="book">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p>by. {{ $book->author }}</p>
                            <a href="/{{ $book->id }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No book found.</p>
    @endif


@endsection


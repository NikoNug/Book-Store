@extends('layouts/main')

@section('container')

    <div class="bg-dark text-white p-2 mb-4">
        <h3 class="mb-2 text-left">{{ $publisher->name }}</h3>
        <h3 class="mb-2 text-left">Address - {{ $publisher->address }}</h3>
        <h3 class="mb-2 text-left">Phone - {{ $publisher->phone }}</h3>
        <h3 class="mb-2 text-left">Email - {{ $publisher->email }}</h3>
    </div>

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


@endsection


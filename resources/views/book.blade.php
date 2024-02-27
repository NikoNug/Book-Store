@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-5">
            <h1 class="mb-4">{{ $title }}</h1>
            <img src="/assets/BookCover.jpg" alt="" class="img-fluid">

            <p class="mb-3">Title : {{ $book->title }}</p>
            <p>Author : {{ $book->author }}</p>
            <p>Publisher : {{ $book->publisher->name }}</p>
            <p>Year : {{ $book->year }}</p>
            <p>Synopsis: {{ $book->synopsis }}</p>


            <button><a href="/" class="d-block mt-3">Back to Books</a></button>
        </div>
    </div>
</div>

@endsection

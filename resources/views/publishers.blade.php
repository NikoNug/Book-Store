@extends('layouts/main')

@section('container')
    <h1 class="mb-5 text-center">{{ $title }}</h1>

    @if ($publishers->count())

    <div class="container">
        <div class="row">
            @foreach ($publishers as $publisher)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="/assets/Publisher.jpg" class="card-img-top" alt="book">
                        <div class="card-body">
                            <h5 class="card-title">{{ $publisher->name }}</h5>
                            <p>Address : {{ $publisher->address }}</p>
                            <a href="/publisher/{{ $publisher->id }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Publisher Found.</p>
    @endif


@endsection


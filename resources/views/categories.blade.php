@extends('layouts/main')

@section('container')

    <div class="mb-5">
        @php
            $i = 0;
        @endphp

        @foreach($category as $row)
            <h2>{{ $row->name }}</h2>
            @if($i == 0)
                @php
                    break;
                @endphp
            @endif
            @php
                $i++;
            @endphp
        @endforeach

    </div>

    <div class="container">
        <div class="row">
            @foreach ($category as $book)
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


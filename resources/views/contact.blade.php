@extends('layouts.main')

@section('container')

<div class="judul text-white bg-dark">
    <h1 class="m-5">{{ $title }}</h1>
</div>

<div class="address mt-5">
    <h1>Store address:</h1>
    <h3>{{ $address1 }}</h3>
    <h3>{{ $address2 }}</h3>
    <h3>{{ $address3 }}</h3>
    <h3>{{ $address4 }}</h3>
</div>

<div class="daily mt-5">
    <h1>Open Daily : </h1>
    <h4>{{ $open }}</h3>
</div>

<div class="contact mt-5">
    <h1>Contact</h1>
    <h4>{{ $phone }}</h3>
    <h4>{{ $email }}</h3>
</div>

@endsection

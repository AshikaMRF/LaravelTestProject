@extends('app')
@section('content')

    <p> {{ $book->id }}</p>
    <h2> {{ $book->name }}</h2>
    @endsection
@extends('app')
@section('content')
    <table class="table table-bordered">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Action1</td>
            <td>Action2</td>
        </tr>
        @foreach($books as $book)
        <tr>
            <td><a href="books/ {{ $book->id }} "> {{ $book->id }}</a></td>
            <td>  {{ $book->name }} </td>
            <td><a href="books/ {{ $book->id }} /edit"> Edit</a></td>
            <td><a href="books/ {{ $book->id }} "> Delete</a></td>

        </tr>
        @endforeach

    </table>



    @endsection
@extends('app')
@section('content')
    <table class="table table-bordered">
        <tr>
            <td>Title</td>
            <td>Name</td>
            <td>Action666666666</td>
            <td>Ation2</td>
        </tr>

    @foreach($catogories as $item)
        <tr>
            {{--<td>{{ $item->title }}</td>--}}
            <td> {{ $item->name }}</td>
            <td><button class="btn btn-warning">Edit </button> </td>
            <td><button class="btn btn-warning">Delete </button></td>
        </tr>
    @endforeach
    </table>


    @endsection
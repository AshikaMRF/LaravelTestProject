@extends('app')
@section('content')
    <table class="table table-bordered">
        <tr>
            <td>Title</td>
            <td>Name</td>
            <td>Action</td>
            <td>Action2</td>
        </tr>

        @foreach($items as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td> {{ $item->name }}</td>
                <td> <td>{!! link_to_action('CatogoriesController@update', 'Edit',[$item->id], ['class' => 'btn btn-warning','method'=>'PUT']) !!}</td>
                <td><td><td>{!! link_to_action('CatogoriesController@destroy', 'Delete',[$item->id], ['class' => 'btn btn-danger']) !!}</td>
            </tr>
        @endforeach
    </table>


@endsection
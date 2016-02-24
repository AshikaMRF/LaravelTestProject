@extends('app')
@section('content')


    {!! Form::open(['url'=>'catogories']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null,['class'=>'form-control']) !!}<br>
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null,['class'=>'form-control']) !!}<br>
    </div>
    <div class="form-group">
        {!! Form::submit('Add new item',['class'=>'form-control btn btn-success'] ) !!}
    </div>






    {!! Form::close() !!}

    @if($errors->any())
        @foreach($errors->all() as $error)
            <ul><li>{{ $error }}</li></ul>
            @endforeach
    @endif

    @endsection
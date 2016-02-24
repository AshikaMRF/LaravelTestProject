@extends('app')
@section('content')

    {!! Form::open(['url'=>'books']) !!}

    {!! Form::label('id', 'Id: ') !!}
    {!! Form::text('id',null, ['class'=>'form-control']) !!}

    {!! Form::label('name', 'Name: ') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
    {!! Form::submit('Submit', '') !!}
    {!! Form::close() !!}

    @endsection
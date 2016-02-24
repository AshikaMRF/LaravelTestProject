@extends('app')

@section('content')
    <h1>Article</h1>

        <table class="table table-striped table-bordered table-hover">
            <tr class="success">
                <th class="col-sm-2"><b>TITLE</b></th>
                <th class="col-sm-8"><b>BODY</b></th>
                <th class="col-sm-1"></th>
                <th class="col-sm-1"></th>

            </tr>
            @foreach($articles as $article)
            <tr>
                <td>
                    <a href="articles/{{ $article->id }}">{{$article->title}}</a>
                </td>
                <td>{{$article->body}}</td>
                <td >
                      <a class="btn btn-warning " href="articles/{{ $article->id }}/edit">Edit</a>
                  </td>

                <td>
                    {{ Form::model($article,['method' => 'DELETE','action'=>['ArticleController@destroy',$article->id]]) }}
                    {{ Form::hidden('id', $article->id) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </table>
    <div class="col-md-4 pull-right">
        <a href="articles/create" class="btn btn-primary form-control" >Add New article</a>
    </div>


@stop
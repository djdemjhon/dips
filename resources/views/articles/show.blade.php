@extends('layouts.app')

@section('content')
<br>
<br>
<a href="/articles" class="btn btn-primary" href="#" role="button">Back Pri</a>

 <br>
 <br>
    <h1>{{$article->title}}</h1>
        <div>
        <p> {{$article->body}} </p>
        </div>
         <hr>
            <small>Written on {{$article->created_at}} </small>

            <a href="/articles/{{$article->id}}/edit" class="btn btn-primary">Edit</a>
            {!! Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class'=> 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
            
            {!! Form::close() !!}


@endsection
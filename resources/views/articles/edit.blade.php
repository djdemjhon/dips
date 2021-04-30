@extends('layouts.app')

@section('content')
<br>
<br>
    <h1> Edit Article</h1>
    {!! Form::open( ['action' => ['ArticlesController@update',  $article->id], 'method' => 'POST']) !!}

    <div class="form-group">
       {{Form::label('title', 'Title')}}
       {{Form::text('title', $article->title,['class' => 'form-control', 'placholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $article->body,['class' => 'form-control', 'placholder' => 'Body Text'])}}
     </div>  
     {{Form::hidden('_method', 'PUT')}}
     {{Form::submit('Save',['class'=> 'btn btn-primary'])}}

    {!! Form::close() !!}



@endsection
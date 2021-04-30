@extends('layouts.app')

@section('content')
    {!! Form::open( ['action' => ['ArticlesController@store'], 'method' => 'POST']) !!}

    <div class="form-group">
       {{Form::label('title', 'Title')}}
       {{Form::text('title', '',['class' => 'form-control', 'placholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '',['class' => 'form-control', 'placholder' => 'Body Text'])}}
     </div>  
     {{Form::submit('Display',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
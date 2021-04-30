@extends('layouts.app')

@section('content')
<br>
<br>
          <a class="nav-link" href="/articles">Articles</a>
       <a class="nav-link" href="/articles/create">Create Articles</a>
    <h1>Articles</h1>
    @if(count($articles) > 0)
    @foreach ($articles as $article)
    <div class="well">
        <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
        <small>Written on {{$article->created_at}}</small>
    </div>
    @endforeach
     {{$articles->links()}}
    @else
        <p>No Articles Found </p>
    @endif
@endsection
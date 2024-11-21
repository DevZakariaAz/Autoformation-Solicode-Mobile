@extends('layouts.app')

@section('content')
    <h3>Title :<strong>{{$article['title']}}</strong> </h1>
    <p> Content :<strong>{{$article['content']}}</strong> </p>
    <button>    <a href="/articles/{{$article['id']}}/edit">Modifier</a></button>
    <form action="/articles/{{$article['id']}}" method="POST" style="display:inline;">
        @csrf 
        @method('DELETE') 
        <button type="submit">Supprimer</button>
    </form>
@endsection

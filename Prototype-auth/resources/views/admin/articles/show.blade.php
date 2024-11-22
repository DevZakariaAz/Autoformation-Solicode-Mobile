@extends('layouts.app')

@section('content')
    <h3>Title :<strong>{{$article['title']}}</strong> </h1>
    <p> Content :<strong>{{$article['content']}}</strong> </p>
        <form action="/dashboard/articles/{{$article['id']}}" method="POST" style="display:inline;">
            @csrf 
            @method('DELETE') 
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
@endsection

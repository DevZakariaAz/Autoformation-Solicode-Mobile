@extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <a href="/articles/create/">Créer un nouvel article</a>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="/articles/{{$article['id']}}">
                    {{$article["id"]}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

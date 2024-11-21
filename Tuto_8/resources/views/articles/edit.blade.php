@extends('layouts.app')

@section('content')
    <h3>Modifier Un Article</h3>
    <form action="/articles/{{$article->id}}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titre :</label>
        <input type="text" name="title" value="{{ $article->title }}" required>

        <label for="content">Contenu :</label>
        <input type="text" name="content" value="{{ $article->content }}" required>

        <label for="categorie">Catégorie :</label>
        <input type="text" name="categorie" value="{{ $article->categorie }}" required>

        <button type="submit">Modifier</button>
    </form>
@endsection

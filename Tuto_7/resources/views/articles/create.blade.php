@extends('layouts.app')

@section('content')
    <h1> Créer un nouvel article</h1>
    <form action="/articles" method="POST">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif
        <label for="title">Titre :</label>
        <input type="text" name="title" value="" required>
        <label for="content">Contenu :</label>
        <textarea name="content" required></textarea>
        <button type="submit">Create</button>
    </form>
@endsection

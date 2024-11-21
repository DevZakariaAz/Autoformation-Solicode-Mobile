@extends('layouts.app')

@section('content')
    <h1>Créer un nouvel article</h1>
    <form action="/articles" method="POST">
        @csrf
        <label for="title">Titre :</label>
        <input type="text" name="title" required>

        <label for="content">Contenu :</label>
        <input type="text" name="content" required>

        <label for="categorie">Catégorie :</label>
        <input type="text" name="categorie" required>

        <button type="submit">Créer</button>
    </form>
@endsection
@section('sidebar')
    <h3>Catégories</h3>
    <ul>
        <li>Laravel</li>
        <li>PHP</li>
        <li>Programmation Web</li>
    </ul>
@endsection
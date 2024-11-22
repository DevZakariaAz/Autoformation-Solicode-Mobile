@extends('layouts.app')

@section('content')
    <h1>Créer un nouvel article</h1>
    <form action="/articles" method="POST">
        @csrf
        <!-- Title Field -->
        <div class="mb-3">
            <label for="title" class="form-label">Titre :</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <!-- Content Field -->
        <div class="mb-3">
            <label for="content" class="form-label">Contenu :</label>
            <textarea name="content" class="form-control" rows="4" required></textarea>
        </div>

        <!-- Category Field -->
        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie :</label>
            <input type="text" name="categorie" class="form-control" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
@endsection

@section('sidebar')
    <h3>Catégories</h3>
    <ul>
        <li>Laravel</li>
        <li>PHP</li>
        <li>Programmation Web</li>
    </ul>
@ends

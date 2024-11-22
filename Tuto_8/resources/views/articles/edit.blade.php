@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3>Modifier Un Article</h3>
        <form action="/articles/{{ $article->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="mb-3">
                <label for="title" class="form-label">Titre :</label>
                <input type="text" name="title" value="{{ $article->title }}" class="form-control" required>
            </div>

            <!-- Content Field -->
            <div class="mb-3">
                <label for="content" class="form-label">Contenu :</label>
                <textarea name="content" class="form-control" rows="4" required>{{ $article->content }}</textarea>
            </div>

            <!-- Category Field -->
            <div class="mb-3">
                <label for="categorie" class="form-label">Catégorie :</label>
                <input type="text" name="categorie" value="{{ $article->categorie }}" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Modifier</button>
        </form>
    </div>
@endsection

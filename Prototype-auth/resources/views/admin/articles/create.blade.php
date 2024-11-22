@extends('layouts.app')

@section('content')
    <h1> Créer un nouvel article</h1>
    <form action="/dashboard/articles" method="POST">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif
        <label for="title">Titre :</label>
        <input type="text" name="title" value="" required>
        <label for="content">Contenu :</label>
        <input name="content"  type="text" required>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <h2>Liste des Articles</h2>
    @foreach ($articles as $article)
        <x-article-card :article="$article" />
    @endforeach
@endsection

@include('partials.flash-message')


@section('sidebar')
    <h3>Catégories</h3>
    <ul>
        <li>Laravel</li>
        <li>PHP</li>
        <li>Programmation Web</li>
    </ul>
@endsection

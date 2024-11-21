@extends('layouts.app')

@section('content')
    <h2>Liste des Articles</h2>

    <!-- Success or Error Messages -->
    @include('partials.flash-message')

    <!-- Article Listing -->
    <div class="article-list">
        @foreach ($articles as $article)
            <x-article-card :article="$article" />
        @endforeach
    </div>

    <!-- Pagination (if applicable) -->
    @if($articles->hasPages())
        <div class="pagination">
            {{ $articles->links() }}
        </div>
    @endif
@endsection

@section('sidebar')
    <h3>Catégories</h3>
    <ul>
        <li><a href="/category/laravel">Laravel</a></li>
        <li><a href="/category/php">PHP</a></li>
        <li><a href="/category/web-programming">Programmation Web</a></li>
    </ul>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
        <link rel="stylesheet" href="/css/boostrap.css">
</head>
<body>
@extends('layouts.app')

@section('content')
    <h2>Liste des Articles</h2>
    @foreach ($articles as $article)
        <x-article-card :article="$article" />
    @endforeach
@endsection

</body>
</html>

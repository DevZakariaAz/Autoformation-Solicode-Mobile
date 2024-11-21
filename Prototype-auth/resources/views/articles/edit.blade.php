@extends('layouts.app')

@section('content')
    <h3> Modifier Un Article </h1>
    <form action="/articles/{{$article['id']}}" method="POST">
        @csrf
          @if(isset($article))
            @method('PUT')
        @endif

        <label for="title">Titre :</label>
        <input type="text" name="title" value="{{$article['title']}}" required>
        <label for="content">Contenu :</label>
        <input name="content" value="{{$article['content']}}" type="text" required>
        <button type="submit" class="btn btn-success" >Edit</button>
    </form>


@endsection

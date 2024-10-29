<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }} - {{ $post->body }}</li>
        @endforeach
    </ul>

</body>
</html>

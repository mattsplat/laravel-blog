<html>
<head>
</head>
<body>
<h1>Hello Welcome</h1>
@foreach( $posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
@endforeach
</body>
</html>
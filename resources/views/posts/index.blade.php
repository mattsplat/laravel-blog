<html>
<head>
</head>
<body>
<h1>Hello Welcome</h1>
@foreach( $posts as $post)
   <a href="/posts/{{ $post->id }}"> {{ $post->title }} </a>
@endforeach
</body>
</html>
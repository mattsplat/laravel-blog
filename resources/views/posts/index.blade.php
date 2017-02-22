@extends('layouts.master')

@section('content')
 <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

@foreach( $posts as $post)
 <div class="post-preview">
    <a href="/posts/{{$post->id}}">
        <h2 class="post-title">
            {{$post->title}}
        </h2></a>
        <h3 class="post-subtitle">
            {{$post->body}}
        </h3>
    
    <p class="post-meta">Posted on {{$post->date}}</p>
</div>
<hr>  
@endforeach
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    

    <hr>

@endsection

 
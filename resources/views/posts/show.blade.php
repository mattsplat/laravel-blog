@extends('layouts.master');

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <h2 class="post-title">
                        {{$post->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{$post->body}}
                    </h3>
                                
                    <p class="post-meta">Posted on {{$post->date}}</p>
                </div>
                          
            </div>
        </div>
    </div>
    <hr>

@endsection
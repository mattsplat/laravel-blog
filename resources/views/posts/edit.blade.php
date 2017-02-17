@extends('layouts.master')

@section('content')
<div class="container">
<form role="form" method="post" action="">
  <div class="form-group">
    <label >Post Title</label>
    <input name="title" type="text" class="form-control"  placeholder="Enter Title" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label >Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body" rows="8" cols="40">
      {{$post->body}}
    </textarea>
    <!--<script>
                // Replace the <textarea id="body"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('body', {
		
	});
    </script>-->
  </div>
  <div class="form-group">
    <label >Category</label>
    <select name="category" class="form-control">

      
      <option> </option>
    
    </select>  </div>
  
  <div class="form-group">
    <label >Tags</label>
    <input name="tags" type="text" class="form-control"  placeholder="Enter Tags" value="{{$post->tags}}">
  </div>

  <div >
  <input name="submit" type="submit" class="btn btn-default" value="Submit">
  <a href="#" class="btn btn-default">Cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="Delete">
  </div>
</form>
</div>
@endsection
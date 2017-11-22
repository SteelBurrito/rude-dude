@extends ('layouts.layout')

@section('title', 'Create Blog Post')

@section('active')
  <a class="nav-link active" href="{{route ('blog')}}">Blog</a>
  <a class="nav-link" href="{{route ('me')}}">Who Am I</a>
  <a class="nav-link" href="#">Projects</a>
  <a class="nav-link" href="#">Contact Me</a>
@endsection

@section('blogheader')
  <div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Personal Blog</h1>
        <p class="lead blog-description">thoughts and opinions</p>
    </div>
  </div>
@endsection

@section ('postcreate')
<div class ="container">
    <form method="POST" action="{{route('store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="postTitle">Post Title</label>
            <input type="text" class="form-control" name="postTitle" id="postTitle" placeholder="Enter post title">
        </div>
        <div class="form-group">
            <label for="postBody">Post Text</label>
            <textarea class="form-control" name="postBody" id="postBody" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Submit</button>
    </form>
</div>
@endsection
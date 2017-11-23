@extends ('layouts.layout')

@section('title', 'Personal Blog')

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

@section('posts')
  <div class="col-sm-8 blog-main">
    @foreach ($posts as $post)
      <div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">Posted on: {{$post->created_at}}</p>
        <p>{{$post->body}}</p>
        <p class="blog-post-meta text-right">Last updated: {{$post->updated_at}}</p>
      </div>
    @endforeach
    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>   
  </div><!-- /.blog-main -->
@endsection
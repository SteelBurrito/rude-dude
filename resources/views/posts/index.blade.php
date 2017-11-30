@extends ('layouts.layout')

@section('title', 'Personal Blog')

@section('active')
  <a class="nav-link active" href="{{route ('blog')}}">Blog</a>
  <a class="nav-link" href="{{route ('me')}}">Who Am I</a>
  {{--  <a class="nav-link" href="#">Projects</a>  --}}
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
    <h2 class="blog-post-title">  
        {{$post->title}}
    </h2>
    <p class="blog-post-meta">Posted on: {{$post->created_at->toDayDateTimeString()}}</p>
    <div>
      <?php
        $truncateText = str_limit($post->body, 400);
        echo Helper::formattext($truncateText);
      ?>
      <p class="text-center"><a href="/posts/{{ $post->id }}">Read More</a></p>
    </div>
        {{--  <p class="blog-post-meta text-right">Last updated: {{$post->updated_at->toDayDateTimeString()}}</p>  --}}
  </div>
<hr>
    
  @endforeach

  <nav class="blog-pagination">
    {{$posts->links()}}
  </nav>  
</div><!-- /.blog-main -->
@endsection



{{--<a class="btn btn-outline-secondary disabled" href="{{$posts->links()}}">Newer</a>
    <a class="btn btn-outline-primary" href="{{$posts->links()}}">Older</a>  --}}
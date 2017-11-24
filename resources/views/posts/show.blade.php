@extends ('layouts.layout')

@section('title')
    {{$post->title}}
@endsection

@section('active')
  <a class="nav-link active" href="{{route ('blog')}}">Blog</a>
  <a class="nav-link" href="{{route ('me')}}">Who Am I</a>
  {{--  <a class="nav-link" href="#">Projects</a>  --}}
  <a class="nav-link" href="#">Contact Me</a>
@endsection

@section('blogheader')
  <div class="blog-header">
    <div class="container">
        <h1 class="blog-title">{{$post->title}}</h1>
    </div>
  </div>
@endsection

@section('posts')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <p class="blog-post-meta">Posted on: {{$post->created_at->toDayDateTimeString()}}</p>
        <div>
        <?php
            echo Helper::formattext($post->body)
        ?>
        </div>
        {{--  <p class="blog-post-meta text-right">Last updated: {{$post->updated_at->toDayDateTimeString()}}</p>  --}}
    </div>
</div>
@endsection
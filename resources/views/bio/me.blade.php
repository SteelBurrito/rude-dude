@extends ('layouts.layout')

@section('title', 'About Me')

@section('active')
  <a class="nav-link" href="{{route ('blog')}}">Blog</a>
  <a class="nav-link active" href="{{route ('me')}}">Who Am I</a>
  <a class="nav-link" href="#">Contact Me</a>
@endsection

@section('blogheader')
  <div class="blog-header">
    <div class="container">
        <h1 class="blog-title">About Me</h1>
        <p class="lead blog-description">Some dude who does web development.</p>
    </div>
  </div>
@endsection

@section('me')
    <div class="col-sm-4">
      <h1>AYYY</h1>
    </div>
    <div class="col-sm-8">
      <h1>YOOO</h1>
    </div> 
@endsection
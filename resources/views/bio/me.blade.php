@extends ('layouts.layout')

@section('title', 'About Me')

@section('meactive')
  <a class="nav-link" href="{{route ('blog')}}">Blog</a>
  <a class="nav-link active" href="{{route ('me')}}">Who Am I</a>
  <a class="nav-link" href="#">Projects</a>
  <a class="nav-link" href="#">Contact Me</a>
@endsection

@section('me')
    <h1>HELLO</h1>
@endsection
@extends ('layouts.layout')

@section('title', 'Create Blog Post')

@section('texteditorheader')
<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.4/quill.js"></script>
<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.4/quill.snow.css" rel="stylesheet">

<style>
    #editor-container {
    height: 375px;
    }
</style>
@endsection

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
    <form method="POST" action="{{route('store')}}" onsubmit="bindingBody()">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="postTitle">Post Title</label>
            <input type="text" class="form-control" name="postTitle" id="postTitle" placeholder="Enter post title">
        </div>
        <div class="form-group">
            <label for="postBody">Post Text</label>
            <input name="postBody" type="hidden">
            <div id="editor-container">
            </div>
            <script type="text/javascript">
                var quill = new Quill('#editor-container', {
                    modules: {
                        toolbar: [
                        [{ header: [1, 2, false] }],
                            ['bold', 'italic', 'underline']
                        ]
                    },
                    placeholder: 'Compose an epic...',
                    theme: 'snow'  // or 'bubble'
                });

                function bindingBody () {
                    // Populate hidden form on submit
                    $('input[name=postBody]').val($('.ql-editor').html());
                };
            </script>
            {{--  <div id="editor-container">
                <textarea class="form-control" name="postBody" id="postBody" rows="10"></textarea>
            </div>  --}}
        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Submit</button>
    </form>
</div>
@endsection
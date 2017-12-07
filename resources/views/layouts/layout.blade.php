<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="https://getbootstrap.com/favicon.ico">

        <title>@yield('title')</title>

        <!-- CSRF Stuff -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{asset('css/blog.css')}}" rel="stylesheet">
        <!-- Fonts babyyy -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <!-- ICONS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @yield('texteditorheader')
    </head>

    <body id="app">
        @include ('layouts.nav')
        <main role="main" class="container">
        <div class="d-flex justify-content-center">
            @yield('postcreate')
            @yield('posts')
            @yield('me')
        </div>
        </main><!-- /.container -->

        @include ('layouts.footer')
    </body>
</html>
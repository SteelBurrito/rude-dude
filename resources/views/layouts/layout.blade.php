<!DOCTYPE html>
<html lang="en">
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" href="https://getbootstrap.com/favicon.ico">

            <title>@yield('title')</title>

            <!-- Bootstrap core CSS -->
            <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="{{asset('css/blog.css')}}" rel="stylesheet">
        <style></style>
    </head>

    <body>
        @include ('layouts.nav')

        <main role="main" class="container">
        <div class="d-flex justify-content-center">
            @yield('posts')
            @yield('me')
        </div>
        </main><!-- /.container -->

        @include ('layouts.footer')
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('online.layouts.render.head')
    </head>

    <body>
        <!-- PRELOADER -->
        <div class="page-loader">
            <div class="loader">Loading ...</div>
        </div>
        <!-- /PRELOADER -->
        <!-- SIDEBAR -->
        @include('online.layouts.home.sidebar')
        @yield('content')
        @include('online.layouts.render.base')

    </body>
</html>
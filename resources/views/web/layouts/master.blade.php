
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <link href="{{ asset('web/css/media_query.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('web/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{ asset('web/css/animate.css') }}" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="{{ asset('web/css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('web/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('web/css/style_1.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('web/css/my_custom_style.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Modernizr JS -->
        <script src="{{ asset('web/js/modernizr-3.5.0.min.js') }}"></script>
        @yield('styles')
    </head>
    <body class="{{ request()->routeIs('web.pages.blog.detail') ? 'single' : '' }}">
        @include('web.layouts.partials.header')

        @yield('content')
        
        @include('web.layouts.partials.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
        <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
                integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
                integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
                crossorigin="anonymous"></script>
        <!-- Waypoints -->
        <script src="{{ asset('web/js/jquery.waypoints.min.js') }}"></script>
        <!-- Main -->
        <script src="{{ asset('web/js/main.js') }}"></script>
        @yield('page-scripts')
    </body>
</html>
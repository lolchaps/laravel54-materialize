<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="grey lighten-4">
    <div id="app">

        <header>
            @include('layouts.partials.nav')
        </header>

        <main>
            @include('layouts.partials.sidenav')

            <section class="container">
                @yield('content')
            </section>
        </main>

        <footer>
            
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
            $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrainWidth: true, // Does not change width of dropdown to that of the activator
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'left', // Displays dropdown with edge aligned to the left of button
              stopPropagation: false // Stops event propagation
            });
            $('.notification-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrainWidth: false, // Does not change width of dropdown to that of the activator
              hover: true,
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'right', // Displays dropdown with edge aligned to the left of button
              stopPropagation: false // Stops event propagation
            });
        })
    </script>
</body>
</html>

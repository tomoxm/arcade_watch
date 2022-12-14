<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <header class="site-header">
        @include('navigation')
        <h1 class="title logo">
            <a href="/">( ͡° ͜ʖ ͡°)</a>
        </h1>
    </header>

    <main id="app" class="columns is-centered">
        <section class="column is-three-fifths">
            @yield('content')
        </section>
        <flash-message text="{{ session('flash') }}"></flash-message>
    </main>

</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="128x128" href="/assets/images/olympic_rings.png">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <title>@yield('title','wedstrijd')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')
<main class="container">
    @yield('main','Page under construction ...')
</main>
{{--  Footer  --}}
@include('shared.footer')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

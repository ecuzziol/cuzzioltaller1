<html>
    <head>
        <title>{{ $title ?? 'RetroStore' }}</title>
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> 
    </head>
    <body>
        <x-header />
        <x-navbar :active="$activePage"/>
        <hr/>
        {{ $slot }}
        <x-footer />
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
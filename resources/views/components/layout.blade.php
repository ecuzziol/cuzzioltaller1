<html>
    <head>
        <title>{{ $title ?? 'RetroStore' }}</title>
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">         
        {{-- <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-grid.min.css') }}">         
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-utilities.min.css') }}">         
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-reboot.min.css') }}">          --}}
        @vite(['resources/css/app.css', 'resources/sass/app-sitio.scss', 'resources/js/app.js', 'resources/js/jquery-4.0.0.min.js'])
    </head>
    <body>
        <x-header />
        <x-navbar :active="$activePage"/>

        {{ $slot }}
        <x-footer />
        
        <script src="{{ asset('vendor/jquery/jquery-4.0.0.min.js') }}"></script>
        {{-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script> --}}
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        {{-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.esm.min.js') }}"></script> --}}
    </body>
</html>
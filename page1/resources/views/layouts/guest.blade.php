<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/fonts/icofont/icofont.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   
        <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	    <script src="{{ asset('assets/js/script.js') }}"></script>

        <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/sweetalert2/sweetalerts.js') }}"></script>

    </head>
    <body>       
            {{ $slot }} 
            <footer class="footer style--two">Powered by<a href="https://www.abelarana.com/">Abel Arana</a></footer>      
    </body>
</html>

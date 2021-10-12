<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
	    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;display=swap" rel="stylesheet">
	    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/fonts/icofont/icofont.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">

	    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    </head>
    <body>       
    <div class="offcanvas-overlay"></div>
	<div class="wrapper">
		@livewire('nav.navigation-top')
		<div class="main-wrapper">
            @livewire('nav.navigation-menu')
			<div class="main-content">
				<div class="container-fluid">
                {{ $slot }}
				</div>
			</div>
		</div>
    </div>
		<footer class="footer">AA © 2021 created by - <a href="https://www.abelarana.com/"> Abel Arana</a></footer>
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	    <script src="{{ asset('assets/js/script.js') }}"></script>
	    <script src="{{ asset('assets/plugins/apex/apexcharts.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/apex/custom-apexcharts.js') }}"></script>
    </body>
</html>

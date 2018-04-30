<head>
	<title>TaskList - @yield('subtitle')</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@include('partials.styles')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script>window.laravel = { csrfToken: '{{ csrf_token() }}' }</script>

</head>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Blog')</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
	@include('partials/nav')
	<section>
	@include('flash::message')
	@yield('content')
	</section>
	</div>
<footer>
	
</footer>
<script src="{{asset('plugins/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>

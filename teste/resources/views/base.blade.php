<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content="width=device-width, initial-scale=1.0">
	<title> 
		Tintas
	</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
	<div>
		<a href="{{route('tintas.index')}}">Tinta</a>
	</div>
	<div class="container">
		@yield('main')
	</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
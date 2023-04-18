<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
	<div class="container px-4 mx-auto">
		<header class="flex justify-between items-center py-4">
			<a href="">
				<img src="{{asset('img/logo.webp')}}" class="h-12">
			</a>

			@auth
				<a href="{{route('dashboard')}}">Dashboard</a>
			@else
				<a href="{{route('dashboard')}}">Login</a>
				<a href="{{route('register')}}">Register</a>
			
			@endauth
			
		</header>

	</div>
	<a href="#servicios">Sercicios</a>
	<a href="#beneficios">Beneficios</a>
	<hr>
	
	@yield('content')
</body>
</html>
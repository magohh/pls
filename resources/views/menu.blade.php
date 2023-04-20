<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PCI-DSS</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
	<div class="container px-4 mx-auto">
		<header class="flex justify-between items-center py-4">
			<a href="">
				<img src="{{asset('img/logo.webp')}}" class="h-70">
			</a>

			@auth
				<a href="{{route('dashboard')}}">Dashboard</a>
			@else
				<a href="">Servicios</a>
				<a href="">Blog</a>
				<a href="">Acerca de nosotros</a>
				<a href="">Únete al equipo</a>
				<a href="">Contáctanos</a>
				<div class="dropdown">
					<a class="dropdown" data-toggle="dropdown">PCI-DSS</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<ul class="poppins poppins">
							<li class="m-3"><a href="#servicios">Servicios</a></li>
							<li class="m-3"><a href="#beneficios">Beneficios</a></li>
							<li class="m-3"><a href="files/IQSEC_EVALUACIÓN TÉCNICA_V4.0.docx" download="IQSEC_EVALUACIÓN TÉCNICA_V4.0">Descarga la información</a></li>
							<li class="m-3"><a href="{{route('dashboard')}}">Login</a></li>
							<li class="m-3"><a class="color-1" href="{{route('register')}}">Registrarse</a></li>
						</ul>
					</div>
				</div>
			
			@endauth
			
		</header>

	</div>
	@yield('content')
</body>
</html>
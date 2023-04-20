<!-- <x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-black leading-tight">
            {{ __('¡Bienvenido!') }}
            
        </h2>
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 black-text">
                    {{ __("You're logged in!") }}
                </div>
                
            </div>
        </div>
    </div> -->


@section('content')
<div class="bg-1">
		<div class="col p-250-15">
			<h1 class="text-white fz-3 mb-1-5">Servicio de consultoría <br> PCDI-DSS</h1>
			<a class="contact-btn">Contacta a un asesor</a>
		</div>
	</div>
<div class="container text-center">
	<div class="row">
		<div class="col">
			<p class="title">¿Qué es?</p>
			<p class="description-text m-2-auto-0">Es un estándar que establece un conjunto de medidas prácticas y herramientas de seguridad que pretenden garantizar la seguridad en el tratamiento de la información asociada a pagos con tarjeta.</p>
			<img class="m-2-a" src="img/card.png" alt="">
			<p class="description-text m-2-auto-0"><span class="color-1">PCI-DSS</span> busca mejorar el nivel de seguridad de los pagos realizados mediante tarjetas, promoviendo la existencia de un entorno de pago seguro para la protección de las tarjetas bancarias y sus titulares.</p>
		</div>
	</div>
</div>
<footer class="d-flex">
	<img src="img/logoiqsec.webp" alt="" class="m-auto">
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</x-app-layout>

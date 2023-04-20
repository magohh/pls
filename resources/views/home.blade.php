@extends('menu')

@section('content')
<div class="bg-1">
	<div class="col p-250-15">
		<h1 class="text-white fz-3 mb-1-5">Servicio de consultoría <br> PCDI-DSS</h1>
		<a class="contact-btn">Contacta a un asesor</a>
	</div>
</div>
<!--QUE ES-->
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
<div class="bg-3 scrollanimation scrollanimation animated slideInRight adr-7 adl-1">
	<div class="container">
		<p class="banner-text-1">Nuestros Servicio brinda asesoramiento integral experto a las Organizaciones</p>
	</div>
</div>
<!--SERVICIOS-->
<div class="container">
	<div class="row">
		<div class="col">
		<p class="title" id="servicios">Servicios</p>
		<p class="box-title">Servicios de Assessment, análsis de riesgos</p>
		</div>
	</div>
</div>
<div class="bg-2">
	<div class="container">
		<p class="banner-text-2">Nuestro compromiso es ayudarle en las <span class="color-1">definiciones, análisis y evaluación</span> de seguridad basados en PCI-DSS que lo encamine hacia la mitigación de las vulnerabilidades y la disminución de riesgos y logre con éxito la <span class="color-1">certificación.</span></p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<p class="bubble">Assessment</p>
			<hr class="line-1">
			<p class="description-text m-auto">Ejecución de test PCI-QSA</p>
			<hr class="line-1">	
			<p class="description-text m-auto">Validación de tareas críticas</p>
		</div>
		<div class="col-sm-12 col-md-4">
			<p class="bubble">Análisis de riesgos</p>
			<hr class="line-1">
			<p class="description-text m-auto">Identificación de activos y amenzas</p>
			<hr class="line-1">
			<p class="description-text m-auto">Identificar vulnerabilidades</p>
			<hr class="line-1">
			<p class="description-text m-auto">Evaluación y tratamiento del riesgo</p>
		</div>
		<div class="col-sm-12 col-md-4">
			<p class="bubble">Reporte</p>
			<hr class="line-1">
			<p class="description-text m-auto">Reporte ejecutivo final</p>
			<hr class="line-1">
			<p class="description-text m-auto">Matriz de controles críticos PCI</p>
			<hr class="line-1">
			<p class="description-text m-auto">Recomendaciones</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p class="description-text m-2-auto-0">Esta assessment le permitirá conocer el nivel de cumplimiento inicial con el que cuenta y con el que enfrentará la certificación, le permite tener una visibilidad real del nivel de riesgo al que se enfrenta para una planificación adecuada antes de la mitigación de las brechas.</p>
			<p class="warn-text m-2-a">El servicio Assessment PCI-DSS se lleva a cabo conforme a los requerimientos establecidos por PCI Security Standards Council.</p>
			<p class="box-title">Acompañamiento en el proceso de certificación en PCI-DSS</p>
		</div>
	</div>
</div>
<div class="bg-2 scrollanimation animated slideInLeft adr-7 adl-1">
	<div class="container">
		<p class="banner-text-2">Nuestro compromiso es estar a su lado en todo el proceso que le conducirá hacia la <span class="color-1">certificación</span> de la industria de medios de pago y su mantenimiento.</p>
	</div>
</div>
<div class="container">
	<div class="row align-center">
		<div class="col-sm-12 col-md-6">
			<p class="banner-text-3">El servicio integral de acompañamiento con respecto PCI-DSS se lleva a cabo conforme a los requerimientos establecidos por PCI Security Standards Council. </p>
		</div>
		<div class="col-sm-12 col-md-6">
			<p class="banner-text-3">Esta metodología brinda el acompañamiento requerido a las entidades obligadas al cumplimiento del estándar durante todo el proceso de implantación del mismo y de acuerdo con sus necesidades particulares.
</p>
		</div>
	</div>
<!--BENEFICIOS-->
	<div class="row">
		<div class="col">
			<p class="title" id="beneficios">Beneficios</p>
		</div>
	</div>
	<div class="row align-center mb-4">
		<div class="col-1">
			<input type="radio">
		</div>
		<div class="col">
			<p class="benefit-text">Proporcionar la protección efectiva de la información de los titulares de tarjetas.</p>
		</div>
	</div>
	<div class="row align-center mb-4">
		<div class="col-1">
			<input type="radio">
		</div>
		<div class="col">
			<p class="benefit-text">Minimizar el riesgo de posibles intrusiones no autorizadas o compromiso de la información de tarjetas.</p>
		</div>
	</div>
	<div class="row align-center mb-4">
		<div class="col-1">
			<input type="radio">
		</div>
		<div class="col">
			<p class="benefit-text">Incrementar la confianza de los titulares de tarjetas en las transacciones realizadas con las mismas.</p>
		</div>
	</div>
	<div class="row align-center mb-4">
		<div class="col-1">
			<input type="radio">
		</div>
		<div class="col">
			<p class="benefit-text">Combatir la suplantación de identidad y otros fraudes que se producen en Internet.</p>
		</div>
	</div>
	<div class="row align-center mb-4">
		<div class="col-1">
			<input type="radio">
		</div>
		<div class="col">
			<p class="benefit-text">Proteger la reputación de la Organización.</p>
		</div>
	</div>
	<div class="row align-center mb-4">
		<div class="col-1">
			<input type="radio">
		</div>
		<div class="col">
			<p class="benefit-text">Disminución de los riesgos de incumplimiento como las pérdidas financieras.</p>
		</div>
	</div>
	<div class="row align-center mb-4">
		<div class="col-1">
			<input type="radio">
		</div>
		<div class="col">
			<p class="benefit-text">Disminución de los riesgos de incumplimiento como las pérdidas financieras.</p>
		</div>
	</div>
	@if (count($todolists))
	
	<ul class="list-group list-group-flush mt-3 row">
		@foreach($todolists as $todolist)
		<li class="list-group-item d-flex align-center">
		<div class="col-1">
			<input type="radio">
		</div>
		<div class="col">
			<form action="{{route('destroy',$todolist->id)}}" method="POST" class="new-benefit row mb-4">
				<div class="col-10">
				{{$todolist->content}}
				</div>
				
				@csrf
				@method('delete')
				<button type="submit" class="col-1"><img src="img/trash.png" class="h-30px" alt=""></button>
				<a href="{{url('edit'. $todolist->id)}}" class="col-1"><img src="img/edit.png" class="h-30px" alt=""></a>
			</form>
		</div>
		</li>
		@endforeach
	</ul>
	@endif
</div>
<div class="container">
	<form action="{{route('store')}}" method="POST" acutocomplete="off">
		@csrf
		<div class="input-group">
			<div class="col-1">
				<input type="radio">
			</div>
			<div class="col row">
				<input name="content" class="input-benefit" placeholder="Agrega un beneficio que te interese añadir">
				<button type="submit" class="mt-4 w-25 btn btn-primary text-primary m-auto">Añadir</button>
			</div>
		</div>
	</form>	
</div>
<footer class="d-flex">
	<img src="img/logoiqsec.webp" alt="" class="m-auto">
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	@endsection


@extends('menu')

@section('content')

	<section>
		<h1>home</h1>
		<form action="{{route('store')}}" method="POST" acutocomplete="off">
			@csrf
			<div class="input-group">
				<input type="text" name="content" class="form-control" placeholder="Agrega un beneficio">
				<button type="submit" class="btn">boton</button>
			</div>
		</form>
		@if (count($todolists))
		<ul class="list-group list-group-flush mt-3">
			@foreach($todolists as $todolist)
				<li class="list-group-item">
					<form action="{{route('destroy',$todolist->id)}}" method="POST">
						{{$todolist->content}}
						@csrf
						@method('delete')
						<button type="submit" class="btn">X</button>
					</form>
				</li>
			@endforeach
		</ul>
		@endif
	</section>  
	<section id="servicios">
		<h1>servicios</h1>
	</section>
	<section id="beneficios">
		<h1>beneficios</h1>
		
	</section>    
	
	
@endsection
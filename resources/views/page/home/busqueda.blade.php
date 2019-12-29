@extends('app')

@section('content')


<body>

	<div class="container" id="container-fluid-secciones">
		<div class="row ">
			<div class="center">	
				<span id="titulo-seccion">Búsqueda</span>
			</div>
		</div>

		<div class="row" style="margin-top: 5%">
			@if($resultado->count()>0)
			@foreach($resultado as $p)
				<div class="col s12 m5 offset-m1 offset-s1">
					<div class="card z-depth-0">
						<div class="efecto hide-on-med-and-down">	
							<div class="central">
								<a href="{{ action('SeccionProductoController@show', $p->id) }}"><img src="{{asset('images/mas.png')}}" alt="" class="img-responsive"></a>
							</div>
						</div>
						<div class="card-image" style="max-width: 350px; height: 344px; border: 1px solid #A3A3A3; display: flex; justify-content: center; align-items: center;">
							<a class="center" href="!#">
								<img src="{{ asset('images/productos/'.$p->file_image) }}">
							</a>
						</div>
						<div class="card-content" style="max-width: 350px; border-bottom: 2px solid #A3A3A3">
							<span class="card-title center" style="font-size: 18px; color: #FF7400">{{ $p->nombre }}</span>
						</div>
					</div>
				</div>
				@endforeach
				@else
				<div class="col s12 center " >
					<div class="center">
						<p>
							No se encontraron resultados. 
						</p>
						<a href="{{action('SeccionHomeController@index')}}" class="waves-effect waves-light btn" id="volver-btn">VOLVER</a>
					</div>
				</div>
				@endif
			</div>

		</div>

		
		@endsection


		@include('layouts.script')
	</body>
	</html>




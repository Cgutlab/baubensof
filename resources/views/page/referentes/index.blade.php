@extends('app')

@section('content')

<body>



	<div class="container" style="width: 95%">
		<div class="row">
			<div class="col s12">
				<h5 id="titulo-seccion">Referentes</h5>
				<p id="subtitulo-seccion">Algunos de los Clientes que confían en nosotros</p>
			</div>
		</div>
		<div class="row">
			@forelse($referentes as $r)
				<div class="col s12 m6">
					<div class="card grey lighten-1 hoverable">
						<a href="{{ $r->link }}">
							<div class="card-content center">
								<span class="card-referentes">{{ $r->empresa }}</span><br>
								<span class="card-referentes">{{ $r->encargado }}</span>
							</div>
						</a>
					</div>
				</div>
			@empty
				<div class="col s12">
					<div class="card">
						<div class="card-content white-text">
							<span class="card-title center">No se consiguieron registros</span>
						</div>
					</div>
				</div>
			@endforelse
		</div>
	</div>

	
	@endsection


	@include('layouts.script')

	<script>
		$(document).ready(function(){  
			$('.slider').slider({
				height: 485,
			})
		});


	</script>

</body>
</html>



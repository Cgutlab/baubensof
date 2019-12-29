 @extends('app')

@section('content')

<body>


	@include('page.partials.slider')

	<div class="container" id="container-fluid" style="margin-top: 5%">
		<div class="row">
			<div class="col s12 m6">
				<div class="img-empresa" style="margin-bottom: 30px">
					<img src="{{ asset('images/empresa/'.$empresa->file_image) }} ">				
				</div>
			</div>
			<div class="col s12 m6">
				<div class="texto-empresa" id="empresa-titulo1">
					<p>{!! $empresa->titulo1 !!}</p>	
				</div>
				<div class="texto-empresa" id="empresa-titulo2">
					<p>{!! $empresa->titulo2 !!}</p>	
				</div>
				<div class="texto-empresa" id="empresa-descripcion">
					<p>{!! $empresa->descripcion !!}</p>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s8 offset-s2">
				<div id="empresa-slogan">
					<p>{!! $empresa->slogan !!}</p>	
				</div>	
			</div>
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



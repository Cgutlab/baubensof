@extends('app')

@section('content')

<body>



	<div class="container">
		<div class="center">
			<div class="row">
				<div class="col s12">
					<h5 id="titulo-seccion">Aluminio</h5>
					<p id="subtitulo-seccion">Fabricación y comercialización de aberturas de aluminio para todo tipo de construcción, contamos con toda las líneas disponibles del mercado moderno.</p>
				</div>
			</div>
			<div class="row">
				<div class="row">
					@forelse($marcas as $m)
						<div class="col l3">
							<img src="{{ asset('images/marcas/'.$m->file_image) }}">
						</div>
					@empty
					@endforelse
				</div>

				@forelse($productos as $p)
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
	</div>

	<!--	Modal -->

	@include('page.obras.show')


	
	@endsection


	@include('layouts.script')

	<script>
		$(document).ready(function(){      


			$('body').delegate(".miniatura-img", 'click', function() {
				var src = $(this).data("srcimage");
				$("#bg-imagen").attr("src", src);
			});
				

			$('.modal').modal({
				startingTop: 3,
			});			


			$('.modal-trigger').click(function(){
    			var id   = $(this).data('id');
    			var url  ='{{action('SeccionObraController@show', ["::"])}}';
    			url      = url.replace("::", id)
    			$.ajax({
    				method: 'get',
    				url: url})
    			.always(function(text, status, responseObject){
					var obra    = text['obra'];
					var galeria = text['galeria'];
					var path    = "{{ URL::asset('/images/obras/') }}" ;
					var image   = obra['file_image'];
					var url     = path+'/'+image;
					var titulo  = 'Galería de Obras '+obra['nombre'];
					var texto   = obra['descripcion'];


				$('.modal-content').html(''+
					'<h5 id="titulo-seccion" class="center">'+titulo+'</h5>'+
					"<div class='center' style='height: 250px; display: flex;justify-content: center;align-items: center; margin-top: 5%'>"+
						"<img style='width: 50%' id='bg-imagen' src='"+url+"'"+
					"</div>");

					galeria.forEach(function(galeria, index){
						var path    = "{{ URL::asset('/images/galeria_obras/') }}" ;
						var image   = galeria['file_image'];
						var url     = path+'/'+image;

						$('.modal-content').append(''+
								'<div style="display: inline-block; align-content: center;">'+
									"<div class='miniatura-img' data-srcImage='"+url+"'>"+
										"<img style='width: 150px; margin-left: 10px;  margin-right: 10px; ' src='"+url+"'>"+
									'</div>'+
								'</div>');


					});	

					$('.modal-content').append(''+
						'<p style="color: #595959; font-size: 18px; font-family: Titillium; margin: 10px">'+texto+'</p>')

				})
    		});





		});


	</script>

</body>
</html>



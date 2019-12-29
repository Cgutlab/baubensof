@extends('app')

@section('content')

<body>



	<div class="container" style="width: 95%">
		<div class="row">
			<div class="col s12">
				<h5 id="titulo-seccion">Obras</h5>
				<p id="subtitulo-seccion">A continuación, algunos de nuestros proyectos realizados</p>
			</div>
		</div>
		<div class="row">
			@forelse($obras as $o)
			<div class="col s12 m6">
				<div class="card z-depth-0">
					<div class="card-image" id="image-hover">
						<a class="modal-trigger" href="#modal1" data-id="{{ $o->id }}">
							<img src="{{ asset('images/obras/'.$o->file_image) }}">
							<span class="card-title obras-title">{{ $o->nombre }}</span>
						</a>
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
					"<div class='center' style='height: 200px; margin-top:8%; display: flex;justify-content: center;align-items: center;'>"+
						"<img class='img-responsive' style='width: 70%' id='bg-imagen' src='"+url+"'"+
					"</div>");

					galeria.forEach(function(galeria, index){
						var path    = "{{ URL::asset('/images/galeria_obras/') }}" ;
						var image   = galeria['file_image'];
						var url     = path+'/'+image;

						$('.modal-content').append(''+
								'<div style="display: inline-block; margin-top: 5%; margin-bottom: -12%">'+
									"<div class='center miniatura-img' data-srcImage='"+url+"'>"+
										"<img style='width: 150px; margin-left: 10px;  margin-right: 10px; ' src='"+url+"'>"+
									'</div>'+
								'</div>');

					});	

					$('.modal-content').append(''+
						'<p style="color: #595959; font-size: 18px; font-family: Titillium;  margin-top: 10%">'+texto+'</p>')

				})
    		});

		});


	</script>

</body>
</html>



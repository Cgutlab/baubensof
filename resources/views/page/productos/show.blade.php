@extends('app')

@section('content')

<body>


	<div class="container" id="container-fluid-secciones" style="width: 90%!important">

		<div class="row" style="margin-top: 5%">			
			<div class="col s12 m3">					
				<div class="divider" id="divider-producto"></div>
				<div class="categorias-productos">
					<ul id="nav-mobile" class="side-nav fixed nav-productos">
						@foreach($productos as $p)
						<ul class="collapsible collapsible-accordion  collapsible-familia" style="box-shadow: none; border: none;" >
							<li class="bold">
								<a href="{{ action('SeccionProductoController@show', $p->id) }}"{{($p->id == $producto->id)?"style=color:#EA7724!important":""}} >{{ ($p->nombre) }}</a>
							</li>
						</ul>
						@endforeach
					</ul>
				</div>
			</div>


			<div class="col s12 m9 l9">
				<div class="col s12 m7">
					<div class='imagen-producto-zoom center' style="border: 1px solid #AEAEAE; height: 420px; display: flex;justify-content: center;align-items: center;">
						<img id='bg-imagen' class="materialboxed responsive-img" src="{{ asset('/images/productos/'.$producto->file_image) }}"> 

					</div>
					<div class="row">
						<div class="col s6 m3" style="margin-top: 2%">
							<div class="miniatura-img" data-srcImage="{{ asset('/images/productos/'.$producto->file_image) }}">
								<img src="{{ asset('/images/productos/'.$producto->file_image) }}" alt="" >
							</div>
						</div>
						@foreach($producto->galerias as $g)
						<div class="col s6 m3" style="margin-top: 2%">
							<div class="miniatura-img" data-srcImage="{{ asset('/images/galeria_productos/'.$g->file_image) }}">
								<img src="{{ asset('/images/galeria_productos/'.$g->file_image) }}" alt="" >
							</div>
						</div>
						@endforeach
					</div>
				</div>


				<div class="col s12 m5">
					<div class="text-title-producto">
						{!! $producto->nombre !!}
					</div>
					<div class="divider" id="divider-producto"></div>
					<div class="detalles-title">DETALLES</div>
					<div class="text-descripcion-producto" style='margin-top:10%'>
						{!! $producto->descripcion !!}
					</div>

					<div class="button-ficha-producto" style='margin-top:10%'>
						<a href="{{ action('SeccionContactoController@show', ['producto'=>$producto->id]) }}" class="waves-effect waves-light btn btn-large" style="background-color: #E6773C !important; color: #FFFFFF; font-size: 15px  !important; width: 150px; border-radius: 5px">CONSULTAR</a>
					</div>
				</div>

				@if($producto->etiquetas!=null)


					<div class="col s12" id="tabs-producto" style="margin-top: 10%">
						<ul id="tabs-swipe-demo" class="tabs">
							@forelse($tipos as $t=>$nombre)
								<li class="tab col s4"><a href="#test-swipe-{{ $t }}">{{ $nombre }}</a></li>
							@empty
							@endforelse
						</ul>
						<div id="test-swipe-modelo" class="col s12">
							@foreach($etiquetas as $f)
								@if($f->tipo == 'modelo')
									<div class="col s6 m2">
										<div class="card z-depth-0">
											<div class="card-image">
												<img   style="width: auto !important" src="{{ asset('images/'.$f->tipo.'/'.$f->file_image)}}">
											</div>
											<div class="card-content">										
												<span  id="content-tabs">{{ $f->nombre }}</span>
											</div>
										</div>
									</div>
								@endif
							@endforeach
						</div>
						<div id="test-swipe-ventaja" class="col s12">
							@foreach($etiquetas as $f)
								@if($f->tipo == 'ventaja')
									<div class="col s6 m2">
										<div class="card z-depth-0">
											<div class="card-image">
												<img   style="width: auto !important" src="{{ asset('images/'.$f->tipo.'/'.$f->file_image)}}">
											</div>
											<div class="card-content">										
												<span  id="content-tabs">{{ $f->nombre }}</span>
											</div>
										</div>
									</div>
								@endif
							@endforeach
						</div>
						<div id="test-swipe-tipologia" class="col s12">
							@foreach($etiquetas as $f)
								@if($f->tipo == 'tipologia')
									<div class="col s6 m2">
										<div class="card z-depth-0">
											<div class="card-image">
												<img   style="width: auto !important" src="{{ asset('images/'.$f->tipo.'/'.$f->file_image)}}">
											</div>
											<div class="card-content">										
												<span  id="content-tabs">{{ $f->nombre }}</span>
											</div>
										</div>
									</div>
								@endif
							@endforeach
						</div>
					@endif

				</div>
			</div>
		</div>
	</div>	



	@endsection


	@include('layouts.script')

	<script>


		$(document).ready(function(){  
			$('.materialboxed').materialbox();
			$( ".miniatura-img" ).click(function() {
				var src = $(this).data("srcimage");
				$("#bg-imagen").attr("src", src);
			});
			$('.tabs').tabs();
			$('.sidenav').sidenav();        
			$('.button-collapse').sideNav();
		});


	</script>


</body>
</html>

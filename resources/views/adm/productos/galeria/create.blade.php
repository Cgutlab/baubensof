@include('layouts.adm.app')
@include('layouts.adm.navbar')
@include('layouts.adm.sidebar')
<main>

	<div class="container" id="container-fluid">
		<div class="row">
			@if ($errors->any())
			<div class="card-panel alert-error">
				<ul>
					<li><i class="material-icons">error_outline</i><b>ALERTA: </b></li>
					@foreach ($errors->all() as $error)
					<li>{{ $error }} </li>
					@endforeach
				</ul>
			</div>
			@endif

			@if (session('alert'))
			<div class="card-panel alert-success">
				<ul>
					<li>ALERTA:
						{{ session('alert') }}				
					</li>
				</ul>
			</div>
			@endif

			<div class="col s12">
				<div class="col s12" style="background: #7b5252; padding-top: 10px; margin-bottom: 20px">
					<a href="{{ url('adm/home/' )}}" class="breadcrumb">Home</a>
					<a href="{{ url('adm/productos/producto/' )}}" class="breadcrumb">Productos</a>
					<a href="{{ action('ObraController@galeriaView', $producto->id)}}" class="breadcrumb">Galería</a>
					<a class="breadcrumb">Crear</a>
				</div>
				<form method="POST"  enctype="multipart/form-data" action="{{action('ProductoController@galeriaStore')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}

					<div class="row">
						<h5>Crear Galeria del producto {!! $producto->nombre !!}</h5>					
						<div class="divider"></div>
						<div class="file-field input-field">
						<h6>Cargue las imágenes que conformarán la galería del producto</h6>
							<div class="btn">
								<span>Imágenes</span>
								<input type="file" multiple name="file_image[]">
								<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 400x400</span>
							</div>
							<label for=""></label>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Cargue una o varias imágenes">
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">text_rotation_none</i>
								<input id="icon_prefix" type="text" class="validate" name="orden" >
								<label for="icon_prefix">Orden</label>
							</div>
						</div>
						<input type="hidden" name="producto_id" value="{{$producto->id}}">
						<div class="right">
							<a href="{{action('ProductoController@galeriaView', ['producto' => $producto->id ])}}" class="waves-effect waves-light btn">Cancelar</a>
							<button class="btn waves-effect waves-light" type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</main>



@include('layouts.script')


<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>

	CKEDITOR.replace('descripcion');
	CKEDITOR.config.height = '200px';
	CKEDITOR.config.width = '100%';


	$(document).ready(function(){		

		M.AutoInit();
		$('.collapsible').collapsible();
		$('select').formSelect();  



	});

</script>



</body>

</html>
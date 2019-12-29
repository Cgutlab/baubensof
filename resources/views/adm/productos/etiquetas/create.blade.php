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
					<a href="{{ action('ProductoController@index' )}}" class="breadcrumb">Productos</a>
					<a class="breadcrumb">Crear</a>
				</div>
				<form method="POST"  enctype="multipart/form-data" action="{{action('ProductoController@etiquetaStore')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}

					<div class="row">
						<h5>Crear Etiqueta del Producto {!! $producto->nombre !!}</h5>					
						<div class="divider"></div>
						<div class="file-field input-field col s12">
							<div class="btn">
								<span>Imagen</span>
								<input type="file" name="file_image">            

							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
								<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 110x110</span>
							</div>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">label</i>
							<input id="icon_prefix" type="text" class="validate" name="nombre">
							<label for="icon_prefix">Nombre</label>
						</div>
						<input type="hidden" name="producto_id" value="{{$producto->id}}">
						<div class="input-field col s6">
							<select name="tipo" readonly>
								<option value="" disabled selected>Seleccionar Tipo</option>
								@foreach($tipos as $index => $t)
								<option value="{{ $index }}">  {{$t}} </option>
								@endforeach
							</select>
						</div>
						
						<input type="hidden" name="producto_id" value="{{$producto->id}}">
						<div class="right">
							<a href="{{action('ProductoController@etiquetaView', ['producto' => $producto->id ])}}" class="waves-effect waves-light btn">Cancelar</a>
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

<script>

	$(document).ready(function(){		

		M.AutoInit();
		$('.collapsible').collapsible();
		$('select').formSelect();  



	});

</script>



</body>

</html>
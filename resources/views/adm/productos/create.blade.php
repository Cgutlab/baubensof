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
				<form method="POST"  enctype="multipart/form-data" action="{{action('ProductoController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}    

					<h5>Crear Obra</h5>					
					<div class="divider"></div>

					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">keyboard_arrow_right</i>
							<input id="icon_prefix" type="text" class="validate" name="nombre">
							<label for="icon_prefix">Nombre</label>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">text_rotation_none</i>
							<input id="icon_prefix" type="text" class="validate" name="orden" >
							<label for="icon_prefix">Orden</label>
						</div>
					</div>
					<div class="row">
						<div class="file-field input-field s12">
							<div class="btn">
								<span>Imagen</span>
								<input type="file" name="file_image">            

							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
								<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 400x400</span>
							</div>
						</div>
						<div class="col s12">
							<h6 for="textarea1">Descripción</h6>
						</div>
						<div class="input-field col s12">
							<textarea id="descripcion" name="descripcion"> </textarea>
						</div>

					</div>


					<div class="row">

						<div class="input-field col s6">
							<i class="material-icons prefix">text_rotation_none</i>
							<input id="icon_prefix" type="text" class="validate" name="keyword" >
							<label for="icon_prefix">Keyword</label>
							<span class="helper-text" data-error="wrong" data-success="right">Separar las palabras con coma (,). Ejemplo: key1,key2,key3...</span>
						</div>
					</div>

					<div class="right">
						<a href="{{ action('ProductoController@index') }}" class="waves-effect waves-light btn">Cancelar</a>
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
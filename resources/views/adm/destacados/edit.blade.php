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

			<div class="col s12" style="padding-left: 40px;padding-right: 40px;">
				<div class="col s12" style="background: #7b5252; padding-top: 10px; margin-bottom: 20px">
					<a href="{{ url('adm/home/' )}}" class="breadcrumb">Home</a>
					<a href="{{ url('adm/destacados/' )}}" class="breadcrumb">Secciones Destacadas</a>
					<a class="breadcrumb">Editar</a>
				</div>
				<form method="POST"  enctype="multipart/form-data" action="{{action('DestacadoController@update', $destacado->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}    
					{{ method_field('PUT')}}  

					<div class="row">
						<h5>Editar Sección</h5>					
						<div class="divider"></div>
						<div class="file-field input-field s12">
							<div class="btn">
								<span>Imagen</span>
								<input type="file" name="file_image">            

							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
								<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 316x309</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s6">
							<select name="metadato_id">
								@foreach ($metadatos as $m )
								<option value="{{ $m->id }}" @if($m->id == $destacado->metadatos->id) selected @endif >{{ $m->seccion }}</option>
								@endforeach
							</select>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">text_rotation_none</i>
							<input id="icon_prefix" type="text" class="validate" name="orden"  value="{{ $destacado->orden }}">
							<label for="icon_prefix">Orden</label>
						</div>
					</div>

					<div class="right">
						<a href="{{ action('DestacadoController@index') }}" class="waves-effect waves-light btn">Cancelar</a>
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</form>
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
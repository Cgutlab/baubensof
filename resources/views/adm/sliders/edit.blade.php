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
					<a href="{{ url('adm/sliders/' )}}" class="breadcrumb">Sliders</a>
					<a class="breadcrumb">Editar</a>
				</div>
				<form method="POST"  enctype="multipart/form-data" action="{{action('SliderController@update', $slider->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}    
					{{ method_field('PUT')}}  

					<div class="row">
						<h5>Editar Slider</h5>					
						<div class="divider"></div>
						<div class="file-field input-field s12">
							<div class="btn">
								<span>Imagen</span>
								<input type="file" name="file_image">            

							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
								<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 1348x484</span>
							</div>
						</div>
						<div class="col s12">
							<h6 for="textarea1">Título</h6>
						</div>
						<div class="input-field col s12">

							<textarea id="titulo" name="titulo"> {!! $slider->titulo !!} </textarea>
						</div>

					</div>

					<div class="row">
						<div class="input-field col s6">
							<select name="seccion">
								@foreach ($secciones as $i => $s )
								<option value="{{ $i }}" @if($s == $slider->seccion) selected @endif >{{ ucwords($s) }}</option>
								@endforeach
							</select>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">text_rotation_none</i>
							<input id="icon_prefix" type="text" class="validate" name="orden"  value="{{ $slider->orden }}">
							<label for="icon_prefix">Orden</label>
						</div>
					</div>

					<div class="right">
						<a href="{{ action('SliderController@index') }}" class="waves-effect waves-light btn">Cancelar</a>
						<button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</main>

	@include('layouts.script')
	<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
	<script>

	CKEDITOR.replace('titulo');
	CKEDITOR.config.height = '150px';
	CKEDITOR.config.width = '100%';

		$(document).ready(function(){		
			M.AutoInit();
			$('.collapsible').collapsible();
			$('select').formSelect();  


		});
	</script>

</body>
</html>
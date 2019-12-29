@include('layouts.adm.app')
@include('layouts.adm.navbar')
@include('layouts.adm.sidebar')


<main>
	<div class="container" id="container-fluid">
		<div class="row">
			@if ($errors->any())
			<div class="card-panel alert-error">
				<ul>
					<li>ALERTA:
						@foreach ($errors->all() as $error)
						{{ $error }}

						@endforeach
					</li>
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
					<a href="{{ url('adm/informacion/contacto' )}}" class="breadcrumb">Información de Contacto</a>
				</div>

				<h5>Información de Contacto</h5>					
				<div class="divider" style="margin-bottom: 10px"></div>
				<form method="POST"  enctype="multipart/form-data" action="{{action('InformacionController@update', $informacion->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}    
					{{ method_field('PUT')}}  

					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">keyboard_arrow_right</i>
							<input id="icon_prefix" type="text" class="validate" name="email" value="{{$informacion->email}}" >
							<label for="icon_prefix">Email</label>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">keyboard_arrow_right</i>
							<input id="icon_prefix" type="text" class="validate" name="direccion" value="{{$informacion->direccion}}" >
							<label for="icon_prefix">Dirección</label>
						</div>
						
						<div class="input-field col s6">
							<i class="material-icons prefix">keyboard_arrow_right</i>
						<input id="icon_prefix" type="text" class="validate" name="telefono1" value="{{$informacion->telefono1}}" >
							<label for="icon_prefix">Nª de Teléfono 1</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">keyboard_arrow_right</i>
							<input id="icon_prefix" type="text" class="validate" name="telefono2"   value="{{$informacion->telefono2}}" >
							<label for="icon_prefix">Nª de Teléfono 2</label>
						</div>
						<div class="right">
							<a href="{{ action('InformacionController@contacto') }}" class="waves-effect waves-light btn">Cancelar</a>
							<button class="btn waves-effect waves-light" type="submit" name="action" value="contacto">Submit
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
<div class="container" id="container-fluid">
	<div class="center-align" style="margin-top: 50px; margin-bottom: 50px;" >
		<span class="center">Contáctanos y te brindaremos toda la información que necesites</span>
	</div>

	<div class="row">
		<div class="row" style="margin-top: 5%">
		@if ($errors->any())
		<div class="card-panel alert-error">
			<ul><li>ALERTA:
				@foreach ($errors->all() as $error)
				 {{ $error }}
				@endforeach
				</li>
			</ul>
		</div>
		@endif

		@if (session('alert'))
		<div class="card-panel alert-success">
			<ul><li>ALERTA:
					{{ session('alert') }}				
				</li>
			</ul>
		</div>
		@endif
		<form method="POST"  enctype="multipart/form-data" action="{{action('SeccionContactoController@store')}}" class="col s12">
			{{ csrf_field() }}

			<div class="row">
				<div class="input-field col s12 m6">
					<input id="icon_prefix" type="text" class="validate" name="nombre"  value="{{ old('nombre') }}">
					<label class="label-form-contact" for="icon_prefix">Nombre</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="icon_prefix" type="text" class="validate" name="apellido"  value="{{ old('apellido') }}">
					<label class="label-form-contact" for="icon_prefix">Apellido</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="email" type="email"  name="email" class="validate"  value="{{ old('email') }}">
					<label class="label-form-contact" for="email">Email</label>
				</div>
				<div class="input-field col s12 m6">
					<input  id="empresa" type="text" name="empresa" class="validate"  value="{{ old('empresa') }}">
					<label class="label-form-contact" for="empresa">Empresa</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6">
					<input id="mensaje" type="text" name="mensaje" class="validate"  @if($mensaje!='') value="{{$mensaje}}" @else value="{{ old('mensaje') }}" @endif>
					<label class="label-form-contact" for="mensaje">Mensaje</label>
				</div>
				<div class="input-field col s12 m6">
					<div class="g-recaptcha" data-sitekey = "{{env('GOOGLE_RECAPTCHA_SITE_KEY')}}"></div>
				</div> 
			</div>
			<div class="row">
				<div class="center">
					<button class="btn button-enviar-mas" style="background-color: #E6773C ;" type="submit" name="action">Enviar
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>


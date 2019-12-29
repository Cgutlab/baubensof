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
					<a href="{{ url('adm/usuarios/' )}}" class="breadcrumb">Usuarios</a>
					<a class="breadcrumb">Editar</a>
				</div>

				<h5>Editar Usuario</h5>					
				<div class="divider" style="margin-bottom: 5%"></div>
					<div class="col s12">

					<form method="POST"  enctype="multipart/form-data" action="{{action('UserController@update', $user->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
						{{ csrf_field() }}    
						{{ method_field('PUT')}}  

						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="username" readonly value="{{$user->username}}" >
								<label for="icon_prefix">Username</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="name" value="{{$user->name}}" >
								<label for="icon_prefix">Nombre</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="password" class="validate" name="password"   >
								<label for="icon_prefix">Contraseña</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>

								<select name="tipo_usuario" required>
									@foreach($tipo_usuario as $index=>$tipo)
									<option value="{{ $index }}" @if($index==$user->tipo_usuario) selected @endif>  {{$tipo}} </option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row">
							<div class="right">
								<a href="{{action('UserController@index')}}"  class="waves-effect waves-light btn">Cancelar</a>
								<button class="btn waves-effect waves-light" type="submit" name="action">Submit
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>

					</form>
				</div>
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
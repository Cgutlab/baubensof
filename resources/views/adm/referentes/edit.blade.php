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
					<a href="{{ url('adm/referentes/' )}}" class="breadcrumb">Referentes</a>
					<a class="breadcrumb">Editar</a>
				</div>

				<h5>Referentes</h5>					
				<div class="divider"></div>
				<div class="col s12">

					<form method="POST"  enctype="multipart/form-data" action="{{action('ReferenteController@update', $referente->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
						{{ csrf_field() }}    
						{{ method_field('PUT')}}  

						<div class="row">
							<h5>Editar</h5>					
							<div class="divider"></div>

							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="empresa"   value="{{$referente->empresa}}" >
								<label for="icon_prefix">Empresa</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="encargado"   value="{{$referente->encargado}}" >
								<label for="icon_prefix">Encargado</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="link"   value="{{$referente->link}}" >
								<label for="icon_prefix">Link</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">keyboard_arrow_right</i>
								<input id="icon_prefix" type="text" class="validate" name="orden"   value="{{$referente->orden}}" >
								<label for="icon_prefix">Orden</label>
							</div>

							<div class="right">
								<a href="{{ action('ReferenteController@index') }}" class="waves-effect waves-light btn">Cancelar</a>
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

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>

	CKEDITOR.replace('descripcion');
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
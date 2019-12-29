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
					<a class="breadcrumb">Editar</a>
				</div>

				<h5>Información de Contacto</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<tbody>
						@if($informacion)
							<tr>
								<td><b>Dirección</b></td>
								<td>{{ $informacion->direccion }}</td>
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td>{{ $informacion->email }}</td>
							</tr>
							<tr>
								<td><b>Nª de Teléfono</b></td>
								<td>{{ $informacion->telefono1 }}</td>
							</tr>
							<tr>
								<td><b>Nª de Teléfono 2</b></td>
								<td>{{ $informacion->telefono2 }}</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href=" {{ action('InformacionController@editContacto', $informacion->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@else
							<tr>
								<td colspan="2">No existen registros</td>
							</tr>
						@endif
					</tbody>
				</table>

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
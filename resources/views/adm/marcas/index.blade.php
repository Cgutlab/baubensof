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
					<a href="{{ url('adm/productos/marcas/' )}}" class="breadcrumb">Marcas</a>
				</div>
				<h5>Marcas</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Orden</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($marcas as $m)

							<tr>
								<td style="width: 350px"><img src="{{ asset('images/marcas/'.$m->file_image) }}"></td>
								<td>{{ $m->nombre }}</td>
								<td>{{ $m->orden }}</td>
								<td>
									<a href=" {{ action('MarcaController@edit', $m->id)}} " class="btn-floating btn waves-effect waves-light orange"><i style="font-size: 15px" class="fas fa-pencil-alt"></i></a>
								<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('MarcaController@eliminar', $m->id)}} " class="btn-floating btn waves-effect waves-light deep-orange"><i style="font-size: 15px" class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="4">No existen registros</td>
							</tr>
						@endforelse
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
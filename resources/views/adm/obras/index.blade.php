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
					<a href="{{ url('adm/obras/' )}}" class="breadcrumb">Obras</a>
				</div>
				<h5>Obras</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Orden</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($obras as $o)

							<tr>
								<td style="width: 350px"><img src="{{ asset('images/obras/'.$o->file_image) }}"></td>
								<td>{{ $o->nombre }}</td>
								<td>{!! $o->descripcion !!}</td>
								<td>{{ $o->orden }}</td>
								<td>
									<a href=" {{ action('ObraController@edit', $o->id)}} " class="btn-floating btn waves-effect waves-light orange"><i style="font-size: 15px" class="fas fa-pencil-alt"></i></a>
									<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('ObraController@eliminar', $o->id)}} " class="btn-floating btn waves-effect waves-light deep-orange"><i style="font-size: 15px" class="fas fa-trash-alt"></i></a>

									@if($o->galeria=='1')
										<a href=" {{ action('ObraController@galeriaView', ['obra' => $o->id])}}" class="btn-floating btn waves-effect waves-light teal"><i title="Ver galeria de imágenes" class="material-icons">photo_library</i></a>
									@else
										<a href=" {{ action('ObraController@galeriaCreate', ['obra' => $o->id])}}" class="btn-floating btn waves-effect waves-light teal"><i title="Cargar galeria de imágenes" class="material-icons">library_add</i></a>
									@endif
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="5">No existen registros</td>
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
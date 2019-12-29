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
				<div class="col s12">
				<h5>Etiquetas</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Tipo</th>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($etiquetas as $f)
						<tr>
							<td><b>{{  mb_strtoupper($f->tipo) }}</b></td>
							<td><img src="{{ asset('images/'.$f->tipo.'/'.$f->file_image) }}"></td>
							<td>{{  $f->nombre }}</td>
							<td>
								<a class=" btn-floating btn waves-effect waves-light red" href="{{action('ProductoController@etiquetaDelete', ['producto' => $f->id])}}"><i class="material-icons">delete</i></a></td>
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
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
					<a class="breadcrumb">Galería</a>
					<a class="breadcrumb">Crear</a>
				</div>
				<div class="col s12">
					<h5>Galeria de Imágenes | Obra: {!! $obra->nombre !!}</h5>	
					<div class="divider"></div>

					<div class="col s12" style="margin-top: 5%">
						<table class="index-table responsive-table ">
							<thead>
								<tr>
									<th>Imagen</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@forelse($obra->galerias as $g)

									<tr>
										<td style="width: 350px"><img src=" {{ asset('images/galeria_obras/'.$g->file_image)}} " alt=""></td>
										<td>								
											<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href="{{ action('ObraController@galeriaDelete', $g->id)}}" class="btn-floating btn waves-effect waves-light teal"><i class="material-icons">delete</i></a>
										</td>
									</tr>

								@empty

									<tr>
										<td colspan="3">No se consiguieron registros</td>
									</tr>
										
								@endforelse
							</tbody>
						</table>
					</div>
					<div class="right">
						<a href="{{ action('ObraController@index')}}" class="waves-effect waves-light btn">Volver</a>
					</div>
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
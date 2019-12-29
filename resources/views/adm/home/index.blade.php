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
			<nav>
				<div class="nav-wrapper" id="nav-breadcrumb">
					<div class="col s12">
						<a href="{{ url('adm/home/' )}}" class="breadcrumb">Home</a>
						<a href="{{ url('adm/trayectoria/contenido' )}}" class="breadcrumb">Home</a>
					</div>
				</div>
			</nav>	
			<div class="col s12"
				<h5>Home</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Título</th>
							<th>Contenido</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@if($trayectoria)
						<tr>
							<td>{{ $trayectoria->titulo }}</td>
							<td>{!! substr($trayectoria->contenido, 0, 100) !!}...</td>
							<td><a href=" {{ action('AdminHomeController@edit', $trayectoria->id)}} "><i class="material-icons">edit</i></a></td>
						</tr>
						@else
						<tr>
							<td colspan="3">No existen registros</td>
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
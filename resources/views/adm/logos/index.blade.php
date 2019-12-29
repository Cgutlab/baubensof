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
					<a href="{{ url('adm/logos/' )}}" class="breadcrumb">Logo</a>
				</div>
				<h5>Logos</h5>					
				<div class="divider"></div>
				<table class="index-table-logos responsive-table ">
					<thead>
						<tr>
							<th>Logo</th>
							<th>Ubicación</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						@forelse($logos as $l)
							<tr>
								<td style="width: 350px"><img src="{{ asset('images/logos/'.$l->file_image) }}"></td>
								<td>{{ ($l->ubicacion == 'navbar')?'Barra Principal':'Pie de Página' }}</td>
								<td>
									<a href=" {{ action('LogoController@edit', $l->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="3">No existen registros</td>
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
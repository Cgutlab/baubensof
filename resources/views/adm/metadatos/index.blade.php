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
					<a href="{{ url('adm/metadatos/' )}}" class="breadcrumb">Metadatos</a>
				</div>

				<h5>Metadatos</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Sección</th>
							<th>Keyword</th>
							<th>Descripción</th>
							<th>Opciones</th>

						</tr>
					</thead>
					<tbody>
						@if($metadatos->count()>0)
						@foreach($metadatos as $m)
						<tr>
							<td>{{ $m->seccion }}</td>
							<td>{{ $m->keyword }}</td>
							<td>{!! $m->descripcion !!}</td>
							<td><a href=" {{ action('MetadatoController@edit', $m->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
							</td>
						</tr>
						@endforeach
						@else
						<tr>

							<td colspan="4">No existen registros</td>
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
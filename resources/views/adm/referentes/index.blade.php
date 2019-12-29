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
				</div>

				<h5>Referentes</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<thead>
						<tr>
							<th>Empresa</th>
							<th>Encargado</th>
							<th>Link</th>
							<th>Orden</th>
							<th>Opciones</th>

						</tr>
					</thead>
					<tbody>
						@forelse($referentes as $r)
						<tr>
							<td>{{ $r->empresa }}</td>
							<td>{{ $r->encargado }}</td>
							<td>{{ ($r->link)?$r->link:'N/D' }}</td>
							<td>{{ $r->orden }}</td>
							<td>
								<a href=" {{ action('ReferenteController@edit', $r->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
								<a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('ReferenteController@eliminar', $r->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="fas fa-trash-alt"></i></a>
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
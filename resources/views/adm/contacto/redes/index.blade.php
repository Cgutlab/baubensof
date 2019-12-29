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
					<a href="{{ url('adm/informacion/redes' )}}" class="breadcrumb">Información de Redes Sociales</a>
				</div>

				<h5>Información de Redes Sociales</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<tbody>
						@if($informacion)
							<tr>
								<td><b>Twitter</b></td>
								<td>{{ $informacion->twitter }}</td>
							</tr>
							<tr>
								<td><b>Facebook</b></td>
								<td>{{ $informacion->facebook }}</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href=" {{ action('InformacionController@editRedes', $informacion->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
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
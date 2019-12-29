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
					<a href="{{ url('adm/empresa/' )}}" class="breadcrumb">Quiénes Somos</a>
				</div>

				<h5>Quiénes Somos</h5>					
				<div class="divider"></div>
				<table class="index-table responsive-table ">
					<tbody>
						@if($empresa)
							<tr>
								<td><b>Título 1</b></td>
								<td>{!! $empresa->titulo1 !!}</td>
							</tr>
							<tr>
								<td><b>Título 2</b></td>
								<td>{!! $empresa->titulo2 !!}</td>
							</tr>
							<tr>
								<td><b>Descripción</b></td>
								<td>{!! $empresa->descripcion !!}</td>
							</tr>
							<tr>
								<td><b>Slogan</b></td>
								<td>{!! $empresa->slogan !!}</td>
							</tr>
							<tr>
								<td><b>Imagen</b></td>
								<td  style="max-width: 300px" > <img src="{{ asset('images/empresa/'.$empresa->file_image) }} "></td>
							</tr>
							<tr>
								<td colspan="2">
									<a href=" {{ action('EmpresaController@edit', $empresa->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i class="fas fa-pencil-alt"></i></a>
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
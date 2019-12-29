@extends('app')

@section('content')


<body>

	@include('page.partials.slider')

	<div class="row" style="width: 70%">
		@forelse($destacados as $d)

		<div class="col s12 m4">
			<div class="card z-depth-0">
				<div class="card-image">
					<a href="{{ url($d->metadatos->url) }}">
						<img src="{{ asset('images/destacados/'.$d->file_image) }}">
						<span class="card-title secciones-title">{{ mb_strtoupper($d->metadatos->seccion) }}</span>
					</a>
				</div>
			</div>
		</div>

		@empty
		@endforelse
	</div>

	
	@endsection


	@include('layouts.script')

	<script>
		$(document).ready(function(){  
			$('.slider').slider({
				height: 485,
			})
		});


	</script>


</body>
</html>



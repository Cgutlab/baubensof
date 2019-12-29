@extends('app')

@section('content')

<body>



	<!-- Mapa  -->



		@include('page.contacto.partials.mapa')



	<!-- Formulario  -->



		@include('page.contacto.partials.form')

		

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



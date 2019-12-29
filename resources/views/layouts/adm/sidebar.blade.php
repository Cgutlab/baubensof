
	<ul id="slide-out" class="sidenav sidenav-fixed">
		<div class="logo-admin">
			<img src='{{ asset("images/logos/".$logos->file_image) }}' alt="">
		</div>

		<div class="divider"></div>

			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  {{ (\Request::is('adm/destacados*'))?"style=background:#e8f5e9":"" }}><i class="material-icons">home</i>Home</a>
						<div class="collapsible-body" {{ (\Request::is('adm/destacados*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('DestacadoController@index') }}"><i class="material-icons">navigate_next</i>Ver Secciones Destacadas</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  {{ (\Request::is('adm/sliders*'))?"style=background:#e8f5e9":"" }}><i class="material-icons">image</i>Sliders</a>
						<div class="collapsible-body" {{ (\Request::is('adm/sliders*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('SliderController@create') }}"><i class="material-icons">navigate_next</i>Crear Sliders</a></li>
								<li><a href="{{ action('SliderController@index') }}"><i class="material-icons">navigate_next</i>Ver Sliders</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  {{ (\Request::is('adm/empresa*'))?"style=background:#e8f5e9":"" }}><i class="material-icons">business</i>Quiénes Somos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/empresa*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('EmpresaController@index') }} "><i class="material-icons">navigate_next</i>Información</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0" {{ (\Request::is('adm/obras/*'))?"style=background:#e8f5e9":"" }}><i class="fas fa-building"></i>Obras</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/obras/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('ObraController@create') }}"><i class="material-icons">navigate_next</i>Crear Obra</a></li>
								<li><a href="{{ action('ObraController@index') }}" ><i class="material-icons">navigate_next</i>Ver Obras</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0" {{ (\Request::is('adm/productos/*'))?"style=background:#e8f5e9":"" }}><i class="material-icons">list</i>Productos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/productos/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('MarcaController@create') }}"><i class="material-icons">navigate_next</i>Crear Marca</a></li>
								<li><a href="{{ action('MarcaController@index') }}" ><i class="material-icons">navigate_next</i>Ver Marcas</a></li>
								<li><a href="{{ action('ProductoController@create') }}"><i class="material-icons">navigate_next</i>Crear Productos</a></li>
								<li><a href="{{ action('ProductoController@index') }}" ><i class="material-icons">navigate_next</i>Ver Productos</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  {{ (\Request::is('adm/referentes/*'))?"style=background:#e8f5e9":"" }}><i class="material-icons">local_offer</i>Referentes</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/referentes/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('ReferenteController@create') }}"><i class="material-icons">navigate_next</i>Crear Referente</a></li>
								<li><a href="{{ action('ReferenteController@index') }}"><i class="material-icons">navigate_next</i>Ver Referentes</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  {{ (\Request::is('adm/logos/*'))?"style=background:#e8f5e9":"" }}><i class="fab fa-delicious"></i>Logos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/logos/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('LogoController@index') }}"><i class="material-icons">navigate_next</i>Ver Logos</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  {{ (\Request::is('adm/informacion/*'))?"style=background:#e8f5e9":"" }}><i class="material-icons">phone</i>Contacto</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/informacion/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('InformacionController@contacto') }}"><i class="material-icons">navigate_next</i>Datos de Contacto</a></li>
								<li><a href="{{ action('InformacionController@redes') }}"><i class="material-icons">navigate_next</i>Redes</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  {{ (\Request::is('adm/metadatos/*'))?"style=background:#e8f5e9":"" }}><i class="material-icons">data_usage</i>Metadatos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/metadatos/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('MetadatoController@index') }}"><i class="material-icons">navigate_next</i>Editar</a></li>
							</ul>
						</div>
					</li>
				</ul>
				@if(Auth::user()->tipo_usuario == 'admin')
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  {{ (\Request::is('adm/usuarios/*'))?"style=background:#e8f5e9":"" }}><i class="material-icons">people</i>Usuarios</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/usuarios/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="{{ action('UserController@create') }}"><i class="material-icons">navigate_next</i>Crear Usuarios</a></li>
								<li><a href="{{ action('UserController@index') }}"><i class="material-icons">navigate_next</i>Editar Usuarios</a></li>
							</ul>
						</div>
					</li>
				</ul>
				@endif
			</li>
		</div>
	</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

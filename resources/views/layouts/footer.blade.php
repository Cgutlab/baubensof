<footer class="page-footer" id="footer" style="padding-top: 1.5rem; margin-top: 5%">
	<div class="container">
		<div class="row" style="margin:0;">
			<div class="col s12 m3 ">
				<div class="row">
					<a  href="{{ route('home') }}" ><img src="{{ asset("images/logos/".$logos->file_image) }}" alt="" class="responsive-img" id="footer-logo"></a>
				</div>
				<div class="row">
					<div class="col s6 offset-s1" id="logos-footer">
		        		<a href="{{ $informacion->facebook }}" target="_blank"><i style="font-size: 20px; color: #727272" class="fab fa-facebook-f"></i></a>
		        		<a href="{{ $informacion->twitter }} " target="_blank"><i style="font-size: 20px; color: #727272" class="fab fa-twitter"></i></a>
					</div>					
				</div>
			</div>
			<div class="col s12 m4">
				<span class="footer-title col s12">SITEMAP</span>
				<div class="col s6 m6 footer-secciones">
					<ul>
						<li><a href=" {{ url('/')}} " >Inicio</a></li>
						<li><a href=" {{ url('/empresa')}} " >Quiénes Somos</a></li>
		                <li><a href=" {{ url('/obras')}} " >Obras</a></li>
					</ul>
				</div>
				<div class="col s6 m6 footer-secciones">
					<ul >
						<li><a href=" {{ url('/productos')}} " >Aluminio</a></li>
						<li><a href=" {{ url('/referentes')}} " >Referentes</a></li>
		                <li><a href=" {{ url('/contacto')}} " >Contacto</a></li>
					</ul>
				</div>
			</div>
			<div class="col s12 m5">
				<span class="footer-title">CONTACTO</span>
				<div class="col s12 footer-secciones">
					<ul>
						<li class="footer-text">
							<div class="row">
								<div class="col s1 footer-icon">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="col s10">
									<a target="_blank" href="https://goo.gl/maps/E6dPmpTJSFm">{{ $informacion->direccion }}</a>
								</div>
							</div>
						</li>
						<li class="footer-text" >
							<div class="row">
								<div class="col s1 footer-icon">
									<i class="fas fa-phone"></i>
								</div>
								<div class="col s10">
									<a href="tel:{{ $informacion->telefono1 }}">{{ $informacion->telefono1 }}</a>
									<br>
									<a href="tel:{{ $informacion->telefono2 }}">{{ $informacion->telefono2 }}</a>
								</div>
							</div>
						</li>
						<li class="footer-text" style="margin-bottom: 10px">
							<div class="row">
								<div class="col s1 footer-icon">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="col s10">
									<a href="mailto:{{ $informacion->email }}">{{ $informacion->email }}</a> 
								</div>
							</div>
						</li>
					</ul>	
				</div>
			</div>
		</div>
	</div>
</footer>



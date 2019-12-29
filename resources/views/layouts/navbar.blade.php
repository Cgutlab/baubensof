

<div id="dropdown2" class="dropdown-content">
    <form method="get" action="{{ action('SeccionHomeController@buscador') }}" style="padding: 5px; width: 300px; height: 50px; overflow: hidden">
        @csrf
        <div class="row">
            <div class="col s12">
                <div class="col s10 m10 l10">
                    <input placeholder="Busca un producto" name="nombre" type="text" class="validate " >
                </div>
                <div class="col s2 m2 l2">
                    <button  style="margin-top: 10px" class="btn-floating btn-small waves-effect waves-light orange darken-3" type='submit' name='btn_login' ><i class="material-icons">search</i></button>
                </div>
            </div>
        </div>
    </form>
</div>

<nav class="nav-extended z-depth-0">
	<div class="nav-wrapper z-depth-0 hide-on-med-and-down " id="header-top">
		<div class="container">
	        <ul id="nav-mobile header-top" class="right hide-on-med-and-down  header-top-ul" style="margin-top: 0.09rem; margin-right: -17%;height: 25px; display: flex; justify-content: center; align-items: center;">         
	            <li style=" background: #FF6600"><a class="dropdown-trigger" href="#!" data-target="dropdown2"><i style="font-size: 18px;"  class="fas fa-search"></i></a></li>
	            <li><a href="{{ $informacion->facebook }}" target="_blank"><i style="font-size: 20px" class="fab fa-facebook-f"></i></a></li>
	            <li><a href="{{ $informacion->twitter }} " target="_blank"><i style="font-size: 20px" class="fab fa-twitter"></i></a></li>
	        </ul>
		</div>
	</div>

    <nav id="header">
        <div class="nav-wrapper">
            <a href="{{ route('home') }}" class="brand-logo">
                <img id="logo" class="img-responsive" src="{{ asset("images/logos/".$logos->file_image) }}" alt="" style="width: 160px">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons" style="color: #3E3F41">menu</i></a>
            </a>
            <ul class=" right hide-on-med-and-down header-secciones">
                <li><a href=" {{ url('/')}} " {{ (\Request::is('/'))?"id=seccion-active":"" }}>INICIO</a></li>
                <li><a href=" {{ url('/empresa')}} " {{ (\Request::is('empresa*'))?"id=seccion-active":"" }}>QUIÉNES SOMOS</a></li>
                <li><a href=" {{ url('/obras')}} " {{ (\Request::is('obras*'))?"id=seccion-active":"" }}>OBRAS</a></li>
                <li><a href=" {{ url('/productos')}} " {{ (\Request::is('productos*'))?"id=seccion-active":"" }}>ALUMINIO</a></li>
                <li><a href=" {{ url('/referentes')}} " {{ (\Request::is('referentes*'))?"id=seccion-active":"" }}>REFERENTES</a></li>
                <li><a href=" {{ url('/contacto')}} " {{ (\Request::is('contacto*'))?"id=seccion-active":"" }}>CONTACTO</a></li>
            </ul>
        </div>
    </nav>
</nav>

<ul class="sidenav" id="mobile-demo">
   <li><a href=" {{ url('/')}} " {{ (\Request::is('/'))?"id=seccion-active":"" }}>INICIO</a></li>
    <li><a href=" {{ url('/empresa')}} " {{ (\Request::is('empresa*'))?"id=seccion-active":"" }}>QUIÉNES SOMOS</a></li>
    <li><a href=" {{ url('/obras')}} " {{ (\Request::is('obras*'))?"id=seccion-active":"" }}>OBRAS</a></li>
    <li><a href=" {{ url('/productos')}} " {{ (\Request::is('productos*'))?"id=seccion-active":"" }}>ALUMINIO</a></li>
    <li><a href=" {{ url('/referentes')}} " {{ (\Request::is('referentes*'))?"id=seccion-active":"" }}>REFERENTES</a></li>
    <li><a href=" {{ url('/contacto')}} " {{ (\Request::is('contacto*'))?"id=seccion-active":"" }}>CONTACTO</a></li>
</ul>
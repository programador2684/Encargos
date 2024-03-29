<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>ENCARGOS CASA DEL CAUCHO</title>
    <link rel="shortcut icon" href="{{ asset("asset/logo/logo.png") }}">
    <link rel="stylesheet" href="{{ asset("asset/css/admin.css") }}">
    <link rel="stylesheet" href="{{ asset("asset/css/list.css") }}">


    <link rel="stylesheet" href="{{ asset("asset/fontawesome-free-5.10.1-web/css/all.css") }}">

</head>

<body>

   
<div id="main-container">
  <!-- Menus -->
  <a id="logo" href="/">
    <img src="{{ asset("asset/logo/logo.png") }}" alt="La casa del caucho">
  </a>
  <div id="top-menu">
  @guest
    <div id="top-menu-right">
      <a href="{{ route('login') }}"><span class="menu-item"><i class="fa fa-user-tie" aria-hidden="true"></i>Login</span></a>
      </div>
    </div>
  @else
    <div id="top-menu-left">
        <a href="{{Route('createClient')}}"><span class="menu-item active">Registrar Cliente</span></a>
        <a href="{{Route('createCharge')}}"><span class="menu-item active">Register Encargo</span></a>
          @if(Auth::user()->role_id_role==100)
            <a href="{{Route('allClients')}}"><span class="menu-item active">Clientes</span></a>
            <a href="#"><span class="menu-item active">Registrar Marca</span></a>
            <a href="#"><span class="menu-item active">Registrar Linea</span></a>
            <a href="#"><span class="menu-item active">Registrar Pieza</span></a>
            <a href="#"><span class="menu-item active">Registrar Marca De Pieza</span></a>
            <a href="{{Route('register')}}"><span class="menu-item active">Registrar Asesor</span></a>
          @else
            @if(Auth::user()->role_id_role==200)
              <a href="{{Route('obtainClientsUser')}}"><span class="menu-item active">Mis Clientes</span></a>
              <a href="#"><span class="menu-item active">Mis Ventas</span></a>
              <a href="#"><span class="menu-item active">Pendientes</span></a>

            @endif
          @endif

    </div>
    <div id="top-menu-right">
      <!--<a href="#"><span class="menu-item"><i class="fa fa-user-tie" aria-hidden="true"></i>Mi Perfil</span></a>-->
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <span class="menu-item">
              <i class="fas fa-power-off" aria-hidden="true"></i>{{Auth::user()->name}} {{Auth::user()->last_name}}
          </span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        </a>
      </div>
    </div>
  @endguest


  <!--end content carrusel-->


  <!-- End Menus -->

  
  <!-- Content Area -->
  <div id="content-area">
    @include('message.flash-message')
    @yield('content')    
  </div>
  <!-- End Content Area -->

</div>
      <script src="{{ asset("asset/js/jquery-3.2.1.min.js") }}"></script>
      <script src="{{ asset("asset/js/scriptApp.js") }}"></script>
              
</body>


</html>
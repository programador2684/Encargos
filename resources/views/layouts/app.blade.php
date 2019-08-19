<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>ENCARGOS CASA DEL CAUCHO</title>
    <link rel="stylesheet" href="{{ asset("asset/css/admin.css") }}">
    <link rel="stylesheet" href="{{ asset("asset/css/career.css") }}">
    <link rel="stylesheet" href="{{ asset("asset/css/careers.css") }}">

    <link rel="stylesheet" href="{{ asset("asset/fontawesome-free-5.10.1-web/css/all.css") }}">

</head>

<body>

   
<div id="main-container">
  <!-- Menus -->
  <a id="logo" href="/">ENCARGOS</a>
  <div id="top-menu">
  @guest
    <div id="top-menu-right">
      <a href="{{ route('login') }}"><span class="menu-item"><i class="fa fa-user-tie" aria-hidden="true"></i>Login</span></a>
        <a href="#"><span class="menu-item"><i class="fas fa-power-off" aria-hidden="true"></i>Register</span></a>
      </div>
    </div>
  @else
    <div id="top-menu-left">
        <a href="client/create"><span class="menu-item active">Register Client</span></a>
          <a href="#"><span class="menu-item active">Register Brand</span></a>
          <a href="#"><span class="menu-item active">Register Liner</span></a>
          <a href="#"><span class="menu-item active">Register Piece</span></a>
          <a href="#"><span class="menu-item active">Register Brand Line</span></a>
          @if(Auth::user()->role_id_role==100)
            <a href="#"><span class="menu-item active">Register Adviser</span></a>
          @endif

    </div>
    <div id="top-menu-right">
      <a href="#"><span class="menu-item"><i class="fa fa-user-tie" aria-hidden="true"></i>Mi Perfil</span></a>
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



  <!-- End Menus -->

  
  <!-- Content Area -->
  <div id="content-area">
    @include('message.flash-message')
    @yield('content')    
  </div>
  <!-- End Content Area -->

</div>

<script src="js/jquery-3.2.1.min.js"></script>
    
</body>


</html>
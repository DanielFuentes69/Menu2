<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Tu Menu</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="senasoft/assets/img/logoSena.png" type="image/x-icon"/>

  <!-- Fonts and icons -->
  <script src="senasoft/assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Open+Sans:300,400,600,700"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['senasoft/assets/css/fonts.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="senasoft/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="senasoft/assets/css/azzara.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="senasoft/assets/css/demo.css">
</head>
<body>
    <!--
      Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red /yellow / black /pink / white "
    -->
    <div class="main-header" data-background-color="orange">
      <!-- Logo Header -->
      <div class="logo-header">

        <a href="#" class="logo">
          <img src="senasoft/assets/img/logo.png" width="40%" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
        <div class="navbar-minimize">
          <button class="btn btn-minimize btn-rounded">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg">

        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div>
            </form>
          </div>
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
              <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                <i class="fa fa-search"></i>
              </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="senasoft/assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg"><img src="senasoft/assets/img/avatar.png" alt="image profile" class="avatar-img rounded"></div>
                    <div class="u-text">
                      <h4>{{ Auth::user()->name }}</h4>
                      <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                  <a class="btn btn-rounded btn-danger btn-sm" href="{{route('logout')}}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                   </form>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

      <div class="sidebar-background"></div>
      <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              <img src="senasoft/assets/img/avatar.png" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                 {{ Auth::user()->name }}
                  <span class="user-level">@foreach(Auth::user()->roles as $role)
                   <p>{{ $role->name }}@endforeach</p></span>
                  <span class="caret"></span>
                </span>
              </a>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a href="{{ url('/home') }}">
                <i class="fas fa-home"></i>
                <p>Inicio</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Paginas</h4>
            </li>
            <li class="nav-item">
              @if (Auth::user()->tieneRole('Admin'))
              <a data-toggle="collapse" href="#base">
                <i class="fas fa-layer-group"></i>
                <p>Gestiones</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ route('categoria.index') }}">
                          <span class="sub-item">Gestion de Categorias</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('menu.index') }}">
                          <span class="sub-item">Gestion de Menus</span>
                        </a>
                      </li>
                  <li>
                    <a href="{{ route('productos.index') }}">
                      <span class="sub-item">Gestion de Productos</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('pedidos.index') }}">
                      <span class="sub-item">Gestion de Pedidos</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('mesas.index') }}">
                      <span class="sub-item">Gestion de Mesas</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('lista.index') }}">
                      <span class="sub-item">Gestion de Lista</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('cliente.index') }}">
                      <span class="sub-item">Gestion de Clientes</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('factura.index') }}">
                      <span class="sub-item">Gestion de Facturas</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('role.index') }}">
                      <span class="sub-item">Gestion de Roles</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('user.index') }}">
                      <span class="sub-item">Gestion de Usuarios</span>
                    </a>
                  </li>
                   @endif
                   @if (Auth::user()->tieneRole('User'))
                  <li>
                    <a href="{{ route('usuario.index') }}">
                      <span class="sub-item">Lista de Usuarios</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('productos.index') }}">
                      <span class="sub-item">Lista de Productos</span>
                    </a>
                  </li>
                  @endif
                </ul>
              </div>
            </li>
            </div>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->

    @yield('content')


  </div>
</div>
<!--   Core JS Files   -->
<script src="senasoft/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="senasoft/assets/js/core/popper.min.js"></script>
<script src="senasoft/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="senasoft/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="senasoft/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="senasoft/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="senasoft/assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="senasoft/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="senasoft/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="senasoft/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="senasoft/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="senasoft/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="senasoft/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="senasoft/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="senasoft/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="senasoft/assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="senasoft/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="senasoft/assets/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="senasoft/assets/js/setting-demo.js"></script>
<script src="senasoft/assets/js/demo.js"></script>

<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('js/codigo.js')}}"></script>
</body>
</html>


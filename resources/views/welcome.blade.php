<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sena Web Php|2020</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="senasoft/img/LogoSena.png">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="senasoft/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="senasoft/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="senasoft/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="senasoft/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="senasoft/assets/vendor/venobox/venobox.css" rel="stylesheet">

  <link href="senasoft/assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="senasoft/assets/css/style.css" rel="stylesheet">

  <!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
  
  <!--Scripts Jquery -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/codigo.js"></script>

    </head>
    <body>
       <header id="header" class="header-transparent">
    <div class="container">
      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a>Inicio</a></h1>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
                      @if (Route::has('login'))

                    @auth
                        <li class="menu-active"><a id="login" href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Inicio</a></li>
                    @else
                        <li><a  href="{{ route('login') }}">Iniciar Sesión</a></li>
                        @if (Route::has('register'))
                        <li><a  href="{{ route('register') }}">Registrarse</a></li>
                        @endif
                    @endif


            @endif

            </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                  <img  id="logo-sena" height="400px" src="senasoft/img/logo.png" >
                  <h1 >Tu Menú</h1>
                      <h2 >Centro Industrial del Diseño y la Manufactura</h2>
    </div>
  </section><!-- End Hero Section -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong>Copyright &copy; 2020 <a href="https://www.instagram.com/yeidy_espindola/">@Yeidy</a> <a href="https://www.instagram.com/danielfuentes69/">@Daniel69</a>.</strong> CIDM/Floridablanca/Santander.
      </div>
    </div>
  </footer><!-- End Footer -->
  <script src="senasoft/assets/vendor/jquery/jquery.min.js"></script>
  <script src="senasoft/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="senasoft/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="senasoft/assets/vendor/php-email-form/validate.js"></script>
  <script src="senasoft/assets/vendor/counterup/counterup.min.js"></script>
  <script src="senasoft/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="senasoft/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="senasoft/assets/vendor/superfish/superfish.min.js"></script>
  <script src="senasoft/assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="senasoft/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="senasoft/assets/vendor/venobox/venobox.min.js"></script>
  <script src="senasoft/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="senasoft/assets/js/main.js"></script>
    </body>
</html>
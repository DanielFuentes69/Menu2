<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sena Web Php|2020</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="senasoft/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="senasoft/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="senasoft/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="senasoft/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="senasoft/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="senasoft/vendor/select2/select2.min.css">
  <link rel="icon" type="image/png" href="senasoft/img/LogoSena.png">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="senasoft/css/util.css">
  <link rel="stylesheet" type="text/css" href="senasoft/css/main.css">
<!--===============================================================================================-->
</head>
<body >
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
          <span class="login100-form-title p-b-55">
            Iniciar sesion
          </span>
                 <form class="wrap-input100 validate-input m-b-16" method="POST" action="{{ route('login') }}" class="user">
                        @csrf
                        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                                <input id="email" type="email" class="input100 form-control-user @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico...">
                               <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-envelope"></span>
            </span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                                <input id="password" type="password" class="input100  form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                 <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      <div class="contact100-form-checkbox m-l-4">
                                    <input class="input-checkbox100"  id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                <label class="label-checkbox100" for="ckb1">Recuérdame</label>
                                </div>
                            <br>
                            <div class="container-login100-form-btn p-t-25">
                                <button  type="submit" class="login100-form-btn">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                               <div class="text-center w-full p-t-115">
                       <span class="txt1">
                         No estoy Registrado?
                        </span>

                    <a class="txt1 bo1 hov1" href="{{ route('register') }}">
                        Registrarme Ahora             
                      </a>
                  </div>
                    </form>
               </div>
    </div>
  </div>
  <!--===============================================================================================-->  
  <script src="senasoft/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="senasoft/vendor/bootstrap/js/popper.js"></script>
  <script src="senasoft/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="senasoft/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="senasoft/js/main.js"></script>

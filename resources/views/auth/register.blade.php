<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="senasoft/images/icons/favicon.ico"/>
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
           Registrar Cuenta
          </span>

                  <form class="wrap-input100 validate-input m-b-16" method="POST" action="{{ route('register') }}">
                         @csrf
                <div>
                    <div  class="wrap-input100 validate-input m-b-16">
                    <input id="name" type="text" class="input100" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingrese su Nombre">
                     <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div  class="wrap-input100 validate-input m-b-16">
                    <input id="email" type="email"  class="input100" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese su Correo Electronico">
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
            </div>
            <div>
                   <div  class="wrap-input100 validate-input m-b-16">
                                <input id="password" type="password" class="input100" name="password" required autocomplete="new-password" placeholder="Ingrese su Contraseña">
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

                            <div class="wrap-input100 validate-input m-b-16">
                                <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>
                        </div>                   
                        <div  class="container-login100-form-btn p-t-25">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Registrar') }}
                                </button>

                        </div>
                    </form>
                        <br>
                        <div>
                       <div class="text-center">
                     <a class="small" href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia Sesión!</a>
                       </div>
                     </div>
                </div>
</body>
</html>
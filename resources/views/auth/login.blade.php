
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset("asset/css/login.css") }}">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
</head>
<body>
	  <div id="container" >
        <div class="login-box">
            <div>
                Inicio
                <span>
                    <br> Sesion
                </span>
            </div>

            <form  action="{{ route('login') }}" method="POST">
                {{csrf_field()}}
                <div>
                    <input type="text" placeholder="Address codigoAsesor" class="form-control @error('codigoAsesor') is-invalid @enderror" name="codigoAsesor" id="codigoAsesor" value="{{ old('codigoAsesor') }}" required autocomplete="codigoAsesor" autofocus >
                    @error('codigoAsesor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <input type="password" placeholder="Password" id="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                
                <div>
                    <input type="submit" value="Login">
                </div>
                

            </form>
        </div>
    </div>
	<script src="http://loadez2000.ezyro.com/www/js/jquery.js"></script>
    <script src="http://loadez2000.ezyro.com/www/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>

                       

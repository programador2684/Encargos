@extends('layouts.app')

@section('content')
<html>
    <head>
        <title>Registrar Asesor</title>
        <link rel="stylesheet" href="{{ asset("asset/css/register.css") }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form action="{{Route('register')}}" method="POST" >
            {{csrf_field()}}
            <div id="formulario"> 
                <h1> Registrar Asesor </h1>
            </div>
            <div id="tabla-formulario">

                <div>
                    <label for="description">Name</label>
                    <input placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" type="text"  id="name"  value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div>
                    <label for="last_name">Last name</label>
                    <input placeholder="Last name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" type="text"  id="last_name"  value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>    
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="identification">Identifaction</label>
                    <input placeholder="Identification" class="form-control @error('identification') is-invalid @enderror"  name="identification" type="number" id="identification"  value="{{ old('identification') }}" required autocomplete="identification" autofocus>                    
                    @error('identification')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="Email">Email</label>
                    <input placeholder="Address email" class="form-control @error('email') is-invalid @enderror" name="email" type="text" id="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" type="password" id="password"  value="{{ old('password') }}" required autocomplete="password" autofocus>
                </div>

            </div>

            <br>
            <button name="registro" type="submit" id="button"> Register </button>

        </form>

    </body>

</html>


    
@endsection

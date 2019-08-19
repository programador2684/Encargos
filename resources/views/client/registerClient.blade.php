@extends('layouts.app')

@section('content')
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="{{ asset("asset/css/register.css") }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form action="{{Route('storeClient')}}" method="POST">
            {{csrf_field()}}
            <div id="formulario"> 
                <h1> Registro Del Cliente </h1>
            </div>
            <div id="tabla-formulario">

                <div>
                    <label for="nombre">Nombre(s) y Apellidos</label>
                    <input placeholder="nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" type="text"  id="nombre"  value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="cedula">Num. De Documento</label>
                    <input placeholder="cedula" class="form-control @error('cedula') is-invalid @enderror"  name="cedula" type="number" id="cedula"  value="{{ old('cedula') }}" required autocomplete="cedula" autofocus>                    
                    @error('cedula')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="correo">Correo Electronico</label>
                    <input placeholder="Direccion de correo electornico" class="form-control @error('correo') is-invalid @enderror" name="correo" type="text" id="correo"  value="{{ old('correo') }}" required autocomplete="correo" autofocus>
                    @error('correo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="telefono">Telefono</label>
                    <input placeholder="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" type="number" id="telefono"  value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
                </div>

            </div>

            <br>
            <button name="registro" type="submit" id="button"> Registrar Cliente </button>

        </form>

    </body>

</html>


    
@endsection

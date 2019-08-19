@extends('layouts.app')
    @section('content')
    <html>
        <head>
            <title>Register</title>
            <link rel="stylesheet" href="{{ asset("asset/css/register.css") }}">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <body>
            <form action="{{url('client/')}}" method="POST" >
                {{csrf_field()}}
                <div id="formulario"> 
                    <h1> Registro de producto(Encargo) </h1>
                </div>
                <div id="tabla-formulario">

                    <div>
                        <label for="cedula"><b>DATOS DEL CIENTE</b></label>
                        @if($client->cedula)
                            <input placeholder="Num. Documento Cliente" class="form-control @error('cedula') is-invalid @enderror" name="cedula" type="number"  id="cedula"  value="{{$client->cedula}}" required autocomplete="cedula" autofocus readonly="true">
                            <input placeholder="Nombre Cliente" class="form-control @error('nombre') is-invalid @enderror" name="nombre" type="String"  id="nombre"  value="{{$client->nombre}}" required autocomplete="nombre" autofocus readonly="true">
                        @else
                            <input placeholder="Num. Documento Cliente" class="form-control @error('searchClient') is-invalid @enderror" name="searchClient" type="number"  id="searchClient"  value="" required autocomplete="searchClient" autofocus>
                            <input placeholder="Nombre del Cliente" class="form-control @error('searchNombre') is-invalid @enderror" name="searchNombre" type="text"  id="searchNombre"  value="" required autocomplete="searchNombre" autofocus readonly>
                        @endif
                        @error('cedula')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="codigoAsesor"><b>CODIGO ASESOR</b></label>
                        @Auth()
                            <input placeholder="Num. Documento Asesor" class="form-control @error('codigoAsesor') is-invalid @enderror" name="codigoAsesor" type="number"  id="codigoAsesor"  value="0{{Auth::user()->codigoAsesor}}" required autocomplete="codigoAsesor" autofocus readonly="true">
                        @endAuth

                        @error('codigoAsesor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="marca"><b>MARCA</b></label>
                        <select name="marca" id="marca" class="form-control @error('marca') is-invalid @enderror" required autocomplete="marca" autofocus>
                            <option value="">Seleccione una marca...</option>
                            @if($brands)
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id_marca}}" name="marca" id="marca">{{$brand->nombre_marca}}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('marca')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="linea"><b>LINEA</b></label>
                        <select name="linea" id="linea" class="form-control @error('linea') is-invalid @enderror" required autocomplete="linea" autofocus>
                            <option value="">Seleccione la linea...</option>
                        </select>
                        @error('linea')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="modelo"><b>MODELO</b></label>
                        <?php $cont = date('Y');?>
                        <select name="modelo" id="modelo" class="form-control @error('modelo') is-invalid @enderror" required autocomplete="modelo" autofocus>
                            <?php while ($cont >= 1950) { ?>
                                <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                            <?php $cont = ($cont-1); } ?>
                        </select>
                            
                        @error('modelo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="pieza"><b>PIEZA</b></label>
                        <select name="pieza" id="pieza" class="form-control @error('pieza') is-invalid @enderror" required autocomplete="pieza" autofocus>
                            <option value="">Seleccione una pieza...</option>
                            @if($pieces)
                                @foreach($pieces as $piece)
                                    <option value="{{$piece->id_pieza}}" name="pieza" id="pieza">{{$piece->nombre_pieza}}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('pieza')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                    <label for="lado"><b>LADO</b></label>
                        <select name="lado" id="lado" class="form-control @error('lado') is-invalid @enderror" required autocomplete="lado" autofocus>
                            <option value="">Seleccione lado...</option>
                            <option value="izquierdo">Izquierdo</option>
                            <option value="derecho">Derecho</option>
                            <option value="trasero">Trasero</option>
                            <option value="delantero">Delantero</option>
                            <option value="n/a">N/A</option>
                        </select>
                        @error('lado')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <br>
                <button name="registro" type="submit" id="button"> Registrar Cliente </button>

            </form>



        </body>

    </html> 
    @endsection
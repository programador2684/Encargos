@extends('layouts.app')
    @section('content')
    <br/>

        <script src="https://use.fontawesome.com/bf66789927.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <div>
            <input type="text" class="form-control float-right" style="width:10 0%" id="search" placeholder="Type to search table...">
        </div>

        
		<table class="listado pull-center" id="tablaClientes">
			<thead>
				<tr>
                    @if(Auth::user()->role_id_role==200)
                        <th><h1>Num. Documento</h1></th>
                        <th><h1>Nombre</h1></th>
                        <th><h1>Correo electronico</h1></th>
                        <th><h1>Telefono</h1></th>
                    @elseif(Auth::user()->role_id_role==100)
                        <th><h1>Num. Documento cliente</h1></th>
                        <th><h1>Asesor Encargado</h1></th>
                        <th><h1>Editar</h1></th>
                        <th><h1>Eliminar</h1></th>
                    @endif
				</tr>
			</thead>
			<tbody>
                @if($clients)
                    @foreach($clients as $client)
                        <tr>
                            @if(@Auth::user()->role_id_role==200)
                                <td>{{$client->cedula}}</td>
                                <td>{{$client->nombre}}</td>
                                <td>{{$client->correo}}</td>
                                <td>{{$client->telefono}}</td>
                            @elseif(@Auth::user()->role_id_role==100)
                                <td>{{$client->cliente_cedula}}</td>
                                <td>0{{$client->codigoAsesor}}</td>                                
                                <td class="iconoEditar"><a href="#"><span class="fa fa-pencil-square-o fa-2x"></span></a></td>	
                                <td class="iconoEliminar"><a href="#"><span class="fa fa-trash fa-2x"></span></a></td>	                                
                            @endif
                        </tr>
                    @endforeach
                @endif
			</tbody>
		</table>       

    @endsection
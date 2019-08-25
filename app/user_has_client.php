<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Query;

class user_has_client extends Model
{
    protected $table='users_has_cliente';
    public $timestamps=false;
    protected $fillable=[
        'users_id','cliente_cedula',
    ];

    public static function obtainClientsUser($id){
        $clientsUser=DB::table('users')
        ->join('users_has_cliente', 'users_has_cliente.users_id', '=', 'users.id')
        ->join('cliente', 'users_has_cliente.cliente_cedula', '=', 'cliente.cedula')
        ->select('cliente.*')
        ->where('users.id', '=', $id)
        ->get();

        return $clientsUser;
    }

    public static function allClients(){
        
        return DB::table('users_has_cliente')
        ->join('users','users.id', '=', 'users_has_cliente.users_id')
        ->join('cliente','cliente_cedula', '=', 'users_has_cliente.cliente_cedula')
        ->distinct()
        ->select('users_has_cliente.*','users.codigoAsesor')
        ->get();

    
    }
}

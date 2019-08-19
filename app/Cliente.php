<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cliente extends Model
{
    protected $table='cliente';
    public $timestamps=false;
    protected $fillable=[
        'cedula','nombre','correo','telefono',
    ];

    public static function listarClientes(){
        return DB::table('cliente')->get();
    }

    public static function searchCliente($id){
        return DB::table('cliente')->where('cedula','=',$id)->get();
    }

}

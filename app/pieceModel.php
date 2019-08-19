<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pieceModel extends Model
{
    protected $table='pieza';
    public $timestamps=false;
    protected $fillable=[
        'id_pieza','nombre_pieza','producto_id_producto',
    ];

    public static function pieces(){
        return DB::table('pieza')->get();
    }
}

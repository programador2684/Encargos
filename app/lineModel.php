<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lineModel extends Model
{
    protected $table='linea';
    public $timestamps=false;
    protected $fillable=[
        'id_linea', 'nombre_linea',
    ];

    public static function linesBrand($id){
        $lines= DB::table('linea')
        ->join('marca_has_linea', 'marca_has_linea.linea_id_linea', '=', 'linea.id_linea')
        ->join('marca', 'marca_has_linea.marca_id_marca', '=', 'marca.id_marca')
        ->select('linea.*')
        ->where('marca.id_marca', '=', $id)
        ->get();
        return $lines;
    }
}

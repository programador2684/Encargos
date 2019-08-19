<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChargeModel extends Model
{
    protected $table="producto";
    public $timestamps=false;
    protected $fillable=[
        'id_producto','marca','linea','modelo','lado','pieza',
    ];

    public static function charges(){
        return DB::table('producto')->get();
    }
}

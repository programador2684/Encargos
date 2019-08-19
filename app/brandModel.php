<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class brandModel extends Model
{
    protected $table ='marca';
    public $timestamps =false;
    protected $fillable=[
        'id_marca','nombre_marca',
    ];

    public static function brands(){
        return DB::table('marca')->get();
    }

}

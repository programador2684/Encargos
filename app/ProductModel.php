<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table ='produto';
    public $timestamps =false;
    protected $fillable=[
        'id_producto','marca','linea','modelo','lado','pieza',
    ];
}

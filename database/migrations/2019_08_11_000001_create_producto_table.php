<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'producto';

    /**
     * Run the migrations.
     * @table producto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_producto')->unsigned();
            $table->string('marca', 45);
            $table->string('linea', 45);
            $table->string('modelo', 45);
            $table->string('lado', 45);
            $table->string('pieza', 45);

            $table->unique(["id_producto"], 'id_producto_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}

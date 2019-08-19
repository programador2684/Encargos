<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaPiezaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'marca_pieza';

    /**
     * Run the migrations.
     * @table marca_pieza
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_marca_pieza')->unsigned();
            $table->string('nombre_marca', 45);

            $table->unique(["id_marca_pieza"], 'id_marca_pieza_UNIQUE');

            $table->unique(["nombre_marca"], 'nombre_marca_UNIQUE');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiezaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pieza';

    /**
     * Run the migrations.
     * @table pieza
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_pieza')->unsigned();
            $table->string('nombre_pieza', 45);
            $table->unsignedInteger('producto_id_producto')->nullable();

            $table->index(["producto_id_producto"], 'fk_pieza_producto1_idx');

            $table->unique(["id_pieza"], 'id_pieza_UNIQUE');

            $table->unique(["nombre_pieza"], 'nombre_pieza_UNIQUE');


            $table->foreign('producto_id_producto', 'fk_pieza_producto1_idx')
                ->references('id_producto')->on('producto')
                ->onDelete('no action')
                ->onUpdate('no action');
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

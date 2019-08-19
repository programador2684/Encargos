<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaHasLineaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'marca_has_linea';

    /**
     * Run the migrations.
     * @table marca_has_linea
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('marca_id_marca');
            $table->unsignedInteger('linea_id_linea');

            $table->index(["linea_id_linea"], 'fk_marca_has_linea_linea1_idx');

            $table->index(["marca_id_marca"], 'fk_marca_has_linea_marca1_idx');


            $table->foreign('linea_id_linea', 'fk_marca_has_linea_linea1_idx')
                ->references('id_linea')->on('linea')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('marca_id_marca', 'fk_marca_has_linea_marca1_idx')
                ->references('id_marca')->on('marca')
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

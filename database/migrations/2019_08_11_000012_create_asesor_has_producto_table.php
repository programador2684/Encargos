<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorHasProductoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'asesor_has_producto';

    /**
     * Run the migrations.
     * @table asesor_has_producto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('asesor_idasesor')->unsigned();
            $table->integer('producto_id_producto')->unsigned();

            $table->index(["asesor_idasesor"], 'fk_asesor_has_producto_asesor1_idx');

            $table->index(["producto_id_producto"], 'fk_asesor_has_producto_producto1_idx');


            $table->foreign('asesor_idasesor', 'asesor_has_producto_asesor_idasesor')
                ->references('idasesor')->on('asesor')
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorHasClienteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'asesor_has_cliente';

    /**
     * Run the migrations.
     * @table asesor_has_cliente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('asesor_idasesor')->unsigned();
            $table->integer('cliente_cedula')->unsigned();

            $table->index(["asesor_idasesor"], 'fk_asesor_has_cliente_asesor_idx');

            $table->index(["cliente_cedula"], 'fk_asesor_has_cliente_cliente1_idx');


            $table->foreign('asesor_idasesor', 'asesor_has_cliente_asesor_idasesor')
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

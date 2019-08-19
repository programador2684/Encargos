<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'venta';

    /**
     * Run the migrations.
     * @table venta
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idventa');
            $table->date('fecha');
            $table->double('valor_total');
            $table->unsignedInteger('cliente_cedula');
            $table->unsignedInteger('users_id');

            $table->index(["users_id"], 'fk_venta_users1_idx');

            $table->index(["cliente_cedula"], 'fk_venta_cliente1_idx');

            $table->unique(["idventa"], 'idventa_UNIQUE');


            $table->foreign('cliente_cedula', 'fk_venta_cliente1_idx')
                ->references('cedula')->on('cliente')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_venta_users1_idx')
                ->references('id')->on('users')
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoHasVentaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'producto_has_venta';

    /**
     * Run the migrations.
     * @table producto_has_venta
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('producto_id_producto')->unsigned();
            $table->unsignedInteger('venta_idventa');
            $table->unsignedInteger('venta_cliente_cedula');
            $table->unsignedInteger('venta_users_id');

            $table->index(["producto_id_producto"], 'fk_producto_has_venta_producto1_idx');

            $table->index(["venta_idventa", "venta_cliente_cedula", "venta_users_id"], 'fk_producto_has_venta_venta1_idx');


            $table->foreign('producto_id_producto', 'producto_has_venta_producto_id_producto')
                ->references('id_producto')->on('producto')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('venta_idventa', 'fk_producto_has_venta_venta1_idx')
                ->references('idventa')->on('venta')
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

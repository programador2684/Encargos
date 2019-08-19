<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoHasMarca1Table extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'producto_has_marca1';

    /**
     * Run the migrations.
     * @table producto_has_marca1
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('producto_id_producto');
            $table->unsignedInteger('marca_id_marca');

            $table->index(["producto_id_producto"], 'fk_producto_has_marca1_producto1_idx');

            $table->index(["marca_id_marca"], 'fk_producto_has_marca1_marca1_idx');


            $table->foreign('marca_id_marca', 'fk_producto_has_marca1_marca1_idx')
                ->references('id_marca')->on('marca')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('producto_id_producto', 'fk_producto_has_marca1_producto1_idx')
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoHasMarcaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'producto_has_marca';

    /**
     * Run the migrations.
     * @table producto_has_marca
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('producto_id_producto')->unsigned();
            $table->integer('marca_id_marca')->unsigned();

            $table->index(["producto_id_producto"], 'fk_producto_has_marca_producto1_idx');

            $table->index(["marca_id_marca"], 'fk_producto_has_marca_marca1_idx');


            $table->foreign('marca_id_marca', 'fk_producto_has_marca_marca1_idx')
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

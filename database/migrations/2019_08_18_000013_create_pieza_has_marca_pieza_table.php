<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiezaHasMarcaPiezaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pieza_has_marca_pieza';

    /**
     * Run the migrations.
     * @table pieza_has_marca_pieza
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('pieza_id_pieza');
            $table->unsignedInteger('marca_pieza_id_marca_pieza');

            $table->index(["marca_pieza_id_marca_pieza"], 'fk_pieza_has_marca_pieza_marca_pieza1_idx');

            $table->index(["pieza_id_pieza"], 'fk_pieza_has_marca_pieza_pieza1_idx');


            $table->foreign('marca_pieza_id_marca_pieza', 'fk_pieza_has_marca_pieza_marca_pieza1_idx')
                ->references('id_marca_pieza')->on('marca_pieza')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('pieza_id_pieza', 'fk_pieza_has_marca_pieza_pieza1_idx')
                ->references('id_pieza')->on('pieza')
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

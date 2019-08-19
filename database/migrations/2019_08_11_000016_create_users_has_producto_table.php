<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHasProductoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_has_producto';

    /**
     * Run the migrations.
     * @table users_has_producto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('users_idusers')->unsigned();
            $table->unsignedInteger('producto_id_producto');

            $table->index(["producto_id_producto"], 'fk_users_has_producto_producto1_idx');

            $table->index(["users_idusers"], 'fk_users_has_producto_users1_idx');


            $table->foreign('producto_id_producto', 'fk_users_has_producto_producto1_idx')
                ->references('id_producto')->on('producto')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_idusers', 'users_has_producto_users_idusers')
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

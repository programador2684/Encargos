<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHasClienteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_has_cliente';

    /**
     * Run the migrations.
     * @table users_has_cliente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('users_id')->unsigned();
            $table->integer('cliente_cedula')->unsigned();

            $table->index(["users_id"], 'fk_users_has_cliente_users_idx');

            $table->index(["cliente_cedula"], 'fk_users_has_cliente_cliente1_idx');


            $table->foreign('cliente_cedula', 'fk_users_has_cliente_cliente1_idx')
                ->references('cedula')->on('cliente')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'users_has_cliente_users_id')
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

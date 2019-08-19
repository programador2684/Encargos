<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert(array(
            'id_role'=>100,
            'name_role'=>'admin',
            'description'=>'Administrador del sistema',
        ));

        DB::table('role')->insert(array(
            'id_role'=>200,
            'name_role'=>'user',
            'description'=>'Usuario del sistema',
        ));

    }
}

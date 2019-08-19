<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'id'=>9770804,
            'name'=>'Francisco Javier Rodas',
            'email'=>'programador2684@gmail.com',
            'password'=>bcrypt('francisco12345'),
            'codigoAsesor'=>19,
            'telefono'=>'3177728968',
            'role_id_role'=>100,
        ));

        DB::table('users')->insert(array(
            'id'=>1094944029,
            'name'=>'Bryan Henao Hernandez',
            'email'=>'bryanhenao09@gmail.com',
            'password'=>bcrypt('bryanhenao'),
            'codigoAsesor'=>11,
            'telefono'=>'3209700443',
            'role_id_role'=>200,
        ));
    }
}

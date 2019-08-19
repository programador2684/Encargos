<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\brandModel;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca')->insert(array(
            'id_marca'=>1,
            'nombre_marca'=>'chevrolet',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>2,
            'nombre_marca'=>'Mazda',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>3,
            'nombre_marca'=>'renault',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>4,
            'nombre_marca'=>'kia',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>5,
            'nombre_marca'=>'hyundai',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>6,
            'nombre_marca'=>'nissan',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>7,
            'nombre_marca'=>'honda',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>8,
            'nombre_marca'=>'citroén',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>9,
            'nombre_marca'=>'daihatsu',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>10,
            'nombre_marca'=>'dodge',
        ));

        DB::table('marca')->insert(array(
            'id_marca'=>11,
            'nombre_marca'=>'fiat'
        ));
        
    }
}

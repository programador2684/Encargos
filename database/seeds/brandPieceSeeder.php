<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\brandPieceModel;

class brandPieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca_pieza')->insert(array(
            'id_marca_pieza'=>1,
            'nombre_marca'=>'depo',
        ));

        DB::table('marca_pieza')->insert(array(
            'id_marca_pieza'=>2,
            'nombre_marca'=>'nikko',
        ));

        DB::table('marca_pieza')->insert(array(
            'id_marca_pieza'=>3,
            'nombre_marca'=>'okla',
        ));

        DB::table('marca_pieza')->insert(array(
            'id_marca_pieza'=>4,
            'nombre_marca'=>'ips',
        ));



    }
}

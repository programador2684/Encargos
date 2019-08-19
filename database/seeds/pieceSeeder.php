<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\pieceModel;

class pieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pieza')->insert(array(
            'id_pieza'=>1,
            'nombre_pieza'=>'farola',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>2,
            'nombre_pieza'=>'persiana',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>3,
            'nombre_pieza'=>'bomper_del',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>4,
            'nombre_pieza'=>'lamp_dir',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>5,
            'nombre_pieza'=>'lamp_bomper',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>6,
            'nombre_pieza'=>'exploradora',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>7,
            'nombre_pieza'=>'lamp_lateral',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>8,
            'nombre_pieza'=>'g/fango_llanta',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>9,
            'nombre_pieza'=>'lamp_stop',
        ));

        DB::table('pieza')->insert(array(
            'id_pieza'=>10,
            'nombre_pieza'=>'bomper_tras',
        ));
    }
}

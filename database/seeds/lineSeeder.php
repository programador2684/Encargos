<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\lineModel;

class lineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linea')->insert(array(
            'id_linea'=>100,
            'nombre_linea'=>'sprint',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>101,
            'nombre_linea'=>'corsa',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>200,
            'nombre_linea'=>323,
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>201,
            'nombre_linea'=>'allegro', 
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>300,
            'nombre_linea'=>'sandero',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>301,
            'nombre_linea'=>'megane',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>400,
            'nombre_linea'=>'cerato',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>401,
            'nombre_linea'=>'sportage',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>500,
            'nombre_linea'=>'atos',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>501,
            'nombre_linea'=>'verna',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>600,
            'nombre_linea'=>'march',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>601,
            'nombre_linea'=>'tida',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>700,
            'nombre_linea'=>'civic',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>701,
            'nombre_linea'=>'neo',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>800,
            'nombre_linea'=>'all',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>801,
            'nombre_linea'=>'new',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>900,
            'nombre_linea'=>'nomada',
        ));

        DB::table('linea')->insert(array(
            'id_linea'=>901,
            'nombre_linea'=>'terius',
        ));
    }
}

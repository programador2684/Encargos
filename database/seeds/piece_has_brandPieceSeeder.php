<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\piece_has_brandPiece;

class piece_has_brandPieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pieza_has_marca_pieza')->insert(array(
            'pieza_id_pieza'=>1,
            'marca_pieza_id_marca_pieza'=>'1',
        ));

        DB::table('pieza_has_marca_pieza')->insert(array(
            'pieza_id_pieza'=>2,
            'marca_pieza_id_marca_pieza'=>'2',
        ));

        DB::table('pieza_has_marca_pieza')->insert(array(
            'pieza_id_pieza'=>3,
            'marca_pieza_id_marca_pieza'=>'3',
        ));

        DB::table('pieza_has_marca_pieza')->insert(array(
            'pieza_id_pieza'=>4,
            'marca_pieza_id_marca_pieza'=>'4',
        ));
    }
}

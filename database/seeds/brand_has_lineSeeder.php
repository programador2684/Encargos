<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\brand_has_lineModel;

class brand_has_lineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marca_has_line')->string(array(
            'marca_id_marca'=>1,
            'linea_id_linea'=>100,
        ));

        DB::table('marca_has_line')->string(array(
            'marca_id_marca'=>2,
            'linea_id_linea'=>200,
        ));

        DB::table('marca_has_line')->string(array(
            'marca_id_marca'=>3,
            'linea_id_linea'=>300,
        ));

        DB::table('marca_has_line')->string(array(
            'marca_id_marca'=>4,
            'linea_id_linea'=>400,
        ));
    }
}

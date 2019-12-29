<?php

use Illuminate\Database\Seeder;

class FamiliasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('familias')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'file_image'  => 'familias__familia1.png',
				'nombre'      => 'Línea Rotonda',
				'orden'       => 'aa',
			),
			1 => 
			array (
				'id'          => 2,
				'file_image'  => 'familias__familia2.png',
				'nombre'      => 'Línea Moderna',
				'orden'       => 'bb',
			),
			2 => 
			array (
				'id'          => 3,
				'file_image'  => 'familias__familia3.png',
				'nombre'      => 'Línea Herrero',
				'orden'       => 'cc',
			),
			3 => 
			array (
				'id'          => 4,
				'file_image'  => 'familias__familia4.png',
				'nombre'      => 'Línea A30 New',
				'orden'       => 'dd',
			),
		));
    }
}

<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('sliders')->insert(array (
			0 => 
			array (
				'id'         => 1,
				'file_image' => 'sliders__slider1.png',
				'seccion'    => 'home',
				'titulo'     => 'SERVICIOS INTEGRALES EN CONSTRUCCIÓN',
				'orden'      => 'aa',
			),
			1 => 
			array (
				'id'         => 2,
				'file_image' => 'sliders__slider2.png',
				'seccion'    => 'empresa',
				'titulo'     => 'INGENIERÍA DE PRECISIÓN',
				'orden'      => 'bb',
			),
		));
    }
}

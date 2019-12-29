<?php

use Illuminate\Database\Seeder;

class GaleriaObrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('galeria_obras')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'orden'       => 'aa',
				'file_image'  => 'galeria_obras__obraspublicas1.png',
				'obra_id' => 4,
			),
			2 => 
			array (
				'id'          => 2,
				'file_image'  => 'galeria_obras__obraspublicas2.png',
				'orden'       => 'bb',
				'obra_id' => 4,
			),
			3 => 
			array (
				'id'          => 3,
				'file_image'  => 'galeria_obras__obraspublicas3.png',
				'orden'       => 'cc',
				'obra_id' => 4,
			),
		));
    
    }
}


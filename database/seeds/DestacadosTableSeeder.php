<?php

use Illuminate\Database\Seeder;

class DestacadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('destacados')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'file_image'  => 'destacados__seccion1.png',
				'orden'       => 'aa',
				'metadato_id' => 1,
			),
			2 => 
			array (
				'id'          => 2,
				'file_image'  => 'destacados__seccion2.png',
				'orden'       => 'bb',
				'metadato_id' => 2,
			),
			3 => 
			array (
				'id'          => 3,
				'file_image'  => 'destacados__seccion3.png',
				'orden'       => 'cc',
				'metadato_id' => 3,
			),
		));
    
    }
}

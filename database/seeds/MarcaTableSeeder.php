<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('marcas')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'file_image'  => 'marcas__marca1.png',
				'nombre'      => 'Aluar',
				'orden'       => 'aa',
			),
			1 => 
			array (
				'id'          => 2,
				'file_image'  => 'marcas__marca2.png',
				'nombre'      => 'Flamia',
				'orden'       => 'bb',
			),
			2 => 
			array (
				'id'          => 3,
				'file_image'  => 'marcas__marca3.png',
				'nombre'      => 'Vasa',
				'orden'       => 'cc',
			),
			3 => 
			array (
				'id'          => 4,
				'file_image'  => 'marcas__marca4.png',
				'nombre'      => 'Ekoglass',
				'orden'       => 'dd',
			),
		));
    }
}

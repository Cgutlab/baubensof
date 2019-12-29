<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('productos')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'file_image'  => 'productos_producto1.png',
				'nombre'      => 'Línea Rotonda',
				'keyword'	  => 'Rotonda',
				'descripcion' => 'descripcion',
				'orden'       => 'aa',
			),
			1 => 
			array (
				'id'          => 2,
				'file_image'  => 'productos_producto2.png',
				'nombre'      => 'Línea Moderna',
				'keyword'	  => 'Moderna',
				'descripcion' => 'descripcion',
				'orden'       => 'bb',
			),
			2 => 
			array (
				'id'          => 3,
				'file_image'  => 'productos_producto3.png',
				'nombre'      => 'Línea Herrero',
				'keyword'	  => 'Herrero',
				'descripcion' => 'descripcion',
				'orden'       => 'cc',
			),
			3 => 
			array (
				'id'          => 4,
				'file_image'  => 'productos_producto4.png',
				'nombre'      => 'Línea A30 New',
				'keyword'	  => 'A30'	,
				'descripcion' => 'descripcion',
				'orden'       => 'dd',
			),
		));
    }
}
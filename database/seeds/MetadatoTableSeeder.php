<?php

use Illuminate\Database\Seeder;

class MetadatoTableSeeder extends Seeder
{ 
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('metadatos')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'seccion'     => 'Home',
				'keyword'     => 'home',
				'url'         => '/',
				'descripcion' => 'Página principal',
			),
			1 => 
			array (
				'id'         => 2,
				'seccion'     => 'Quiénes Somos',
				'keyword'     => 'quienes somos',
				'url'         => '/empresa',
				'descripcion' => 'Descripción de la empresa',
			),
			2 => 
			array (
				'id'         => 3,
				'seccion'     => 'Obras',
				'keyword'     => 'obras',
				'url'         => '/obras',
				'descripcion' => 'Catálogo de Obras',
			),
			3 => 
			array (
				'id'         => 4,
				'seccion'     => 'Aluminio',
				'keyword'     => 'aluminio',
				'url'         => '/productos',
				'descripcion' => 'Catálogo de Productos',
			),
			4 => 
			array (
				'id'         => 5,
				'seccion'     => 'Referentes',
				'keyword'     => 'referentes',
				'url'         => '/referentes',
				'descripcion' => 'Listado de clientes',
			),
			5 => 
			array (
				'id'         => 6,
				'seccion'     => 'Contacto',
				'keyword'     => 'contacto',
				'url'         => '/contacto',
				'descripcion' => 'Zona de contacto',
			),
		));
    }
}

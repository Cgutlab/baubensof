<?php

use Illuminate\Database\Seeder;

class ObrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('obras')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'file_image'  => 'obras__obra1.png',
				'nombre'      => 'Civiles',
				'orden'       => 'aa',
				'galeria' 	  => '0',
				'descripcion' => 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.',
			),
			1 => 
			array (
				'id'          => 2,
				'file_image'  => 'obras__obra2.png',
				'nombre'      => 'Industriales',
				'orden'       => 'bb',
				'galeria' 	  => '0',
				'descripcion' => 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.',
			),
			2 => 
			array (
				'id'          => 3,
				'file_image'  => 'obras__obra3.png',
				'nombre'      => 'Privadas',
				'orden'       => 'cc',
				'galeria' 	  => '0',
				'descripcion' => 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.',
			),
			3 => 
			array (
				'id'          => 4,
				'file_image'  => 'obras__obra4.png',
				'nombre'      => 'Escuelas',
				'orden'       => 'dd',
				'galeria'	  => '1',
				'descripcion' => 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.',
			),
			4 => 
			array (
				'id'          => 5,
				'file_image'  => 'obras__obra5.png',
				'nombre'      => 'Sanitarias',
				'orden'       => 'ee',
				'galeria' 	  => '0',
				'descripcion' => 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.',
			),
			5 => 
			array (
				'id'          => 6,
				'file_image'  => 'obras__obra6.png',
				'nombre'      => 'Hospitales',
				'orden'       => 'ff',
				'galeria' 	  => '0',
				'descripcion' => 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.',
			),
		));
    }
}

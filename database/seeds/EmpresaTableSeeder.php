<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('empresas')->insert(array (
			0 => 
			array (
				'id'          => 1,
				'file_image'  => 'empresa.png',
				'titulo1'     => 'BAUBENSOF',
				'titulo2'     => 'NUESTRA EMPRESA',
				'descripcion' => '<p>Somos un equipo de profesionales dedicados a servicios integrales en el &aacute;rea de la construcci&oacute;n.</p> <p>&nbsp;</p> <p><strong>OBJETIVOS</strong></p> <p>Nuestro objetivo es brindar un servicio integral en el &aacute;rea de construcci&oacute;n. Nos especializamos en la realizaci&oacute;n de toda clase de obras, ya sea por contrataci&oacute;n directa, o por licitaci&oacute;n p&uacute;blica o privada. El proyecto, construcci&oacute;n, fabricaci&oacute;n, instalaci&oacute;n y montaje, en su totalidad o partes de sus obras, van a estar resueltos desde BAUBENSOFT SRL. Tambi&eacute;n nos dedicamos a la fabricaci&oacute;n de aberturas de aluminio para todo tipo de construcci&oacute;n, con toda las l&iacute;neas disponibles del mercado moderno.</p>',
				'slogan'      => 'Diseño, proyección y construcción de espacios públicos, privados, civiles e industriales.',
			),
		));
    }
}



         
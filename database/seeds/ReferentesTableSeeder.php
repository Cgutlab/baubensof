<?php

use Illuminate\Database\Seeder;

class ReferentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('referentes')->insert(array (
			0 => 
			array (
				'id'        => 1,
				'empresa'   => 'ACUMULADORES ELÉCTRICOS S.R.L ',
				'encargado' => 'Ing. Osvaldo Carpinelli',
				'orden'     => 'aa',
			),

			1 => 
			array (
				'id'        => 2,
				'empresa'   => 'ARENERA PUERTO NUEVO S.A.',
				'encargado' => 'Sr. Oscar Richetti/ Juan Carlos Santarelli',
				'orden'     => 'bb',
			),

			2 => 
			array (
				'id'        => 3,
				'empresa'   => 'BSM TRANSPORTES S.R.L.',
				'encargado' => 'Ing. Carlos Sobrero',
				'orden'     => 'cc',
			),

			3 => 
			array (
				'id'        => 4,
				'empresa'   => 'CERVECERIA Y MALTERIA QUILMES S.A.I.C.A. y G.',
				'encargado' => 'Ing. Juan Carlos Romano',
				'orden'     => 'dd',
			),

			4 => 
			array (
				'id'        => 5,
				'empresa'   => 'DESDELSUR S.A',
				'encargado' => 'Guillermo Macera',
				'orden'     => 'ee',
			),

			5 => 
			array (
				'id'        => 6,
				'empresa'   => 'ANDROVIAL S.A.',
				'encargado' => 'Sr. Osvaldo Andronovich',
				'orden'     => 'ff',
			),

			6 => 
			array (
				'id'        => 7,
				'empresa'   => 'AVÍCOLA CAPITAN SARMIENTO S.A.',
				'encargado' => 'Sr. Julio Fallet',
				'orden'     => 'gg',
			),

			7 => 
			array (
				'id'        => 8,
				'empresa'   => 'CAMPO GRANDE CLUB DE CAMPO',
				'encargado' => 'Arq. Sergio Cruz. Ruta 25 Matheu . Bs. As',
				'orden'     => 'hh',
			),

			8 => 
			array (
				'id'        => 9,
				'empresa'   => 'COMPAÑÍA AMERICANA DE MULTISERVICIOS S.R.L. ',
				'encargado' => 'Ing. Ismael Alvarez',
				'orden'     => 'ii',
			),

			9 => 
			array (
				'id'        => 10,
				'empresa'   => 'ENOBRA S.A.',
				'encargado' => 'Ing. Basile',
				'orden'     => 'jj',
			),
		));
    }
}

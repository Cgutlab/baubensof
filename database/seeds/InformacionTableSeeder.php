<?php

use Illuminate\Database\Seeder;

class InformacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('informacions')->insert(array (
			0 => 
			array (
				'id'        => 1,
				'telefono1' => '0221 4243528',
				'telefono2' => '0221 15 5799879',
				'direccion' => 'Calle 36 nº 1019, 1º B -entre 15 y 16- La Plata, Buenos Aires',
				'email'     => 'baubensofsrl@gmail.com',
				'twitter'   => 'https://twitter.com',
				'facebook'  => 'https://facebook.com',
			),
		));
    }
}


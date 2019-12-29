<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MetadatoTableSeeder::class);
        $this->call(LogosTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(InformacionTableSeeder::class);
        $this->call(ReferentesTableSeeder::class);
        $this->call(EmpresaTableSeeder::class);
        $this->call(ObrasTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(DestacadosTableSeeder::class);
        $this->call(GaleriaObrasTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\seeds\NivelSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(RoleSeed::class);
        //$this->call(UserSeed::class);
        //$this->call(PaisesSeeder::class);
        //$this->call(EntidadFederativaSeeder::class);
        //$this->call(MunicipioSeeder::class);
        //$this->call(OrganigramaSeeder::class);
        //$this->call(PreparatoriaSeeder::class);
        //$this->call(Preparatoria2Seeder::class);
        //$this->call(CarreraSeeder::class);
        //$this->call(Preparatoria3Seeder::class);
        //$this->call(NivelSeeder::class);
        $this->call(PeriodosEscolares::class);
    }
}

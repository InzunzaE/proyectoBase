<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\MateriaSeeder;
use Database\Seeders\NoticiaSeeder;
use Database\Seeders\AlumnoMateriaSeeder;
use Database\Seeders\TipoEmpleadoSeeder;
use Database\Seeders\EstadoSeeder;
use Database\Seeders\OficiosSeeder;
use Database\Seeders\EmpleadosSeeder;
use Database\Seeders\OficioEmpleadosSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AlumnoSeeder::class);
        $this->call(NoticiaSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(AlumnoMateriaSeeder::class);
        $this->call(TipoEmpleadoSeeder::class);
        $this->call(OficiosSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(OficioEmpleadosSeeder::class);


    }
}

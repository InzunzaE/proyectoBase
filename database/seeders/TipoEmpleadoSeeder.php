<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoEmpleado;

class TipoEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoEmpleado::create([ 'nombre'=>'Docente']);
        TipoEmpleado::create([ 'nombre'=>'Administrativo']);
        TipoEmpleado::create([ 'nombre'=>'Otros']);
  }
}
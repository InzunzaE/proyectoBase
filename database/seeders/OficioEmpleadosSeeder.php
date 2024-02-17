<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OficioEmpleados;

class OficioEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OficioEmpleados::create([ 
            'empleado_id'=>1, 
            'oficio_id'=>2,
            'estado_id'=>4,
        
        ]);
    }
}

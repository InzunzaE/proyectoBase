<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oficio;

class OficiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oficio::create([ 
            'folio'=>'220(SD-CET-107) 1559/2023', 
            'lugar'=>'Culiacán, Sinaloa',
            'fecha'=>'2024-02-14',
            'cuerpo'=>'Eitan pendejo',
            'asunto'=>'COMISIÓN REUNIÓN DE TUTORES',
            'foto_firma'=>'foto.png', 
            'oficio_pdf'=>'oficio.pdf' 

        ]);

         Oficio::create([ 
            'folio'=>'CIR-CET-DOC/2024-002', 
            'lugar'=>'Culiacán, Sinaloa',
            'fecha'=>'2024-02-16',
            'cuerpo'=>'Eitan pendejo x2',
            'asunto'=>'ENTREGA DE CROQUIS DE AULAS Y TALLERES',
            'foto_firma'=>'foto.png', 
            'oficio_pdf'=>'oficio.pdf' 
        ]);

       
        
    }
}

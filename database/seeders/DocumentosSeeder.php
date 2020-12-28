<?php

namespace Database\Seeders;

use App\Models\Modulos\Parametrizacion\Documentos\Documentos;
use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documentos::create([
            'descripcion' => 'REGISTRO DE ANESTESIA',
            'status' => '1',
        ]);
        Documentos::create([
            'descripcion' => 'VALORACION PREANESTESICA',
            'status' => '1',
        ]);
        Documentos::create([
            'descripcion' => 'LISTA DE VERIFICACION',
            'status' => '1',
        ]);
    }
}

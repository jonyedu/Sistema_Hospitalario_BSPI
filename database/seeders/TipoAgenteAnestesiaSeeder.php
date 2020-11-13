<?php

namespace Database\Seeders;

use App\Models\Modulos\Cirugia\TipoAgente\TipoAgente;
use Illuminate\Database\Seeder;

class TipoAgenteAnestesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAgente::create([
            'descripcion' => 'Agentes',
            'name_system' => 'agente',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        TipoAgente::create([
            'descripcion' => 'Posiciones',
            'name_system' => 'posicion',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
    }
}

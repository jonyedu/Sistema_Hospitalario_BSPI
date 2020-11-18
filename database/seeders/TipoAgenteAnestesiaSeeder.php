<?php

namespace Database\Seeders;

use App\Models\Modulos\Cirugia\RegistroAnestesico\TipoAgenteAnestesia;
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
        TipoAgenteAnestesia::create([
            'descripcion' => 'Agentes',
            'name_system' => 'agente',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        TipoAgenteAnestesia::create([
            'descripcion' => 'Posiciones',
            'name_system' => 'posicion',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
    }
}

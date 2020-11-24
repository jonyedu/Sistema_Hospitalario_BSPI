<?php

namespace Database\Seeders;

use App\Models\Modulos\Cirugia\RegistroAnestesico\Infusiones;
use Illuminate\Database\Seeder;

class InfusionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Infusiones::create([
            'descripcion' => 'DEXTROSAS',
            'name_system' => 'DEXTROSAS',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        Infusiones::create([
            'descripcion' => 'SANGRE',
            'name_system' => 'SANGRE',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        Infusiones::create([
            'descripcion' => 'RINGER',
            'name_system' => 'RINGER',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        Infusiones::create([
            'descripcion' => 'EXPANSIONES',
            'name_system' => 'EXPANSIONES',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        Infusiones::create([
            'descripcion' => 'SOLUCIONES_SALINAS',
            'name_system' => 'SOLUCIONES_SALINAS',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        Infusiones::create([
            'descripcion' => 'TOTAL',
            'name_system' => 'TOTAL',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
    }
}

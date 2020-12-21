<?php

namespace Database\Seeders;

use App\Models\Modulos\Parametrizacion\DetalleTiempo\DetalleTiempo;
use Illuminate\Database\Seeder;

class DetalleTiempoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detallesTiempos = DetalleTiempo::where('status', 1)->get();

        if (sizeOf($detallesTiempos) > 0) {
            foreach ($detallesTiempos as $detalleTiempo) {
                if ($detalleTiempo->descripcion != 'Uso de Quirófano') {
                    DetalleTiempo::create([
                        'descripcion' => 'Uso de Quirófano',
                        'usu_created_update' => 1,
                        'pcip' => '192.168.1.196',
                        'status' => '1',
                    ]);
                }
                if ($detalleTiempo->descripcion != 'Ingreso de Anestesiólogo') {
                    DetalleTiempo::create([
                        'descripcion' => 'Ingreso de Anestesiólogo',
                        'usu_created_update' => 1,
                        'pcip' => '192.168.1.196',
                        'status' => '1',
                    ]);
                }
                if ($detalleTiempo->descripcion != 'Inducción') {
                    DetalleTiempo::create([
                        'descripcion' => 'Inducción',
                        'usu_created_update' => 1,
                        'pcip' => '192.168.1.196',
                        'status' => '1',
                    ]);
                }
                if ($detalleTiempo->descripcion != 'Cirugía') {
                    DetalleTiempo::create([
                        'descripcion' => 'Cirugía',
                        'usu_created_update' => 1,
                        'pcip' => '192.168.1.196',
                        'status' => '1',
                    ]);
                }
                return;
            }
        } else {
            DetalleTiempo::create([
                'descripcion' => 'Uso de Quirófano',
                'usu_created_update' => 1,
                'pcip' => '192.168.1.196',
                'status' => '1',
            ]);
            DetalleTiempo::create([
                'descripcion' => 'Ingreso de Anestesiólogo',
                'usu_created_update' => 1,
                'pcip' => '192.168.1.196',
                'status' => '1',
            ]);
            DetalleTiempo::create([
                'descripcion' => 'Inducción',
                'usu_created_update' => 1,
                'pcip' => '192.168.1.196',
                'status' => '1',
            ]);
            DetalleTiempo::create([
                'descripcion' => 'Cirugía',
                'usu_created_update' => 1,
                'pcip' => '192.168.1.196',
                'status' => '1',
            ]);
        }
    }
}

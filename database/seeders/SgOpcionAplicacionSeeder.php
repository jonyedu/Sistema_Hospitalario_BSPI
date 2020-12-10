<?php

namespace Database\Seeders;

use App\Models\Modulos\Parametrizacion\SubModulo\SgOpcionAplicacion;
use Illuminate\Database\Seeder;

class SgOpcionAplicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sgOpcionAplicaciones = SgOpcionAplicacion::where('status', 1)->get();

        if (sizeOf($sgOpcionAplicaciones) > 0) {
            foreach ($sgOpcionAplicaciones as $sgOpcionAplicacion) {
                if ($sgOpcionAplicacion->descripcion != 'Registro de Tiempo') {
                    SgOpcionAplicacion::create([
                        'empresa' => 1,
                        'sucursal' => 1,
                        'modulo' => 2,
                        //'codigo' => ,
                        'descripcion' => 'Registro de Tiempo',
                        'imagen' => 'fas fa-business-time',
                        'tipo' => 1,
                        'ejecutable' => 'Registro de Tiempo',
                        'usuario_ingreso' => 1,
                        'fecha_ingreso' => date("Y-m-d H:i:s"),
                        'usuario_modificacion' => 1,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                        'pcname' => '192.168.1.196',
                        'status' => '1',
                        'route' => '/modulos/cirugia/registro_tiempo',
                    ]);
                }
                return;
            }
        }
    }
}

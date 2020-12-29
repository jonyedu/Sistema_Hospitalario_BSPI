<?php

namespace Database\Seeders;

use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteText;
use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteTextValor;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosAgentes;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosPosiciones;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosRegistro;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosRespiracion;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DrogasAdministradas;
use App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroAnestesia;
use App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroInfusiones;
use App\Models\Modulos\Imagenes\FirmasPorAtencion;
use App\Models\Modulos\Imagenes\GraficaPorCirugia;
use Illuminate\Database\Seeder;

class LmpRegistroAnestesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgenteText::truncate();
        AgenteTextValor::truncate();
        DatosAgentes::truncate();
        DatosPosiciones::truncate();
        DatosRegistro::truncate();
        DatosRespiracion::truncate();
        DrogasAdministradas::truncate();
        RegistroAnestesia::truncate();
        RegistroInfusiones::truncate();
        GraficaPorCirugia::truncate();

        $registrosAnestesias = RegistroAnestesia::get();
        if (sizeOf($registrosAnestesias) > 0) {
            foreach ($registrosAnestesias as $registroAnestesia) {
                FirmasPorAtencion::where('tipo_servicio', 4)
                    ->where('id_atencion', $registroAnestesia->id)
                    ->where('id_visita', 0)
                    ->where('id_tipo_documento', 12)
                    ->delete();
            }
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Modulos\Cirugia\ListaValoracion\tb_listado_verificacion;
use Illuminate\Database\Seeder;

class LmpListadoVerificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tb_listado_verificacion::truncate();
    }
}

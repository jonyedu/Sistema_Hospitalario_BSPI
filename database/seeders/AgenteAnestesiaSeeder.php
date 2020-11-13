<?php

namespace Database\Seeders;

use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteAnestesia;
use Illuminate\Database\Seeder;

class AgenteAnestesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgenteAnestesia::create([
            'descripcion' => 'T.A',
            'name_system' => 'T.A',
            'img_src' => '',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'MAX',
            'name_system' => 'MAX',
            'img_src' => 'img/icons/max.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'MIN',
            'name_system' => 'MIN',
            'img_src' => 'img/icons/min.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'PULSO',
            'name_system' => 'PULSO',
            'img_src' => 'img/icons/pulso.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'INDUCCION',
            'name_system' => 'INDUCCION',
            'img_src' => 'img/icons/induccion.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'FIN-ANESTECIA',
            'name_system' => 'FIN-ANESTECIA',
            'img_src' => 'img/icons/fin_anestecia.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'RESPIRACIÓN',
            'name_system' => 'RESPIRACIÓN',
            'img_src' => '',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'ESP',
            'name_system' => 'ESP',
            'img_src' => 'img/icons/esp.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'ASIS',
            'name_system' => 'ASIS',
            'img_src' => 'img/icons/asis.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'CONT',
            'name_system' => 'CONT',
            'img_src' => 'img/icons/cont.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'TEMPERATURA',
            'name_system' => 'TEMPERATURA',
            'img_src' => 'img/icons/temperatura.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'FETO',
            'name_system' => 'FETO',
            'img_src' => 'img/icons/feto.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'PARES VENOSA',
            'name_system' => 'PARES VENOSA',
            'img_src' => 'img/icons/pares_venosa.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'TORIQUETE',
            'name_system' => 'TORIQUETE',
            'img_src' => 'img/icons/torniquete.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'BOCA ARRIBA',
            'name_system' => 'BOCA ARRIBA',
            'img_src' => 'img/icons/boca_arriba.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'BOCA ABAJO',
            'name_system' => 'BOCA ABAJO',
            'img_src' => 'img/icons/boca_abajo.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'FETAL',
            'name_system' => 'FETAL',
            'img_src' => 'img/icons/pos_fetal.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'SENTADO',
            'name_system' => 'SENTADO',
            'img_src' => 'img/icons/pos_sentado.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'DE LADO',
            'name_system' => 'DE LADO',
            'img_src' => 'img/icons/pos_lado.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
    }
}
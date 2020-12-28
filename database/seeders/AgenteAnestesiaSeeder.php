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
            'descripcion' => 'T.A.',
            'name_system' => 'T.A.',
            'img_url' => '',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'MAX',
            'name_system' => 'MAX',
            'img_url' => 'img/icons/max.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'MIN',
            'name_system' => 'MIN',
            'img_url' => 'img/icons/min.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'PULSO',
            'name_system' => 'PULSO',
            'img_url' => 'img/icons/pulso.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'INDUCCIÓN',
            'name_system' => 'INDUCCIÓN',
            'img_url' => 'img/icons/induccion.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'FIN-ANESTESIA',
            'name_system' => 'FIN-ANESTESIA',
            'img_url' => 'img/icons/fin_anestecia.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'RESPIRACIÓN',
            'name_system' => 'RESPIRACIÓN',
            'img_url' => '',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'ESP',
            'name_system' => 'ESP',
            'img_url' => 'img/icons/esp.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'ASIS',
            'name_system' => 'ASIS',
            'img_url' => 'img/icons/asis.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'CONT',
            'name_system' => 'CONT',
            'img_url' => 'img/icons/cont.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'TEMPERATURA',
            'name_system' => 'TEMPERATURA',
            'img_url' => 'img/icons/temperatura.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'FETO',
            'name_system' => 'FETO',
            'img_url' => 'img/icons/feto.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'PRES VENOSA',
            'name_system' => 'PRES VENOSA',
            'img_url' => 'img/icons/pares_venosa.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'TORNIQUETE',
            'name_system' => 'TORNIQUETE',
            'img_url' => 'img/icons/torniquete.png',
            'tipo_id' => '1',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'BOCA ARRIBA',
            'name_system' => 'BOCA ARRIBA',
            'img_url' => 'img/icons/boca_arriba.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'BOCA ABAJO',
            'name_system' => 'BOCA ABAJO',
            'img_url' => 'img/icons/boca_abajo.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'FETAL',
            'name_system' => 'FETAL',
            'img_url' => 'img/icons/pos_fetal.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'SENTADO',
            'name_system' => 'SENTADO',
            'img_url' => 'img/icons/pos_sentado.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
        AgenteAnestesia::create([
            'descripcion' => 'DE LADO',
            'name_system' => 'DE LADO',
            'img_url' => 'img/icons/pos_lado.png',
            'tipo_id' => '2',
            'usu_created_update' => '1',
            'pcip' => '0.0.0.0',
            'status' => '1'
        ]);
    }
}

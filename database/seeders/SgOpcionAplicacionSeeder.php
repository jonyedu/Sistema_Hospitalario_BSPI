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
        //Añadir las rutas a los menu que ya Existen
        SgOpcionAplicacion::where('status', 1)->where('codigo', '1')->update([
            'empresa' => 1,
            'sucursal' => 1,
            'modulo' => 5,
            'descripcion' => 'Registro de Usuarios',
            'imagen' => '.',
            'tipo' => 1,
            'ejecutable' => 'Registro de Usuarios',
            'usuario_ingreso' => 1,
            'fecha_ingreso' => date("Y-m-d H:i:s"),
            'usuario_modificacion' => 1,
            'fecha_modificacion' => date("Y-m-d H:i:s"),
            'pcname' => '192.168.1.196',
            'status' => '1',
            'route' => '/modulos/parametrizacion/usuario/mostrar_usuario',
        ]);
        SgOpcionAplicacion::where('status', 1)->where('codigo', '2')->update([
            'empresa' => 1,
            'sucursal' => 1,
            'modulo' => 5,
            'descripcion' => 'Mantenimiento de Modulos',
            'imagen' => '.',
            'tipo' => 1,
            'ejecutable' => 'Mantenimiento de Modulos',
            'usuario_ingreso' => 1,
            'fecha_ingreso' => date("Y-m-d H:i:s"),
            'usuario_modificacion' => 1,
            'fecha_modificacion' => date("Y-m-d H:i:s"),
            'pcname' => '192.168.1.196',
            'status' => '1',
            'route' => '/modulos/parametrizacion/modulo/mostrar_modulo',
        ]);
        SgOpcionAplicacion::where('status', 1)->where('codigo', '3')->update([
            'empresa' => 1,
            'sucursal' => 1,
            'modulo' => 5,
            'descripcion' => 'Registro de Perfil de Usuarios',
            'imagen' => '.',
            'tipo' => 1,
            'ejecutable' => 'Registro de Perfil de Usuarios',
            'usuario_ingreso' => 1,
            'fecha_ingreso' => date("Y-m-d H:i:s"),
            'usuario_modificacion' => 1,
            'fecha_modificacion' => date("Y-m-d H:i:s"),
            'pcname' => '192.168.1.196',
            'status' => '1',
            'route' => '/modulos/parametrizacion/perfil/mostrar_perfil',
        ]);
        SgOpcionAplicacion::where('status', 1)->where('codigo', '4')->update([
            'empresa' => 1,
            'sucursal' => 1,
            'modulo' => 5,
            'descripcion' => 'Registro de Opciones del Sistema',
            'imagen' => '.',
            'tipo' => 1,
            'ejecutable' => 'Registro de Opciones del Sistema',
            'usuario_ingreso' => 1,
            'fecha_ingreso' => date("Y-m-d H:i:s"),
            'usuario_modificacion' => 1,
            'fecha_modificacion' => date("Y-m-d H:i:s"),
            'pcname' => '192.168.1.196',
            'status' => '1',
            'route' => '/modulos/parametrizacion/sub_modulo/mostrar_sub_modulo',
        ]);
        SgOpcionAplicacion::where('status', 1)->where('codigo', '5')->update([
            'empresa' => 1,
            'sucursal' => 1,
            'modulo' => 5,
            'descripcion' => 'Asignación de Opciones Por Perfil',
            'imagen' => '.',
            'tipo' => 1,
            'ejecutable' => 'Asignación de Opciones Por Perfil',
            'usuario_ingreso' => 1,
            'fecha_ingreso' => date("Y-m-d H:i:s"),
            'usuario_modificacion' => 1,
            'fecha_modificacion' => date("Y-m-d H:i:s"),
            'pcname' => '192.168.1.196',
            'status' => '1',
            'route' => '/modulos/parametrizacion/perfil_por_usuario/mostrar_perfil_por_usuario',
        ]);

        //Crear nuevos menus
       SgOpcionAplicacion::create(
            [
                'empresa' => 1,
                'sucursal' => 1,
                'modulo' => 2,
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
                'route' => '/modulos/cirugia/registro_tiempo/mostrar_registro_tiempo',
            ]
        );
       SgOpcionAplicacion::create(
            [
                'empresa' => 1,
                'sucursal' => 1,
                'modulo' => 2,
                'descripcion' => 'Valoración Preanestesico',
                'imagen' => 'fas fa-vials',
                'tipo' => 1,
                'ejecutable' => 'Valoración Preanestesico',
                'usuario_ingreso' => 1,
                'fecha_ingreso' => date("Y-m-d H:i:s"),
                'usuario_modificacion' => 1,
                'fecha_modificacion' => date("Y-m-d H:i:s"),
                'pcname' => '192.168.1.196',
                'status' => '1',
                'route' => '/modulos/cirugia/valoracionPreanestecia/mostrar_valoracion_preanestesica',
            ]
        );
       SgOpcionAplicacion::create(
            [
                'empresa' => 1,
                'sucursal' => 1,
                'modulo' => 2,
                'descripcion' => 'Registro de Anestesia',
                'imagen' => 'fas fa-eye-dropper',
                'tipo' => 1,
                'ejecutable' => 'Registro de Anestesia',
                'usuario_ingreso' => 1,
                'fecha_ingreso' => date("Y-m-d H:i:s"),
                'usuario_modificacion' => 1,
                'fecha_modificacion' => date("Y-m-d H:i:s"),
                'pcname' => '192.168.1.196',
                'status' => '1',
                'route' => '/modulos/cirugia/registro_anestesia/mostrar_registro_anestesia',
            ]
        );
       SgOpcionAplicacion::create(
            [
                'empresa' => 1,
                'sucursal' => 1,
                'modulo' => 2,
                'descripcion' => 'Listado de Verificación',
                'imagen' => 'fas fa-list',
                'tipo' => 1,
                'ejecutable' => 'Listado de Verificación',
                'usuario_ingreso' => 1,
                'fecha_ingreso' => date("Y-m-d H:i:s"),
                'usuario_modificacion' => 1,
                'fecha_modificacion' => date("Y-m-d H:i:s"),
                'pcname' => '192.168.1.196',
                'status' => '1',
                'route' => '/modulos/cirugia/lista_verificacion/mostrar_tipo_lista',
            ]
        );
    }
}

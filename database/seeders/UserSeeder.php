<?php

namespace Database\Seeders;

use App\Models\Modulos\Parametrizacion\Usuario\SegUsuario;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $segUsuarios = SegUsuario::get();
        if ($segUsuarios != null) {
            $ban = 1;
            foreach ($segUsuarios as $segUsuario) {
                if ($segUsuario != null) {
                    $user = User::where('id', $segUsuario->codigo)->first();
                    $nameNombre = $segUsuario->nombre != null ? $segUsuario->nombre : "sin dato" . $ban;
                    $nameApellido = $segUsuario->apellido != null ? $segUsuario->apellido : "sin dato" . $ban;
                    $name = $nameNombre . " " . $nameApellido;

                    if ($user != null) {
                        $email = $segUsuario->usuario == $user->usuario ? $segUsuario->usuario . Str::random(2) . '@hospitalleonbecerra.org' : $segUsuario->usuario . '@hospitalleonbecerra.org';
                        User::where('id', $user->id)->updated(
                            [
                                'name' => $name,
                                'email' =>  $email,
                                'nombre' => $segUsuario->nombre != null ? $segUsuario->nombre : ".",
                                'apellido' => $segUsuario->apellido != null ? $segUsuario->apellido : ".",
                                'usuario' => $segUsuario->usuario != null ? $segUsuario->usuario : ".",
                                'password' => Hash::make($segUsuario->password) != null ?  Hash::make($segUsuario->password) : Hash::make('12345678'),
                                'perfil' => $segUsuario->perfil != null ? $segUsuario->perfil : 0,
                                'profesion' => $segUsuario->profesion != null ? $segUsuario->profesion : 0,
                                'abreviatura' => $segUsuario->abreviatura != null ? $segUsuario->abreviatura : ".",
                                'usu_created_update' => 1,
                                'created_at' => date("Y-m-d H:i:s"),
                                'updated_at' => date("Y-m-d H:i:s"),
                                'pcip' => "192.168.1.196",
                                'status' => 1,
                            ]
                        );
                    } else {
                        $user = User::where('usuario', $segUsuario->usuario)->first();
                        if ($user != null) {
                            $email = $segUsuario->usuario == $user->usuario ? $segUsuario->usuario . Str::random(2) . '@hospitalleonbecerra.org' : $segUsuario->usuario . '@hospitalleonbecerra.org';
                        } else {
                            $email = $segUsuario->usuario . '@hospitalleonbecerra.org';
                        }

                        User::create(
                            [
                                'name' => $name,
                                'email' =>  $email,
                                'nombre' => $segUsuario->nombre != null ? $segUsuario->nombre : ".",
                                'apellido' => $segUsuario->apellido != null ? $segUsuario->apellido : ".",
                                'usuario' => $segUsuario->usuario != null ? $segUsuario->usuario : ".",
                                'password' => Hash::make($segUsuario->password) != null ?  Hash::make($segUsuario->password) : Hash::make('12345678'),
                                'perfil' => $segUsuario->perfil != null ? $segUsuario->perfil : 0,
                                'profesion' => $segUsuario->profesion != null ? $segUsuario->profesion : 0,
                                'abreviatura' => $segUsuario->abreviatura != null ? $segUsuario->abreviatura : ".",
                                'usu_created_update' => 1,
                                'created_at' => date("Y-m-d H:i:s"),
                                'updated_at' => date("Y-m-d H:i:s"),
                                'pcip' => "192.168.1.196",
                                'status' => 1,
                            ]
                        );
                    }
                }
                $ban++;
            }
        }
        User::create([
            'name' => 'Jonathan Eduardo Mora Candelario',
            'email' =>  'jonathan_1308@hotmail.com',
            'nombre' => 'Jonathan Eduardo',
            'apellido' => 'Mora Candelario',
            'usuario' => 'jonyedu19',
            'password' => Hash::make('jony,.123'),
            'perfil' => 0,
            'profesion' => 0,
            'abreviatura' => ".",
            'usu_created_update' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'pcip' => "192.168.1.196",
            'status' => 1,
        ]);
    }
}

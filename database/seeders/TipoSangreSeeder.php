<?php

namespace Database\Seeders;

use App\Models\Modulos\Parametrizacion\TipoSangre\TipoSangre;
use Illuminate\Database\Seeder;

class TipoSangreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoSangre::where('codigo', 4)->update([
            'status' => 0
        ]);

        TipoSangre::create([
            'descripcion' => 'AB+',
            'status' => '1'
        ]);

        TipoSangre::create([
            'descripcion' => 'AB-',
            'status' => '1'
        ]);
    }
}

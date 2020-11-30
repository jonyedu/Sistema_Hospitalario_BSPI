<?php

namespace Database\Seeders;

use App\Models\Modulos\Parametrizacion\Sala\Sala;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sala::where('codigo', 17)->where('descripcion', 'POST OPERATORIO')->update([
            'status' => 1
        ]);
    }
}

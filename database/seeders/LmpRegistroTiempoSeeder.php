<?php

namespace Database\Seeders;

use App\Models\Modulos\Cirugia\RegistroTiempo\RegistroTiempo;
use Illuminate\Database\Seeder;

class LmpRegistroTiempoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegistroTiempo::truncate();
    }
}

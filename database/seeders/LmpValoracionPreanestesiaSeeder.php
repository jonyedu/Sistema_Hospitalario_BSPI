<?php

namespace Database\Seeders;

use App\Models\Modulos\Cirugia\valoracionPreanestecia\Antecedente;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\ExamenFisico;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\Paraclinico;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\RevisionSistema;
use Illuminate\Database\Seeder;

class LmpValoracionPreanestesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RevisionSistema::truncate();
        Antecedente::truncate();
        ExamenFisico::truncate();
        Paraclinico::truncate();
    }
}

<?php

namespace App\Models\Modulos\Cirugia\valoracionPreanestecia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $fillable = [
        'idExamenFisico',
        'SecCirPro',
        'pa',
        'fc',
        'peso',
        'talla',
        'bEstadoGeneral',
        'rEstadoGeneral',
        'mEstadoGeneral',
        'cuelloCorto',
        'dmt',
        'cmCuelloCorto',
        'bMovilidadCuello',
        'rMovilidadCuello',
        'mMovilidadCuello',
        'clase1',
        'clase2',
        'clase3',
        'clase4',
        'ingurgitacionYugular',
        'cmBocaAperturaOral',
        'bDentadura',
        'rDentadura',
        'mDentadura',
        'edentulo',
        'protesis',
        'cardiovascular',
        'respiratorio',
        'abdomen',
        'extremidades',
        'puntuacionNeurologico',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'usu_created_update',
        'created_at',
        'updated_at',
        'pcip',
        'status'
    ];
    protected $connection = 'control_hospitalario_db_sql';
    protected $table = 'tb_examen_fisico';
    protected $primaryKey = 'idExamenFisico';
}

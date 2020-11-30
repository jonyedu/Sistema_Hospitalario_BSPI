<?php

namespace App\Models\Modulos\Cirugia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CirugiaProgramadas extends Model
{

    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'CirugiasProgramadas';
    /**
     * @var string
     */
    protected $connection = 'admin_db_sql';

    protected $fillable = [
        'SecCirPro'
        ,'CirProFecPro'
        ,'CirProHorPro'
        ,'CirProHoraInicio'
        ,'CirProHoraFin'
        ,'CirProHisCli'
        ,'CirProNomPac'
        ,'CirProIngresar'
        ,'CirProSala'
        ,'CirProCama'
        ,'CirProQuirofano'
        ,'CirProCirujano'
        ,'CirProAnestesiologo'
        ,'CirProProcedimiento'
        ,'CirProObservacion'
        ,'CirProEstado'
        ,'TipoAnestesia'
        ,'Ayudante'
        ,'Instrumentista'
        ,'Circulante'
        ,'FechaQxInicio'
        ,'FechaQxFin'
        ,'Ayudante2'
        ,'CirProHospit'
    ];
    public function pacienteLista()
    {
        return $this->hasOne('App\Models\Modulos\Admision\Paciente', 'id', 'CirProHisCli');
    }
    public function pacienteHospitalizacion()
    {
        return $this->hasOne('App\Models\Modulos\Admision\Hospitalizacion', 'id', 'CirProHospit');
    }
}

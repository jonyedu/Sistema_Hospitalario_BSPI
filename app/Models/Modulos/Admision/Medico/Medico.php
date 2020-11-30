<?php

namespace App\Models\Modulos\Admision\Medico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbMedico';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'cedula',
        'direccion',
        'registro_profesional',
        'sexo',
        'telefono',
        'especializacion',
        'tipo_medico',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'fecha_registro',
        'usuario_ingreso',
        'fecha_modificacion',
        'usuario_modificacion',
        'pcname',
        'status',
        'servicios_medico',
        'tipo_medico_servicio',
        'registro_sanitario',
        'libro',
        'tomo',
        'folio',
        'numero_atencion',
        'consultorio_default',
        'IdSelloJefatura',
    ];

    public function servicioMedico()
    {
        return $this->hasOne('App\Models\Modulos\Parametrizacion\ServicioMedico\ServicioMedico', 'id', 'servicios_medico');
    }

    public function medicoSellos()
    {
        return $this->hasOne('App\Models\Modulos\Admision\Medico\MedicoSellos', 'medico', 'id');
    }

    protected $appends = [
        'FULLNAME'
    ];

    public function getFULLNAMEattribute()
    {
        return $this->apellidos . " " . $this->nombres;
    }
}

<?php

namespace App\Models\Modulos\Admision;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroAdmision extends Model
{
    use HasFactory;
     /**
     * @var string
     */
    protected $table = 'tbPaciente';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $Fillable = [
        'id'
      ,'numero_atencion'
      ,'afiliado'
      ,'paciente'
      ,'fecha'
      ,'hora'
      ,'responsable'
      ,'observacion'
      ,'doctor'
      ,'des_campo1'
      ,'des_campo2'
      ,'des_campo3'
      ,'usuario_ingreso'
      ,'fecha_ingreso'
      ,'usuario_modificacion'
      ,'fecha_modificacion'
      ,'pcname'
      ,'status'
      ,'tipo_ingreso'
      ,'fuente_informacion'
      ,'persona_entrega'
      ,'derivacion'
      ,'hospital'
      ,'cedula_persona_entrega'
      ,'tipo_acompañante'
    ];
}

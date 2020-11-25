<?php

namespace App\Models\Modulos\Admision;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
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

    protected $fillable = [
        'id'
        ,'cedula'
        ,'tipo_identificacion'
        ,'primer_nombre'
        ,'segundo_nombre'
        ,'apellido_paterno'
        ,'apellido_materno'
        ,'genero'
        ,'fecha_nacimiento'
        ,'lugar_nacimiento'
        ,'ocupacion'
        ,'estado_civil'
        ,'tipo_sangre'
        ,'nacionalidad'
        ,'pais'
        ,'provincia'
        ,'ciudad'
        ,'direccion'
        ,'telefono'
        ,'celular'
        ,'otro'
        ,'observacion'
        ,'lugar_trabajo'
        ,'tipo_parentesco'
        ,'tipo_beneficiario'
        ,'cedula_titular'
        ,'tipo_seguro'
        ,'des_campo1'
        ,'des_campo2'
        ,'des_campo3'
        ,'usuario_ingreso'
        ,'fecha_ingreso'
        ,'usuario_modificacion'
        ,'fecha_modificacion'
        ,'pcname'
        ,'status'
        ,'status_discapacidad'
        ,'carnet_conadis'
        ,'status_otro_seguro'
        ,'tipo_seguro_iess'
        ,'descripcion_otro_seguro'
        ,'etnico'
        ,'parroquia'
    ];
}

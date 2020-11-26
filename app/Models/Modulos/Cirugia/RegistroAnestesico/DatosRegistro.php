<?php


namespace App\Models\Modulos\Cirugia\RegistroAnestesico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosRegistro extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_datos_registro';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id',
        'registro_anestesia_id',
        'paciente',
        'historia_clinica',
        'fecha',
        'edad',
        'sexo',
        'estatura',
        'peso',
        'ocupacion_actual',
        'servicio',
        'sala',
        'cama',
        'id_diagnostico_pre',
        'id_diagnostico_post',
        'operacion_propuesta',
        'id_cirujano',
        'id_ayudante1',
        'id_operacion_realizada',
        'id_anestesiologo',
        'id_ayudante2',
        'id_instrumentista',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'usu_created_update',
        'created_at',
        'updated_at',
        'pcip',
        'status',
    ];
}

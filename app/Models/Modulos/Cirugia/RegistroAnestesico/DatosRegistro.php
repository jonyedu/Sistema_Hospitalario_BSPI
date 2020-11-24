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
        'id'
        ,'registro_anestesia_id'
        ,'estatura'
        ,'peso'
        ,'diagnostico_pre'
        ,'diagnostico_post'
        ,'operacion_propuesta'
        ,'operacion_realizada'
        ,'cirujano_h'
        ,'cirujano_e'
        ,'ayudante1_h'
        ,'ayudante1_e'
        ,'ayudante2_h'
        ,'ayudante2_e'
        ,'anestesiologo_h'
        ,'anestesiologo_e'
        ,'instrumentista_e'
        ,'instrumentista_h'
        ,'des_campo1'
        ,'des_campo2'
        ,'des_campo3'
        ,'usu_created_update'
        ,'created_at'
        ,'updated_at'
        ,'pcip'
        ,'status'
    ];
}

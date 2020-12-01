<?php

namespace App\Models\Modulos\Cirugia\RegistroAnestesico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosRespiracion extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_datos_respiracion';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id',
        'registro_anestesia_id',
        'hora',
        'min',
        'segundos',
        'agente_id',
        'indice_hora',
        'indice_min',
        'valor',
        'usu_created_update',
        'status'
    ];
}

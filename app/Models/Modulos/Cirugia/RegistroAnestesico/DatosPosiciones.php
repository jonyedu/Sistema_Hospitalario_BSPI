<?php

namespace App\Models\Modulos\Cirugia\RegistroAnestesico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPosiciones extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_datos_posiciones';
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
        'posicion_id',
        'indice_hora',
        'indice_min',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'usu_created_update',
        'created_at',
        'updated_at',
        'pcip',
        'status'
    ];
}

<?php

namespace App\Models\Modulos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraficaPorCirugia extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbGraficaPorCirugia';
    /**
     * @var string
     */
    protected $connection = 'imagenes_db_sql';

    protected $fillable = [
        'id',
        'SecCirPro',
        'registro_anestesia_id',
        'grafica',
        /* Datos para auditoria */
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'usu_created_update',
        'pcip',
        'status',
    ];
}

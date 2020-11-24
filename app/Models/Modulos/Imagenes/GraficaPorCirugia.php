<?php

namespace App\Models\Modulos\Imagenes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraficaPorCirugia extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_grafica_por_cirugia';
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

    protected $hidden = [
        'grafica',
    ];

    protected $appends = [
        'GRAFICAS'
    ];

    public function getGRAFICASattribute()
    {
        return base64_encode($this->grafica);
    }
   
}

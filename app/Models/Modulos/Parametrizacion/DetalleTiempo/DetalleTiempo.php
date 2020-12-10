<?php

namespace App\Models\Modulos\Parametrizacion\DetalleTiempo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTiempo extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_detalle_tiempo';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id_detalle_tiempo',
        'descripcion',
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

<?php

namespace App\Models\Modulos\Cirugia\RegistroTiempo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroTiempo extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_registro_tiempo';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id_registro_tiempo',
        'id_detalle_tiempo',
        'SecCirPro',
        'tiempo',
        'estado',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'usu_created_update',
        'created_at',
        'updated_at',
        'pcip',
        'status'
    ];

    public function detalleTiempo()
    {
        return $this->hasOne('App\Models\Modulos\Parametrizacion\DetalleTiempo\DetalleTiempo', 'id_detalle_tiempo', 'id_detalle_tiempo');
    }
}

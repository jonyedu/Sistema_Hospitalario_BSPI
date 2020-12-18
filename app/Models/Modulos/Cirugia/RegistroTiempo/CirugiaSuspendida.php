<?php

namespace App\Models\Modulos\Cirugia\RegistroTiempo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CirugiaSuspendida extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_cirugia_suspendida';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id_cirugia_suspendida',
        'SecCirPro',
        'observacion',
        'tiempo',
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

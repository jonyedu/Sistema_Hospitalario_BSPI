<?php

namespace App\Models\Modulos\Cirugia\TipoPosiciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPosiciones extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_tipo_posiciones';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id',
        'descripcion',
        'name_system',
        'img_src',
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

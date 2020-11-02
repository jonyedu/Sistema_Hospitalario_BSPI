<?php

namespace App\Models\Modulos\Cirugia\RegistroAnestesico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agentes extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_agente_anestesia';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id',
        'descripcion',
        'name_system',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'status',
        'created_at',
        'updated_at',
    ];

    public static function activos()
    {
        return self::where('status', 1)->get();
    }

    public static function activosPorTipo($tipo)
    {

        return self::select(['tb_agente_anestesia.id','tb_agente_anestesia.descripcion', 'tb_agente_anestesia.name_system', 'tb_agente_anestesia.img_url'])
            ->join('tb_tipo_agente_anestesia', 'tb_tipo_agente_anestesia.id','tb_agente_anestesia.tipo_id')
            ->where('tb_agente_anestesia.status', 1)
            ->where('tb_tipo_agente_anestesia.name_system', $tipo)->get();
    }
}

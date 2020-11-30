<?php

namespace App\Models\Modulos\Imagenes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmasPorAtencion extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbFirmasPorAtencion';
    /**
     * @var string
     */
    protected $connection = 'imagenes_db_sql';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'tipo_servicio',
        'id_atencion',
        'id_visita',
        'id_tipo_documento',
        'fecha_atencion',
        'firma',
        'status',
        'usuario_ingreso',
        'fecha_ingreso',
        'usuario_modificacion',
        'fecha_modificacion',
        'pcname',
    ];
    protected $hidden = [
        'firma',
    ];

    protected $appends = [
        'FIRMAS'
    ];

    public function getFIRMASattribute()
    {
        return base64_encode($this->firma);
    }
}

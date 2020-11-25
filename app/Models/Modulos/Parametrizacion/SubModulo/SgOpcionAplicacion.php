<?php

namespace App\Models\Modulos\Parametrizacion\SubModulo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SgOpcionAplicacion extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'SG_OPCION_APLICACION';
    /**
     * @var string
     */
    protected $connection = 'sqlsrv';

    protected $fillable = [
        'empresa',
        'sucursal',
        'modulo',
        'codigo',
        'descripcion',
        'imagen',
        'tipo',
        'ejecutable',
        'usuario_ingreso',
        'fecha_ingreso',
        'usuario_modificacion',
        'fecha_modificacion',
        'pcname',
        'status',
        'route',
    ];

    public function modulo()
    {
        return $this->hasOne('App\Models\Modulos\Parametrizacion\Modulo\SgModulo', 'codigo', 'modulo');
    }
}

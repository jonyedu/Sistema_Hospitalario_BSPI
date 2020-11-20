<?php

namespace App\Models\Modulos\Parametrizacion\Modulo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SgModulo extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'SG_MODULO';
    /**
     * @var string
     */
    protected $connection = 'sqlsrv';

    public $timestamps = false;

    protected $fillable = [
        'empresa',
        'sucursal',
        'codigo',
        'descripcion',
        'abreviatura',
        'usuario_ingreso',
        'fecha_ingreso',
        'usuario_modificacion',
        'fecha_modificacion',
        'pcname',
        'status',
        'orden',
        'imagen',
    ];
    public function subModulo()
    {
        return $this->hasMany('App\Models\Modulos\Parametrizacion\SubModulo\SgOpcionAplicacion', 'modulo', 'codigo');
    }
}

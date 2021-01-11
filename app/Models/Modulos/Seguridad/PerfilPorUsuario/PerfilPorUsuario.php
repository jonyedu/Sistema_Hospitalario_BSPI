<?php

namespace App\Models\Modulos\Seguridad\PerfilPorUsuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilPorUsuario extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'SG_OPCION_APLICACION_POR_PERFIL';
    /**
     * @var string
     */
    protected $connection = 'sqlsrv';

    public $timestamps = false;

    protected $fillable = [
        'empresa',
        'sucursal',
        'perfil',
        'modulo',
        'opcion_aplicacion',
        'superior',
        'status',
    ];
}

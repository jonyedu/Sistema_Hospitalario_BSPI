<?php

namespace App\Models\Modulos\Parametrizacion\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegUsuario extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'SEG_USUARIO';
    /**
     * @var string
     */
    protected $connection = 'sqlsrv';

    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'nombre',
        'apellido',
        'usuario',
        'password',
        'perfil',
        'profesion',
        'abreviatura',
        'usr_ingreso',
        'fec_ingreso',
        'usr_modificacion',
        'fec_modificacion',
        'pc_name',
        'status',
        'PermitirAnular',
        'codigo_usu',
    ];
}

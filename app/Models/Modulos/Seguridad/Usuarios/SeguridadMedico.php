<?php

namespace App\Models\Modulos\Seguridad\Usuarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeguridadMedico extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbSeguridadMedico';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id',
        'nombre',
        'medico',
        'usuario',
        'password',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'fecha_registro',
        'fecha_ingreso',
        'usuario_ingreso',
        'fecha_modificacion',
        'usuario_modificacion',
        'pcname',
        'status',
    ];

    public function medico()
    {
        return $this->hasOne('App\Models\Modulos\Admision\Medico\Medico', 'id', 'medico');
    }
}

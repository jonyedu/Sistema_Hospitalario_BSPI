<?php

namespace App\Models\Modulos\Parametrizacion\Diagnostico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbDiagnostico';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'codigo',
        'descripcion',
        'tipo',
        'observacion',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'usuario_ingreso',
        'fecha_ingreso',
        'usuario_modificacion',
        'fecha_modificacion',
        'pcname',
        'status',
        'prioridad',
        'numero',
        'descripcion_triaje'
    ];
}

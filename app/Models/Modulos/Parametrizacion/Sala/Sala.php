<?php

namespace App\Models\Modulos\Parametrizacion\Sala;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbSala';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'descripcion',
        'abreviatura',
        'numero_cama',
        'observacion',
        'status',
        'capinstMSP',
    ];
}

<?php

namespace App\Models\Modulos\Parametrizacion\Documentos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'SG_MODULO';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'descripcion',
        'status',
        'des_campo1',
        'des_campo2',
    ];
}

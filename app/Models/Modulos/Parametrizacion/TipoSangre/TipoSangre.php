<?php

namespace App\Models\Modulos\Parametrizacion\TipoSangre;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSangre extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbTipoSangre';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'descripcion',
        'status'
    ];
}

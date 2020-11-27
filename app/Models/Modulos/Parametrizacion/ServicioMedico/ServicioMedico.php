<?php

namespace App\Models\Modulos\Parametrizacion\ServicioMedico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioMedico extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbServiciosMedicos';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id',
        'descripcion',
        'status',
        'id_inec'
    ];
}

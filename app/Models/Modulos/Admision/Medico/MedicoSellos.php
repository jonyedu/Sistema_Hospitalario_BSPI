<?php

namespace App\Models\Modulos\Admision\Medico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoSellos extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tbMedicoSellos';
    /**
     * @var string
     */
    protected $connection = 'imagenes_db_sql';

    protected $fillable = [
        'id',
        'medico',
        //'imagen',
        'user_ingreso',
        'user_modficacion',
        'fecha',
        'status',
    ];

    protected $hidden = [
        'imagen',
    ];

    protected $appends = [
        'IMAGEN_SELLO'
    ];

    public function getIMAGENSELLOattribute()
    {
        //return  date_diff(date('Y-m-d H:i:s'), $this->fecha); 
        return base64_encode($this->imagen);
    }
}

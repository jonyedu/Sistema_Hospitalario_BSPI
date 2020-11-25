<?php

namespace App\Models\Modulos\Parametrizacion\Tarifario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifarioMedicina extends Model
{
    use HasFactory;
   /** 
     * @var string
     */
    protected $table = 'tbTarifarioMedicina';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';


    protected $fillable = [
        'id'
        ,'codigo'
        ,'descripcion'
        ,'valor'
        ,'tipo'
        ,'nivel'
        ,'status'
        ,'anio'
        ,'clasificacion'
    ];
}

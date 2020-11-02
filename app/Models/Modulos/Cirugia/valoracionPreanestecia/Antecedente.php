<?php

namespace App\Models\Modulos\Cirugia\valoracionPreanestecia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    protected $fillable = [
        'idAntecedente','SecCirPro','quirurgico','descripcionQuirurgico','traumatico','descripcionTraumatico','alergia','tabaco','cocaina','marihuana','otrosToxico','cual_otrosToxico','g','p','a','c','fur','familiar','cual_familiar','esteroide','aines','ieca','inetropico','anti_h2','asa','antibiotico','betabloqueador','diuretico','anticoagulante','calcioantagonista','acos','anticolinesterasico','otrasDroga','cual_otrasDroga','des_campo1','des_campo2','des_campo3','usu_created_update', 'created_at', 'updated_at', 'pcip','status'
    ];
    protected $connection = 'control_hospitalario_db_sql';
    protected $table = 'tb_antecedente';
    protected $primaryKey = 'idAntecedente';

    public function motivoAntecedente(){
        return "";
    }
}

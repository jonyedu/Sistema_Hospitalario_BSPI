<?php

namespace App\Models\Modulos\Cirugia\valoracionPreanestecia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paraclinico extends Model
{
    protected $fillable = [
        'idParaclinico',
        'SecCirPro',
        'id_tipo_sangre',
        'hb',
        'hb_valor',
        'hcto',
        'hcto_valor',
        'leucocito',
        'leucocito_valor',
        'na',
        'na_valor',
        'ci',
        'ci_valor',
        'k',
        'k_valor',
        'ca',
        'ca_valor',
        'bun',
        'bun_valor',
        'creati',
        'creati_valor',
        'glicemia',
        'glicemia_valor',
        'plaqueta',
        'plaqueta_valor',
        'tp',
        'tp_valor',
        'tpt',
        'tpt_valor',
        'mg',
        'mg_valor',
        'ekg',
        'ecocardiograma',
        'rxTorax',
        'otros',
        'clasificacion_asa',
        'clasificacion_riesgo',
        'observacion',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'usu_created_update',
        'created_at',
        'updated_at',
        'pcip',
        'status'
    ];
    protected $connection = 'control_hospitalario_db_sql';
    protected $table = 'tb_paraclinico';
    protected $primaryKey = 'idParaclinico';

    public function tipoSangre()
    {
        return $this->hasOne('App\Models\Modulos\Parametrizacion\TipoSangre\TipoSangre', 'codigo', 'id_tipo_sangre');
    }
}

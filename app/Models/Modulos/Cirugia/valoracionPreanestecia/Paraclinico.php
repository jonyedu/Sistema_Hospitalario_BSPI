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
        'hcto',
        'leucocito',
        'na',
        'ci',
        'k',
        'ca',
        'bun',
        'creati',
        'glicemia',
        'plaqueta',
        'tp',
        'tpt',
        'mg',
        'ekg',
        'ecocardiograma',
        'rxTorax',
        'asa1',
        'asa2',
        'asa3',
        'asa4',
        'asa5',
        'u',
        'categoria1',
        'categoria2',
        'categoria3',
        'categoria4',
        'categoria5',
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
        return $this->hasOne('App\GestionHospitalaria\AdministracionDeFarmacia\ProductosDetalle', 'PRODUCTO_DETALLE_COD', 'PRODUCTO_DETALLE_COD');
    }
}

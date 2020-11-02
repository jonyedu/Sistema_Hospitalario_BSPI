<?php

namespace App\Models\Modulos\Cirugia\valoracionPreanestecia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisionSistema extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'idRevisionSistema',
        'SecCirPro',
        'hipertension',
        'enfCoronaria',
        'arritmias','otrosCardiovascular','enfValvular','varices','claudicacion','epoc','asma','tbc','otrosRespiratorio','convulsiones','ecv','meningitis','enfMental','otrosNeurologico','ira','infeccionUnitaria','irc','otrosNefrologicos','ulcera','estomagoLleno','otrosGastrointestinal','des_campo1','des_campo2','des_campo3','usu_created_update', 'created_at', 'updated_at','pcip','status'
    ];
    protected $connection = 'control_hospitalario_db_sql';
    protected $table = 'tb_revision_sistema';
    protected $primaryKey = 'idRevisionSistema';

    public function antecedente()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\valoracionPreanestecia\Antecedente', 'SecCirPro', 'SecCirPro');
    }

    public function examenFisico()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\valoracionPreanestecia\ExamenFisico', 'SecCirPro', 'SecCirPro');
    }

    public function paraclinico()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\valoracionPreanestecia\Paraclinico', 'SecCirPro', 'SecCirPro');
    }
}

<?php

namespace App\Models\Modulos\Cirugia\ListarValoracion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbValoracion__ extends Model
{
   use HasFactory;
   protected $fillable = [
    'SecCirPro' ,'chkentrada01' , 'chkentrada02' , 'chkentrada03' , 'chkentrada04' , 'chkentrada05' , 'chkentrada06' , 'chkentrada07' , 'chkquirurgica01' , 'chkquirurgica02' , 'chkquirurgica03' , 'chkquirurgica04' , 'chkquirurgica05' , 'chkquirurgica06' , 'chkquirurgica07' , 'chksalida01' , 'chksalida02' , 'chksalida03' , 'chksalida04' , 'chksalida05' , 'user_id' , 'cargo' , 'observacion' , 'firma' 
];
    protected $connection = 'control_hospitalario_db_sql';
    protected $table = 'tb_listado_verificacions';
    protected $primaryKey = 'SecCirPro';

    public function ListarValoracion(){
        return "";
    }
    
}

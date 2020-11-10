<?php

namespace App\Models\Modulos\Cirugia\RegistroAnestesico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroAnestesia extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tb_registro_anestesia';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id',
        'SecCirPro',
        'duracion_anestesia',
        'duracion_operacion',
        'general',
        'sistem_abierto',
        'sistem_cerrado',
        'sistem_semi_cerr',
        'cinc_aparatos_usados',
        'vaiiven_aparatos_usados',
        'mascara',
        'oral_inte_traqueal',
        'nasal_inte_traqueal',
        'rapido_inte_traqueal',
        'lenta_inte_traqueal',
        'turbo_inte_traqueal',
        'manguito_inflam_inte_traqueal',
        'taponamiento_inte_traqueal',
        'asist_topica_inte_traqueal',
        'asist_tranboral_inte_traqueal',
        'conductiva',
        'asepsia_piel',
        'con',
        'habon',
        'raquidea',
        'epidural_caud',
        'simple_altura_puncion',
        'continua_altura_puncion',
        'puncion_lat',
        'linea_media',
        'aguja',
        'nivel',
        'hiperbara',
        'id_tipo_posiciones',
        'hipotension',
        'arritmias',
        'depresion_respiratoria',
        'perforacion_duramadre',
        'dificultad_intubacion',
        'nauses_vomitos',
        'conductiva_insuficiente',
        'laringo_espasmo',
        'paro_cardiaco',
        'ninguna',
        'cambio_tecnica',
        'otros_complicaciones',
        'comentario',
        'min1',
        'min5',
        'min10',
        'p_muerto',
        'tecnicas_especiales',
        'conducido_a',
        'por',
        'hora',
        'des_campo1',
        'des_campo2',
        'des_campo3',
        'usu_created_update',
        'pcip',
        'status',
    ];

}

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
        'hemorragia',
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
    public function consultaMedico()
    {
        return $this->hasOne('App\Models\Modulos\Admision\Medico\Medico', 'id', 'por');
    }
    public function consultaSala()
    {
        return $this->hasOne('App\Models\Modulos\Parametrizacion\Sala\Sala', 'codigo', 'conducido_a');
    }
    public function drogaAdministrada()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\RegistroAnestesico\DrogasAdministradas', 'id', 'registro_anestesia_id');
    }
    public function graficoCirugia()
    {
        return $this->hasOne('App\Models\Modulos\Imagenes\GraficaPorCirugia', 'registro_anestesia_id', 'id')->orderByDesc('id');
    }
    public function drogaAdministradaRpt()
    {
        return $this->hasMany('App\Models\Modulos\Cirugia\RegistroAnestesico\DrogasAdministradas', 'registro_anestesia_id', 'id');
    }
    public function registroInfusion()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroInfusiones', 'id', 'registro_anestesia_id');
    }
    public function regitroInfunsionRpt()
    {
        return $this->hasMany('App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroInfusiones', 'registro_anestesia_id', 'id');
    }

    public function datoAgente()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\RegistroAnestesico\DatosAgentes', 'id', 'registro_anestesia_id');
    }

    public function datoRespiracion()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\RegistroAnestesico\DatosRespiracion', 'id', 'registro_anestesia_id');
    }

    public function datoPosicion()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\RegistroAnestesico\DatosPosiciones', 'id', 'registro_anestesia_id');
    }

    public function datosPersona()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\RegistroAnestesico\DatosRegistro', 'registro_anestesia_id', 'id');
    }
    public function tipoPosicion()
    {
        return $this->hasOne('App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteAnestesia', 'id', 'id_tipo_posiciones');
    }
}

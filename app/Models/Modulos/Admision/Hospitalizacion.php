<?php

namespace App\Models\Modulos\Admision;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitalizacion extends Model
{
    use HasFactory;
    
  
    /**
     * @var string
     */
    protected $table = 'tbHospitalizacion';
    /**
     * @var string
     */
    protected $connection = 'control_hospitalario_db_sql';

    protected $fillable = [
        'id'
      ,'SecuenciaHO'
      ,'No_Historial'
      ,'Fecha_Hora_Ingreso'
      ,'cobertura_Maxima'
      ,'fecha_nacimiento'
      ,'Normal'
      ,'Cirugia_Dia'
      ,'Fecha_de_Registro'
      ,'Presupuesto'
      ,'Pre_Factura'
      ,'Paciente'
      ,'NumeroAtencion'
      ,'habitacion'
      ,'Procedencias'
      ,'Paquete_Atencion'
      ,'Nombre_Responsable'
      ,'Direccion_Responsable'
      ,'Documento_Responsable'
      ,'Telefono_Responsable'
      ,'Plan_Atencion'
      ,'CoaSeguro'
      ,'Deducible'
      ,'Observaciones'
      ,'Siniestro'
      ,'Referencia_1'
      ,'Referencia_2'
      ,'Medico_Fecha'
      ,'Servicios'
      ,'medico'
      ,'principal'
      ,'asociado_1'
      ,'asociado_2'
      ,'Medico_Observacion'
      ,'garantia'
      ,'Garantia_plan'
      ,'Garantia_Coaseguros'
      ,'Garantia_Deducible'
      ,'Garantia_moneda'
      ,'Garantia_siniestro'
      ,'Garantia_referencia_1'
      ,'Garantia_referencia_2'
      ,'Dieta'
      ,'Dieta_Observaciones'
      ,'Dieta_Contenido'
      ,'Varios_Fecha'
      ,'Varios_Musica'
      ,'Varios_Musica_desde'
      ,'varios_Musica_hasta'
      ,'Varios_Televisor'
      ,'Varios_Televisor_desde'
      ,'varios_Televisor_hasta'
      ,'Varios_Periodico'
      ,'Varios_Acompañante'
      ,'Varios_Acepta_Visitas_si'
      ,'Varios_Acepta_Visitas_no'
      ,'Varios_Acepta_Visitas_restringido'
      ,'Varios_Acepta_llamadas'
      ,'Varios_Dieta_aconpañante'
      ,'fecha_egreso'
      ,'medico_egreso'
      ,'principal_egreso'
      ,'asociadoEgreso1'
      ,'asociadoEgreso2'
      ,'tipo_egreso'
      ,'complicacion'
      ,'tipo_complicacion'
      ,'des_campo1'
      ,'des_campo2'
      ,'des_campo3'
      ,'fecha_registro'
      ,'usuario_registro'
      ,'fecha_modificacion'
      ,'usuario_modificacion'
      ,'pcname'
      ,'status'
      ,'codigo_cama'
      ,'traspaso'
      ,'fecha_hora_traspaso'
      ,'genero'
      ,'observacion_traspaso'
      ,'transaccion'
      ,'titular'
      ,'tipo_egreso_alta'
      ,'derivacion'
      ,'hospital'
      ,'status_documento'
      ,'osbservacion_documento'
      ,'NumeroAtencionAnual'
      ,'NumeroAtencionMensual'
      ,'SecuenciaEdad'
      ,'SecuenciaMedicina'
      ,'SecuenciaCirugia'
      ,'observacion_eliminada'
    ];
}

<template>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
       <h1 class="mt-4 text-center" style="font-weight: bold;">Lista de Cirugias Programas de los Pacientes</h1>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 mt-2" style="margin-left:auto;margin-right:auto">
            <div class="form-inline">
                <label class="ml-4 mr-2" for="fecha_hasta">Buscar por Fecha</label>
                <input
                    type="date"
                    class="form-control"
                    id="fecha_hasta"
                    placeholder="Seleccione la fecha de fin"
                    v-model="form.frm_fecha"
                />
                <button
                    type="button"
                    class="btn btn-success ml-2"
                    @click="cargarListaCirugiaProgramadaPaciente()"
                >
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="row mt-3">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <vuetable-component
                :seleccionar-button="seleccionarButton"
                :anular-button="false"
                :modificar-button="false"
                :columns-data="columns"
                :rows-data="listaCirugiaProgramadaPaciente"
                @handleSeleccionarClick="handleSeleccionarClick"
              ></vuetable-component>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props:{
    seleccionarButton:{
      type:Boolean,
      default:true
    }
  },
  data: function() {
    return {
      listaCirugiaProgramadaPaciente: [],
      form: {
          frm_fecha: "",
      },
      columns: [
        {
          label: "Paciente",
          field: "NombrePaciente",
          type: "String"
        },
        {
          label: "Cirujano",
          field: "Cirujano",
          type: "String"
        },
        {
          label: "Anestesiologo",
          field: "Anestesiologo",
          type: "String"
        },
        {
          label: "Quirofano",
          field: "Quirofano",
          type: "String"
        },
        {
          label: "Procedimiento",
          field: "Procedimiento",
          type: "String"
        }
      ]
    };
  },
  mounted: function() {
    /* this.titulo_seleccionado = "Citas Agendadas";
    let nombreModulo = this.$nombresModulo.gestion_hospitalaria;
    let nombreFormulario = this.$nombresFormulario.gestion_hospitalaria
      .admistracion_de_citas.citas.lista_consulta_externa.nombre_formulario;
    this.$funcionesGlobales.registrarLogForm(
      nombreModulo,
      nombreFormulario,
      "Ingreso"
    ); */
    //this.cargarListaCirugiaProgramadaPaciente();
  },
  beforeDestroy: function() {
    /* let nombreModulo = this.$nombresModulo.gestion_hospitalaria;
    let nombreFormulario = this.$nombresFormulario.gestion_hospitalaria
      .admistracion_de_citas.citas.lista_consulta_externa.nombre_formulario;
    this.$funcionesGlobales.registrarLogForm(
      nombreModulo,
      nombreFormulario,
      "Salida"
    ); */
  },
  methods: {
    handleSeleccionarClick(value){
      this.$emit("handleSeleccionarClick",value);
    },
    cargarListaCirugiaProgramadaPaciente() {
      let that = this;
      let url = "/modulos/cirugia/valoracionPreanestecia/cargar_lista_cirugia_programadaPaciente";
      var loader = that.$loading.show();
      axios
        .post(url, that.form)
        .then(function(response) {
          let listaCirugiaProgramadaPaciente = [];
          for (let i = 0; i < response.data.listaCirugiaProgramadaPaciente.length; i++) {
            let objeto = {
              Secuencia: response.data.listaCirugiaProgramadaPaciente[i].Secuencia,
              SecCirPro: response.data.listaCirugiaProgramadaPaciente[i].SecCirPro,
              HoraProgramada: response.data.listaCirugiaProgramadaPaciente[i].HoraProgramada,
              HistoriaClinica: response.data.listaCirugiaProgramadaPaciente[i].HistoriaClinica,
              NombrePaciente: that.$funcionesGlobales.toCapitalFirstAllWords(response.data.listaCirugiaProgramadaPaciente[i].NombrePaciente),
              Sala: response.data.listaCirugiaProgramadaPaciente[i].Sala,
              Cama: response.data.listaCirugiaProgramadaPaciente[i].Cama,
              Cirujano: that.$funcionesGlobales.toCapitalFirstAllWords(response.data.listaCirugiaProgramadaPaciente[i].Cirujano),
              Anestesiologo: that.$funcionesGlobales.toCapitalFirstAllWords(response.data.listaCirugiaProgramadaPaciente[i].Anestesiologo),
              Circulante: response.data.listaCirugiaProgramadaPaciente[i].Circulante,
              Instrumentista:response.data.listaCirugiaProgramadaPaciente[i].Instrumentista,
              Ayudante:response.data.listaCirugiaProgramadaPaciente[i].Ayudante,
              Quirofano: response.data.listaCirugiaProgramadaPaciente[i].Quirofano,
              Procedimiento: that.$funcionesGlobales.toCapitalFirstAllWords(response.data.listaCirugiaProgramadaPaciente[i].Procedimiento),
              Observacion: response.data.listaCirugiaProgramadaPaciente[i].Observacion,
              FechaQxInicio: response.data.listaCirugiaProgramadaPaciente[i].FechaQxInicio,
              FechaQxFin: response.data.listaCirugiaProgramadaPaciente[i].FechaQxFin,
              Total: response.data.listaCirugiaProgramadaPaciente[i].Total,
              CIRUGIA_HOSPI_AMBI: response.data.listaCirugiaProgramadaPaciente[i].CIRUGIA_HOSPI_AMBI,
              TipoIngreso: response.data.listaCirugiaProgramadaPaciente[i].TipoIngreso,
              TipoIngresoDescripcion: response.data.listaCirugiaProgramadaPaciente[i].TipoIngresoDescripcion,
              FechaProgramada: response.data.listaCirugiaProgramadaPaciente[i].FechaProgramada,
            };
            listaCirugiaProgramadaPaciente.push(objeto);
          }
          that.listaCirugiaProgramadaPaciente = listaCirugiaProgramadaPaciente;
          loader.hide();
        })
        .catch(error => {
            //Errores
            loader.hide();
            if (error.response.status == 421) {
                that.$swal({
                    icon: "warning",
                    title: "Advertencia",
                    text: error.response.data.msg
                });
                //that.errores.fecha = rror.response.data.msg;
            } else {
                that.$swal({
                    icon: "error",
                    title: "Existe un error",
                    text: error
                });
            }
        });
    }
  }
};
</script>


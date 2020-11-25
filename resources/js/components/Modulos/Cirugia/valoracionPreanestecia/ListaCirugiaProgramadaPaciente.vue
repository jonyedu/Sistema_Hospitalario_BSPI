<template>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 class="mt-4 text-center" style="font-weight: bold;">
                Lista de Cirugias Programas de los Pacientes
            </h1>
        </div>
        <div
            class="col-lg-8 col-md-8 col-sm-12 mt-2"
            style="margin-left:auto;margin-right:auto"
        >
            <div class="form-inline">
                <label class="col-lg-4 col-md-4 col-sm-4" for="fecha_hasta"
                    >Buscar por Fecha</label
                >
                <input
                    type="date"
                    class="form-control col-lg-6 col-md-6 col-sm-6"
                    id="fecha_hasta"
                    placeholder="Seleccione la fecha de fin"
                    v-model="form.frm_fecha"
                />
                <button
                    type="button"
                    class="btn btn-success col-lg-2 col-md-2 col-sm-2"
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
    props: {
        seleccionarButton: {
            type: Boolean,
            default: true
        }
    },
    data: function() {
        return {
            listaCirugiaProgramadaPaciente: [],
            form: {
                frm_fecha: ""
            },
            columns: [
                {
                    label: "Paciente",
                    field: "nombrePaciente",
                    type: "String"
                },
                {
                    label: "Cirujano",
                    field: "cirujano",
                    type: "String"
                },
                {
                    label: "Anestesiologo",
                    field: "anestesiologo",
                    type: "String"
                },
                {
                    label: "Quirofano",
                    field: "quirofano",
                    type: "String"
                },
                {
                    label: "Procedimiento",
                    field: "procedimiento",
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
        handleSeleccionarClick(value) {
            this.$emit("handleSeleccionarClick", value);
        },
        cargarListaCirugiaProgramadaPaciente() {
            let that = this;
            let url =
                "/modulos/cirugia/valoracionPreanestecia/cargar_lista_cirugia_programadaPaciente";
            var loader = that.$loading.show();
            axios
                .post(url, that.form)
                .then(function(response) {
                    let listaCirugiaProgramadaPaciente = [];
                            response.data.listaCirugiaProgramadaPaciente.forEach(lista => {
                                let objeto = {};
                                objeto.SecCirPro = lista.SecCirPro;
                                objeto.nombrePaciente = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProNomPac);
                                objeto.historiaClinica = lista.CirProHisCli;
                                objeto.fechaProgramada = lista.CirProFecPro;
                                if(lista.paciente_lista != null){
                                    //alert("edad: " + that.$funcionesGlobales.calcularEdad(lista.paciente_lista.fecha_nacimiento));
                                    objeto.edad = lista.paciente_lista.EDAD;
                                    objeto.sexo = lista.paciente_lista.genero;
                                }
                                objeto.sala = lista.CirProSala;
                                objeto.cama = lista.CirProCama;
                                if(lista.paciente_hospitalizacion != null){
                                    objeto.id_diagnostico = lista.paciente_hospitalizacion.principal;
                                }
                                //datos para mostrar en la tabla padre
                                objeto.cirujano = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProCirujano);
                                objeto.anestesiologo = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProAnestesiologo);
                                objeto.quirofano = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProCirujano);
                                objeto.procedimiento = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProProcedimiento);
                                listaCirugiaProgramadaPaciente.push(objeto);
                            });
                            that.listaCirugiaProgramadaPaciente = listaCirugiaProgramadaPaciente;
                            loader.hide();
                    /* for (
                        let i = 0;
                        i < response.data.listaCirugiaProgramadaPaciente.length;
                        i++
                    ) { */

                        /* let objeto = {
                            Secuencia:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .Secuencia,
                            SecCirPro:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .SecCirPro,
                            FechaProgramada:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProFecPro,
                            HoraProgramada:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProHorPro,
                            HistoriaClinica:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProHisCli,
                            NombrePaciente: that.$funcionesGlobales.toCapitalFirstAllWords(
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProNomPac
                            ),
                            Sala:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProSala,
                            Cama:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProCama,
                            Cirujano: that.$funcionesGlobales.toCapitalFirstAllWords(
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProCirujano
                            ),
                            Anestesiologo: that.$funcionesGlobales.toCapitalFirstAllWords(
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProAnestesiologo
                            ),
                            Circulante:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .Circulante,
                            Instrumentista:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .Instrumentista,
                            Ayudante:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .Ayudante,
                            Quirofano:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProQuirofano,
                            Procedimiento: that.$funcionesGlobales.toCapitalFirstAllWords(
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProProcedimiento
                            ),
                            Observacion:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CirProObservacion,
                            FechaQxInicio:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .FechaQxInicio,
                            FechaQxFin:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .FechaQxFin,

                            Genero:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .pacienteLista.genero,
                            FechaNacimiento:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .pacienteLista.fecha_nacimiento,
                            Diagnostico:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .pacienteHospitalizacion.principal,
                            Genero:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .paciente_lista.genero,

                            Genero:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .paciente_lista.genero,

                            //me quede aca
                            Total:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .Total,

                            CIRUGIA_HOSPI_AMBI:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .CIRUGIA_HOSPI_AMBI,
                            TipoIngreso:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .TipoIngreso,
                            TipoIngresoDescripcion:
                                response.data.listaCirugiaProgramadaPaciente[i]
                                    .TipoIngresoDescripcion,
                        }; */
                        //listaCirugiaProgramadaPaciente.push(objeto);
                    //}
                    /* that.listaCirugiaProgramadaPaciente = listaCirugiaProgramadaPaciente; */
                    /* loader.hide(); */
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

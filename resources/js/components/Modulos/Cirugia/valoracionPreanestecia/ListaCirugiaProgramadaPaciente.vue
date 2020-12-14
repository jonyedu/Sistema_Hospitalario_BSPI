<template>
    <div class="row">
        <div class="col-lg-12 col-md-10 col-sm-10">
            <h1 class="mt-4 text-center" style="font-weight: bold;">
                Lista de Cirugias Programas de los Pacientes
            </h1>
        </div>
        <div
            class="col-lg-12 col-md-12 col-sm-12"
        >
            <input
                style="margin:0px auto; display:block;"
                type="date"
                class="form-control col-lg-3 col-md-3 col-sm-3"
                id="fecha_hasta"
                placeholder="Seleccione la fecha de fin"
                v-model="form.frm_fecha"
                @change="cargarListaCirugiaProgramadaPaciente"
            />
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
                    label: "HorPro",
                    field: "horaProgramada",
                    type: "String"
                },
                {
                    label: "HorIni",
                    field: "horaInicio",
                    type: "String"
                },
                {
                    label: "HorFin",
                    field: "horaFin",
                    type: "String"
                },
                {
                    label: "Qx",
                    field: "quirofano",
                    type: "String"
                },
                {
                    label: "Paciente",
                    field: "nombrePaciente",
                    type: "String",
                    width: "150px"
                },
                {
                    label: "Sala-Cama",
                    field: "sala_cama",
                    type: "String",
                    width: "200px"
                },
                {
                    label: "Procedimiento",
                    field: "procedimiento",
                    type: "String",
                    width: "300px"
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
            ]
        };
    },
    mounted: function() {
        this.flashMessage.setStrategy("multiple");
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
                                    objeto.edad = lista.paciente_lista.EDAD;
                                    objeto.sexo = lista.paciente_lista.genero;
                                }
                                objeto.sala = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProSala);
                                objeto.cama = lista.CirProCama;
                                objeto.sala_cama = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProSala) + "-" + lista.CirProCama;
                                if(lista.paciente_hospitalizacion != null){
                                    objeto.id_diagnostico = lista.paciente_hospitalizacion.principal;
                                }
                                //datos para mostrar en la tabla padre
                                objeto.horaProgramada =  lista.HORPRO;
                                objeto.horaInicio = lista.CirProHoraFin==null?'00:00:00':lista.CirProHoraInicio;
                                objeto.horaFin = lista.CirProHoraFin==null?'00:00:00':lista.CirProHoraFin;
                                objeto.cirujano = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProCirujano);
                                objeto.anestesiologo = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProAnestesiologo);
                                objeto.quirofano = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProQuirofano);
                                objeto.procedimiento = that.$funcionesGlobales.toCapitalFirstAllWords(lista.CirProProcedimiento);

                                listaCirugiaProgramadaPaciente.push(objeto);
                            });
                            that.listaCirugiaProgramadaPaciente = listaCirugiaProgramadaPaciente;
                            loader.hide();
                })
                .catch(error => {
                    //Errores
                    loader.hide();
                    if (error.response.status == 421) {
                        /* that.$swal({
                            icon: "warning",
                            title: "Advertencia",
                            text: error.response.data.msg
                        }); */
                        that.flashMessage.show({
                                status: "warning",
                                title: "Error al procesar cargarListaCirugiaProgramadaPaciente",
                                message: error.response.data.msg,
                                clickable: true,
                                time: 0,
                                icon: "/iconsflashMessage/warning.svg",
                                customStyle: {
                                    flashMessageStyle: {
                                        background: "linear-gradient(#e66465, #9198e5)"
                                    }
                                }
                            });
                        //that.errores.fecha = rror.response.data.msg;
                    } else {
                        /* that.$swal({
                            icon: "error",
                            title: "Existe un error",
                            text: error
                        }); */
                        that.flashMessage.show({
                                status: "error",
                                title: "Error al procesar cargarListaCirugiaProgramadaPaciente",
                                message: "Por favor comuníquese con el administrador. " + error,
                                clickable: true,
                                time: 0,
                                icon: "/iconsflashMessage/error.svg",
                                customStyle: {
                                    flashMessageStyle: {
                                        background: "linear-gradient(#e66465, #9198e5)"
                                    }
                                }
                            });
                    }
                });
        }
    }
};
</script>

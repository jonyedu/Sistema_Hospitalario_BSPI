<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                            <li>
                                <router-link
                                    :to="prefijo"
                                    style="margin-top:-9px"
                                    class="nav-link"
                                    >Home</router-link
                                >
                            </li>
                            <li><p>/</p></li>
                            <li>
                                <p style="margin-left:10px">
                                    <span v-text="titulo_seleccionado"></span>
                                </p>
                            </li>
                        </ol>
                    </div>
                    <!-- Seccion de los menu de botones: Historial clínico, Nueva, Guardar, etc y la Tabla Historial Clinico-->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Lista de Butones Nueva, Modificar, Guardar, Imprimir, H.C. Digital -->
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 text-right"
                                    >
                                        <div class="btn-group" role="group">
                                            <button
                                                type="button"
                                                class="btn btn-outline-primary"
                                                @click="
                                                    mostrarModalListaCirugiaPaciente()
                                                "
                                            >
                                                Nuevo
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Fin de Butones Nueva, Modificar, Guardar, Imprimir, H.C. Digital -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Seccion de los menu de botones: Historial clínico, Nueva, Guardar, etc y la Tabla Historial Clinico-->
                    &nbsp;
                    <!-- Cuerpo-->
                    <div
                        class="col-lg-12 col-md-12 col-sm-12"
                        v-if="form.id_cirugia_programada > 0"
                    >
                        <!-- Datos del Paciente -->
                        <!-- card-green -->
                        <div class="card card-default collapsed-card">
                            <div
                                class="card-header"
                                style="background: #590303"
                            >
                                <h3 class="card-title" style="color: #FFFFFF">
                                    Registro del Tiempo del Paciente
                                    {{ form.paciente }}
                                </h3>
                                <div class="card-tools">
                                    <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="collapse"
                                    >
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-tool"
                                        data-card-widget="remove"
                                    >
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="display: none;">
                                <div class="row">
                                    <!-- DATOS DEL PACIENTE -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div
                                            class="text-left col-lg-12 col-md-12 col-sm-12"
                                        >
                                            <div class="row">
                                                <div
                                                    class="col-lg-1 col-md-1 col-sm-1"
                                                >
                                                    <template
                                                        v-if="iniciado == false"
                                                    >
                                                        <span>
                                                            <button
                                                                type="button"
                                                                class="btn btn-outline-primary"
                                                                @click="
                                                                    guardarRegistroTiempo
                                                                "
                                                            >
                                                                <i
                                                                    class="fas fa-stopwatch"
                                                                ></i>
                                                            </button>
                                                        </span>
                                                    </template>
                                                    <template v-else>
                                                        <span>
                                                            <button
                                                                type="button"
                                                                class="btn btn-outline-success"
                                                                @click="
                                                                    guardarRegistroTiempo
                                                                "
                                                            >
                                                                <i
                                                                    class="fas fa-plus-circle"
                                                                ></i>
                                                            </button>
                                                        </span>
                                                    </template>
                                                </div>
                                                <div
                                                    class="col-lg-11 col-md-11 col-sm-11"
                                                >
                                                    <div class="form-group">
                                                        <v-select
                                                            :disabled="
                                                                disabledDetalleTiempo
                                                            "
                                                            placeholder="Seleccione el tiempo"
                                                            v-model="
                                                                form.selected_detalle_tiempo
                                                            "
                                                            :value="
                                                                form.id_detalle_tiempo
                                                            "
                                                            :options="
                                                                form.detalles_tiempos
                                                            "
                                                            label="display"
                                                            @input="
                                                                setSelectedDetalleTiempo
                                                            "
                                                        >
                                                            <template
                                                                slot="no-options"
                                                                >No existen
                                                                datos</template
                                                            >
                                                        </v-select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="row mt-2">
                                            <div
                                                class="col-lg-12 col-md-12 col-sm-12"
                                            >
                                                <vuetable-component
                                                    :anular-button="false"
                                                    :modificar-button="false"
                                                    :columns-data="columns"
                                                    :rows-data="
                                                        registros_tiempos
                                                    "
                                                    @handleRowClick="muestraConsultaExterna"
                                                ></vuetable-component>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seccion donde muestra la lista de los pacientes que tienen una cita -->
        <modal
            :width="'65%'"
            height="auto"
            :scrollable="true"
            name="ListaCirugiaProgramadaPaciente"
            style="z-index: 1200;"
        >
            <lista-cirugia-programa-paciente
                ref="ListaCirugiaProgramadaPaciente"
                @handleSeleccionarClick="handleSeleccionarClick"
            ></lista-cirugia-programa-paciente>
        </modal>
        <!-- Fin Seccion donde muestra la lista de los pacientes que tienen una cita -->
        <FlashMessage></FlashMessage>
    </div>
</template>

<script>
import { prefix } from "../../../../variables";
export default {
    props: {
        user: {
            type: Object
        }
    },
    data: function() {
        return {
            // Variables Globales
            titulo_seleccionado: "Registro de Tiempo",
            prefijo: "",

            //Variables de Bandera
            iniciado: false,
            disabledDetalleTiempo: true,

            //Variables para la Tabla
            columns: [
                {
                    label: "Descripción",
                    field: "descripcion",
                    type: "String"
                },
                {
                    label: "Estado",
                    field: "estado",
                    type: "String"
                }
            ],

            //Variables para la Tabla
            registros_tiempos: [],

            form: {
                id_cirugia_programada: 1,
                id_detalle_tiempo: 0,
                id_registro_tiempo: 0,

                //Variables para el ComboBox
                selected_detalle_tiempo: "",
                detalles_tiempos: []
            }
        };
    },
    mounted: function() {
        this.flashMessage.setStrategy("multiple");
        this.setSelectedDetalleTiempo();
        this.cargarRegistroTiempoPorSecCirPro();
        this.prefijo = prefix;
    },
    beforeDestroy: function() {
        /* let nombreModulo = this.$nombresModulo.gestion_hospitalaria;
        let nombreFormulario = this.$nombresFormulario.gestion_hospitalaria
            .admistracion_de_citas.citas.motivo_antecedentes.nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Salida"
        ); */
    },
    methods: {
        /* Metodos para Llamar al Modal y la Tabla */
        mostrarModalListaCirugiaPaciente() {
            this.$modal.show("ListaCirugiaProgramadaPaciente");
        },
        handleSeleccionarClick(value) {
            if (value != "") {
                let that = this;
                let url =
                    "/modulos/cirugia/anestesia/validar_secCirPro/" +
                    value.SecCirPro;
                //var loader = that.$loading.show();
                axios
                    .get(url)
                    .then(function(response) {
                        //Obtiene los datos de Motivo Antecedentes
                        if (
                            response.data.secCirPro != null &&
                            response.data.secCirPro != undefined
                        ) {
                            that.$modal.hide("ListaCirugiaProgramadaPaciente");
                            that.flashMessage.show({
                                status: "warning",
                                title: "Advertencia al Seleccionar Paciente",
                                message:
                                    "El paciente ya cuenta con un registro anestesico.",
                                clickable: true,
                                time: 10000,
                                icon: "/iconsflashMessage/warning.svg",
                                customStyle: {
                                    flashMessageStyle: {
                                        background:
                                            "linear-gradient(#e66465, #9198e5)"
                                    }
                                }
                            });
                            //loader.hide();
                        } else {
                            that.cargarDiagnosticoPorCodigo(value);
                        }
                    })
                    .catch(error => {
                        //Errores
                        //loader.hide();
                        that.$swal({
                            icon: "error",
                            title: "Existe un error",
                            text: error
                        });
                    });
            }
        },
        cargarRegistroTiempoPorSecCirPro() {
            if (this.form.id_cirugia_programada > 0) {
                let that = this;
                var loader = that.$loading.show();
                let url =
                    "/modulos/cirugia/registro_tiempo/cargar_registro_tiempo_por_secCirPro/" +
                    this.form.id_cirugia_programada;
                axios
                    .get(url)
                    .then(function(response) {
                        let registros_tiempos = [];
                        if (response.data.registrosTiempos != null) {
                            response.data.registrosTiempos.forEach(
                                registroTiempo => {
                                    let objeto = {
                                        //Datos de la tabla tb_detalle_tiempo
                                        id_detalle_tiempo:
                                            registroTiempo.detalle_tiempo
                                                .id_detalle_tiempo,
                                        descripcion: that.$funcionesGlobales.toCapitalFirstAllWords(
                                            registroTiempo.detalle_tiempo
                                                .descripcion
                                        ),
                                        //Datos de la tabla tb_registro_tiempo
                                        id_registro_tiempo:
                                            registroTiempo.id_detalle_tiempo,
                                        secCirPro: registroTiempo.SecCirPro,
                                        tiempo: registroTiempo.tiempo,
                                        estado:
                                            registroTiempo.estado == "I"
                                                ? "Iniciado"
                                                : registroTiempo.estado == "F"
                                                ? "Finalizado"
                                                : registroTiempo.estado == "P"
                                                ? "Pendiente"
                                                : ""
                                    };
                                    registros_tiempos.push(objeto);
                                }
                            );

                            that.registros_tiempos = registros_tiempos;
                        }
                        loader.hide();
                    })
                    .catch(error => {
                        that.flashMessage.show({
                            status: "error",
                            title:
                                "Error al procesar cargarRegistroTiempoPorSecCirPro",
                            message:
                                "Por favor comuníquese con el administrador. " +
                                error,
                            clickable: true,
                            time: 0,
                            icon: "/iconsflashMessage/error.svg",
                            customStyle: {
                                flashMessageStyle: {
                                    background:
                                        "linear-gradient(#e66465, #9198e5)"
                                }
                            }
                        });
                        loader.hide();
                    });
            }
        },
        setSelectedDetalleTiempo(value) {
            if (this.form.id_cirugia_programada > 0) {
                let that = this;
                var loader = that.$loading.show();
                let url =
                    "/modulos/parametrizacion/detalle_tiempo/cargar_detalle_tiempo";
                if (value != null) {
                    this.form.id_detalle_tiempo = value.id_detalle_tiempo;
                    loader.hide();
                }
                axios
                    .get(url)
                    .then(function(response) {
                        let detalles_tiempos = [];
                        response.data.detallesTiempos.forEach(detalleTiempo => {
                            let objeto = {};
                            objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                                detalleTiempo.descripcion
                            );
                            objeto.id_detalle_tiempo =
                                detalleTiempo.id_detalle_tiempo;
                            detalles_tiempos.push(objeto);
                        });
                        that.form.detalles_tiempos = detalles_tiempos;
                        loader.hide();
                    })
                    .catch(error => {
                        that.flashMessage.show({
                            status: "error",
                            title: "Error al procesar setSelectedDetalleTiempo",
                            message:
                                "Por favor comuníquese con el administrador. " +
                                error,
                            clickable: true,
                            time: 0,
                            icon: "/iconsflashMessage/error.svg",
                            customStyle: {
                                flashMessageStyle: {
                                    background:
                                        "linear-gradient(#e66465, #9198e5)"
                                }
                            }
                        });
                        loader.hide();
                    });
            }
        },
        anadirTiempo() {
            alert("se guardar el tiempo inicial");
        },
        guardarRegistroTiempo() {
            if (this.validarCambioTiempo()) {
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia al cambiar tiempo",
                    message:
                        "No puede cambiar el estado, sin haber empezado el anterior",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return;
            }
            let that = this;
            let url = "";
            let mensaje = "Datos guardados correctamente.";
            url = "/modulos/cirugia/registro_tiempo/guardar_registro_tiempo";
            var loader = that.$loading.show();
            axios
                .post(url, this.form)
                .then(function(response) {
                    that.iniciado = true;
                    that.disabledDetalleTiempo = false;
                    that.cargarRegistroTiempoPorSecCirPro();
                    /* that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar",
                        message: mensaje,
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/success.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    }); */
                    loader.hide();
                })
                .catch(error => {
                    //Errores de validación
                    loader.hide();
                    that.flashMessage.show({
                        status: "error",
                        title:
                            "Error al procesar guardarModificarRegistroTiempo",
                        message:
                            "Por favor comuníquese con el administrador. " +
                            error,
                        clickable: true,
                        time: 0,
                        icon: "/iconsflashMessage/error.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                });
        },
        validarCambioTiempo() {
            //Para validar los tiempos respetando su flujo de proceso
            if (this.iniciado) {
                /* Se valida cuando no se haya seleccionado nada */
                if(this.form.selected_detalle_tiempo == ""){
                    return true;
                }
                /* Valida cuando se seleccione Uso De Quirófano */
                if (this.form.selected_detalle_tiempo.id_detalle_tiempo == 1) {
                    //Valida cuando Uso De Quirófano se desea Finalizar, pero Cirugía sigue Iniciado
                    if (this.registros_tiempos[0].estado == "Iniciado") {
                        if (
                            this.registros_tiempos[3].estado == "Iniciado" ||
                            this.registros_tiempos[3].estado == "Pendiente"
                        ) {
                            return true;
                        }
                    }
                    //Valida cuando Uso De Quirófano se desea Finalizar, pero Preparación De Anestesiólogo sigue en Iniciado
                    if (this.registros_tiempos[0].estado == "Iniciado") {
                        if (this.registros_tiempos[1].estado == "Iniciado") {
                            return true;
                        }
                    }
                }
                /* Valida cuando se seleccione Preparación De Anestesiólogo */
                if (this.form.selected_detalle_tiempo.id_detalle_tiempo == 2) {
                    //Valida cuando Preparación De Anestesiólogo se desea Iniciar, pero Uso De Quirófano sigue en pendiente
                    if (this.registros_tiempos[1].estado == "Pendiente") {
                        if (this.registros_tiempos[0].estado == "Pendiente") {
                            return true;
                        }
                    }
                    //Valida cuando Preparación De Anestesiólogo se desea Finalizar, pero Induccion sigue en Iniciado
                    if (this.registros_tiempos[1].estado == "Iniciado") {
                        if (this.registros_tiempos[2].estado == "Iniciado") {
                            return true;
                        }
                    }
                }
                /* Valida cuando se seleccione Induccion */
                if (this.form.selected_detalle_tiempo.id_detalle_tiempo == 3) {
                    //Valida cuando Inducción se desea Iniciar, pero Preparación De Anestesiólogo sigue en pendiente
                    if (this.registros_tiempos[2].estado == "Pendiente") {
                        if (this.registros_tiempos[1].estado == "Pendiente") {
                            return true;
                        }
                    }
                    //Valida cuando Inducción se desea Finalizar, pero Cirugía sigue en Iniciado
                    if (this.registros_tiempos[2].estado == "Iniciado") {
                        if (this.registros_tiempos[3].estado == "Iniciado") {
                            return true;
                        }
                    }
                }
                /* Valida cuando se seleccione Cirugía */
                if (this.form.selected_detalle_tiempo.id_detalle_tiempo == 4) {
                    //Valida cuando Cirugía se desea Iniciar, pero Induccion sigue en pendiente
                    if (this.registros_tiempos[3].estado == "Pendiente") {
                        if (this.registros_tiempos[2].estado == "Pendiente") {
                            return true;
                        }
                    }
                }
                if (
                    this.form.selected_detalle_tiempo.id_detalle_tiempo == 1 ||
                    this.form.selected_detalle_tiempo.id_detalle_tiempo == 2 ||
                    this.form.selected_detalle_tiempo.id_detalle_tiempo == 3 ||
                    this.form.selected_detalle_tiempo.id_detalle_tiempo == 4
                ) {
                    if (
                        this.registros_tiempos[0].estado == "Finalizado" &&
                        this.registros_tiempos[1].estado == "Finalizado" &&
                        this.registros_tiempos[2].estado == "Finalizado" &&
                        this.registros_tiempos[3].estado == "Finalizado"
                    ) {
                        return true;
                    }
                }
            }
        },
        muestraConsultaExterna(value) {
            //this.componente_seleccionado = "SignosVitales";
            if (value.ESTADOCITA_TIPO == "C") {
                this.$modal.show("datosConsultaExterna");
                this.idCitaModal = this.idCita;
            } else {
                if (value.ESTADOCITA_TIPO == "E") {
                /* this.$swal({
                    icon: "warning",
                    title: "Información",
                    text:
                    "La funcionalidad de visualización emergencia se encuentra en desarrollo.",
                }); */
                } else {
                /* this.$swal({
                    icon: "warning",
                    title: "Información",
                    text: "La funcionalidad se encuentra en desarrollo.",
                }); */
                }
            }
            },
    }
};
</script>

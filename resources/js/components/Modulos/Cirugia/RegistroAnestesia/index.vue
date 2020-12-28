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
                                            <a
                                                style="cursor:pointer;"
                                                title="Buscar Paciente"
                                                @click="
                                                    mostrarModalListaCirugiaPaciente()
                                                "
                                            >
                                                <img
                                                    width="50px"
                                                    height="50px"
                                                    src="/icons/busqueda.png"
                                                />
                                            </a>
                                            <!-- <button
                                                type="button"
                                                class="btn btn-outline-primary"
                                                @click="
                                                    mostrarModalListaCirugiaPaciente()
                                                "
                                            >
                                                Nuevo
                                                <i> <img   src="/icons/buscar.png"> </i>
                                            </button> -->
                                            <template v-if="respuestaImprimir">
                                                <button
                                                    type="button"
                                                    class="btn btn-outline-success"
                                                    @click="
                                                        llamarMetodoImprimir()
                                                    "
                                                >
                                                    <!-- Imprimir -->
                                                    <i
                                                        class="far fa-file-pdf"
                                                    ></i>
                                                </button>
                                            </template>
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
                        v-if="form.idCirugiaProgramada != ''"
                    >
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <form-wizard
                                ref="formRegistroAnestesico"
                                :title="''"
                                :subtitle="''"
                                :nextButtonText="'Siguiente'"
                                :backButtonText="'Anterior'"
                                :finishButtonText="'Finalizar'"
                                :stepSize="'xs'"
                                shape="square"
                                color="#590303"
                                @on-change="onChangeTab"
                                @on-validate="onValidateTab"
                                @on-complete="onComplete"
                            >
                                <tab-content
                                    title="Datos del Paciente"
                                    icon="ti-user"
                                    :before-change="validateFirstStep"
                                >
                                    <datos-paciente
                                        :datos-paciente="datos_paciente"
                                        ref="datosPaciente"
                                    ></datos-paciente>
                                </tab-content>
                                <tab-content
                                    title="Registro Trans-Anestésico"
                                    icon="ti-panel"
                                    :before-change="validateFirstStep"
                                >
                                    <trans-anestesico
                                        :id-sec-cir-pro="
                                            form.idCirugiaProgramada
                                        "
                                        ref="transAnestesico"
                                        :id-registro-anestesia="form.registro_anestesia_id"
                                    ></trans-anestesico>
                                </tab-content>
                                <tab-content
                                    title="Administración Fármaco"
                                    icon="fas fa-capsules"
                                >
                                    <administracion-farmaco
                                        :id-sec-cir-pro="
                                            form.idCirugiaProgramada
                                        "
                                        :id-registro-anestesia="form.registro_anestesia_id"
                                        ref="administracionFarmaco"
                                    ></administracion-farmaco>
                                </tab-content>
                                <tab-content
                                    title="Visualización"
                                    icon="fas fa-file-pdf"
                                >
                                    <div class="row">
                                        <!-- <embed
                                            :src="
                                                '/modulos/cirugia/anestesia/cargar_pdf_formulario_registro_anestesia/' +
                                                    form.idCirugiaProgramada
                                            "
                                            type="application/pdf"
                                            width="100%"
                                            height="980px"
                                        /> -->
                                        <iframe
                                            ref="pdfRegistroAnestesia"
                                            :src="
                                                '/modulos/cirugia/anestesia/cargar_pdf_formulario_registro_anestesia/' +
                                                    form.idCirugiaProgramada
                                            "
                                            type="application/pdf"
                                            width="100%"
                                            height="980px"
                                        ></iframe>
                                    </div>
                                </tab-content>
                                <tab-content
                                    title="Firma Digital"
                                    icon="fa fa-edit"
                                >
                                    <vue-firma
                                        :user="user"
                                        :tipo-servicio="4"
                                        :id-atencion="form.registro_anestesia_id"
                                        :id-visita="0"
                                        :id-tipo-documento="13"
                                        ref="firmaDigitalRegisAnes">
                                    </vue-firma>
                                </tab-content>
                            </form-wizard>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            datos_paciente: {},
            prefijo: "",
            //cirugia_id: 0,
            titulo_seleccionado: "Registro de anestesia",
            respuestaFinProceso: 0,
            respuestaImprimir: 0,
            form: {
                idCirugiaProgramada: "0001",
                idCirugiaProgramadaTemporal: "",
                registro_anestesia_id: 0,
                /* Datos del paciente */
                paciente: "",
                historia_clinica: "",
                fecha: "00/00/0000",
                edad: "",
                sexo: "",
                estatura: "",
                peso: "",
                ocupacion_actual: "",
                id_servicio_medico: 0,
                servicio: "", //borrar esta vaiables
                sala: "",
                cama: "",
                diagnostico_preoperatorio: "",
                id_diagnostico_pre: 0,
                id_diagnostico: 0,
                operacion_propuesta: "",
                id_cirujano: 0,
                id_ayudante1: 0,
                id_tarifaria: 0,
                id_anestesiologo: 0,
                id_ayudante2: 0,
                id_instrumentista: 0,
                /* Datos extras */
                id_especializacion: 0
            }
        };
    },
    mounted: function() {
        this.flashMessage.setStrategy("multiple");
        this.obtenerIdRegistroAnestesio();
        /*  var user = this.$attrs;
        console.log(user); */
        /* let nombreModulo = this.$nombresModulo.gestion_hospitalaria;
        let nombreFormulario = this.$nombresFormulario.gestion_hospitalaria
            .admistracion_de_citas.citas.motivo_antecedentes.nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Ingreso"
        );*/
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
                var loader = that.$loading.show();
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
                            loader.hide();
                        } else {
                            that.datos_paciente = value;
                            that.form.idCirugiaProgramada = value.SecCirPro;
                            that.$modal.hide("ListaCirugiaProgramadaPaciente");
                            loader.hide();
                        }
                    })
                    .catch(error => {
                        loader.hide();
                        that.flashMessage.show({
                            status: "error",
                            title: "Error al procesar handleSeleccionarClick",
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
                    });
            }
        },
        /* Fin para llamar al Modal y la Tabla */
        /* Metodos para los form-wizard */
        onValidateTab(validationResult, activeTabIndex) {
            //Se debera realizar las validaciones respectivas para cada tab
        },
        validateFirstStep() {
            var opc = this.$refs.formRegistroAnestesico.slotProps
                .activeTabIndex;
            let poseeErrores = null;
            return new Promise((resolve, reject) => {
                switch (opc) {
                    case 0:
                        poseeErrores = this.$refs.datosPaciente.validarForm();
                        resolve(poseeErrores);
                        break;
                    case 1:
                        poseeErrores = this.$refs.transAnestesico.validarForm();
                        resolve(poseeErrores);
                        break;
                    case 2:
                        //poseeErrores = this.$refs.examenFisico.validarForm();
                        //resolve(poseeErrores);
                        break;
                    case 3:
                    //poseeErrores = this.$refs.paraclinico.validarForm();
                    //resolve(poseeErrores);
                    case 4:
                        break;
                    default:
                }
            });
        },
        onComplete() {
            this.respuestaImprimir = 1;
            this.$refs.formRegistroAnestesico.reset();
        },
        onChangeTab(prevIndex, nextIndex) {
            /* if (typeof this.onChangeTab() === "function") {
                this.setFormTitle(nextIndex);
                this.guardarModificar(prevIndex);
            } */
            this.setFormTitle(nextIndex);
            this.guardarModificar(prevIndex);
        },
        setFormTitle(index) {
            switch (index) {
                case 0:
                    //this.titulo_seleccionado = "Revisión por Sistemas";
                    //this.$refs.revisionSistema.cargarRevisionSistema();
                    break;
                case 1:
                    //this.titulo_seleccionado = "Antecedentes";
                    //this.$refs.antecedente.cargarAntecedente();
                    break;
                case 2:
                    //this.titulo_seleccionado = "Examen Físico";
                    //this.$refs.examenFisico.cargarExamenFisico();
                    break;
                case 3:
                    this.$refs.pdfRegistroAnestesia.contentDocument.location.reload();
                    break;
                case 4:
                    this.$refs.firmaDigitalRegisAnes.consultarSello();
                    break;
                default:
                    this.titulo_seleccionado = "";
            }
        },
        guardarModificar(index) {
            switch (index) {
                case 0:
                    this.$refs.datosPaciente.guardarModificarDatosPaciente();
                    break;
                case 1:
                    break;
                case 2:
                    this.$refs.administracionFarmaco.guardarAdministracionFarmaco();
                    break;
                case 3:
                    break;
                case 4:
                    break;
                default:
            }
        },
        obtenerIdRegistroAnestesio() {
            if(this.form.registro_anestesia_id <= 0){
                let that = this;
                let url = "/modulos/cirugia/anestesia/registro/post";
                var loader = that.$loading.show();
                axios
                    .post(url, this.form)
                    .then(response => {
                        that.form.registro_anestesia_id = response.data.id;
                        loader.hide();
                    })
                    .catch(error => {
                        //Errores de validación
                        loader.hide();
                        that.flashMessage.show({
                            status: "error",
                            title: "Error al procesar obtenerIdRegistroAnestesio",
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
            }else{
                this.guardarModificarDatosPaciente();
            }

        },
        /* Fin Metodos para los form-wizard */
        llamarMetodoImprimir() {
            if (this.respuestaImprimir) {
                window.open(
                    "/modulos/cirugia/anestesia/cargar_pdf_formulario_registro_anestesia/" +
                        this.form.idCirugiaProgramadaTemporal
                );
            }
        }
    }
};
</script>

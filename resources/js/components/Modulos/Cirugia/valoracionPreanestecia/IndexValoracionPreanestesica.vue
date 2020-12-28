<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
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
                                    Valoración Preanestesica
                                </p>
                            </li>
                        </ol>
                    </div>
                    &nbsp;
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
                                            <template v-if="respuestaImprimir">
                                                <button
                                                    type="button"
                                                    class="btn btn-outline-success"
                                                    @click="
                                                        llamarMetodoImprimir()
                                                    "
                                                >
                                                    Imprimir
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
                        v-if="form.frm_idCirugiaProgramada != ''"
                    >
                        <div class="card card-default collapsed-card">
                            <div
                                class="card-header"
                                style="background: #590303"
                            >
                                <h3 class="card-title" style="color: #FFFFFF">
                                    DATOS DEL PACIENTE
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
                            <div class="card-body" style="display: none;">
                                <div class="row">
                                    <!-- DATOS DEL PACIENTE -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div
                                            class="text-left col-lg-12 col-md-12 col-sm-12"
                                        >
                                            <div class="row">
                                                <div class="col-sm-6 text-left">
                                                    <label
                                                        class="col-form-label"
                                                        >Paciente:</label
                                                    >
                                                    <span
                                                        class="text-left"
                                                        v-text="
                                                            form.frm_paciente
                                                        "
                                                    ></span>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <label
                                                        class="col-form-label"
                                                        >Cirujano:</label
                                                    >
                                                    <span
                                                        class="text-left"
                                                        v-text="
                                                            form.frm_cirujano
                                                        "
                                                    ></span>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <label
                                                        class="col-form-label"
                                                        >Anestesiólogo:</label
                                                    >
                                                    <span
                                                        class="text-left"
                                                        v-text="
                                                            form.frm_anestesiologo
                                                        "
                                                    ></span>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <label
                                                        class="col-form-label"
                                                        >Quirófano:</label
                                                    >
                                                    <span
                                                        class="text-left"
                                                        v-text="
                                                            form.frm_quirofano
                                                        "
                                                    ></span>
                                                </div>
                                                <div
                                                    class="col-sm-12 text-left"
                                                >
                                                    <label
                                                        class="col-form-label"
                                                        >Procedimiento:</label
                                                    >
                                                    <span
                                                        class="text-left"
                                                        v-text="
                                                            form.frm_procedimiento
                                                        "
                                                    ></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <form-wizard
                                ref="formValoracionPreanestecia"
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
                                    title="Revisión por Sistemas"
                                    icon="ti-layout-media-center-alt"
                                >
                                    <revision-sistema
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        @ValidarCargarDatos="
                                            respuestaCargarDatos = $event
                                        "
                                        @RespuestaImprimir="
                                            respuestaImprimir = $event
                                        "
                                        @IdRevisionSistema="form.id_revision_sistema = $event"
                                        ref="revisionSistema"
                                    ></revision-sistema>
                                </tab-content>
                                <tab-content
                                    title="Antecedentes"
                                    icon="ti-folder"
                                >
                                    <antecedente
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        ref="antecedente"
                                    ></antecedente>
                                </tab-content>
                                <tab-content
                                    title="Examen Físico"
                                    icon="ti-signal"
                                    :before-change="validateFirstStep"
                                >
                                    <examen-fisico
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        ref="examenFisico"
                                    ></examen-fisico>
                                </tab-content>
                                <tab-content
                                    title="Paraclínicos"
                                    icon="ti-support"
                                    :before-change="validateFirstStep"
                                >
                                    <paraclinico
                                        :id-revision-sistema="
                                            form.frm_id_revision_sistema
                                        "
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        @validarFinProceso="
                                            respuestaFinProceso = $event
                                        "
                                        @FinProceso="cambiarEstado"
                                        ref="paraclinico"
                                    ></paraclinico>
                                </tab-content>
                                <tab-content
                                    title="Visualización"
                                    icon="fas fa-file-pdf"
                                >
                                    <div class="row">
                                        <!-- <embed
                                            :src="
                                                '/modulos/cirugia/valoracionPreanestecia/cargar_pdf_formulario_valoracion_preanestesica/' +
                                                    form.frm_idCirugiaProgramada
                                            "
                                            type="application/pdf"
                                            width="100%"
                                            height="980px"
                                        /> -->
                                        <iframe
                                            ref="pdfValoracionPreanestesia"
                                            :src="
                                                '/modulos/cirugia/valoracionPreanestecia/cargar_pdf_formulario_valoracion_preanestesica/' +
                                                    form.frm_idCirugiaProgramada
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
                                        :id-atencion="form.id_revision_sistema"
                                        :id-visita="0"
                                        :id-tipo-documento="13"
                                        ref="firmaDigitalValoPrea">
                                    </vue-firma>
                                </tab-content>
                            </form-wizard>
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
            style="z-index: 1200;"
            name="ListaCirugiaProgramadaPaciente"
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
            prefijo: "",
            titulo_seleccionado: "Revisión por Sistemas",
            respuestaFinProceso: 0,
            respuestaImprimir: 0,
            respuestaCargarDatos: 0,
            rutaSello: "",
            frmimg: {
                imgFirma: null,
                imgGrafica: null
            },
            form: {
                frm_idCirugiaProgramada: "", //2890
                frm_paciente: "",
                frm_cirujano: "",
                frm_anestesiologo: "",
                frm_quirofano: "",
                frm_procedimiento: "",
                id_revision_sistema: 0
            }
        };
    },
    mounted: function() {
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
            this.form.frm_idCirugiaProgramada = value.SecCirPro;
            this.form.frm_paciente = value.nombrePaciente;
            this.form.frm_cirujano = value.cirujano;
            this.form.frm_anestesiologo = value.anestesiologo;
            this.form.frm_quirofano = value.quirofano;
            this.form.frm_procedimiento = value.procedimiento;
            this.$modal.hide("ListaCirugiaProgramadaPaciente");
            //this.consultarSello();
            /* if (this.$refs.revisionSistema != null) {
                this.$refs.revisionSistema.cargarRevisionSistema();
            } */
        },
        /* Fin para llamar al Modal y la Tabla */
        cambiarEstado() {
            if (this.respuestaFinProceso) {
                //this.form.frm_idCirugiaProgramada = "";
                this.respuestaImprimir = 1;
                this.$refs.formValoracionPreanestecia.reset();
            }
        },
        /* Metodos para los form-wizard */
        onValidateTab(validationResult, activeTabIndex) {
            //Se debera realizar las validaciones respectivas para cada tab
        },
        validateFirstStep() {
            var opc = this.$refs.formValoracionPreanestecia.slotProps
                .activeTabIndex;
            let poseeErrores = null;
            return new Promise((resolve, reject) => {
                switch (opc) {
                    case 0:
                        break;
                    case 1:
                        break;
                    case 2:
                        poseeErrores = this.$refs.examenFisico.validarForm();
                        resolve(poseeErrores);
                        break;
                    case 3:
                        poseeErrores = this.$refs.paraclinico.validarForm();
                        resolve(poseeErrores);
                    case 4:
                        break;
                    default:
                }
            });
        },
        onComplete() {
            this.respuestaImprimir = 1;
            this.$refs.formValoracionPreanestecia.reset();
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
                    this.titulo_seleccionado = "Revisión por Sistemas";
                    this.$refs.revisionSistema.cargarRevisionSistema();
                    break;
                case 1:
                    this.titulo_seleccionado = "Antecedentes";
                    this.$refs.antecedente.cargarAntecedente();
                    break;
                case 2:
                    this.titulo_seleccionado = "Examen Físico";
                    this.$refs.examenFisico.cargarExamenFisico();
                    break;
                case 3:
                    this.titulo_seleccionado = "Paraclinicos";
                    this.$refs.paraclinico.cargarParaclinico();
                    break;
                case 4:
                    //this.$refs.pdfValoracionPreanestesia.contentDocument.location.reload();
                    break;
                case 5:
                    this.$refs.firmaDigitalValoPrea.consultarSello();
                    break;
                default:
                    this.titulo_seleccionado = "";
            }
        },
        guardarModificar(index) {
            switch (index) {
                case 0:
                    this.$refs.revisionSistema.guardarModificar();
                    break;
                case 1:
                    this.$refs.antecedente.guardarModificar();
                    break;
                case 2:
                    this.$refs.examenFisico.guardarModificar();
                    break;
                case 3:
                    this.$refs.paraclinico.guardarModificar();
                    break;
                case 4:
                    this.$refs.pdfValoracionPreanestesia.contentDocument.location.reload();
                    break;
                default:
                //this.titulo_seleccionado = "";
            }
        },
        llamarMetodoImprimir() {
            if (this.respuestaFinProceso || this.respuestaImprimir) {
                window.open(
                    "/modulos/cirugia/valoracionPreanestecia/cargar_pdf_formulario_valoracion_preanestesica/" +
                        this.form.frm_idCirugiaProgramada
                );
            }
        }
    }
};
</script>

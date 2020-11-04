<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="float-left">
                            Valoración Preanestecia -
                            <span v-text="titulo_seleccionado"></span>
                        </h1>
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
                        <!-- DATOS DEL PACIENTE -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div
                                class="text-left col-lg-12 col-md-12 col-sm-12"
                            >
                                <div
                                    class="alert alert-success alert-dismissible fade show"
                                    role="alert"
                                >
                                    <div class="row">
                                        <div class="col-sm-6 text-left">
                                            <label class="col-form-label"
                                                >Paciente:</label
                                            >
                                            <span
                                                class="text-left"
                                                v-text="form.frm_paciente"
                                            ></span>
                                        </div>
                                        <div class="col-sm-6 text-left">
                                            <label class="col-form-label"
                                                >Cirujano:</label
                                            >
                                            <span
                                                class="text-left"
                                                v-text="form.frm_cirujano"
                                            ></span>
                                        </div>
                                        <div class="col-sm-6 text-left">
                                            <label class="col-form-label"
                                                >Anestesiologo:</label
                                            >
                                            <span
                                                class="text-left"
                                                v-text="form.frm_anestesiologo"
                                            ></span>
                                        </div>
                                        <div class="col-sm-6 text-left">
                                            <label class="col-form-label"
                                                >Quirófano:</label
                                            >
                                            <span
                                                class="text-left"
                                                v-text="form.frm_quirofano"
                                            ></span>
                                        </div>
                                        <div class="col-sm-12 text-left">
                                            <label class="col-form-label"
                                                >Procedimiento:</label
                                            >
                                            <span
                                                class="text-left"
                                                v-text="form.frm_procedimiento"
                                            ></span>
                                        </div>
                                    </div>

                                    <button
                                        type="button"
                                        class="close"
                                        data-dismiss="alert"
                                        aria-label="Close"
                                    >
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <form-wizard
                                :title="''"
                                :subtitle="''"
                                :nextButtonText="'Siguiente'"
                                :backButtonText="'Anterior'"
                                :finishButtonText="'Finalizar'"
                                :stepSize="'xs'"
                                shape="square"
                                color="#3498db"
                                @on-change="onChangeTab"
                                @on-validate="onValidateTab"
                                @on-complete="onComplete"
                            >
                                <tab-content title="Revisión por Sistemas" icon="ti-layout-media-center-alt">
                                    <revision-sistema
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        @ValidarCargarDatos="respuestaCargarDatos = $event"
                                        @RespuestaImprimir="respuestaImprimir = $event"
                                        ref="revisionSistema"
                                    ></revision-sistema>
                                </tab-content>
                                <tab-content title="Antecedentes" icon="ti-folder">
                                    <antecedente
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        ref="antecedente"
                                    ></antecedente>
                                </tab-content>
                                <tab-content title="Examen Físico" icon="ti-signal">
                                    <examen-fisico
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        ref="examenFisico"
                                    ></examen-fisico>
                                </tab-content>
                                <tab-content title="Paraclinicos" icon="ti-support">
                                    <paraclinico
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        @validarFinProceso="
                                            respuestaFinProceso = $event
                                        "
                                        ref="paraclinico"
                                    ></paraclinico>
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
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            titulo_seleccionado: "Revisión por Sistemas",
            respuestaFinProceso: 0,
            respuestaImprimir: 0,
            respuestaCargarDatos: 0,
            form: {
                /* Datos del paciente */
                frm_idCirugiaProgramada: "",
                frm_paciente: "",
                frm_cirujano: "",
                frm_anestesiologo: "",
                frm_quirofano: "",
                frm_procedimiento: ""
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
            this.form.frm_paciente = value.NombrePaciente;
            this.form.frm_cirujano = value.Cirujano;
            this.form.frm_anestesiologo = value.Anestesiologo;
            this.form.frm_quirofano = value.Quirofano;
            this.form.frm_procedimiento = value.Procedimiento;
            this.$modal.hide("ListaCirugiaProgramadaPaciente");
            if (this.$refs.revisionSistema != null) {
                this.$refs.revisionSistema.cargarRevisionSistema();
            }
        },
        /* Fin para llamar al Modal y la Tabla */

        /* Metodos para los form-wizard */
        onValidateTab(validationResult, activeTabIndex) {
            //Se debera realizar las validaciones respectivas para cada tab
            console.log("PATRIA");
            console.log(activeTabIndex);
            console.log(validationResult);
        },
        /* validateFirstStep() {
            return new Promise((resolve, reject) => {
                let poseeErrores = this.$refs.revisionSistema.validarForm();
                resolve(poseeErrores);
            });
        }, */
        onComplete: function() {
            this.$refs.paraclinico.guardarModificar();
            /* if(this.respuestaFinProceso){
                this.form.frm_idCirugiaProgramada = "";
            } */
        },
        onChangeTab(prevIndex, nextIndex) {
            //Se debera realizar las validaciones respectivas para cada tab
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

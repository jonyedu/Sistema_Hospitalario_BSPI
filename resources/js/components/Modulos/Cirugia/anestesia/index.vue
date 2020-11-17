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
                            <li><p style="margin-left:10px"><span v-text="titulo_seleccionado"></span></p></li>
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
                            <template v-if="form.frm_idCirugiaProgramada != null">
                                <registro-anestesico :user="user" @RespuestaImprimir="respuestaImprimir= $event" :id-sec-cir-pro="form.frm_idCirugiaProgramada"></registro-anestesico>
                                <!-- <div> -->

                                <!-- </div> -->
                            </template>
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
    </div>
</template>

<script>
import { prefix } from "../../../../variables";
export default {
    props: {
        user: {
            type: Object
        },
    },
    data: function() {
        return {
            prefijo: "",
            //cirugia_id: 0,
            titulo_seleccionado: "Registro de anestecia",
            respuestaFinProceso: 0,
            respuestaImprimir: 1,
            form: {
                /* Datos del paciente */
                frm_idCirugiaProgramada: "0001",
                frm_paciente: "",
                frm_cirujano: "",
                frm_anestesiologo: "",
                frm_quirofano: "",
                frm_procedimiento: ""
            },
            paciente : null
        };
    },
    mounted: function() {
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
            //this.paciente = value;
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
            this.respuestaImprimir = 1;
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
            if (this.respuestaImprimir) {
                window.open(
                    "/modulos/cirugia/anestesia/cargar_pdf_formulario_registro_anestesia/" +
                    this.form.frm_idCirugiaProgramada
                );
            }
        }
    }
};
</script>

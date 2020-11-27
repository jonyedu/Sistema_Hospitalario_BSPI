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
                        v-if="form.idCirugiaProgramada != ''"
                    >
                        <!-- Datos del Paciente -->
                        <div
                            class="card card-default collapsed-card card-green"
                        >
                            <div class="card-header">
                                <h3 class="card-title">
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
                                                        class="col-lg-6 col-md-6 col-sm-6 text-left"
                                                    >
                                                        <label
                                                            class="col-form-label"
                                                            >Paciente</label
                                                        >
                                                        <input
                                                            disabled
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="N° Historia Clínica"
                                                            v-model="
                                                                form.paciente
                                                            "
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-3 col-md-3 col-sm-3 text-left"
                                                    >
                                                        <label
                                                            class="col-form-label"
                                                            >N° Historia
                                                            Clínica</label
                                                        >
                                                        <input
                                                            disabled
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="N° Historia Clínica"
                                                            v-model="
                                                                form.historia_clinica
                                                            "
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-3 col-md-3 col-sm-3 text-left"
                                                    >
                                                        <label
                                                            class="col-form-label"
                                                            >Fecha</label
                                                        >
                                                        <input
                                                            disabled
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Fecha"
                                                            v-model="form.fecha"
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-1 col-md-1 col-sm-1 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Edad</label
                                                        >
                                                        <input
                                                            disabled
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Edad"
                                                            v-model="form.edad"
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-1 col-md-1 col-sm-1 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Sexo</label
                                                        >
                                                        <input
                                                            disabled
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Sexo"
                                                            v-model="form.sexo"
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-1 col-md-1 col-sm-1 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Est.</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Estatura"
                                                            v-model="
                                                                form.estatura
                                                            "
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-1 col-md-1 col-sm-1 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Peso</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Peso"
                                                            v-model="form.peso"
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-3 col-md-3 col-sm-3 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Ocupación
                                                            Actual</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Ocupación Actual"
                                                            v-model="
                                                                form.ocupacion_actual
                                                            "
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-2 col-md-2 col-sm-2 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Servicio</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Servicio"
                                                            v-model="
                                                                form.servicio
                                                            "
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-2 col-md-2 col-sm-2 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Sala</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Sala"
                                                            v-model="form.sala"
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-1 col-md-1 col-sm-1 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Cama</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Cama"
                                                            v-model="form.cama"
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Diagnóstico
                                                            Preoperatorio</label
                                                        >
                                                        <textarea
                                                            disabled
                                                            rows="1"
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Diagnóstico Preoperatorio"
                                                            v-model="
                                                                form.diagnostico_preoperatorio
                                                            "
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Diagnóstico
                                                            Post-operatorio</label
                                                        >
                                                        <!-- <textarea
                                                rows="1"
                                                type="text"
                                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                placeholder="Diagnóstico Post-operatorio"
                                                v-model="form.diagnostico_post_operatorio"
                                            /> -->
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12"
                                                        >
                                                            <div
                                                                class="form-group"
                                                            >
                                                                <v-select
                                                                    taggable
                                                                    push-tags
                                                                    v-model="
                                                                        selectedDiagnostico
                                                                    "
                                                                    :value="
                                                                        form.id_diagnostico
                                                                    "
                                                                    :options="
                                                                        diagnosticos
                                                                    "
                                                                    label="display"
                                                                    @input="
                                                                        setSelectedDiagnostico
                                                                    "
                                                                >
                                                                    <template
                                                                        slot="no-options"
                                                                        >No
                                                                        existen
                                                                        datos</template
                                                                    >
                                                                </v-select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Operación
                                                            Propuesta:</label
                                                        >
                                                        <textarea
                                                            disabled
                                                            rows="1"
                                                            type="text"
                                                            class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                            placeholder="Operación Propuesta"
                                                            v-model="
                                                                form.operacion_propuesta
                                                            "
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Cirujano</label
                                                        >
                                                        <!-- <textarea
                                                rows="1"
                                                type="text"
                                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                placeholder="Cirujano"
                                                v-model="form.cirujano"
                                            /> -->
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12"
                                                        >
                                                            <div
                                                                class="form-group"
                                                            >
                                                                <v-select
                                                                    v-model="
                                                                        selectedCirujano
                                                                    "
                                                                    :value="
                                                                        form.id_cirujano
                                                                    "
                                                                    :options="
                                                                        cirujanos
                                                                    "
                                                                    label="display"
                                                                    @input="
                                                                        setSelectedCirujano
                                                                    "
                                                                >
                                                                    <template
                                                                        slot="no-options"
                                                                        >No
                                                                        existen
                                                                        datos</template
                                                                    >
                                                                </v-select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Ayudante</label
                                                        >
                                                        <!-- <textarea
                                                rows="1"
                                                type="text"
                                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                placeholder="Ayudante"
                                                v-model="form.ayudante1"
                                            /> -->
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12"
                                                        >
                                                            <div
                                                                class="form-group"
                                                            >
                                                                <v-select
                                                                    v-model="
                                                                        selectedAyudante1
                                                                    "
                                                                    :value="
                                                                        form.id_ayudante1
                                                                    "
                                                                    :options="
                                                                        ayudantes1
                                                                    "
                                                                    label="display1"
                                                                    @input="
                                                                        setSelectedAyudante
                                                                    "
                                                                >
                                                                    <template
                                                                        slot="no-options"
                                                                        >No
                                                                        existen
                                                                        datos</template
                                                                    >
                                                                </v-select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Operación
                                                            Realizada:</label
                                                        >
                                                        <!-- <textarea
                                                rows="1"
                                                type="text"
                                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                placeholder="Operación Realizada"
                                                v-model="form.operacion_realizada"
                                            /> -->
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12"
                                                        >
                                                            <div
                                                                class="form-group"
                                                            >
                                                                <v-select
                                                                    taggable
                                                                    push-tags
                                                                    v-model="
                                                                        selectedTarifaria
                                                                    "
                                                                    :value="
                                                                        form.id_tarifaria
                                                                    "
                                                                    :options="
                                                                        tarifarias
                                                                    "
                                                                    label="display"
                                                                    @input="
                                                                        setSelectedTarifaria
                                                                    "
                                                                >
                                                                    <template
                                                                        slot="no-options"
                                                                        >No
                                                                        existen
                                                                        datos</template
                                                                    >
                                                                </v-select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Anestesiologo</label
                                                        >
                                                        <!-- <textarea
                                                rows="1"
                                                type="text"
                                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                placeholder="Anestesiologo"
                                                v-model="form.anestesiologo"
                                            /> -->
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12"
                                                        >
                                                            <div
                                                                class="form-group"
                                                            >
                                                                <v-select
                                                                    v-model="
                                                                        selectedAnestesiologo
                                                                    "
                                                                    :value="
                                                                        form.id_anestesiologo
                                                                    "
                                                                    :options="
                                                                        anestesiologos
                                                                    "
                                                                    label="display"
                                                                    @input="
                                                                        setSelectedAnestesiologo
                                                                    "
                                                                >
                                                                    <template
                                                                        slot="no-options"
                                                                        >No
                                                                        existen
                                                                        datos</template
                                                                    >
                                                                </v-select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Ayudante</label
                                                        >
                                                        <!-- <textarea
                                                rows="1"
                                                type="text"
                                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                placeholder="Ayudante"
                                                v-model="form.ayudante2"
                                            /> -->
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12"
                                                        >
                                                            <div
                                                                class="form-group"
                                                            >
                                                                <v-select
                                                                    v-model="
                                                                        selectedAyudante2
                                                                    "
                                                                    :value="
                                                                        form.id_ayudante2
                                                                    "
                                                                    :options="
                                                                        ayudantes2
                                                                    "
                                                                    label="display2"
                                                                    @input="
                                                                        setSelectedAyudante
                                                                    "
                                                                >
                                                                    <template
                                                                        slot="no-options"
                                                                        >No
                                                                        existen
                                                                        datos</template
                                                                    >
                                                                </v-select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4 text-left"
                                                    >
                                                        <label
                                                            class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                                            >Instrumentista:</label
                                                        >
                                                        <!-- <textarea
                                                rows="1"
                                                type="text"
                                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                                placeholder="Instrumentista"
                                                v-model="form.instrumentista"
                                            /> -->
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12"
                                                        >
                                                            <div
                                                                class="form-group"
                                                            >
                                                                <v-select
                                                                    v-model="
                                                                        selectedInstrumentista
                                                                    "
                                                                    :value="
                                                                        form.id_instrumentista
                                                                    "
                                                                    :options="
                                                                        instrumentistas
                                                                    "
                                                                    label="display3"
                                                                    @input="
                                                                        setSelectedAyudante
                                                                    "
                                                                >
                                                                    <template
                                                                        slot="no-options"
                                                                        >No
                                                                        existen
                                                                        datos</template
                                                                    >
                                                                </v-select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button
                                                    type="button"
                                                    class="close"
                                                    data-dismiss="alert"
                                                    aria-label="Close"
                                                >
                                                    <span aria-hidden="true"
                                                        >&times;</span
                                                    >
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Componente Registro Anestesico -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <template v-if="form.idCirugiaProgramada != null">
                                <registro-anestesico
                                    :user="user"
                                    @guardarCabecera="guardarCabecera"
                                    @RespuestaImprimir="
                                        respuestaImprimir = $event
                                    "
                                    :id-sec-cir-pro="form.idCirugiaProgramada"
                                ></registro-anestesico>
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
            selectedDiagnostico: "",
            diagnosticos: [],

            selectedCirujano: "",
            cirujanos: [],

            selectedAnestesiologo: "",
            anestesiologos: [],

            selectedAyudante1: "",
            ayudantes1: [],

            selectedAyudante2: "",
            ayudantes2: [],

            selectedInstrumentista: "",
            instrumentistas: [],

            selectedTarifaria: "",
            tarifarias: [],

            prefijo: "",
            //cirugia_id: 0,
            titulo_seleccionado: "Registro de anestecia",
            respuestaFinProceso: 0,
            respuestaImprimir: 1,
            form: {
                idCirugiaProgramada: "",
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
                servicio: "",
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
                id_especializacion: 0,
            },
        };
    },
    mounted: function() {
        this.flashMessage.setStrategy("multiple");
        this.setSelectedCirujano();
        this.setSelectedAnestesiologo();
        this.setSelectedAyudante();
        this.setSelectedDiagnostico();
        this.setSelectedTarifaria();

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
        cargarDiagnosticoPorCodigo(id_diagnostico) {
            if (id_diagnostico != "") {
                let that = this;
                let url =
                    "/modulos/parametrizacion/diagnostico/cargar_diagnostico_por_codigo/" +
                    id_diagnostico;
                var loader = that.$loading.show();
                axios
                    .get(url)
                    .then(function(response) {
                        //Obtiene los datos de Motivo Antecedentes
                        if (
                            response.data.diagnostico != null &&
                            response.data.diagnostico != undefined
                        ) {
                            //Pre
                            that.form.diagnostico_preoperatorio =that.$funcionesGlobales.toCapitalFirstAllWords(response.data.diagnostico.descripcion);
                            that.form.id_diagnostico_pre =response.data.diagnostico.id;

                            //Post
                            that.selectedDiagnostico = that.$funcionesGlobales.toCapitalFirstAllWords(response.data.diagnostico.descripcion);
                            that.form.id_diagnostico =response.data.diagnostico.id;
                        }
                        loader.hide();
                    })
                    .catch(error => {
                        //Errores
                        loader.hide();
                        that.$swal({
                            icon: "error",
                            title: "Existe un error",
                            text: error
                        });
                    });
            }
        },
        setSelectedDiagnostico(value) {
            let that = this;
            if (this.selectedDiagnostico.id_diagnostico != null) {
                this.form.id_diagnostico = this.selectedDiagnostico.id_diagnostico;
            }
            if (this.diagnosticos.length == 0) {
                if (this.selectedDiagnostico != "") {
                    var loader = that.$loading.show();
                    let url =
                        "/modulos/parametrizacion/diagnostico/cargar_diagnostico_combo_box/" +
                        this.selectedDiagnostico;

                    axios
                        .get(url)
                        .then(function(response) {
                            let diagnosticos = [];
                            response.data.diagnosticos.forEach(diagnostico => {
                                let objeto = {};
                                objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                                    diagnostico.descripcion
                                );
                                objeto.id_diagnostico = diagnostico.id;
                                diagnosticos.push(objeto);
                            });
                            that.diagnosticos = diagnosticos;
                            loader.hide();
                        })
                        .catch(error => {
                            that.flashMessage.show({
                                status: "error",
                                title:
                                    "Error al procesar setSelectedDiagnostico",
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
            } else {
                this.diagnosticos = [];
            }
        },
        setSelectedCirujano(value) {
            let that = this;
            var loader = that.$loading.show();
            let url = "/modulos/admision/medico/cargar_cirujano";
            if (value != null) {
                this.form.id_cirujano = value.id_cirujano;
                loader.hide();
            }
            axios
                .get(url)
                .then(function(response) {
                    let cirujanos = [];
                    response.data.medicos.forEach(medico => {
                        let objeto = {};
                        objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                            medico.FULLNAME
                        );
                        objeto.id_cirujano = medico.id;
                        cirujanos.push(objeto);
                    });
                    that.cirujanos = cirujanos;
                    loader.hide();
                })
                .catch(error => {
                    //Errores
                    /* that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    }); */
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar setSelectedCirujano",
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
                    loader.hide();
                });
        },
        setSelectedAnestesiologo(value) {
            let that = this;
            var loader = that.$loading.show();
            this.form.id_especializacion = 3;
            let url =
                "/modulos/admision/medico/cargar_medico_por_especializacion/" +
                that.form.id_especializacion;
            if (value != null) {
                this.form.id_anestesiologo = value.id_anestesiologo;
                loader.hide();
            }
            axios
                .get(url)
                .then(function(response) {
                    let anestesiologos = [];
                    response.data.medicos.forEach(medico => {
                        let objeto = {};
                        objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                            medico.FULLNAME
                        );
                        objeto.id_anestesiologo = medico.id;
                        anestesiologos.push(objeto);
                    });
                    that.anestesiologos = anestesiologos;
                    loader.hide();
                })
                .catch(error => {
                    //Errores
                    /* that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    }); */
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar setSelectedAnestesiologo",
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
                    loader.hide();
                });
        },
        setSelectedAyudante(value) {
            let that = this;
            var loader = that.$loading.show();
            let url = "/modulos/admision/medico/cargar_medico_all";
            if (value != null) {
                if (value.id_ayudante1 != null) {
                    this.form.id_ayudante1 = value.id_ayudante1;
                }
                if (value.id_ayudante2 != null) {
                    this.form.id_ayudante2 = value.id_ayudante2;
                }
                if (value.id_instrumentista != null) {
                    this.form.id_instrumentista = value.id_instrumentista;
                }
                loader.hide();
            }
            axios
                .get(url)
                .then(function(response) {
                    let ayudante1 = [];
                    let ayudante2 = [];
                    let instrumentistas = [];
                    response.data.medicos.forEach(medico => {
                        //Ayudante 1
                        let objeto1 = {};
                        objeto1.display1 = that.$funcionesGlobales.toCapitalFirstAllWords(
                            medico.FULLNAME
                        );
                        objeto1.id_ayudante1 = medico.id;
                        ayudante1.push(objeto1);
                        //Ayudante 2
                        let objeto2 = {};
                        objeto2.display2 = that.$funcionesGlobales.toCapitalFirstAllWords(
                            medico.FULLNAME
                        );
                        objeto2.id_ayudante2 = medico.id;
                        ayudante2.push(objeto2);
                        //Instrumentista
                        let objeto3 = {};
                        objeto3.display3 = that.$funcionesGlobales.toCapitalFirstAllWords(
                            medico.FULLNAME
                        );
                        objeto3.id_instrumentista = medico.id;
                        instrumentistas.push(objeto3);
                    });
                    that.ayudantes1 = ayudante1;
                    that.ayudantes2 = ayudante2;
                    that.instrumentistas = instrumentistas;
                    loader.hide();
                })
                .catch(error => {
                    //Errores
                    /* that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    }); */
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar setSelectedAyudante",
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
                    loader.hide();
                });
        },
        setSelectedTarifaria(value) {
            let that = this;
            if (this.selectedTarifaria.id_tarifaria != null) {
                this.form.id_tarifaria = this.selectedTarifaria.id_tarifaria;
            }
            if (this.tarifarias.length == 0) {
                if (this.selectedTarifaria != "") {
                    var loader = that.$loading.show();
                    let url =
                        "/modulos/parametrizacion/tarifario/consultar_tarifario/" +
                        this.selectedTarifaria;

                    axios
                        .get(url)
                        .then(function(response) {
                            let tarifariosMedicinas = [];
                            response.data.tarifariosMedicinas.forEach(
                                tarifarioMedicina => {
                                    let objeto = {};
                                    objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                                        tarifarioMedicina.descripcion
                                    );
                                    objeto.id_tarifaria =
                                        tarifarioMedicina.codigo;
                                    tarifariosMedicinas.push(objeto);
                                }
                            );
                            that.tarifarias = tarifariosMedicinas;
                            loader.hide();
                        })
                        .catch(error => {
                            that.flashMessage.show({
                                status: "error",
                                title:
                                    "Error al procesar setSelectedDiagnostico",
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
            } else {
                this.tarifarias = [];
            }
        },
        /* Metodos para Llamar al Modal y la Tabla */
        mostrarModalListaCirugiaPaciente() {
            this.$modal.show("ListaCirugiaProgramadaPaciente");
        },
        handleSeleccionarClick(value) {
            //this.paciente = value;
            this.form.idCirugiaProgramada = value.SecCirPro;
            this.form.paciente = value.nombrePaciente;
            this.form.historia_clinica = value.historiaClinica;
            this.form.fecha = value.fechaProgramada;
            this.form.edad = value.edad;
            this.form.sexo = value.sexo;
            this.form.sala = value.sala;
            this.form.cama = value.cama;
            //this.form.id_diagnostico = value.id_diagnostico;
            this.cargarDiagnosticoPorCodigo(value.id_diagnostico);
            this.form.cirujano = value.cirujano;
            this.form.anestesiologo = value.anestesiologo;
            this.form.quirofano = value.quirofano;
            this.form.operacion_propuesta = value.procedimiento;

            this.$modal.hide("ListaCirugiaProgramadaPaciente");
            if (this.$refs.revisionSistema != null) {
                this.$refs.revisionSistema.cargarRevisionSistema();
            }
        },
        /* Fin para llamar al Modal y la Tabla */
        guardarCabecera(registro_anestesia_id) {
            let that = this;
            let url = "";
            let mensaje = "";
            url = "/modulos/cirugia/anestesia/guardar_datos_registro";
            this.form.registro_anestesia_id = registro_anestesia_id;
            var loader = that.$loading.show();
            axios
                .post(url, this.form)
                .then(function(response) {
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar guardarCabecera",
                        message: "Datos guardados correctamente.",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/success.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                    loader.hide();
                })
                .catch(error => {
                    //Errores de validación
                    loader.hide();
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar guardarDrograAdministrada",
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
                });
        },
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
                this.form.idCirugiaProgramada = "";
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
                        this.form.idCirugiaProgramada
                );
            }
        }
    }
};
</script>

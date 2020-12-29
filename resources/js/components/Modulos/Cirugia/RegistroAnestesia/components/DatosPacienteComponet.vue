<template>
    <div class="row justify-content-center">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-left col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                                <label class="col-form-label">Paciente</label>
                                <input
                                    disabled
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="Nombre del Paciente"
                                    v-model="form.paciente"
                                />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 text-left">
                                <label class="col-form-label"
                                    >N° Historia Clínica</label
                                >
                                <input
                                    disabled
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="N° Historia Clínica"
                                    v-model="form.historia_clinica"
                                />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 text-left">
                                <label class="col-form-label">Fecha</label>
                                <input
                                    disabled
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="Fecha"
                                    v-model="form.fecha"
                                />
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 text-left">
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
                            <div class="col-lg-1 col-md-1 col-sm-1 text-left">
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
                            <div class="col-lg-1 col-md-1 col-sm-1 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Est.(cm)</label
                                >
                                <input
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="Estatura"
                                    v-model="form.estatura"
                                />
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Peso(Kg)</label
                                >
                                <input
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="Peso"
                                    v-model="form.peso"
                                />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Ocupación Actual</label
                                >
                                <input
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="Ocupación Actual"
                                    v-model="form.ocupacion_actual"
                                />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Servicio</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            taggable
                                            push-tags
                                            v-model="selectedServicioMedico"
                                            :value="form.id_servicio_medico"
                                            :options="serviciosMedicos"
                                            label="display"
                                            @input="setSelectedServicioMedico"
                                        >
                                            <template slot="no-options"
                                                >Seleccione un Cirujano(a)</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Sala</label
                                >
                                <input
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="Sala"
                                    v-model="form.sala"
                                    disabled
                                />
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Cama</label
                                >
                                <input
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="Cama"
                                    v-model="form.cama"
                                    disabled
                                />
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Diagnóstico Preoperatorio</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            taggable
                                            push-tags
                                            placeholder="Ingrese el diagnóstico a buscar"
                                            v-model="selectedDiagnosticoPre"
                                            :value="form.id_diagnostico_pre"
                                            :options="diagnosticosPre"
                                            label="display"
                                            @input="setSelectedDiagnosticoPre"
                                        >
                                            <template slot="no-options"
                                                >No existen datos</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Diagnóstico Post-operatorio</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            taggable
                                            push-tags
                                            placeholder="Ingrese el diagnóstico a buscar"
                                            v-model="selectedDiagnostico"
                                            :value="form.id_diagnostico"
                                            :options="diagnosticos"
                                            label="display"
                                            @input="setSelectedDiagnostico"
                                        >
                                            <template slot="no-options"
                                                >No existen datos</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Operación Propuesta:</label
                                >
                                <textarea
                                    disabled
                                    rows="1"
                                    type="text"
                                    class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                    placeholder="Operación Propuesta"
                                    v-model="form.operacion_propuesta"
                                />
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Cirujano(a)</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            placeholder="Seleccione un Cirujano(a)"
                                            v-model="selectedCirujano"
                                            :value="form.id_cirujano"
                                            :options="cirujanos"
                                            label="display"
                                            @input="setSelectedCirujano"
                                        >
                                            <template slot="no-options"
                                                >No existen datos</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Ayudante</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            placeholder="Seleccione un Ayudante"
                                            v-model="selectedAyudante1"
                                            :value="form.id_ayudante1"
                                            :options="ayudantes1"
                                            label="display1"
                                            @input="setSelectedAyudante"
                                        >
                                            <template slot="no-options"
                                                >No existen datos</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Operación Realizada:</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            taggable
                                            push-tags
                                            placeholder="Ingrese la Operación Realizada"
                                            v-model="selectedTarifaria"
                                            :value="form.id_tarifaria"
                                            :options="tarifarias"
                                            label="display"
                                            @input="setSelectedTarifaria"
                                        >
                                            <template slot="no-options"
                                                >No existen datos</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Anestesiólogo(a)</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            placeholder="Seleccione un Anestesiológo(a)"
                                            v-model="selectedAnestesiologo"
                                            :value="form.id_anestesiologo"
                                            :options="anestesiologos"
                                            label="display"
                                            @input="setSelectedAnestesiologo"
                                        >
                                            <template slot="no-options"
                                                >No existen datos</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Ayudante</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            placeholder="Seleccione un Ayudante"
                                            v-model="selectedAyudante2"
                                            :value="form.id_ayudante2"
                                            :options="ayudantes2"
                                            label="display2"
                                            @input="setSelectedAyudante"
                                        >
                                            <template slot="no-options"
                                                >No existen datos</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-left">
                                <label
                                    class="col-lg-12 col-md-12 col-sm-12 col-form-label"
                                    >Instrumentista:</label
                                >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <v-select
                                            placeholder="Seleccione un Instrumentista"
                                            v-model="selectedInstrumentista"
                                            :value="form.id_instrumentista"
                                            :options="instrumentistas"
                                            label="display3"
                                            @input="setSelectedAyudante"
                                        >
                                            <template slot="no-options"
                                                >No existen datos</template
                                            >
                                        </v-select>
                                    </div>
                                </div>
                            </div>
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
        datosPaciente:{
            type: Object,
            required: true
        },
        idRegistroAnestesia: {
            type: Number
        }
    },
    data: function() {
        return {
            selectedServicioMedico: "",
            serviciosMedicos: [],

            selectedDiagnosticoPre: "",
            diagnosticosPre: [],

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
            form: {
                idCirugiaProgramada: "0001",
                idCirugiaProgramadaTemporal: "",
                registro_anestesia_id: 0,
                /* Datos del paciente */
                paciente: "",
                historia_clinica: "",
                fecha: "00-00-0000",
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
        this.cargarComboBox();
    },
    methods: {
        cargarComboBox(){
            this.setSelectedCirujano();
            this.setSelectedAnestesiologo();
            this.setSelectedAyudante();
            this.setSelectedDiagnostico();
            this.setSelectedTarifaria();
            this.cargarDiagnosticoPorCodigo(this.$props.datosPaciente);
        },
        setSelectedServicioMedico(value) {
            if (this.form.id_servicio_medico > 0) {
                let that = this;
                let url =
                    "/modulos/parametrizacion/servicio_medico/cargar_servicio_medico_por_medico/" +
                    this.form.id_servicio_medico;
                if (value != null) {
                    this.form.id_servicio_medico = +value.id_servicio_medico;
                }
                axios
                    .get(url)
                    .then(function(response) {
                        let serviciosMedicos = [];
                        response.data.serviciosMedicos.forEach(
                            servicioMedico => {
                                let objeto = {};
                                objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                                    servicioMedico.descripcion
                                );
                                objeto.id_servicio_medico = servicioMedico.id;
                                serviciosMedicos.push(objeto);
                            }
                        );
                        that.serviciosMedicos = serviciosMedicos;
                    })
                    .catch(error => {
                        that.flashMessage.show({
                            status: "error",
                            title:
                                "Error al procesar setSelectedServicioMedico",
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
                            let diagnosticosPre = [];
                            let diagnosticos = [];
                            response.data.diagnosticos.forEach(diagnostico => {
                                let objeto = {};
                                //Post
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
        setSelectedDiagnosticoPre(value) {
            let that = this;
            if (this.selectedDiagnosticoPre.id_diagnostico_pre != null) {
                this.form.id_diagnostico_pre = this.selectedDiagnosticoPre.id_diagnostico_pre;
            }
            if (this.diagnosticosPre.length == 0) {
                if (this.selectedDiagnosticoPre != "") {
                    var loader = that.$loading.show();
                    let url =
                        "/modulos/parametrizacion/diagnostico/cargar_diagnostico_combo_box/" +
                        this.selectedDiagnosticoPre;
                    axios
                        .get(url)
                        .then(function(response) {
                            let diagnosticosPre = [];
                            response.data.diagnosticos.forEach(
                                diagnosticoPres => {
                                    let objeto = {};
                                    //Pre
                                    objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                                        diagnosticoPres.descripcion
                                    );
                                    objeto.id_diagnostico_pre =
                                        diagnosticoPres.id;
                                    diagnosticosPre.push(objeto);
                                }
                            );
                            that.diagnosticosPre = diagnosticosPre;
                            loader.hide();
                        })
                        .catch(error => {
                            that.flashMessage.show({
                                status: "error",
                                title:
                                    "Error al procesar setSelectedDiagnosticoPre",
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
                this.diagnosticosPre = [];
            }
        },
        setSelectedCirujano(value) {
            let that = this;
            var loader = that.$loading.show();
            let url = "/modulos/admision/medico/cargar_cirujano";
            if (value != null) {
                this.form.id_cirujano = value.id_cirujano;
                this.form.id_servicio_medico = value.id_servicio_medico;
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
                        objeto.id_servicio_medico = +medico.tipo_medico_servicio;
                        cirujanos.push(objeto);
                    });
                    that.cirujanos = cirujanos;
                    loader.hide();
                    that.setSelectedServicioMedico();
                })
                .catch(error => {
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
        cargarDiagnosticoPorCodigo(value) {
            if (value.id_diagnostico != "") {
                let that = this;
                let url =
                    "/modulos/parametrizacion/diagnostico/cargar_diagnostico_por_codigo/" +
                    value.id_diagnostico;
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
                            that.selectedDiagnosticoPre = that.$funcionesGlobales.toCapitalFirstAllWords(
                                response.data.diagnostico.descripcion
                            );
                            that.form.id_diagnostico_pre =
                                response.data.diagnostico.codigo;

                            //Post
                            that.selectedDiagnostico = that.$funcionesGlobales.toCapitalFirstAllWords(
                                response.data.diagnostico.descripcion
                            );
                            that.form.id_diagnostico =
                                response.data.diagnostico.codigo;
                            that.form.idCirugiaProgramadaTemporal =
                                value.SecCirPro;
                            that.form.idCirugiaProgramada = value.SecCirPro;
                            that.form.paciente = value.nombrePaciente;
                            that.form.historia_clinica = value.historiaClinica;
                            that.form.fecha = value.fechaProgramada;
                            that.form.edad = value.edad;
                            that.form.sexo = value.sexo;
                            that.form.sala = value.sala;
                            that.form.cama = value.cama;
                            that.form.cirujano = value.cirujano;
                            that.form.anestesiologo = value.anestesiologo;
                            that.form.quirofano = value.quirofano;
                            that.form.operacion_propuesta = value.procedimiento;
                        }
                        loader.hide();
                    })
                    .catch(error => {
                        that.flashMessage.show({
                                status: "error",
                                title:
                                    "Error al procesar cargarDiagnosticoPorCodigo",
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
        validarForm(){
            //return true;
            if(this.form.id_diagnostico_pre <=0 ){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita seleccionar un Diagnóstico Preoperatorio.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.form.id_diagnostico <=0 ){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita seleccionar un Diagnóstico Post-Operatorio",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.form.estatura == ""){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita una Estatura.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.form.peso == ""){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita un Peso.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.form.id_cirujano <= 0){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita seleccionar un Cirujano(a).",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.form.id_ayudante1 <= 0){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita seleccionar un Ayudante.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.form.id_tarifaria <= 0){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita seleccionar la Operación Realizada.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.form.id_anestesiologo <= 0){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita seleccionar un Anestesiologo.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.form.id_instrumentista <= 0){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita seleccionar un Instrumentista.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if(this.selectedServicioMedico == ""){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Se necesita seleccionar el Servicio.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background:
                                "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            return true;
        },
        guardarModificarDatosPaciente() {
            this.form.registro_anestesia_id = this.$props.idRegistroAnestesia;
            let that = this;
            let url = "";
            let mensaje = "";
            url = "/modulos/cirugia/anestesia/guardar_datos_registro";
            var loader = that.$loading.show();
            axios
                .post(url, this.form)
                .then(function(response) {
                    /* that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar",
                        message: "Datos guardados correctamente.",
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
                        title: "Error al procesar guardarModificarDatosPaciente",
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
    },

    computed: {}
};
</script>

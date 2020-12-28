<template>
    <div class="col-md-12">
        <div class="card card-warning">
            <div class="card-body">
                <form role="form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="card-footer">
                                    <!-- Cardiovascular -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <label>Cardiovascular</label>
                                            <div class="row">
                                                <!-- Hipertensión -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline1"
                                                            @click="
                                                                validarChkHipertension()
                                                            "
                                                            value="1"
                                                            v-model="
                                                                chk.chk_hipertension
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline1"
                                                            >Hipertensión</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Enf. Coronaria -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline2"
                                                            @click="
                                                                validarChkEnfCoronaria()
                                                            "
                                                            v-model="
                                                                chk.chk_enfCoronaria
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline2"
                                                            >Enf.
                                                            Coronaria</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Arritmias -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline3"
                                                            @click="
                                                                validarChkArritmias()
                                                            "
                                                            v-model="
                                                                chk.chk_arritmias
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline3"
                                                        >
                                                            Arritmias
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- Otros -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline4"
                                                            @click="
                                                                validarChkOtrosCardiovascular()
                                                            "
                                                            v-model="
                                                                chk.chk_otrosCardiovascular
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline4"
                                                            >Otros</label
                                                        >
                                                        <div
                                                            class="col-10"
                                                            v-if="
                                                                form.frm_otrosCardiovascular
                                                            "
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cuál?"
                                                                v-model="form.frm_otrosCardiovascularValor"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Enf. Valvular -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline5"
                                                            @click="
                                                                validarChkEnfValvular()
                                                            "
                                                            v-model="
                                                                chk.chk_enfValvular
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline5"
                                                            >Enf.
                                                            Valvular</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Várices -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline6"
                                                            @click="
                                                                validarChkVarices()
                                                            "
                                                            v-model="
                                                                chk.chk_varices
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline6"
                                                            >Várices</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Claudicación -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline7"
                                                            @click="
                                                                validarChkClaudicacion()
                                                            "
                                                            v-model="
                                                                chk.chk_claudicacion
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline7"
                                                            >Claudicación</label
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Respiratorio -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <label>Respiratorio</label>
                                            <div class="row">
                                                <!-- EPOC -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline8"
                                                            value="1"
                                                            @click="
                                                                validarChkEpoc()
                                                            "
                                                            v-model="
                                                                chk.chk_epoc
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline8"
                                                            >EPOC</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Asma -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline9"
                                                            @click="
                                                                validarChkAsma()
                                                            "
                                                            v-model="
                                                                chk.chk_asma
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline9"
                                                            >Asma</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- TBC -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline10"
                                                            @click="
                                                                validarChkTbc()
                                                            "
                                                            v-model="
                                                                chk.chk_tbc
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline10"
                                                        >
                                                            TBC
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- Otros -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline11"
                                                            @click="
                                                                validarChkOtrosRespiratorio()
                                                            "
                                                            v-model="
                                                                chk.chk_otrosRespiratorio
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline11"
                                                            >Otros</label
                                                        >
                                                        <div
                                                            class="col-10"
                                                            v-if="
                                                                form.frm_otrosRespiratorio
                                                            "
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cuál?"
                                                                v-model="form.frm_otrosRespiratorioValor"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Neurológico -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <label>Neurológico</label>
                                            <div class="row">
                                                <!-- Convulsiones -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline12"
                                                            value="1"
                                                            @click="
                                                                validarChkConvulsiones()
                                                            "
                                                            v-model="
                                                                chk.chk_convulsiones
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline12"
                                                            >Convulsiones</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- ECV -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline13"
                                                            @click="
                                                                validarChkEcv()
                                                            "
                                                            v-model="
                                                                chk.chk_ecv
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline13"
                                                            >ECV</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Meningitis -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline14"
                                                            @click="
                                                                validarChkMeningitis()
                                                            "
                                                            v-model="
                                                                chk.chk_meningitis
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline14"
                                                        >
                                                            Meningitis
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- Enf. Mental -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline15"
                                                            @click="
                                                                validarChkEnfMental()
                                                            "
                                                            v-model="
                                                                chk.chk_enfMental
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline15"
                                                            >Enf. Mental</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Otros -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline16"
                                                            @click="
                                                                validarChkOtrosNeurologico()
                                                            "
                                                            v-model="
                                                                chk.chk_otrosNeurologico
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline16"
                                                            >Otros</label
                                                        >
                                                        <div
                                                            class="col-10"
                                                            v-if="
                                                                form.frm_otrosNeurologico
                                                            "
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cuál?"
                                                                v-model="form.frm_otrosNeurologicoValor"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Nefrológico -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <label>Nefrológico</label>
                                            <div class="row">
                                                <!-- IRA -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline17"
                                                            value="1"
                                                            @click="
                                                                validarChkIra()
                                                            "
                                                            v-model="
                                                                chk.chk_ira
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline17"
                                                            >IRA</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Infección Unitaria -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline18"
                                                            @click="
                                                                validarChkInfeccionUnitaria()
                                                            "
                                                            v-model="
                                                                chk.chk_infeccionUnitaria
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline18"
                                                            >Infección
                                                            Urinaria</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- IRC -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline19"
                                                            @click="
                                                                validarChkIrc()
                                                            "
                                                            v-model="
                                                                chk.chk_irc
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline19"
                                                        >
                                                            IRC
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- Otros -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline20"
                                                            @click="
                                                                validarChkOtrosNefrologicos()
                                                            "
                                                            v-model="
                                                                chk.chk_otrosNefrologicos
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline20"
                                                            >Otros</label
                                                        >
                                                        <div
                                                            class="col-10"
                                                            v-if="
                                                                form.frm_otrosNefrologicos
                                                            "
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cuál?"
                                                                v-model="form.frm_otrosNefrologicosValor"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Gastrointestinal -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <label>Gastrointestinal</label>
                                            <div class="row">
                                                <!-- Ulcera -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline21"
                                                            value="1"
                                                            @click="
                                                                validarChkUlcera()
                                                            "
                                                            v-model="
                                                                chk.chk_ulcera
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline21"
                                                            >Úlcera</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Estomago Lleno -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline22"
                                                            @click="
                                                                validarChkEstomagoLleno()
                                                            "
                                                            v-model="
                                                                chk.chk_estomagoLleno
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline22"
                                                            >Estómago
                                                            Lleno</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Otros -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline23"
                                                            @click="
                                                                validarChkOtrosGastrointestinal()
                                                            "
                                                            v-model="
                                                                chk.chk_otrosGastrointestinal
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline23"
                                                        >
                                                            Otros
                                                        </label>
                                                        <div
                                                            class="col-10"
                                                            v-if="
                                                                form.frm_otrosGastrointestinal
                                                            "
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cuál?"
                                                                v-model="form.frm_otrosGastrointestinalValor"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sistema Endocrino -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <label>Sistema Endocrino</label>
                                            <div class="row">
                                                <!-- Diabetes -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline24"
                                                            value="1"
                                                            @click="
                                                                validarChkDiabetes()
                                                            "
                                                            v-model="
                                                                chk.chk_diabetes
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline24"
                                                            >Diabetes</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Hipertiroidismo -->
                                                <div class="col-sm-3">
                                                    <div></div>
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline25"
                                                            @click="
                                                                validarChkHipertiroidismo()
                                                            "
                                                            v-model="
                                                                chk.chk_hipertiroidismo
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline25"
                                                            >Hipertiroidismo</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Obesidad -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline26"
                                                            @click="
                                                                validarChkObecidad()
                                                            "
                                                            v-model="
                                                                chk.chk_obecidad
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline26"
                                                        >
                                                            Obesidad
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- Otros -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline27"
                                                            @click="
                                                                validarChkOtrosSistemaEndocrima()
                                                            "
                                                            v-model="
                                                                chk.chk_otrosSistemaEndocrima
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline27"
                                                        >
                                                            Otros
                                                        </label>
                                                        <div
                                                            class="col-10"
                                                            v-if="
                                                                form.frm_otrosSistemaEndocrima
                                                            "
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cuál?"
                                                                v-model="form.frm_otrosSistemaEndocrimaValor"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Antecedentes Familiares-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        idSecCirPro: {
            type: String,
            required: true
        },
        user: {
            type: Object
        },
        rutaSelloImg:{
            type: String
        }
    },
    data: function() {
        return {
            validarCargarDatos: 0,
            respuestaImprimir: 0,
             rutaSello: "",
            frmimg: {
                imgFirma: null,
                imgGrafica: null,
            },
            chk: {
                /* Cardiovascular  */
                chk_hipertension: 0,
                chk_enfCoronaria: 0,
                chk_arritmias: 0,
                chk_otrosCardiovascular: 0,
                chk_enfValvular: 0,
                chk_varices: 0,
                chk_claudicacion: 0,

                /* Respiratorio */
                chk_epoc: 0,
                chk_asma: 0,
                chk_tbc: 0,
                chk_otrosRespiratorio: 0,

                /* Neurologico */
                chk_convulsiones: 0,
                chk_ecv: 0,
                chk_meningitis: 0,
                chk_convulsion: 0,
                chk_enfMental: 0,
                chk_otrosNeurologico: 0,

                /* Nefrologicos */
                chk_ira: 0,
                chk_infeccionUnitaria: 0,
                chk_irc: 0,
                chk_otrosNefrologicos: 0,

                /* Gastrointestinal */
                chk_ulcera: 0,
                chk_estomagoLleno: 0,
                chk_otrosGastrointestinal: 0,

                /* Sistema Endocrima */
                chk_diabetes: 0,
                chk_hipertiroidismo: 0,
                chk_obecidad: 0,
                chk_otrosSistemaEndocrima: 0
            },
            form: {
                frm_idCirugiaProgramada: "",
                frm_id_revision_sistema: 0,

                /* Cardiovascular  */
                frm_hipertension: 0,
                frm_enfCoronaria: 0,
                frm_arritmias: 0,
                frm_otrosCardiovascular: 0,
                frm_otrosCardiovascularValor: "",
                frm_enfValvular: 0,
                frm_varices: 0,
                frm_claudicacion: 0,

                /* Respiratorio */
                frm_epoc: 0,
                frm_asma: 0,
                frm_tbc: 0,
                frm_otrosRespiratorio: 0,
                frm_otrosRespiratorioValor: "",

                /* Neurologico */
                frm_convulsiones: 0,
                frm_ecv: 0,
                frm_meningitis: 0,
                frm_convulsion: 0,
                frm_enfMental: 0,
                frm_otrosNeurologico: 0,
                frm_otrosNeurologicoValor: "",

                /* Nefrologicos */
                frm_ira: 0,
                frm_infeccionUnitaria: 0,
                frm_irc: 0,
                frm_otrosNefrologicos: 0,
                frm_otrosNefrologicosValor: "",

                /* Gastrointestinal */
                frm_ulcera: 0,
                frm_estomagoLleno: 0,
                frm_otrosGastrointestinal: 0,
                frm_otrosGastrointestinalValor: "",

                /* Sistema Endocrima */
                frm_diabetes: 0,
                frm_hipertiroidismo: 0,
                frm_obecidad: 0,
                frm_otrosSistemaEndocrima: 0,
                frm_otrosSistemaEndocrimaValor: "",
            }
        };
    },
    watch: {
        idSecCirPro: function(val) {
            this.cargarRevisionSistema();
        }
    },
    mounted: function() {
        /* let nombreModulo = this.$nombresModulo.gestion_hospitalaria;
        let nombreFormulario = this.$nombresFormulario.gestion_hospitalaria
            .admistracion_de_citas.citas.motivo_antecedentes.nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Ingreso"
        );
        if (this.$props.idCita != null) {
            this.cargarAtencionMotivo();
        } */
        if (this.$props.idSecCirPro != null) {
            this.cargarRevisionSistema();
        }
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
        //Metodo para cargar el motivo antecedente del paciente mediantes el cod cita
        cargarRevisionSistema: function() {
            let that = this;
            let url =
                "/modulos/cirugia/valoracionPreanestecia/cargar_revision_sistema_campo/" +
                that.$props.idSecCirPro;
            var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {
                    //Obtiene los datos de Motivo Antecedentes
                    if (
                        response.data.revisionSistema != null &&
                        response.data.revisionSistema != undefined
                    ) {
                        /* Cardiovascular */
                        that.chk.chk_hipertension = +response.data
                            .revisionSistema.hipertension;
                        that.form.frm_hipertension = +response.data
                            .revisionSistema.hipertension;

                        that.chk.chk_enfCoronaria = +response.data
                            .revisionSistema.enfCoronaria;
                        that.form.frm_enfCoronaria = +response.data
                            .revisionSistema.enfCoronaria;

                        that.chk.chk_arritmias = +response.data.revisionSistema
                            .arritmias;
                        that.form.frm_arritmias = +response.data.revisionSistema
                            .arritmias;

                        that.chk.chk_otrosCardiovascular = +response.data
                            .revisionSistema.otrosCardiovascular;
                        that.form.frm_otrosCardiovascular = +response.data
                            .revisionSistema.otrosCardiovascular;

                        that.chk.chk_enfValvular = +response.data
                            .revisionSistema.enfValvular;
                        that.form.frm_enfValvular = +response.data
                            .revisionSistema.enfValvular;

                        that.chk.chk_varices = +response.data.revisionSistema
                            .varices;
                        that.form.frm_varices = +response.data.revisionSistema
                            .varices;

                        that.chk.chk_claudicacion = +response.data
                            .revisionSistema.claudicacion;
                        that.form.frm_claudicacion = +response.data
                            .revisionSistema.claudicacion;

                        /* Respiratorio */
                        that.chk.chk_epoc = +response.data.revisionSistema.epoc;
                        that.form.frm_epoc = +response.data.revisionSistema
                            .epoc;

                        that.chk.chk_asma = +response.data.revisionSistema.asma;
                        that.form.frm_asma = +response.data.revisionSistema
                            .asma;

                        that.chk.chk_tbc = +response.data.revisionSistema.tbc;
                        that.form.frm_tbc = +response.data.revisionSistema.tbc;

                        that.chk.chk_otrosRespiratorio = +response.data
                            .revisionSistema.otrosRespiratorio;
                        that.form.frm_otrosRespiratorio = +response.data
                            .revisionSistema.otrosRespiratorio;

                        /* Neurologico */
                        that.chk.chk_convulsiones = +response.data
                            .revisionSistema.convulsiones;
                        that.form.frm_convulsiones = +response.data
                            .revisionSistema.convulsiones;

                        that.chk.chk_ecv = +response.data.revisionSistema.ecv;
                        that.form.frm_ecv = +response.data.revisionSistema.ecv;

                        that.chk.chk_meningitis = +response.data.revisionSistema
                            .meningitis;
                        that.form.frm_meningitis = +response.data
                            .revisionSistema.meningitis;

                        that.chk.chk_enfMental = +response.data.revisionSistema
                            .enfMental;
                        that.form.frm_enfMental = +response.data.revisionSistema
                            .enfMental;

                        that.chk.chk_otrosNeurologico = +response.data
                            .revisionSistema.otrosNeurologico;
                        that.form.frm_otrosNeurologico = +response.data
                            .revisionSistema.otrosNeurologico;

                        /* Nefrológico */
                        that.chk.chk_ira = +response.data.revisionSistema.ira;
                        that.form.frm_ira = +response.data.revisionSistema.ira;

                        that.chk.chk_infeccionUnitaria = +response.data
                            .revisionSistema.infeccionUnitaria;
                        that.form.frm_infeccionUnitaria = +response.data
                            .revisionSistema.infeccionUnitaria;

                        that.chk.chk_irc = +response.data.revisionSistema.irc;
                        that.form.frm_irc = +response.data.revisionSistema.irc;

                        that.chk.chk_otrosNefrologicos = +response.data
                            .revisionSistema.otrosNefrologicos;
                        that.form.frm_otrosNefrologicos = +response.data
                            .revisionSistema.otrosNefrologicos;

                        /* Gastrointestinal */
                        that.chk.chk_ulcera = +response.data.revisionSistema
                            .ulcera;
                        that.form.frm_ulcera = +response.data.revisionSistema
                            .ulcera;

                        that.chk.chk_estomagoLleno = +response.data
                            .revisionSistema.estomagoLleno;
                        that.form.frm_estomagoLleno = +response.data
                            .revisionSistema.estomagoLleno;

                        that.chk.chk_otrosGastrointestinal = +response.data
                            .revisionSistema.otrosGastrointestinal;
                        that.form.frm_otrosGastrointestinal = +response.data
                            .revisionSistema.otrosGastrointestinal;

                        /* Sistema Endocrima */
                        that.chk.chk_diabetes = +response.data.revisionSistema
                            .diabetes;
                        that.form.frm_diabetes = +response.data.revisionSistema
                            .diabetes;

                        that.chk.chk_hipertiroidismo = +response.data
                            .revisionSistema.hipertiroidismo;
                        that.form.frm_hipertiroidismo = +response.data
                            .revisionSistema.hipertiroidismo;

                        that.chk.chk_obecidad = +response.data
                            .revisionSistema.obecidad;
                        that.form.frm_obecidad = +response.data
                            .revisionSistema.obecidad;

                        that.chk.chk_otrosSistemaEndocrima = +response.data
                            .revisionSistema.otrosSistemaEndocrima;
                        that.form.frm_otrosSistemaEndocrima = +response.data
                            .revisionSistema.otrosSistemaEndocrima;

                        that.validarCargarDatos = 1;
                        that.respuestaImprimir = 1;
                    } else {
                        that.validarCargarDatos = 0;
                        that.respuestaImprimir = 0;
                    }
                    that.$emit("ValidarCargarDatos", that.validarCargarDatos);
                    that.$emit("RespuestaImprimir", that.respuestaImprimir);
                    loader.hide();
                })
                .catch(error => {
                    loader.hide();
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar cargarRevisionSistema",
                        message:"Por favor comuníquese con el administrador. " +
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
        },
        //Metodo para guardar o modificar los datos de motivo antecedente
        guardarModificar: function() {
            if (
                this.$props.idSecCirPro != "" ||
                this.$props.idSecCirPro != null
            ) {
                let idCirugiaProgramada = this.$props.idSecCirPro;
                let url =
                    "/modulos/cirugia/valoracionPreanestecia/guardar_modificar_revision_sistema";
                let that = this;
                if (this.validarGuardarModificar == 1) {
                    that.mensaje = "Datos modificados correctamente.";
                } else {
                    that.mensaje = "Datos guardados correctamente.";
                }
                var loader = that.$loading.show();
                this.form.frm_idCirugiaProgramada = idCirugiaProgramada;
                axios
                    .post(url, this.form)
                    .then(function(response) {
                        loader.hide();
                        if(that.form.frm_id_revision_sistema <= 0){
                            that.form.frm_id_revision_sistema = response.data.value;
                            that.$emit("IdRevisionSistema", response.data.value);
                        }
                        /* that.$swal({
                            icon: "success",
                            title: "Proceso realizado exitosamente",
                            text: that.mensaje
                        }); */
                        //that.cargarAtencionMotivo();
                    })
                    .catch(error => {
                        that.flashMessage.show({
                            status: "error",
                            title: "Error al procesar guardarModificar",
                            message:"Por favor comuníquese con el administrador. " +
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
            } else {
                /* let that = this;
                that.$swal({
                    icon: "error",
                    title: "Citas",
                    text: "Debe seleccionar un paciente"
                }); */
            }
        },
        /* Cardiovascular */
        validarChkHipertension() {
            if (this.chk.chk_hipertension) {
                this.form.frm_hipertension = 0;
            } else {
                this.form.frm_hipertension = 1;
            }
        },
        validarChkEnfCoronaria() {
            if (this.chk.chk_enfCoronaria) {
                this.form.frm_enfCoronaria = 0;
            } else {
                this.form.frm_enfCoronaria = 1;
            }
        },
        validarChkArritmias() {
            if (this.chk.chk_arritmias) {
                this.form.frm_arritmias = 0;
            } else {
                this.form.frm_arritmias = 1;
            }
        },
        validarChkOtrosCardiovascular() {
            if (this.chk.chk_otrosCardiovascular) {
                this.form.frm_otrosCardiovascular = 0;
            } else {
                this.form.frm_otrosCardiovascular = 1;
            }
        },
        validarChkEnfValvular() {
            if (this.chk.chk_enfValvular) {
                this.form.frm_enfValvular = 0;
            } else {
                this.form.frm_enfValvular = 1;
            }
        },
        validarChkVarices() {
            if (this.chk.chk_varices) {
                this.form.frm_varices = 0;
            } else {
                this.form.frm_varices = 1;
            }
        },
        validarChkClaudicacion() {
            if (this.chk.chk_claudicacion) {
                this.form.frm_claudicacion = 0;
            } else {
                this.form.frm_claudicacion = 1;
            }
        },
        /* Fin Cardiovascular */
        /* Respiratorio */
        validarChkEpoc() {
            if (this.chk.chk_epoc) {
                this.form.frm_epoc = 0;
            } else {
                this.form.frm_epoc = 1;
            }
        },
        validarChkAsma() {
            if (this.chk.chk_asma) {
                this.form.frm_asma = 0;
            } else {
                this.form.frm_asma = 1;
            }
        },
        validarChkTbc() {
            if (this.chk.chk_tbc) {
                this.form.frm_tbc = 0;
            } else {
                this.form.frm_tbc = 1;
            }
        },
        validarChkOtrosRespiratorio() {
            if (this.chk.chk_otrosRespiratorio) {
                this.form.frm_otrosRespiratorio = 0;
            } else {
                this.form.frm_otrosRespiratorio = 1;
            }
        },
        /* Fin Respiratorio */

        /* Neurológico */
        validarChkConvulsiones() {
            if (this.chk.chk_convulsiones) {
                this.form.frm_convulsiones = 0;
            } else {
                this.form.frm_convulsiones = 1;
            }
        },
        validarChkEcv() {
            if (this.chk.chk_ecv) {
                this.form.frm_ecv = 0;
            } else {
                this.form.frm_ecv = 1;
            }
        },
        validarChkMeningitis() {
            if (this.chk.chk_meningitis) {
                this.form.frm_meningitis = 0;
            } else {
                this.form.frm_meningitis = 1;
            }
        },
        validarChkMeningitis() {
            if (this.chk.chk_meningitis) {
                this.form.frm_meningitis = 0;
            } else {
                this.form.frm_meningitis = 1;
            }
        },
        validarChkEnfMental() {
            if (this.chk.chk_enfMental) {
                this.form.frm_enfMental = 0;
            } else {
                this.form.frm_enfMental = 1;
            }
        },
        validarChkOtrosNeurologico() {
            if (this.chk.chk_otrosNeurologico) {
                this.form.frm_otrosNeurologico = 0;
            } else {
                this.form.frm_otrosNeurologico = 1;
            }
        },
        /* Fin Neurológico */

        /* Nefrológico */
        validarChkIra() {
            if (this.chk.chk_ira) {
                this.form.frm_ira = 0;
            } else {
                this.form.frm_ira = 1;
            }
        },
        validarChkInfeccionUnitaria() {
            if (this.chk.chk_infeccionUnitaria) {
                this.form.frm_infeccionUnitaria = 0;
            } else {
                this.form.frm_infeccionUnitaria = 1;
            }
        },
        validarChkIrc() {
            if (this.chk.chk_irc) {
                this.form.frm_irc = 0;
            } else {
                this.form.frm_irc = 1;
            }
        },
        validarChkOtrosNefrologicos() {
            if (this.chk.chk_otrosNefrologicos) {
                this.form.frm_otrosNefrologicos = 0;
            } else {
                this.form.frm_otrosNefrologicos = 1;
            }
        },
        /* Fin Nefrológico */

        /* Gastrointestinal */
        validarChkUlcera() {
            if (this.chk.chk_ulcera) {
                this.form.frm_ulcera = 0;
            } else {
                this.form.frm_ulcera = 1;
            }
        },
        validarChkEstomagoLleno() {
            if (this.chk.chk_estomagoLleno) {
                this.form.frm_estomagoLleno = 0;
            } else {
                this.form.frm_estomagoLleno = 1;
            }
        },
        validarChkOtrosGastrointestinal() {
            if (this.chk.chk_otrosGastrointestinal) {
                this.form.frm_otrosGastrointestinal = 0;
            } else {
                this.form.frm_otrosGastrointestinal = 1;
            }
        },
        /* Fin Gastrointestinal */
        /* Inicio Sistema Endocrima */
        validarChkDiabetes() {
            if (this.chk.chk_diabetes) {
                this.form.frm_diabetes = 0;
            } else {
                this.form.frm_diabetes = 1;
            }
        },
        validarChkHipertiroidismo() {
            if (this.chk.chk_hipertiroidismo) {
                this.form.frm_hipertiroidismo = 0;
            } else {
                this.form.frm_hipertiroidismo = 1;
            }
        },
        validarChkObecidad() {
            if (this.chk.chk_obecidad) {
                this.form.frm_obecidad = 0;
            } else {
                this.form.frm_obecidad = 1;
            }
        },
        validarChkOtrosSistemaEndocrima() {
            if (this.chk.chk_otrosSistemaEndocrima) {
                this.form.frm_otrosSistemaEndocrima = 0;
            } else {
                this.form.frm_otrosSistemaEndocrima = 1;
            }
        },
        /* Fin Sistema Endocrima */
    }
};
</script>

<template>
    <div class="col-md-12">
        <div class="card card-warning">

            <div class="card-body">
                <form role="form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="card-footer">
                                    <!-- Quirúrgico y Traumático -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Quirúrgico -->
                                                <div class="col-sm-5">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline28"
                                                            value="1"
                                                            @click="
                                                                validarChkQuirurgico()
                                                            "
                                                            v-model="
                                                                chk.chk_quirurgico
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline28"
                                                            >Quirúrgico</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Traumático -->
                                                <div class="col-sm-5">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline29"
                                                            @click="
                                                                validarChkTraumatico()
                                                            "
                                                            v-model="
                                                                chk.chk_traumatico
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline29"
                                                            >Traumático</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- TextArea Quirutgico -->
                                                <div class="col-sm-5">
                                                    <div
                                                        class="card-body"
                                                        v-if="form.frm_quirurgico"
                                                    >
                                                        <form role="form">
                                                            <div class="row">
                                                                <div
                                                                    class="col-sm-12"
                                                                >
                                                                    <div
                                                                        class="form-group"
                                                                    >
                                                                        <textarea
                                                                            type="text"
                                                                            class="form-control"
                                                                            placeholder="Descripción de Quirúrgico"
                                                                            v-model="
                                                                                form.frm_descripcionQuirurgico
                                                                            "
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- TextArea Traumáticos -->
                                                <div class="col-sm-5">
                                                    <div
                                                        class="card-body"
                                                        v-if="form.frm_traumatico"
                                                    >
                                                        <form role="form">
                                                            <div class="row">
                                                                <div
                                                                    class="col-sm-12"
                                                                >
                                                                    <div
                                                                        class="form-group"
                                                                    >
                                                                        <textarea
                                                                            type="text"
                                                                            class="form-control"
                                                                            placeholder="Descripción de Traumáticos"
                                                                            rows="2"
                                                                            v-model="
                                                                                form.frm_descripcionTraumatico
                                                                            "
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Toxicoalérgicos -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Toxicoalérgicos -->
                                                <div class="col-sm-12">
                                                    <label>Toxicoalérgicos</label>
                                                </div>
                                                <!-- Alergias -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline30"
                                                            value="1"
                                                            @click="
                                                                validarChkAlergia()
                                                            "
                                                            v-model="
                                                                chk.chk_alergia
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline30"
                                                            >Alergias</label
                                                        >
                                                    </div>
                                                </div>
                                                <br /><br />
                                                <!-- Tóxico -->
                                                <div class="col-sm-12">
                                                    <label>Tóxicos</label>
                                                </div>
                                                <!-- Tabaco -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline31"
                                                            value="1"
                                                            @click="
                                                                validarChkTabaco()
                                                            "
                                                            v-model="chk.chk_tabaco"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline31"
                                                            >Tabaco</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Cocaina -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline32"
                                                            value="1"
                                                            @click="
                                                                validarChkCocaina()
                                                            "
                                                            v-model="
                                                                chk.chk_cocaina
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline32"
                                                            >Cocaina</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Marihuana -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline33"
                                                            value="1"
                                                            @click="
                                                                validarChkMarihuana()
                                                            "
                                                            v-model="
                                                                chk.chk_marihuana
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline33"
                                                            >Marihuana</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Otros Toxico -->
                                                <div class="col-sm-6">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <input
                                                                    type="checkbox"
                                                                    class="custom-control-input"
                                                                    id="defaultInline34"
                                                                    value="1"
                                                                    @click="
                                                                        validarChkOtrosToxico()
                                                                    "
                                                                    v-model="
                                                                        chk.chk_otrosToxico
                                                                    "
                                                                />
                                                                <label
                                                                    class="custom-control-label"
                                                                    for="defaultInline34"
                                                                    >Otros</label
                                                                >
                                                            </div>
                                                            <div
                                                                class="col-8"
                                                                v-if="
                                                                    form.frm_otrosToxico
                                                                "
                                                            >
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Cuál?"
                                                                    v-model="form.frm_cual_otrosToxico"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Gineco-Obstétricos -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Gineco-Obstétricos -->
                                                <div class="col-sm-12">
                                                    <label
                                                        >Gineco-Obstétricos</label
                                                    >
                                                </div>
                                                <!-- G -->
                                                <div class="col-sm-2">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >G</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="form.frm_g"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- P -->
                                                <div class="col-sm-2">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >P</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="form.frm_p"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- A -->
                                                <div class="col-sm-2">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >A</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="form.frm_a"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- C -->
                                                <div class="col-sm-2">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >C</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="form.frm_c"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FUR -->
                                                <div class="col-sm-4">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >FUR</label
                                                        >
                                                        <div class="col-sm-3 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_fur
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <br /><br />
                                                <!-- Familiares -->
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <!-- Chehbox Familiares -->
                                                        <div class="col-sm-2">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    class="custom-control-input"
                                                                    id="defaultInline35"
                                                                    value="1"
                                                                    @click="
                                                                        validarChkFamiliar()
                                                                    "
                                                                    v-model="
                                                                        chk.chk_familiar
                                                                    "
                                                                />
                                                                <label
                                                                    class="custom-control-label"
                                                                    for="defaultInline35"
                                                                    >Familiares</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <!-- Caja de Texto Familiares -->
                                                        <div
                                                            class="col-sm-8"
                                                            v-if="form.frm_familiar"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cuáles?"
                                                                v-model="form.frm_cual_familiar"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Drogas -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Titulo Drogas -->
                                                <div class="col-sm-12">
                                                    <label>Drogas</label>
                                                </div>
                                                <!-- Esteroides -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline36"
                                                            value="1"
                                                            @click="
                                                                validarChkEsteroide()
                                                            "
                                                            v-model="
                                                                chk.chk_esteroide
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline36"
                                                            >Esteroides</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- AINES -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline37"
                                                            value="1"
                                                            @click="
                                                                validarChkAines()
                                                            "
                                                            v-model="chk.chk_aines"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline37"
                                                            >AINES</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- IECA -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline38"
                                                            value="1"
                                                            @click="
                                                                validarChkIeca()
                                                            "
                                                            v-model="chk.chk_ieca"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline38"
                                                            >IECA</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Inetrópicos -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline39"
                                                            value="1"
                                                            @click="
                                                                validarChkInetropico()
                                                            "
                                                            v-model="
                                                                chk.chk_inetropico
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline39"
                                                            >Inetrópicos</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- AntiH2 -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline40"
                                                            value="1"
                                                            @click="
                                                                validarChkAntiH2()
                                                            "
                                                            v-model="
                                                                chk.chk_anti_h2
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline40"
                                                            >AntiH2</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- ASA -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline41"
                                                            value="1"
                                                            @click="validarChkAsa()"
                                                            v-model="chk.chk_asa"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline41"
                                                            >ASA</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Antibióticos -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline42"
                                                            value="1"
                                                            @click="
                                                                validarChkAntibiotico()
                                                            "
                                                            v-model="
                                                                chk.chk_antibiotico
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline42"
                                                            >Antibióticos</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Betabloqueadores -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline43"
                                                            value="1"
                                                            @click="
                                                                validarChkBetabloqueador()
                                                            "
                                                            v-model="
                                                                chk.chk_betabloqueador
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline43"
                                                            >Betabloqueadores</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Diuréticos -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline44"
                                                            value="1"
                                                            @click="
                                                                validarChkDiuretico()
                                                            "
                                                            v-model="
                                                                chk.chk_diuretico
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline44"
                                                            >Diuréticos</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Anticoagulantes -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline45"
                                                            value="1"
                                                            @click="
                                                                validarChkAnticoagulante()
                                                            "
                                                            v-model="
                                                                chk.chk_anticoagulante
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline45"
                                                            >Anticoagulantes</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Calcioantagonistas -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline46"
                                                            value="1"
                                                            @click="
                                                                validarChkCalcioantagonista()
                                                            "
                                                            v-model="
                                                                chk.chk_calcioantagonista
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline46"
                                                            >Calcioantagonistas</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- ACOS -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline47"
                                                            value="1"
                                                            @click="
                                                                validarChkAcos()
                                                            "
                                                            v-model="chk.chk_acos"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline47"
                                                            >ACOS</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Anticolinesterásico -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline48"
                                                            value="1"
                                                            @click="
                                                                validarChkAnticolinesterasico()
                                                            "
                                                            v-model="
                                                                chk.chk_anticolinesterasico
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline48"
                                                            >Anticolinesterásico</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Otras Drogas -->
                                                <div class="col-sm-8">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    class="custom-control-input"
                                                                    id="defaultInline49"
                                                                    value="1"
                                                                    @click="
                                                                        validarChkOtrasDroga()
                                                                    "
                                                                    v-model="
                                                                        chk.chk_otrasDroga
                                                                    "
                                                                />
                                                                <label
                                                                    class="custom-control-label"
                                                                    for="defaultInline49"
                                                                    >Otros</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input
                                                                v-if="
                                                                    form.frm_otrasDroga
                                                                "
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cuáles?"
                                                                v-model="form.frm_cual_otrasDroga"
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
        }
    },
    data: function() {
        return {
            chk: {
                /* Antecedentes */
                chk_quirurgico: false,
                chk_traumatico: false,

                /* Toxicoalérgicos */
                chk_alergia: false,

                /* Tóxicos */
                chk_tabaco: false,
                chk_cocaina: false,
                chk_marihuana: false,
                chk_otrosToxico: false,

                /* Gineco-Obstétricos */
                chk_familiar: false,

                /* Drogas */
                chk_esteroide: false,
                chk_aines: false,
                chk_ieca: false,
                chk_inetropico: false,
                chk_anti_h2: false,
                chk_asa: false,
                chk_antibiotico: false,
                chk_betabloqueador: false,
                chk_diuretico: false,
                chk_anticoagulante: false,
                chk_calcioantagonista: false,
                chk_acos: false,
                chk_anticolinesterasico: false,
                chk_otrasDroga: false,
            },
            form: {
                frm_idCirugiaProgramada: "",
                /* Antecedentes */
                frm_quirurgico: false,
                frm_descripcionQuirurgico: "",
                frm_traumatico: false,
                frm_descripcionTraumatico: "",

                /* Toxicoalérgicos */
                frm_alergia: false,

                /* Tóxicos */
                frm_tabaco: false,
                frm_cocaina: false,
                frm_marihuana: false,
                frm_otrosToxico: false,
                frm_cual_otrosToxico: "",

                /* Gineco-Obstétricos */
                frm_g: "",
                frm_p: "",
                frm_a: "",
                frm_c: "",
                frm_fur: "",
                frm_familiar: false,
                frm_cual_familiar: "",

                /* Drogas */
                frm_esteroide: false,
                frm_aines: false,
                frm_ieca: false,
                frm_inetropico: false,
                frm_anti_h2: false,
                frm_asa: false,
                frm_antibiotico: false,
                frm_betabloqueador: false,
                frm_diuretico: false,
                frm_anticoagulante: false,
                frm_calcioantagonista: false,
                frm_acos: false,
                frm_anticolinesterasico: false,
                frm_otrasDroga: false,
                frm_cual_otrasDroga: "",
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
        );
        if (this.$props.idCita != null) {
            this.cargarAtencionMotivo();
        } */
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
        validarForm(){
            //Se comprueba que un checkbox tenga data
            let keys= Object.keys(this.form.checks);
            let poseeSeleccionCheck=false;
            keys.forEach(element => {
                console.log(this.form.checks[element])
                if(this.form.checks[element]){
                    poseeSeleccionCheck=true;
                }
            });
            if(!poseeSeleccionCheck){
                this.$swal({
                        icon: "warning",
                        title: "Existen campos requeridos",
                        text: "Debe seleccionar por lo menos un motivo"
                    });
                return false;
            }else{
                if(this.form.descripcion=='' || this.form.descripcion==null){
                    this.$swal({
                        icon: "warning",
                        title: "Existen campos requeridos",
                        text: "La descripción no debe estar vacia"
                    });
                    return false;

                }
            }
            return true;
        },
        //Metodo para cargar el motivo antecedente del paciente mediantes el cod cita
        cargarAntecedente: function() {
            let that = this;
            let url =
                "/modulos/cirugia/valoracionPreanestecia/cargar_antecedente_campo/" +that.$props.idSecCirPro;
            var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {
                    //Obtiene los datos de Motivo Antecedentes
                    if(response.data.antecedente!=null && response.data.antecedente!=undefined){
                        /* quirurgico */
                        that.chk.chk_quirurgico = +response.data.antecedente.quirurgico;
                        that.form.frm_quirurgico = +response.data.antecedente.quirurgico;

                        that.form.frm_descripcionQuirurgico = response.data.antecedente.descripcionQuirurgico;

                        that.chk.chk_traumatico = +response.data.antecedente.traumatico;
                        that.form.frm_traumatico = +response.data.antecedente.traumatico;

                        that.form.frm_descripcionTraumatico = response.data.antecedente.descripcionTraumatico;

                        /* Toxicoalérgicos */
                        that.chk.chk_alergia = +response.data.antecedente.alergia;
                        that.form.frm_alergia = +response.data.antecedente.alergia;

                        /* Tóxicos */

                        that.chk.chk_tabaco = +response.data.antecedente.tabaco;
                        that.form.frm_tabaco = +response.data.antecedente.tabaco;

                        that.chk.chk_cocaina= +response.data.antecedente.cocaina;
                        that.form.frm_cocaina = +response.data.antecedente.cocaina;

                        that.chk.chk_marihuana = +response.data.antecedente.marihuana;
                        that.form.frm_marihuana = +response.data.antecedente.marihuana;

                        that.chk.chk_otrosToxico = +response.data.antecedente.otrosToxico;
                        that.form.frm_otrosToxico = +response.data.antecedente.otrosToxico;

                        that.form.frm_cual_otrosToxico = response.data.antecedente.cual_otrosToxico;

                        /* Gineco-Obstétricos */
                        that.form.frm_g = response.data.antecedente.g;

                        that.form.frm_p = response.data.antecedente.p;

                        that.form.frm_a = response.data.antecedente.a;

                        that.form.frm_c = response.data.antecedente.c;

                        that.form.frm_fur = response.data.antecedente.fur;

                        that.chk.chk_familiar = +response.data.antecedente.familiar;
                        that.form.frm_familiar = +response.data.antecedente.familiar;

                        that.form.frm_cual_familiar = response.data.antecedente.cual_familiar;

                        /* Drogas */
                        that.chk.chk_esteroide = +response.data.antecedente.esteroide;
                        that.form.frm_esteroide = +response.data.antecedente.esteroide;

                        that.chk.chk_aines = +response.data.antecedente.aines;
                        that.form.frm_aines = +response.data.antecedente.aines;

                        that.chk.chk_ieca = +response.data.antecedente.ieca;
                        that.form.frm_ieca = +response.data.antecedente.ieca;

                        that.chk.chk_inetropico = +response.data.antecedente.inetropico;
                        that.form.frm_inetropico = +response.data.antecedente.inetropico;

                        that.chk.chk_anti_h2 = +response.data.antecedente.anti_h2;
                        that.form.frm_anti_h2 = +response.data.antecedente.anti_h2;

                        that.chk.chk_asa = +response.data.antecedente.asa;
                        that.form.frm_asa = +response.data.antecedente.asa;

                        that.chk.chk_antibiotico = +response.data.antecedente.antibiotico;
                        that.form.frm_antibiotico = +response.data.antecedente.antibiotico;

                        that.chk.chk_betabloqueador = +response.data.antecedente.betabloqueador;
                        that.form.frm_betabloqueador = +response.data.antecedente.betabloqueador;

                        that.chk.chk_diuretico = +response.data.antecedente.diuretico;
                        that.form.frm_diuretico = +response.data.antecedente.diuretico;

                        that.chk.chk_anticoagulante = +response.data.antecedente.anticoagulante;
                        that.form.frm_anticoagulante = +response.data.antecedente.anticoagulante;

                        that.chk.chk_calcioantagonista = +response.data.antecedente.calcioantagonista;
                        that.form.frm_calcioantagonista = +response.data.antecedente.calcioantagonista;

                        that.chk.chk_acos = +response.data.antecedente.acos;
                        that.form.frm_acos = +response.data.antecedente.acos;

                        that.chk.chk_anticolinesterasico = +response.data.antecedente.anticolinesterasico;
                        that.form.frm_anticolinesterasico = +response.data.antecedente.anticolinesterasico;

                        that.chk.chk_otrasDroga = +response.data.antecedente.otrasDroga;
                        that.form.frm_otrasDroga = +response.data.antecedente.otrasDroga;

                        that.form.frm_cual_otrasDroga = response.data.antecedente.cual_otrasDroga;
                    }
                    loader.hide()
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
        },
        //Metodo para guardar o modificar los datos de motivo antecedente
        guardarModificar: function() {
            if (this.$props.idSecCirPro != "" || this.$props.idSecCirPro) {
                let idSecCirPro = this.$props.idSecCirPro;
                let url =
                    "/modulos/cirugia/valoracionPreanestecia/guardar_modificar_antecedente";
                let that = this;
                if (this.validarGuardarModificar == 1) {
                    that.mensaje = "Datos modificados correctamente.";
                } else {
                    that.mensaje = "Datos guardados correctamente.";
                }
                var loader = that.$loading.show();
                this.form.frm_idCirugiaProgramada= idSecCirPro;
                axios
                    .post(url, this.form)
                    .then(function(response) {
                        loader.hide();
                        /* that.$swal({
                            icon: "success",
                            title: "Proceso realizado exitosamente",
                            text: that.mensaje
                        }); */
                        that.cargarAntecedente();
                    })
                    .catch(error => {
                        if (error.response.status === 421) {
                            that.$swal({
                                icon: "error",
                                title: "Existe un error",
                                text: error.response.data.msg
                            });
                        }
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
        /* Antecedentes */
        validarChkQuirurgico() {
            if (this.chk.chk_quirurgico) {
                this.form.frm_quirurgico = 0;
            } else {
                this.form.frm_quirurgico = 1;
            }
        },
        validarChkTraumatico() {
            if (this.chk.chk_traumatico) {
                this.form.frm_traumatico = 0;
            } else {
                this.form.frm_traumatico = 1;
            }
        },
        /* Fin Antecedentes */

        /* Toxicoalérgicos */
        validarChkAlergia() {
            if (this.chk.chk_alergia) {
                this.form.frm_alergia = 0;
            } else {
                this.form.frm_alergia = 1;
            }
        },
        /* Fin Toxicoalérgicos */

        /* Tóxicos */
        validarChkTabaco() {
            if (this.chk.chk_tabaco) {
                this.form.frm_tabaco = 0;
            } else {
                this.form.frm_tabaco = 1;
            }
        },
        validarChkCocaina() {
            if (this.chk.chk_cocaina) {
                this.form.frm_cocaina = 0;
            } else {
                this.form.frm_cocaina = 1;
            }
        },
        validarChkMarihuana() {
            if (this.chk.chk_marihuana) {
                this.form.frm_marihuana = 0;
            } else {
                this.form.frm_marihuana = 1;
            }
        },
        validarChkOtrosToxico() {
            if (this.chk.chk_otrosToxico) {
                this.form.frm_otrosToxico = 0;
            } else {
                this.form.frm_otrosToxico = 1;
            }
        },
        /* Fin Tóxicos */

        /* Gineco-Obstétricos */
        validarChkFamiliar() {
            if (this.chk.chk_familiar) {
                this.form.frm_familiar = 0;
            } else {
                this.form.frm_familiar = 1;
            }
        },
        /* Fin Gineco-Obstétricos */

        /* Drogas */
        validarChkEsteroide() {
            if (this.chk.chk_esteroide) {
                this.form.frm_esteroide = 0;
            } else {
                this.form.frm_esteroide = 1;
            }
        },
        validarChkAines() {
            if (this.chk.chk_aines) {
                this.form.frm_aines = 0;
            } else {
                this.form.frm_aines = 1;
            }
        },
        validarChkIeca() {
            if (this.chk.chk_ieca) {
                this.form.frm_ieca = 0;
            } else {
                this.form.frm_ieca = 1;
            }
        },
        validarChkInetropico() {
            if (this.chk.chk_inetropico) {
                this.form.frm_inetropico = 0;
            } else {
                this.form.frm_inetropico = 1;
            }
        },
        validarChkAntiH2() {
            if (this.chk.chk_anti_h2) {
                this.form.frm_anti_h2 = 0;
            } else {
                this.form.frm_anti_h2 = 1;
            }
        },
        validarChkAsa() {
            if (this.chk.chk_asa) {
                this.form.frm_asa = 0;
            } else {
                this.form.frm_asa = 1;
            }
        },
        validarChkAntibiotico() {
            if (this.chk.chk_antibiotico) {
                this.form.frm_antibiotico = 0;
            } else {
                this.form.frm_antibiotico = 1;
            }
        },
        validarChkBetabloqueador() {
            if (this.chk.chk_betabloqueador) {
                this.form.frm_betabloqueador = 0;
            } else {
                this.form.frm_betabloqueador = 1;
            }
        },
        validarChkDiuretico() {
            if (this.chk.chk_diuretico) {
                this.form.frm_diuretico = 0;
            } else {
                this.form.frm_diuretico = 1;
            }
        },
        validarChkAnticoagulante() {
            if (this.chk.chk_anticoagulante) {
                this.form.frm_anticoagulante = 0;
            } else {
                this.form.frm_anticoagulante = 1;
            }
        },
        validarChkCalcioantagonista() {
            if (this.chk.chk_calcioantagonista) {
                this.form.frm_calcioantagonista = 0;
            } else {
                this.form.frm_calcioantagonista = 1;
            }
        },
        validarChkAcos() {
            if (this.chk.chk_acos) {
                this.form.frm_acos = 0;
            } else {
                this.form.frm_acos = 1;
            }
        },
        validarChkAnticolinesterasico() {
            if (this.chk.chk_anticolinesterasico) {
                this.form.frm_anticolinesterasico = 0;
            } else {
                this.form.frm_anticolinesterasico = 1;
            }
        },
        validarChkOtrasDroga() {
            if (this.chk.chk_otrasDroga) {
                this.form.frm_otrasDroga = 0;
            } else {
                this.form.frm_otrasDroga = 1;
            }
        },
        /* Fin Drogas */
    }
};
</script>

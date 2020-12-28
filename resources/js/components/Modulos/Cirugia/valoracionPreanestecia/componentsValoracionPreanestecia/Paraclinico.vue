<template>
    <div class="col-md-12">
        <div class="card card-warning">
            <div class="card-body">
                <form role="form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="card-footer">
                                    <!-- PARACLÍNICOS -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Hb -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline58"
                                                            value="1"
                                                            @click="
                                                                validarChkHb()
                                                            "
                                                            v-model="chk.chk_hb"
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_hb
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline58"
                                                            >Hb</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_hb"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_hb_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Hcto -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline59"
                                                            value="1"
                                                            @click="
                                                                validarChkHcto()
                                                            "
                                                            v-model="
                                                                chk.chk_hcto
                                                            "
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_hcto
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline59"
                                                            >Hcto</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_hcto"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_hcto_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Leucocitos -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline60"
                                                            value="1"
                                                            @click="
                                                                validarChkLeucocito()
                                                            "
                                                            v-model="
                                                                chk.chk_leucocito
                                                            "
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_leucocito
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline60"
                                                            >Leucocitos</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="
                                                                form.frm_leucocito
                                                            "
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_leucocito_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Na -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline61"
                                                            value="1"
                                                            @click="
                                                                validarChkNa()
                                                            "
                                                            v-model="chk.chk_na"
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_na
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline61"
                                                            >Na</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_na"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_na_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- CI -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline62"
                                                            value="1"
                                                            @click="
                                                                validarChkCi()
                                                            "
                                                            v-model="chk.chk_ci"
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_ci
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline62"
                                                            >CI</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_ci"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_ci_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- K -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline63"
                                                            value="1"
                                                            @click="
                                                                validarChkK()
                                                            "
                                                            v-model="chk.chk_k"
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_k
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline63"
                                                            >K</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_k"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_k_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Ca -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline64"
                                                            value="1"
                                                            @click="
                                                                validarChkCa()
                                                            "
                                                            v-model="chk.chk_ca"
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_ca
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline64"
                                                            >Ca</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_ca"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_ca_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- BUN -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline65"
                                                            value="1"
                                                            @click="
                                                                validarChkBun()
                                                            "
                                                            v-model="
                                                                chk.chk_bun
                                                            "
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_bun
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline65"
                                                            >BUN</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_bun"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_bun_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Creati -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline66"
                                                            value="1"
                                                            @click="
                                                                validarChkCreati()
                                                            "
                                                            v-model="
                                                                chk.chk_creati
                                                            "
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_creati
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline66"
                                                            >Creati</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="
                                                                form.frm_creati
                                                            "
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_creati_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Glicemia -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline67"
                                                            value="1"
                                                            @click="
                                                                validarChkGlicemia()
                                                            "
                                                            v-model="
                                                                chk.chk_glicemia
                                                            "
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_glicemia
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline67"
                                                            >Glicemia</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="
                                                                form.frm_glicemia
                                                            "
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_glicemia_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Plaquetas -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline68"
                                                            value="1"
                                                            @click="
                                                                validarChkPlaqueta()
                                                            "
                                                            v-model="
                                                                chk.chk_plaqueta
                                                            "
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_plaqueta
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline68"
                                                            >Plaquetas</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="
                                                                form.frm_plaqueta
                                                            "
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_plaqueta_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- T.P. -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline69"
                                                            value="1"
                                                            @click="
                                                                validarChkTp()
                                                            "
                                                            v-model="chk.chk_tp"
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_tp
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline69"
                                                            >T.P.</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_tp"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_tp_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- T.P.T. -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline70"
                                                            value="1"
                                                            @click="
                                                                validarChkTpt()
                                                            "
                                                            v-model="
                                                                chk.chk_tpt
                                                            "
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_tpt
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline70"
                                                            >T.P.T.</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_tpt"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_tpt_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Mg -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="col-sm-1 custom-control-input"
                                                            id="defaultInline71"
                                                            value="1"
                                                            @click="
                                                                validarChkMg()
                                                            "
                                                            v-model="chk.chk_mg"
                                                        />
                                                        <label
                                                            :class="
                                                                form.frm_mg
                                                                    ? 'col-sm-6 custom-control-label'
                                                                    : 'col-sm-12 custom-control-label'
                                                            "
                                                            for="defaultInline71"
                                                            >Mg</label
                                                        >
                                                        <div
                                                            class=""
                                                            v-if="form.frm_mg"
                                                        >
                                                            <input
                                                                type="number"
                                                                class="col-sm-10 form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_mg_valor
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-3 col-sm-3"
                                                >
                                                    <div class="form-group">
                                                        <v-select
                                                            v-model="
                                                                selectedTipoSangre
                                                            "
                                                            :value="
                                                                form.frm_id_tipo_sangre
                                                            "
                                                            :options="
                                                                tipoSangre
                                                            "
                                                            placeholder="Grupo sanguíneo"
                                                            label="display"
                                                            @input="
                                                                setSelectedTipoSangre
                                                            "
                                                        >
                                                            <template
                                                                slot="no-options"
                                                                >No se ha
                                                                encontrado
                                                                ningun
                                                                dato</template
                                                            >
                                                        </v-select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Caja de Texto E.K.G. -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- E.K.G. -->
                                                <div class="col-sm-12 mt-2">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >E.K.G.</label
                                                        >
                                                        <div
                                                            class="col-sm-9 mr-2"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="E.K.G"
                                                                v-model="
                                                                    form.frm_ekg
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Ecocardiograma -->
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >Ecocardiograma</label
                                                        >
                                                        <div
                                                            class="col-sm-9 mr-2"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Ecocardiograma"
                                                                v-model="
                                                                    form.frm_ecocardiograma
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Rx Tórax -->
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >Rx Tórax</label
                                                        >
                                                        <div
                                                            class="col-sm-9 mr-2"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Rx Tórax"
                                                                v-model="
                                                                    form.frm_rxTorax
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Otros -->
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >Otros</label
                                                        >
                                                        <div
                                                            class="col-sm-9 mr-2"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Otros"
                                                                v-model="
                                                                    form.frm_otros
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CLASIFICACIÓN ASA -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Titulo CLASIFICACIÓN ASA -->
                                                <div class="col-sm-12">
                                                    <label
                                                        >CLASIFICACIÓN
                                                        ASA</label
                                                    >
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-12 col-sm-12 "
                                                >
                                                    <!-- ASA 1 -->
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4"
                                                    >
                                                        <label
                                                            for="clasificacion_asi_1"
                                                            class="mr-2"
                                                            >ASA 1</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="clasificacion_asi_1"
                                                            value="asa1"
                                                            v-model="
                                                                form.frm_clasificacion_asa
                                                            "
                                                        />
                                                    </div>
                                                    <!-- ASA 2 -->
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4"
                                                    >
                                                        <label
                                                            for="clasificacion_asi_2"
                                                            class="mr-2"
                                                            >ASA 2</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="clasificacion_asi_2"
                                                            value="asa2"
                                                            v-model="
                                                                form.frm_clasificacion_asa
                                                            "
                                                        />
                                                    </div>
                                                    <!-- ASA 3 -->
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4"
                                                    >
                                                        <label
                                                            for="clasificacion_asi_3"
                                                            class="mr-2"
                                                            >ASA 3</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="clasificacion_asi_3"
                                                            value="asa3"
                                                            v-model="
                                                                form.frm_clasificacion_asa
                                                            "
                                                        />
                                                    </div>
                                                    <!-- ASA 4 -->
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4"
                                                    >
                                                        <label
                                                            for="clasificacion_asi_4"
                                                            class="mr-2"
                                                            >ASA 4</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="clasificacion_asi_4"
                                                            value="asa4"
                                                            v-model="
                                                                form.frm_clasificacion_asa
                                                            "
                                                        />
                                                    </div>
                                                    <!-- ASA 5 -->
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4"
                                                    >
                                                        <label
                                                            for="clasificacion_asi_5"
                                                            class="mr-2"
                                                            >ASA 5</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="clasificacion_asi_5"
                                                            value="asa5"
                                                            v-model="
                                                                form.frm_clasificacion_asa
                                                            "
                                                        />
                                                    </div>
                                                    <!-- U -->
                                                    <div
                                                        class="col-lg-4 col-md-4 col-sm-4"
                                                    >
                                                        <label
                                                            for="clasificacion_asi_u"
                                                            class="mr-2"
                                                            >U</label
                                                        >
                                                        <input
                                                            style="margin-left: 34px"
                                                            type="radio"
                                                            id="clasificacion_asi_u"
                                                            value="u"
                                                            v-model="
                                                                form.frm_clasificacion_asa
                                                            "
                                                        />
                                                    </div>
                                                </div>
                                                <br /><br />
                                                <!-- Titulo Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins -->
                                                <div class="col-sm-12">
                                                    <label
                                                        >Clasificación de riesgo
                                                        quirúrgico del Hospital
                                                        Jonhs Hopkins</label
                                                    >
                                                </div>
                                                <!-- CATEGORÍA 1 -->
                                                <div class="col-sm-12">
                                                    <label>CATEGORÍA 1</label>
                                                </div>
                                                <!-- Riesgo mínimo independiente -->
                                                <div class="col-sm-12">
                                                    <input
                                                        type="radio"
                                                        id="CATEGORÍA_1"
                                                        value="CATEGORÍA1"
                                                        v-model="
                                                            form.frm_clasificacion_riesgo
                                                        "
                                                    />
                                                    <label
                                                        style="font-weight: normal;"
                                                        for="CATEGORÍA_1"
                                                    >
                                                        Riesgo mínimo
                                                        independiente de la
                                                        anestesia. Procedimiento
                                                        mínimamente invasivo con
                                                        poca o mínima pérdida
                                                        sanguínea.
                                                    </label>
                                                </div>
                                                <!-- CATEGORÍA 2 -->
                                                <div class="col-sm-12">
                                                    <label>CATEGORÍA 2</label>
                                                </div>
                                                <!-- Procedimiento con invasividad leve o moderada -->
                                                <div class="col-sm-12">
                                                    <input
                                                        type="radio"
                                                        id="CATEGORÍA_2"
                                                        value="CATEGORÍA2"
                                                        v-model="
                                                            form.frm_clasificacion_riesgo
                                                        "
                                                    />
                                                    <label
                                                        style="font-weight: normal;"
                                                        for="CATEGORÍA_2"
                                                        >Procedimiento con
                                                        invasividad leve o
                                                        moderada. Pérdida
                                                        sanguínea menor a 500
                                                        ml. Riesgo leve
                                                        independiente de la
                                                        anestesia.</label
                                                    >
                                                </div>
                                                <!-- CATEGORÍA 3 -->
                                                <div class="col-sm-12">
                                                    <label>CATEGORÍA 3</label>
                                                </div>
                                                <!-- Procedimiento moderado o significativa invasivo. -->
                                                <div class="col-sm-12">
                                                    <input
                                                        type="radio"
                                                        id="CATEGORÍA_3"
                                                        value="CATEGORÍA3"
                                                        v-model="
                                                            form.frm_clasificacion_riesgo
                                                        "
                                                    />
                                                    <label
                                                        style="font-weight: normal;"
                                                        for="CATEGORÍA_3"
                                                        >Procedimiento moderado
                                                        o significativa
                                                        invasivo. Pérdida
                                                        sanguínea potencial
                                                        entre 500 y 1500 ml.
                                                        Riesgo moderado
                                                        independiente de la
                                                        anestesia.</label
                                                    >
                                                </div>
                                                <!-- ECATEGORÍA 4-->
                                                <div class="col-sm-12">
                                                    <label>CATEGORÍA 4</label>
                                                </div>
                                                <!-- Procedimiento altamente invasivo. -->
                                                <div class="col-sm-12">
                                                    <input
                                                        type="radio"
                                                        id="CATEGORÍA_4"
                                                        value="CATEGORÍA4"
                                                        v-model="
                                                            form.frm_clasificacion_riesgo
                                                        "
                                                    />
                                                    <label
                                                        style="font-weight: normal;"
                                                        for="CATEGORÍA_4"
                                                        >Procedimiento altamente
                                                        invasivo. Pérdida
                                                        sanguínea mayor a 1500
                                                        ml. Riesgo alto
                                                        independiente de la
                                                        anestesia.</label
                                                    >
                                                </div>
                                                <!-- CATEGORÍA 5 -->
                                                <div class="col-sm-12">
                                                    <label>CATEGORÍA 5</label>
                                                </div>
                                                <!-- Procedimiento altamente invasivo. -->
                                                <div class="col-sm-12">
                                                    <input
                                                        type="radio"
                                                        id="CATEGORÍA_5"
                                                        value="CATEGORÍA5"
                                                        v-model="
                                                            form.frm_clasificacion_riesgo
                                                        "
                                                    />
                                                    <label
                                                        style="font-weight: normal;"
                                                        for="CATEGORÍA_5"
                                                        >Procedimiento altamente
                                                        invasivo. Pérdida
                                                        sanguínea mayor a 1500
                                                        ml. Riesgo crítico para
                                                        el paciente
                                                        independiente de la
                                                        anestesia.</label
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Caja de Texto -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 col-sm-12">
                                            <div class="row">
                                                <!-- Observaciones -->
                                                <div class="col-sm-12 mt-2">
                                                    <label
                                                        class="col-sm-12 col-form-label"
                                                        >Observaciones</label
                                                    >
                                                    <div
                                                        class="col-sm-12 mr-2 mb-2"
                                                    >
                                                        <textarea
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Observaciones de la ciugía"
                                                            v-model="
                                                                form.frm_observacion
                                                            "
                                                            rows="4"
                                                        ></textarea>
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
        idRevisionSistema: {
            type: Number,
            required: false
        }
    },
    data: function() {
        return {
            tipoSangre: [],
            selectedTipoSangre: "",
            validarFinProceso: 0,
            chk: {
                /* Paraclinicos */
                chk_hb: false,
                chk_hcto: false,
                chk_leucocito: false,
                chk_na: false,
                chk_ci: false,
                chk_k: false,
                chk_ca: false,
                chk_bun: false,
                chk_creati: false,
                chk_glicemia: false,
                chk_plaqueta: false,
                chk_tp: false,
                chk_tpt: false,
                chk_mg: false
            },
            form: {
                frm_idCirugiaProgramada: "",

                /* Paraclinicos */
                frm_hb: false,
                frm_hcto: false,
                frm_leucocito: false,
                frm_na: false,
                frm_ci: false,
                frm_k: false,
                frm_ca: false,
                frm_bun: false,
                frm_creati: false,
                frm_glicemia: false,
                frm_plaqueta: false,
                frm_tp: false,
                frm_tpt: false,
                frm_mg: false,
                /* valores */
                frm_hb_valor: "",
                frm_hcto_valor: "",
                frm_leucocito_valor: "",
                frm_na_valor: "",
                frm_ci_valor: "",
                frm_k_valor: "",
                frm_ca_valor: "",
                frm_bun_valor: "",
                frm_creati_valor: "",
                frm_glicemia_valor: "",
                frm_plaqueta_valor: "",
                frm_tp_valor: "",
                frm_tpt_valor: "",
                frm_mg_valor: "",
                frm_id_tipo_sangre: 0,

                /* E.K.G */
                frm_ekg: "",
                frm_ecocardiograma: "",
                frm_rxTorax: "",
                frm_otros: "",

                /* CLasificacion ASA */
                frm_clasificacion_asa: "",

                /* Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins */
                frm_clasificacion_riesgo: "",

                /* Observaciones */
                frm_observacion: ""
            }
        };
    },
    mounted: function() {
        this.setSelectedTipoSangre();

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
    created: function() {},
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
            /* if (this.frmimg.imgFirma == null) {
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia al finalizar con el proceso",
                    message: "Usted debe firmar porfavor.",
                    clickable: true,
                    time: 0,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            } */
            return true;
        },
        setSelectedTipoSangre(value) {
            let that = this;
            var loader = that.$loading.show();
            let url =
                "/modulos/parametrizacion/tipo_sangre/cargar_tipo_sangre_combo_box";
            if (value != null) {
                this.form.frm_id_tipo_sangre = value.id_tipo_sangre;
            }
            axios
                .get(url)
                .then(function(response) {
                    let tipoSangre = [];
                    response.data.tipoSangre.forEach(tiposSangre => {
                        let objeto = {};
                        objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                            tiposSangre.descripcion
                        );
                        objeto.id_tipo_sangre = tiposSangre.codigo;
                        tipoSangre.push(objeto);
                    });
                    that.tipoSangre = tipoSangre;
                    loader.hide();
                })
                .catch(error => {
                    //Errores
                    /*  that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    }); */
                    loader.hide();
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar setSelectedTipoSangre",
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
        //Metodo para cargar el motivo antecedente del paciente mediantes el cod cita
        cargarParaclinico: function() {
            let that = this;
            let url =
                "/modulos/cirugia/valoracionPreanestecia/cargar_paraclinico_campo/" +
                that.$props.idSecCirPro;
            var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {
                    //Obtiene los datos de Motivo Antecedentes
                    if (
                        response.data.paraclinico != null &&
                        response.data.paraclinico != undefined
                    ) {
                        /* hb, gcto, etc */
                        that.chk.chk_hb = +response.data.paraclinico.hb;
                        that.form.frm_hb = +response.data.paraclinico.hb;
                        that.form.frm_hb_valor =
                            response.data.paraclinico.hb_valor;

                        that.chk.chk_hcto = +response.data.paraclinico.hcto;
                        that.form.frm_hcto = +response.data.paraclinico.hcto;
                        that.form.frm_hcto_valor =
                            response.data.paraclinico.hcto_valor;

                        that.chk.chk_leucocito = +response.data.paraclinico
                            .leucocito;
                        that.form.frm_leucocito = +response.data.paraclinico
                            .leucocito;
                        that.form.frm_leucocito_valor =
                            response.data.paraclinico.leucocito_valor;

                        that.chk.chk_na = +response.data.paraclinico.na;
                        that.form.frm_na = +response.data.paraclinico.na;
                        that.form.frm_na_valor =
                            response.data.paraclinico.na_valor;

                        that.chk.chk_ci = +response.data.paraclinico.ci;
                        that.form.frm_ci = +response.data.paraclinico.ci;
                        that.form.frm_ci_valor =
                            response.data.paraclinico.ci_valor;

                        that.chk.chk_k = +response.data.paraclinico.k;
                        that.form.frm_k = +response.data.paraclinico.k;
                        that.form.frm_k_valor =
                            response.data.paraclinico.k_valor;

                        that.chk.chk_ca = +response.data.paraclinico.ca;
                        that.form.frm_ca = +response.data.paraclinico.ca;
                        that.form.frm_ca_valor =
                            response.data.paraclinico.ca_valor;

                        that.chk.chk_bun = +response.data.paraclinico.bun;
                        that.form.frm_bun = +response.data.paraclinico.bun;
                        that.form.frm_bun_valor =
                            response.data.paraclinico.bun_valor;

                        that.chk.chk_creati = +response.data.paraclinico.creati;
                        that.form.frm_creati = +response.data.paraclinico
                            .creati;
                        that.form.frm_creati_valor =
                            response.data.paraclinico.creati_valor;

                        that.chk.chk_glicemia = +response.data.paraclinico
                            .glicemia;
                        that.form.frm_glicemia = +response.data.paraclinico
                            .glicemia;
                        that.form.frm_glicemia_valor =
                            response.data.paraclinico.glicemia_valor;

                        that.chk.chk_plaqueta = +response.data.paraclinico
                            .plaqueta;
                        that.form.frm_plaqueta = +response.data.paraclinico
                            .plaqueta;
                        that.form.frm_plaqueta_valor =
                            response.data.paraclinico.plaqueta_valor;

                        that.chk.chk_tp = +response.data.paraclinico.tp;
                        that.form.frm_tp = +response.data.paraclinico.tp;
                        that.form.frm_tp_valor =
                            response.data.paraclinico.tp_valor;

                        that.chk.chk_tpt = +response.data.paraclinico.tpt;
                        that.form.frm_tpt = +response.data.paraclinico.tpt;
                        that.form.frm_tpt_valor =
                            response.data.paraclinico.tpt_valor;

                        that.chk.chk_mg = +response.data.paraclinico.mg;
                        that.form.frm_mg = +response.data.paraclinico.mg;
                        that.form.frm_mg_valor =
                            response.data.paraclinico.mg_valor;

                        if (response.data.paraclinico.tipo_sangre != null) {
                            that.form.frm_id_tipo_sangre = +response.data
                                .paraclinico.tipo_sangre.codigo;
                            that.selectedTipoSangre =
                                response.data.paraclinico.tipo_sangre.descripcion;
                        }

                        that.form.frm_ekg = response.data.paraclinico.ekg;

                        that.form.frm_ecocardiograma =
                            response.data.paraclinico.ecocardiograma;

                        that.form.frm_rxTorax =
                            response.data.paraclinico.rxTorax;

                        that.form.frm_otros = response.data.paraclinico.otros;

                        /* CLASIFICACIÓN ASA */
                        that.form.frm_clasificacion_asa =
                            response.data.paraclinico.clasificacion_asa;

                        /* Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins */
                        that.form.frm_clasificacion_riesgo =
                            response.data.paraclinico.clasificacion_riesgo;

                        that.form.frm_observacion =
                            response.data.paraclinico.observacion;
                    } else {
                    }
                    loader.hide();
                })
                .catch(error => {
                    //Errores
                    loader.hide();
                    /* that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    }); */
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar cargarParaclinico",
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
        //Metodo para guardar o modificar los datos de motivo antecedente
        guardarModificar: function() {
            if (this.$props.idSecCirPro != "" || this.$props.idSecCirPro) {
                let idSecCirPro = this.$props.idSecCirPro;
                let url =
                    "/modulos/cirugia/valoracionPreanestecia/guardar_modificar_paraclinico";
                let that = this;
                if (this.validarGuardarModificar == 1) {
                    that.mensaje = "Datos modificados correctamente.";
                } else {
                    that.mensaje = "Datos guardados correctamente.";
                }
                var loader = that.$loading.show();
                this.form.frm_idCirugiaProgramada = idSecCirPro;
                axios
                    .post(url, this.form)
                    .then(function(response) {
                        loader.hide();
                        that.guardarFirmaPorAtencion();
                    })
                    .catch(error => {
                        that.flashMessage.show({
                            status: "error",
                            title: "Error al procesar guardarModificar",
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
            } else {
                let that = this;
                that.flashMessage.show({
                    status: "error",
                    title: "Error al procesar guardarModificar",
                    message:
                        "Por favor comuníquese con el administrador. " + error,
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
        },
        /* Paraclinicos */
        validarChkHb() {
            if (this.chk.chk_hb) {
                this.form.frm_hb = 0;
            } else {
                this.form.frm_hb = 1;
            }
        },
        validarChkHcto() {
            if (this.chk.chk_hcto) {
                this.form.frm_hcto = 0;
            } else {
                this.form.frm_hcto = 1;
            }
        },
        validarChkLeucocito() {
            if (this.chk.chk_leucocito) {
                this.form.frm_leucocito = 0;
            } else {
                this.form.frm_leucocito = 1;
            }
        },
        validarChkNa() {
            if (this.chk.chk_na) {
                this.form.frm_na = 0;
            } else {
                this.form.frm_na = 1;
            }
        },
        validarChkCi() {
            if (this.chk.chk_ci) {
                this.form.frm_ci = 0;
            } else {
                this.form.frm_ci = 1;
            }
        },
        validarChkK() {
            if (this.chk.chk_k) {
                this.form.frm_k = 0;
            } else {
                this.form.frm_k = 1;
            }
        },
        validarChkCa() {
            if (this.chk.chk_ca) {
                this.form.frm_ca = 0;
            } else {
                this.form.frm_ca = 1;
            }
        },
        validarChkBun() {
            if (this.chk.chk_bun) {
                this.form.frm_bun = 0;
            } else {
                this.form.frm_bun = 1;
            }
        },
        validarChkCreati() {
            if (this.chk.chk_creati) {
                this.form.frm_creati = 0;
            } else {
                this.form.frm_creati = 1;
            }
        },
        validarChkGlicemia() {
            if (this.chk.chk_glicemia) {
                this.form.frm_glicemia = 0;
            } else {
                this.form.frm_glicemia = 1;
            }
        },
        validarChkPlaqueta() {
            if (this.chk.chk_plaqueta) {
                this.form.frm_plaqueta = 0;
            } else {
                this.form.frm_plaqueta = 1;
            }
        },
        validarChkTp() {
            if (this.chk.chk_tp) {
                this.form.frm_tp = 0;
            } else {
                this.form.frm_tp = 1;
            }
        },
        validarChkTpt() {
            if (this.chk.chk_tpt) {
                this.form.frm_tpt = 0;
            } else {
                this.form.frm_tpt = 1;
            }
        },
        validarChkMg() {
            if (this.chk.chk_mg) {
                this.form.frm_mg = 0;
            } else {
                this.form.frm_mg = 1;
            }
        }
        /* Fin Paraclinicos */
    }
};
</script>

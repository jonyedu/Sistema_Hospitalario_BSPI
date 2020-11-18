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
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline58"
                                                            value="1"
                                                            @click="
                                                                validarChkHb()
                                                            "
                                                            v-model="chk.chk_hb"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline58"
                                                            >Hb</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Hcto -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
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
                                                            class="custom-control-label"
                                                            for="defaultInline59"
                                                            >Hcto</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Leucocitos -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
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
                                                            class="custom-control-label"
                                                            for="defaultInline60"
                                                            >Leucocitos</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Na -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline61"
                                                            value="1"
                                                            @click="
                                                                validarChkNa()
                                                            "
                                                            v-model="chk.chk_na"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline61"
                                                            >Na</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- CI -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline62"
                                                            value="1"
                                                            @click="
                                                                validarChkCi()
                                                            "
                                                            v-model="chk.chk_ci"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline62"
                                                            >CI</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- K -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline63"
                                                            value="1"
                                                            @click="
                                                                validarChkK()
                                                            "
                                                            v-model="chk.chk_k"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline63"
                                                            >K</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Ca -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline64"
                                                            value="1"
                                                            @click="
                                                                validarChkCa()
                                                            "
                                                            v-model="chk.chk_ca"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline64"
                                                            >Ca</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- BUN -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
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
                                                            class="custom-control-label"
                                                            for="defaultInline65"
                                                            >BUN</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Creati -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
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
                                                            class="custom-control-label"
                                                            for="defaultInline66"
                                                            >Creati</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Glicemia -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
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
                                                            class="custom-control-label"
                                                            for="defaultInline67"
                                                            >Glicemia</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Plaquetas -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
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
                                                            class="custom-control-label"
                                                            for="defaultInline68"
                                                            >Plaquetas</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- T.P. -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline69"
                                                            value="1"
                                                            @click="
                                                                validarChkTp()
                                                            "
                                                            v-model="chk.chk_tp"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline69"
                                                            >T.P.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- T.P.T -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
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
                                                            class="custom-control-label"
                                                            for="defaultInline70"
                                                            >T.P.T</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Mg -->
                                                <div class="col-sm-2">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    class="custom-control-input"
                                                                    id="defaultInline71"
                                                                    value="1"
                                                                    @click="
                                                                        validarChkMg()
                                                                    "
                                                                    v-model="
                                                                        chk.chk_mg
                                                                    "
                                                                />
                                                                <label
                                                                    class="custom-control-label"
                                                                    for="defaultInline71"
                                                                    >Mg</label
                                                                >
                                                            </div>
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
                                                            :options="tipoSangre"
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
                                    <!-- Caja de Texto E.K.G -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- E.K.G -->
                                                <div class="col-sm-12 mt-2">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >E.K.G</label
                                                        >
                                                        <div
                                                            class="col-sm-9 mr-2"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
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
                                                                placeholder=""
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
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_rxTorax
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
                                                <!-- ASA 1 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline72"
                                                            value="1"
                                                            @click="
                                                                validarChkAsa1()
                                                            "
                                                            v-model="
                                                                chk.chk_asa1
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline72"
                                                            >ASA 1:
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- ASA 2 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline73"
                                                            value="1"
                                                            @click="
                                                                validarChkAsa2()
                                                            "
                                                            v-model="
                                                                chk.chk_asa2
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline73"
                                                            >ASA 2:
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- ASA 3 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline74"
                                                            value="1"
                                                            @click="
                                                                validarChkAsa3()
                                                            "
                                                            v-model="
                                                                chk.chk_asa3
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline74"
                                                            >ASA 3:
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- ASA 4 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline75"
                                                            value="1"
                                                            @click="
                                                                validarChkAsa4()
                                                            "
                                                            v-model="
                                                                chk.chk_asa4
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline75"
                                                            >ASA 4:
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- ASA 5 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline76"
                                                            value="1"
                                                            @click="
                                                                validarChkAsa5()
                                                            "
                                                            v-model="
                                                                chk.chk_asa5
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline76"
                                                            >ASA 5:
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- U -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline77"
                                                            value="1"
                                                            @click="
                                                                validarChkU()
                                                            "
                                                            v-model="chk.chk_u"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline77"
                                                            >U
                                                        </label>
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
                                                <!-- CATEGORIA 1 -->
                                                <div class="col-sm-12">
                                                    <label>CATEGORIA 1</label>
                                                </div>
                                                <!-- Riesgo mínimo independiente -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline78"
                                                            value="1"
                                                            @click="
                                                                validarChkCategoria1()
                                                            "
                                                            v-model="
                                                                chk.chk_categoria1
                                                            "
                                                        />
                                                        <label
                                                            style="font-weight: normal;"
                                                            class="custom-control-label"
                                                            for="defaultInline78"
                                                            >Riesgo mínimo
                                                            independiente de la
                                                            anestesia.
                                                            Procedimiento
                                                            minimamente invasivo
                                                            con poca o mínima
                                                            pérdida
                                                            sanguínea.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- CATEGORIA 2 -->
                                                <div class="col-sm-12">
                                                    <label>CATEGORIA 2</label>
                                                </div>
                                                <!-- Procedimiento con invasividad leve o moderada -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline79"
                                                            value="1"
                                                            @click="
                                                                validarChkCategoria2()
                                                            "
                                                            v-model="
                                                                chk.chk_categoria2
                                                            "
                                                        />
                                                        <label
                                                            style="font-weight: normal;"
                                                            class="custom-control-label"
                                                            for="defaultInline79"
                                                            >Procedimiento con
                                                            invasividad leve o
                                                            moderada. Pérdida
                                                            sanguínea menor a
                                                            500 ml. Riesgo leve
                                                            independiente de la
                                                            anestesia.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- CATEGORIA 3 -->
                                                <div class="col-sm-12">
                                                    <label>CATEGORIA 3</label>
                                                </div>
                                                <!-- Procedimiento moderado o significamente invasivo. -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline80"
                                                            value="1"
                                                            @click="
                                                                validarChkCategoria3()
                                                            "
                                                            v-model="
                                                                chk.chk_categoria3
                                                            "
                                                        />
                                                        <label
                                                            style="font-weight: normal;"
                                                            class="custom-control-label"
                                                            for="defaultInline80"
                                                            >Procedimiento
                                                            moderado o
                                                            significamente
                                                            invasivo. Pérdida
                                                            sanguínea potencial
                                                            entre 500 y 1500 ml.
                                                            Riesgo moderado
                                                            independiente de la
                                                            anestesia.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- ECATEGORIA 4-->
                                                <div class="col-sm-12">
                                                    <label>CATEGORIA 4</label>
                                                </div>
                                                <!-- Procedimiento altamente invasivo. -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline81"
                                                            value="1"
                                                            @click="
                                                                validarChkCategoria4()
                                                            "
                                                            v-model="
                                                                chk.chk_categoria4
                                                            "
                                                        />
                                                        <label
                                                            style="font-weight: normal;"
                                                            class="custom-control-label"
                                                            for="defaultInline81"
                                                            >Procedimiento
                                                            altamente invasivo.
                                                            Pérdida sanguínea
                                                            mayor a 1500 ml.
                                                            Riesgo alto
                                                            independiente de la
                                                            anestesia.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- CATEGORIA 5 -->
                                                <div class="col-sm-12">
                                                    <label>CATEGORIA 5</label>
                                                </div>
                                                <!-- Procedimiento altamente invasivo. -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline82"
                                                            value="1"
                                                            @click="
                                                                validarChkCategoria5()
                                                            "
                                                            v-model="
                                                                chk.chk_categoria5
                                                            "
                                                        />
                                                        <label
                                                            style="font-weight: normal;"
                                                            class="custom-control-label"
                                                            for="defaultInline82"
                                                            >Procedimiento
                                                            altamente invasivo.
                                                            Pérdida sanguínea
                                                            mayor a 1500 ml.
                                                            Riesgo crítico para
                                                            el paciente
                                                            independiente de la
                                                            anestesia.</label
                                                        >
                                                    </div>
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
                chk_mg: false,

                /* CLasificacion ASA */
                chk_asa1: false,
                chk_asa2: false,
                chk_asa3: false,
                chk_asa4: false,
                chk_asa5: false,
                chk_u: false,

                /* Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins */
                chk_categoria1: false,
                chk_categoria2: false,
                chk_categoria3: false,
                chk_categoria4: false,
                chk_categoria5: false
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
                frm_id_tipo_sangre: 0,

                /* E.K.G */
                frm_ekg: "",
                frm_ecocardiograma: "",
                frm_rxTorax: "",

                /* CLasificacion ASA */
                frm_asa1: false,
                frm_asa2: false,
                frm_asa3: false,
                frm_asa4: false,
                frm_asa5: false,
                frm_u: false,

                /* Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins */
                frm_categoria1: false,
                frm_categoria2: false,
                frm_categoria3: false,
                frm_categoria4: false,
                frm_categoria5: false,

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
        setSelectedTipoSangre(value) {
            let that = this;
            var loader = that.$loading.show();
            let url = "/modulos/cirugia/valoracionPreanestecia/cargar_tipo_sangre_combo_box";
            if (value != null) {
                this.form.frm_id_tipo_sangre = value.id_tipo_sangre;
            }
            axios
                .get(url)
                .then(function(response) {
                    let tipoSangre = [];
                    response.data.tipoSangre.forEach(tiposSangre => {
                        let objeto = {};
                        objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(tiposSangre.descripcion);
                        objeto.id_tipo_sangre = tiposSangre.codigo;
                        tipoSangre.push(objeto);
                    });
                    that.tipoSangre = tipoSangre;
                    loader.hide();
                })
                .catch(error => {
                    //Errores
                    that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    });
                    loader.hide();
                });
        },
        validarForm() {
            //Se comprueba que un checkbox tenga data
            let keys = Object.keys(this.form.checks);
            let poseeSeleccionCheck = false;
            keys.forEach(element => {
                console.log(this.form.checks[element]);
                if (this.form.checks[element]) {
                    poseeSeleccionCheck = true;
                }
            });
            if (!poseeSeleccionCheck) {
                this.$swal({
                    icon: "warning",
                    title: "Existen campos requeridos",
                    text: "Debe seleccionar por lo menos un motivo"
                });
                return false;
            } else {
                if (
                    this.form.descripcion == "" ||
                    this.form.descripcion == null
                ) {
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

                        that.chk.chk_hcto = +response.data.paraclinico.hcto;
                        that.form.frm_hcto = +response.data.paraclinico.hcto;

                        that.chk.chk_leucocito = +response.data.paraclinico
                            .leucocito;
                        that.form.frm_leucocito = +response.data.paraclinico
                            .leucocito;

                        that.chk.chk_na = +response.data.paraclinico.na;
                        that.form.frm_na = +response.data.paraclinico.na;

                        that.chk.chk_ci = +response.data.paraclinico.ci;
                        that.form.frm_ci = +response.data.paraclinico.ci;

                        that.chk.chk_k = +response.data.paraclinico.k;
                        that.form.frm_k = +response.data.paraclinico.k;

                        that.chk.chk_ca = +response.data.paraclinico.ca;
                        that.form.frm_ca = +response.data.paraclinico.ca;

                        that.chk.chk_bun = +response.data.paraclinico.bun;
                        that.form.frm_bun = +response.data.paraclinico.bun;

                        that.chk.chk_creati = +response.data.paraclinico.creati;
                        that.form.frm_creati = +response.data.paraclinico
                            .creati;

                        that.chk.chk_glicemia = +response.data.paraclinico
                            .glicemia;
                        that.form.frm_glicemia = +response.data.paraclinico
                            .glicemia;

                        that.chk.chk_plaqueta = +response.data.paraclinico
                            .plaqueta;
                        that.form.frm_plaqueta = +response.data.paraclinico
                            .plaqueta;

                        that.chk.chk_tp = +response.data.paraclinico.tp;
                        that.form.frm_tp = +response.data.paraclinico.tp;

                        that.chk.chk_tpt = +response.data.paraclinico.tpt;
                        that.form.frm_tpt = +response.data.paraclinico.tpt;

                        that.chk.chk_mg = +response.data.paraclinico.mg;
                        that.form.frm_mg = +response.data.paraclinico.mg;
                        that.form.frm_id_tipo_sangre = +response.data.paraclinico.tipo_sangre.codigo;
                        that.selectedTipoSangre = response.data.paraclinico.tipo_sangre.descripcion;

                        /* Gineco-Obstétricos */
                        that.form.frm_ekg = response.data.paraclinico.ekg;

                        that.form.frm_ecocardiograma =
                            response.data.paraclinico.ecocardiograma;

                        that.form.frm_rxTorax =
                            response.data.paraclinico.rxTorax;

                        /* CLASIFICACIÓN ASA */

                        that.chk.chk_asa1 = +response.data.paraclinico.asa1;
                        that.form.frm_asa1 = +response.data.paraclinico.asa1;

                        that.chk.chk_asa2 = +response.data.paraclinico.asa2;
                        that.form.frm_asa2 = +response.data.paraclinico.asa2;

                        that.chk.chk_asa3 = +response.data.paraclinico.asa3;
                        that.form.frm_asa3 = +response.data.paraclinico.asa3;

                        that.chk.chk_asa4 = +response.data.paraclinico.asa4;
                        that.form.frm_asa4 = +response.data.paraclinico.asa4;

                        that.chk.chk_asa5 = +response.data.paraclinico.asa5;
                        that.form.frm_asa5 = +response.data.paraclinico.asa5;

                        that.chk.chk_u = +response.data.paraclinico.u;
                        that.form.frm_u = +response.data.paraclinico.u;

                        /* Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins */
                        that.chk.chk_categoria1 = +response.data.paraclinico
                            .categoria1;
                        that.form.frm_categoria1 = +response.data.paraclinico
                            .categoria1;

                        that.chk.chk_categoria2 = +response.data.paraclinico
                            .categoria2;
                        that.form.frm_categoria2 = +response.data.paraclinico
                            .categoria2;

                        that.chk.chk_categoria3 = +response.data.paraclinico
                            .categoria3;
                        that.form.frm_categoria3 = +response.data.paraclinico
                            .categoria3;

                        that.chk.chk_categoria4 = +response.data.paraclinico
                            .categoria4;
                        that.form.frm_categoria4 = +response.data.paraclinico
                            .categoria4;

                        that.chk.chk_categoria5 = +response.data.paraclinico
                            .categoria5;
                        that.form.frm_categoria5 = +response.data.paraclinico
                            .categoria5;

                        that.form.frm_observacion =
                            response.data.paraclinico.observacion;
                    } else {
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
                        that.$swal({
                            icon: "success",
                            title: "Proceso realizado exitosamente",
                            text: that.mensaje
                        });
                        that.validarFinProceso = 1;
                        that.$emit("validarFinProceso", that.validarFinProceso);
                        that.$emit("FinProceso");
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
                let that = this;
                that.$swal({
                    icon: "error",
                    title: "Citas",
                    text: "Debe seleccionar un paciente"
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
        },
        /* Fin Paraclinicos */

        /* CLASIFICACIÓN ASA */
        validarChkAsa1() {
            if (this.chk.chk_asa1) {
                this.form.frm_asa1 = 0;
            } else {
                this.form.frm_asa1 = 1;
            }
        },
        validarChkAsa2() {
            if (this.chk.chk_asa2) {
                this.form.frm_asa2 = 0;
            } else {
                this.form.frm_asa2 = 1;
            }
        },
        validarChkAsa3() {
            if (this.chk.chk_asa3) {
                this.form.frm_asa3 = 0;
            } else {
                this.form.frm_asa3 = 1;
            }
        },
        validarChkAsa4() {
            if (this.chk.chk_asa4) {
                this.form.frm_asa4 = 0;
            } else {
                this.form.frm_asa4 = 1;
            }
        },
        validarChkAsa5() {
            if (this.chk.chk_asa5) {
                this.form.frm_asa5 = 0;
            } else {
                this.form.frm_asa5 = 1;
            }
        },
        validarChkU() {
            if (this.chk.chk_u) {
                this.form.frm_u = 0;
            } else {
                this.form.frm_u = 1;
            }
        },
        /* Fin CLASIFICACIÓN ASA */

        /* Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins */
        validarChkCategoria1() {
            if (this.chk.chk_categoria1) {
                this.form.frm_categoria1 = 0;
            } else {
                this.form.frm_categoria1 = 1;
            }
        },
        validarChkCategoria2() {
            if (this.chk.chk_categoria2) {
                this.form.frm_categoria2 = 0;
            } else {
                this.form.frm_categoria2 = 1;
            }
        },
        validarChkCategoria3() {
            if (this.chk.chk_categoria3) {
                this.form.frm_categoria3 = 0;
            } else {
                this.form.frm_categoria3 = 1;
            }
        },
        validarChkCategoria4() {
            if (this.chk.chk_categoria4) {
                this.form.frm_categoria4 = 0;
            } else {
                this.form.frm_categoria4 = 1;
            }
        },
        validarChkCategoria5() {
            if (this.chk.chk_categoria5) {
                this.form.frm_categoria5 = 0;
            } else {
                this.form.frm_categoria5 = 1;
            }
        }
        /* Fin Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins */
    }
};
</script>

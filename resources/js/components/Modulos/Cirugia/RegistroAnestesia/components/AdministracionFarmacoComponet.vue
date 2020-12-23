<template>
    <div class="row justify-content-center">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row border-t">
                    <div
                        class="col-lg-9 col-md-12 border-t mt-3"
                        style="border-top: 1px solid #000"
                    >
                        <div class="row">
                            <div
                                class="col-md-12 border-b border-r text-center"
                            >
                                DROGAS ADMINISTRADAS
                            </div>
                            <div class="col-md-4">
                                <div class="row border-b">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        N°
                                    </div>
                                    <div class="col-md-2">Tipo</div>
                                    <div class="col-md-8 border-r">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[0]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        1
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[1]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        2
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[2]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        3
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[3]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        4
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[4]"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row border-b">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        5
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[5]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        6
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[6]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        7
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[7]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        8
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[8]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        9
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[9]"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row border-b">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        10
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[10]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        11
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[11]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        12
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[12]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        13
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[13]"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-md-2 border-r pl-0 text-center"
                                    >
                                        14
                                    </div>
                                    <div class="col-md-10 border-r p-0">
                                        <textarea
                                            rows="1"
                                            type="text"
                                            class="input-line col-md-12"
                                            v-model="drogas_administradas[14]"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TIEMPOS -->
                    <div
                        class="col-md-12 col-lg-3 border-t mt-3"
                        style="border-top: 1px solid #000"
                    >
                        <div class="row border-b flex flex-center-x">
                            TIEMPOS
                        </div>
                        <div class="row">
                            <div class="col-md-12 border-r">
                                DURACIÓN ANESTESIA
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-ms-8">
                                <input
                                    type="time"
                                    name="hs_min"
                                    v-model="form.fchaDuracionAnestecia"
                                />
                            </div>
                            <div class="col-md-8 border-r">HS Min</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 border-r">
                                DURACIÓN OPERACIÓN
                            </div>
                        </div>
                        <div class="row border-b">
                            <div class="col-md-4 col-ms-8">
                                <input
                                    type="time"
                                    name="h_min"
                                    v-model="form.fchaDuracionOperacion"
                                />
                            </div>
                            <div class="col-md-8 border-r">H. Min</div>
                        </div>
                    </div>
                    <!-- TECNICAS -->
                    <div class="col-md-12 col-lg-7 border-t mt-3">
                        <div class="row border-b flex flex-center-x">
                            <span>TECNICAS</span>
                        </div>

                        <!-- columna 1 -->
                        <div class="row border-b">
                            <!-- parte 1 -->
                            <div class="col-md-6">
                                <!-- GENERAL -->
                                <div class="row border-b border-r">
                                    <label
                                        class="col-md-11 p-0 m-0"
                                        for="general"
                                        ><span class="space-left"
                                            >GENERAL</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="general"
                                            id="general"
                                            v-model="form.general"
                                        />
                                    </div>
                                </div>
                                <!-- SISTEMA ABIERTO -->
                                <div class="row border-r">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="sistema-abierto"
                                        ><span class="space-left"
                                            >sistema abierto</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="sistema-abierto"
                                            id="sistema-abierto"
                                            v-model="form.sistem_abierto"
                                        />
                                    </div>
                                </div>
                                <!-- SISTEMA CERRADO -->
                                <div class="row border-r">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="sistema-cerrado"
                                        ><span class="space-left"
                                            >sistema cerrado</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="sistema-cerrado"
                                            id="sistema-cerrado"
                                            v-model="form.sistem_cerrado"
                                        />
                                    </div>
                                </div>
                                <!-- SISTEM SEMI-CERR -->
                                <div class="row border-r">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="sistem-semi-cerr"
                                        ><span class="space-left"
                                            >sistem semi-cerr</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="sistem-semi-cerr"
                                            id="sistem-semi-cerr"
                                            v-model="form.sistem_semi_cerr"
                                        />
                                    </div>
                                </div>
                                <!-- APARTOS USADOS -->
                                <div class="row border-r">
                                    <label
                                        class="col-md-12 p-0 m-0 upper"
                                        for=""
                                        ><span class="space-left"
                                            >apartos usados</span
                                        ></label
                                    >
                                    <!-- CINC y VAIIVEN -->
                                    <div class="col-md-12s p-0">
                                        <label for="cinc" class="upper"
                                            ><span class="space-left"
                                                >cinc</span
                                            ></label
                                        >
                                        <input
                                            type="checkbox"
                                            name="cinc"
                                            id="cinc"
                                            v-model="form.cinc_aparatos_usados"
                                        />
                                        <label for="vaiiven" class="upper ml-2"
                                            >vaiiven</label
                                        >
                                        <input
                                            type="checkbox"
                                            name="vaiiven"
                                            id="vaiiven"
                                            v-model="
                                                form.vaiiven_aparatos_usados
                                            "
                                        />
                                    </div>
                                </div>
                                <!-- MASCARA -->
                                <div class="row border-b border-r">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="mascara"
                                        ><span class="space-left"
                                            >mascara</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="mascara"
                                            id="mascara"
                                            v-model="form.mascara"
                                        />
                                    </div>
                                </div>
                                <!-- parte 2 -->
                                <!-- INTE. TRAQUEAL -->
                                <div class="row flex border-r">
                                    <span
                                        class="col-md-12 p-0 m-0 upper text-center"
                                        >inte. traqueal</span
                                    >
                                </div>
                                <!-- ORAL y NASAL -->
                                <div class="row border-r">
                                    <div class="col-md-12 p-0">
                                        <label for="oral" class="upper"
                                            ><span class="space-left"
                                                >oral</span
                                            ></label
                                        >
                                        <input
                                            type="checkbox"
                                            name="oral"
                                            id="oral"
                                            v-model="form.oral_inte_traqueal"
                                        />
                                        <label for="nasal" class="upper ml-2"
                                            >nasal</label
                                        >
                                        <input
                                            type="checkbox"
                                            name="nasal"
                                            id="nasal"
                                            v-model="form.nasal_inte_traqueal"
                                        />
                                    </div>
                                    <div class="col-md-12 p-0">
                                        <label for="rapido" class="upper"
                                            ><span class="space-left"
                                                >rapido</span
                                            ></label
                                        >
                                        <input
                                            type="checkbox"
                                            name="rapido"
                                            id="rapido"
                                            v-model="form.rapido_inte_traqueal"
                                        />
                                        <label for="lenta" class="upper ml-2"
                                            >lenta</label
                                        >
                                        <input
                                            type="checkbox"
                                            name="lenta"
                                            id="lenta"
                                            v-model="form.lenta_inte_traqueal"
                                        />
                                    </div>
                                </div>
                                <!-- TURBO No -->
                                <div class="row border-b border-r">
                                    <label
                                        class="col-md-6 p-0 m-0 upper"
                                        for="turbo"
                                        ><span class="space-left"
                                            >TURBO No</span
                                        ></label
                                    >
                                    <div class="col-md-6 p-0">
                                        <input
                                            class="input-line"
                                            v-model="form.turbo_inte_traqueal"
                                            type="text"
                                            name="turbo"
                                            id="turbo"
                                            style="width: 100%"
                                        />
                                    </div>
                                </div>
                                <!-- MANGUITO INFLAM. -->
                                <div class="row border-r">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="manguito-inflam"
                                        ><span class="space-left"
                                            >manguito inflam.</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="manguito-inflam"
                                            id="manguito-inflam"
                                            v-model="
                                                form.manguito_inflam_inte_traqueal
                                            "
                                        />
                                    </div>
                                </div>
                                <!-- TAPONAMIENTO -->
                                <div class="row border-r">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="Taponamiento"
                                        ><span class="space-left"
                                            >Taponamiento</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="Taponamiento"
                                            id="Taponamiento"
                                            v-model="
                                                form.taponamiento_inte_traqueal
                                            "
                                        />
                                    </div>
                                </div>
                                <!-- ASIST TOPICA -->
                                <div class="row border-r">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="asist-topica"
                                        ><span class="space-left"
                                            >asist topica</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="asist-topica"
                                            id="asist-topica"
                                            v-model="
                                                form.asist_topica_inte_traqueal
                                            "
                                        />
                                    </div>
                                </div>
                                <!-- SIST TRAMBORAL -->
                                <div class="row border-r">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="asist-tramboral"
                                        ><span class="space-left"
                                            >asist tramboral</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="asist-tramboral"
                                            id="asist-semtramborali"
                                            v-model="
                                                form.asist_tranboral_inte_traqueal
                                            "
                                        />
                                    </div>
                                </div>
                            </div>
                            <!-- CONDUCTIVA -->
                            <div class="col-md-6">
                                <!-- CONDUCTIVA -->
                                <div class="row border-b">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="habon"
                                        ><span class="space-left"
                                            >CONDUCTIVA</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="habon"
                                            id="habon"
                                            v-model="form.conductiva"
                                        />
                                    </div>
                                </div>
                                <!-- ASEPSIA DE PIEL -->
                                <div class="row border-b">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="habon"
                                        ><span class="space-left"
                                            >ASEPSIA DE PIEL</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="habon"
                                            id="habon"
                                            v-model="form.asepsia_piel"
                                        />
                                    </div>
                                </div>
                                <div class="row border-b border-r">
                                    <label
                                        class="col-md-6 p-0 m-0 upper"
                                        for="con"
                                        ><span class="space-left"
                                            >CON:</span
                                        ></label
                                    >
                                    <div class="col-md-3 p-0">
                                        <input
                                            class="input-line"
                                            v-model="form.con"
                                            type="text"
                                            name="con"
                                            id="con"
                                            style="width: 100%"
                                        />
                                    </div>
                                </div>
                                <!-- HABON -->
                                <div class="row border-b">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="habon"
                                        ><span class="space-left"
                                            >habon</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="habon"
                                            id="habon"
                                            v-model="form.habon"
                                        />
                                    </div>
                                </div>
                                <!-- RAQUIDEA -->
                                <div class="row border-b">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="raquidea"
                                        ><span class="space-left"
                                            >raquidea</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="raquidea"
                                            id="raquidea"
                                            v-model="form.raquidea"
                                        />
                                    </div>
                                </div>
                                <!-- EPIDURAL CAUD -->
                                <div class="row border-b">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="epidural-caud"
                                        ><span class="space-left"
                                            >epidural caud</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="epidural-caud"
                                            id="epidural-caud"
                                            v-model="form.epidural_caud"
                                        />
                                    </div>
                                </div>
                                <!-- SIMPLE -->
                                <div class="row">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="simple"
                                        ><span class="space-left"
                                            >simple</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="simple"
                                            id="simple"
                                            v-model="form.simple_altura_puncion"
                                        />
                                    </div>
                                </div>
                                <!-- CONTINUA -->
                                <div class="row">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="continua"
                                        ><span class="space-left"
                                            >continua</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="continua"
                                            id="continua"
                                            v-model="
                                                form.continua_altura_puncion
                                            "
                                        />
                                    </div>
                                </div>
                                <!-- ALTURA PUNCION -->
                                <div class="row border-b flex text-center">
                                    <label
                                        class="col-md-12 p-0 m-0"
                                        for=""
                                        style="font-size: 0.9em"
                                        ><span class="space-left"
                                            >ALTURA PUNCION</span
                                        ></label
                                    >
                                    <div
                                        class="col-md-3 p-0"
                                        style="margin:auto"
                                    >
                                        <input
                                            class="input-line"
                                            v-model="form.altura_puncion"
                                            type="text"
                                            name="altura_puncion"
                                            id="altura_puncion"
                                            style="width: 100%;"
                                        />
                                    </div>
                                </div>
                                <!-- PUNCION LAT -->
                                <div class="row">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="puncion-lat"
                                        ><span class="space-left"
                                            >puncion lat</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="puncion-lat"
                                            id="puncion-lat"
                                            v-model="form.puncion_lat"
                                        />
                                    </div>
                                </div>
                                <!-- LINEA MEDIA -->
                                <div class="row border-b">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="linea-media"
                                        ><span class="space-left"
                                            >linea media</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="linea-media"
                                            id="linea-media"
                                            v-model="form.linea_media"
                                        />
                                    </div>
                                </div>
                                <!-- AGUJA No -->
                                <div class="row border-b border-r">
                                    <label class="col-md-6 p-0 m-0" for="aguja"
                                        ><span class="space-left"
                                            >AGUJA No</span
                                        ></label
                                    >
                                    <div class="col-md-3 p-0">
                                        <input
                                            class="input-line"
                                            v-model="form.aguja"
                                            type="number"
                                            name="aguja"
                                            id="aguja"
                                            style="width: 100%"
                                        />
                                    </div>
                                </div>
                                <!-- NIVEL -->
                                <div class="row border-b border-r">
                                    <label
                                        class="col-md-6 p-0 m-0 upper"
                                        for="nivel"
                                        ><span class="space-left"
                                            >NIVEL</span
                                        ></label
                                    >
                                    <div class="col-md-3 p-0">
                                        <input
                                            class="input-line"
                                            v-model="form.nivel"
                                            type="text"
                                            name="nivel"
                                            id="nivel"
                                            style="width: 100%"
                                        />
                                    </div>
                                </div>
                                <!-- HIPERBARA -->
                                <div class="row border-b">
                                    <label
                                        class="col-md-11 p-0 m-0 upper"
                                        for="hiperbara"
                                        ><span class="space-left"
                                            >hiperbara</span
                                        ></label
                                    >
                                    <div class="col-md-1 p-0">
                                        <input
                                            type="checkbox"
                                            name="hiperbara"
                                            id="hiperbara"
                                            v-model="form.hiperbara"
                                        />
                                    </div>
                                </div>
                                <div class="row border-b">
                                    <label class="col-md-4 p-0 m-0" for=""
                                        ><span class="space-left"
                                            >POSICION PACIENTE</span
                                        ></label
                                    >
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <v-select
                                                v-model="selectedTipoPosiciones"
                                                :value="form.id_tipo_posiciones"
                                                :options="tipoPosiciones"
                                                label="display"
                                                @input="
                                                    setSelectedTipoPosiciones
                                                "
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
                    <!-- INFUSIONES -->
                    <div class="col-md-5 col-lg-5 border-t border-t mt-3">
                        <!-- INFUSIONES -->
                        <div class="row border-b flex flex-center-x">
                            <span>INFUSIONES</span>
                        </div>
                        <!-- Infusiones -->
                        <div
                            v-for="(infusion, index) in form.infusiones"
                            :key="index"
                            class="row border-b border-r"
                        >
                            <span class="col-md-1 border-r">
                                {{ infusion.abreviatura }}
                            </span>
                            <label class="col-md-6 p-0 m-0 upper"
                                ><span class="space-left">
                                    {{ infusion.descripcion }}
                                </span></label
                            >
                            <div class="col-md-3 p-0">
                                <input
                                    class="input-line"
                                    v-model="infusion.valor"
                                    type="number"
                                    style="width: 100%"
                                />
                            </div>
                            <label class="col-md-1 p-0 m-0" for="">cc</label>
                        </div>
                        <!-- TOTAL -->
                        <!-- <div class="row border-b border-r">
                            <span class="col-md-1 border-r">T</span>
                            <label
                                class="col-md-6 p-0 m-0 upper"
                                for="expansiones"
                                ><span class="space-left">total</span></label
                            >
                            <div class="col-md-3 p-0">
                                <span id="total">{{ total_infusiones }}</span>
                                <input
                                    class="input-line"
                                    type="number"
                                    style="width: 100%"
                                />
                            </div>
                            <label class="col-md-1 p-0 m-0" for="">cc</label>
                        </div> -->
                        <!-- HEMORRAGEA -->
                        <div class="row border-b flex flex-center-x">
                            <span>hemorragia</span>
                        </div>
                        <!-- cc APROX -->
                        <div class="row border-b border-r">
                            <div class="col-md-1"></div>
                            <div class="col-md-7 p-0">
                                <input
                                    class="input-line"
                                    type="number"
                                    name="hemorragia"
                                    id="hemorragia"
                                    style="width: 100%"
                                    v-model="form.hemorragia"
                                />
                            </div>
                            <label class="col-md-3 p-0 m-0" for=""
                                >cc APROX</label
                            >
                        </div>
                        <!-- apagar -->
                        <div class="row border-b flex flex-center-x">
                            <span>apagar</span>
                        </div>
                        <!-- Los minutos All -->
                        <div class="row border-b border-r">
                            <label class="col-md-3 p-0 m-0 upper" for="1-min"
                                >1 min</label
                            >
                            <label class="col-md-3 p-0 m-0 upper" for="5-min"
                                >5 min</label
                            >
                            <label class="col-md-3 p-0 m-0 upper" for="10-min"
                                >10 min</label
                            >
                            <label class="col-md-3 p-0 m-0 upper" for="p_muerto"
                                >p. muerto</label
                            >
                            <div class="col-md-3 p-0">
                                <input
                                    class="input-line"
                                    type="number"
                                    name="1-min"
                                    id="1-min"
                                    style="width: 100%"
                                    v-model="form.min1"
                                />
                            </div>
                            <div class="col-md-3 p-0">
                                <input
                                    class="input-line"
                                    type="number"
                                    name="5-min"
                                    id="5-min"
                                    style="width: 100%"
                                    v-model="form.min5"
                                />
                            </div>
                            <div class="col-md-3 p-0">
                                <input
                                    class="input-line"
                                    type="number"
                                    name="10-min"
                                    id="10-min"
                                    style="width: 100%"
                                    v-model="form.min10"
                                />
                            </div>
                            <div class="col-md-3 p-0">
                                <input
                                    class="input-line"
                                    type="number"
                                    name="p_muerto"
                                    id="p_muerto"
                                    style="width: 100%"
                                    v-model="form.p_muerto"
                                />
                            </div>
                        </div>
                        <!-- tecnicas especiales -->
                        <div class="row border-b flex flex-center-x">
                            <span>tecnicas especiales</span>
                        </div>
                        <div class="row border-b border-r">
                            <div class="col-md-12 p-0">
                                <input
                                    class="input-line"
                                    type="text"
                                    name="tecnicas_especiales"
                                    id="tecnicas_especiales"
                                    style="width: 100%"
                                    v-model="form.tecnicas_especiales"
                                />
                            </div>
                        </div>
                        <!-- CONDUCIDO A: -->
                        <div class="row">
                            <label class="col-md-4" for="conducido_a"
                                ><span class="space-left">CONDUCIDO A:</span>
                            </label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group">
                                    <v-select
                                        v-model="selectedSala"
                                        :value="form.id_sala"
                                        :options="salas"
                                        label="display"
                                        @input="setSelectedSala"
                                    >
                                        <template slot="no-options"
                                            >No existen datos</template
                                        >
                                    </v-select>
                                </div>
                            </div>
                        </div>
                        <!-- POR: -->
                        <div class="row">
                            <!-- POR: -->
                            <label class="col-md-4" for="conducido_por"
                                >POR:
                            </label>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group">
                                    <v-select
                                        v-model="selectedMedico"
                                        :value="form.id_medico"
                                        :options="medicos"
                                        label="display"
                                        @input="setSelectedMedico"
                                    >
                                        <template slot="no-options"
                                            >No existen datos</template
                                        >
                                    </v-select>
                                </div>
                            </div>
                            <label class="col-md-4" for="conducido_hora"
                                >HORA:
                            </label>
                            <input
                                type="time"
                                class="input-line col-md-8"
                                name="conducido_hora"
                                id="conducido_hora"
                                v-model="form.hora"
                            />
                        </div>
                    </div>

                    <!-- COMPLICACIONES OPERATRIAS -->
                    <div class="col-lg-12 col-md-5 b-0 mt-3">
                        <div class="row border-b flex flex-center-x">
                            <span>COMPLICACIONES OPERATRIAS</span>
                        </div>
                        <!-- HIPOTENSION y ARRITMIAS -->
                        <div class="row border-b pt-2 pb-2">
                            <!-- HIPOTENSION -->
                            <label class="col-md-5 p-0 m-0" for="hipotension"
                                ><span class="space-left"
                                    >HIPOTENSION</span
                                ></label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="hipotension"
                                    id="hipotension"
                                    v-model="form.hipotension"
                                />
                            </div>
                            <!-- arritmias -->
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="arritmias"
                                ><span class="">arritmias</span></label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="arritmias"
                                    id="arritmias"
                                    v-model="form.arritmias"
                                />
                            </div>
                        </div>
                        <!-- depresion respiratoria y perforacion duramadre -->
                        <div class="row border-b pt-2 pb-2">
                            <!-- depresion respiratoria -->
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="depresion-respiratoria"
                                ><span class="space-left"
                                    >depresion respiratoria</span
                                ></label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="depresion-respiratoria"
                                    id="depresion-respiratoria"
                                    v-model="form.depresion_respiratoria"
                                />
                            </div>
                            <!-- perforacion duramadre -->
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="perforacion-duramadre"
                                >perforacion duramadre</label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="perforacion-duramadre"
                                    id="perforacion-duramadre"
                                    v-model="form.perforacion_duramadre"
                                />
                            </div>
                        </div>
                        <!-- dificultad intubacion y nauseas-vomitos -->
                        <div class="row border-b pt-2 pb-2">
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="dificultad-intubacion"
                                ><span class="space-left"
                                    >dificultad intubacion</span
                                ></label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="dificultad-intubacion"
                                    id="dificultad-intubacion"
                                    v-model="form.dificultad_intubacion"
                                />
                            </div>
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="nauseas-vomitos"
                                >nauseas-vomitos</label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="nauseas-vomitos"
                                    id="nauseas-vomitos"
                                    v-model="form.nauses_vomitos"
                                />
                            </div>
                        </div>
                        <!-- conductiva insuficiente y laringo espasmo -->
                        <div class="row border-b pt-2 pb-2">
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="conductiva-insuficiente"
                                ><span class="space-left"
                                    >conductiva insuficiente</span
                                ></label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="conductiva-insuficiente"
                                    id="conductiva-insuficiente"
                                    v-model="form.conductiva_insuficiente"
                                />
                            </div>
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="laringo-espasmo"
                                >laringo espasmo</label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="laringo-espasmo"
                                    id="laringo-espasmo"
                                    v-model="form.laringo_espasmo"
                                />
                            </div>
                        </div>
                        <!-- paro cardiaco y ninguna -->
                        <div class="row border-b pt-2 pb-2">
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="paro-cardiaco"
                                ><span class="space-left"
                                    >paro cardiaco</span
                                ></label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="paro-cardiaco"
                                    id="paro-cardiaco"
                                    v-model="form.paro_cardiaco"
                                />
                            </div>
                            <label class="col-md-5 p-0 upper m-0" for="ninguna"
                                >ninguna</label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="ninguna"
                                    id="ninguna"
                                    v-model="form.ninguna"
                                />
                            </div>
                        </div>
                        <!-- cambio de tecnica y -->
                        <div class="row border-b pt-2 pb-2">
                            <label
                                class="col-md-5 p-0 upper m-0"
                                for="cambio-tecnica"
                                ><span class="space-left"
                                    >cambio de tecnica</span
                                ></label
                            >
                            <div class="col-md-1 p-0">
                                <input
                                    type="checkbox"
                                    name="cambio-tecnica"
                                    id="cambio-tecnica"
                                    v-model="form.cambio_tecnica"
                                />
                            </div>
                        </div>
                        <!-- otros -->
                        <div class="row border-b pt-2 pb-2">
                            <div class="flex col-md-5 p-0 upper">
                                <span class="space-left mr-2">otros</span>
                                <input
                                    class="border-none-b- w-100p"
                                    type="text"
                                    v-model="form.otros_complicaciones"
                                />
                            </div>
                        </div>
                        <!-- COMENTATIOS -->
                        <div class="row">
                            <span class="col-md-12">COMENTARIOS:</span>
                            <textarea
                                name=""
                                id=""
                                class="col-md-12"
                                rows="3"
                                v-model="form.comentario"
                            ></textarea>
                        </div>
                        <!-- FIRMA DEL ANESTESIOLOGO: -->
                        <div class="">
                            <div class="" style="height: 70px"></div>
                            <div class="flex flex-y">
                                <span
                                    class="col-md-5 text-center"
                                    style="margin: auto"
                                >
                                    <vue-painttable
                                        @getOutput="form.imgFirma = $event"
                                        @RespuestaImgFirma="
                                            validarImgFirma = $event
                                        "
                                        :hidePaintable="true"
                                        :isFirstPaintable="isFirstPaintable"
                                        :disableNavigation="true"
                                        :showUndoRedo="false"
                                        :showLineWidth="false"
                                        :rutaImagen="rutaSello"
                                        :width="800"
                                        :height="800"
                                        ref="paintFirma"
                                    ></vue-painttable>
                                </span>
                                <span class="col-md-12 text-center"
                                    >______________________________________________</span
                                >
                                <span class="col-md-12 text-center"
                                    >FIRMA DEL ANESTESIOLOGO:</span
                                >
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
    },
    data: function() {
        return {
            //Variables para la firma
            isFirstPaintable: "firmaAnestesiologo",
            rutaSello: "", ///img/selloFirma.png
            //Arreglo para guardar los tipos de drogas que se vayan ingresando
            drogas_administradas: [],
            //Variables para los ComboBox
            selectedTipoPosiciones: "",
            tipoPosiciones: [],

            selectedSala: "",
            salas: [],

            selectedMedico: "",
            medicos: [],

            form:{
                respuestaAgente: false,
                id_datos_agente: 0,
                id_especializacion: 3,
                id_tipo_posiciones: 0,
                cirugia_id: 0,
                registro_anestesia_id: 0,
                id_tipo_posiciones: 0,
                /* Datos para modificar registro anestesico */
                fchaDuracionAnestecia: "00:00",
                fchaDuracionOperacion: "00:00",
                general: 0,
                sistem_abierto: 0,
                sistem_cerrado: 0,
                sistem_semi_cerr: 0,
                cinc_aparatos_usados: 0,
                vaiiven_aparatos_usados: 0,
                mascara: 0,
                //seccion 1
                oral_inte_traqueal: 0,
                nasal_inte_traqueal: 0,
                rapido_inte_traqueal: 0,
                lenta_inte_traqueal: 0,
                turbo_inte_traqueal: "",
                manguito_inflam_inte_traqueal: 0,
                taponamiento_inte_traqueal: 0,
                asist_topica_inte_traqueal: 0,
                asist_tranboral_inte_traqueal: 0,
                //seccion 2
                conductiva: 0,
                asepsia_piel: 0,
                con: "",
                habon: 0,
                raquidea: 0,
                epidural_caud: 0,
                //seccion 3
                simple_altura_puncion: 0,
                continua_altura_puncion: 0,
                altura_puncion: "",
                //seccion 4
                puncion_lat: 0,
                linea_media: 0,
                //seccion 5
                aguja: 0,
                nivel: "",
                hiperbara: 0,
                /* Complicaciones Operatorias */
                hipotension: 0,
                arritmias: 0,
                depresion_respiratoria: 0,
                perforacion_duramadre: 0,
                dificultad_intubacion: 0,
                nauses_vomitos: 0,
                conductiva_insuficiente: 0,
                laringo_espasmo: 0,
                paro_cardiaco: 0,
                ninguna: 0,
                cambio_tecnica: 0,
                otros_complicaciones: "",
                comentario: "",
                /* Hemorragia */
                hemorragia: 0,
                /* Apagar */
                min1: 0,
                min5: 0,
                min10: 0,
                p_muerto: 0,
                /* Tecnicas Especiales */
                id_sala: 0,
                id_medico: 0,
                hora: "00:00",
                /* Fin Datos para modificar registro anestesico */
                /* Datos para guardar en la tabla infusiones */
                infusiones: [
                    {
                        descripcion: "SOLUCIONES SALINAS",
                        name: "SOLUCIONES_SALINAS",
                        abreviatura: "SS",
                        valor: 0
                    },
                    {
                        descripcion: "DEXTROSAS",
                        name: "DEXTROSAS",
                        abreviatura: "D",
                        valor: 0
                    },
                    {
                        descripcion: "SANGRE",
                        name: "SANGRE",
                        abreviatura: "S",
                        valor: 0
                    },
                    {
                        descripcion: "RINGER",
                        name: "RINGER",
                        abreviatura: "R",
                        valor: 0
                    },
                    {
                        descripcion: "EXPANSIONES",
                        name: "EXPANSIONES",
                        abreviatura: "E",
                        valor: 0
                    },
                    {
                        descripcion: "TOTAL",
                        name: "TOTAL",
                        abreviatura: "T",
                        valor: 0
                    }
                ],
                total: 0,
                /* Fin Datos para guardar en la tabla infusiones */
                /* Datos para guardar firma */
                imgFirma: null,
                imgGrafica: null
                /* Fin Datos para guardar firma */
            },

        };
    },
    mounted: function() {},
    methods: {
        setSelectedTipoPosiciones(value) {
            let that = this;
            var loader = that.$loading.show();
            let url =
                "/modulos/cirugia/anestesia/cargar_tipo_posiciones_combo_box";
            if (value != null) {
                this.form.id_tipo_posiciones = value.id_tipo_posiciones;
            }
            axios
                .get(url)
                .then(function(response) {
                    let tipoPosiciones = [];
                    response.data.tipoPosiciones.forEach(tiposPosiciones => {
                        let objeto = {};
                        objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                            tiposPosiciones.descripcion
                        );
                        objeto.id_tipo_posiciones = tiposPosiciones.id;
                        tipoPosiciones.push(objeto);
                    });
                    that.tipoPosiciones = tipoPosiciones;
                    loader.hide();
                })
                .catch(error => {
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar setSelectedTipoPosiciones",
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
        setSelectedSala(value) {
            let that = this;
            var loader = that.$loading.show();
            let url = "/modulos/parametrizacion/sala/cargar_sala_combo_box";
            if (value != null) {
                this.form.id_sala = value.id_sala;
            }
            axios
                .get(url)
                .then(function(response) {
                    let salas = [];
                    response.data.salas.forEach(sala => {
                        let objeto = {};
                        objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                            sala.descripcion
                        );
                        objeto.id_sala = sala.codigo;
                        salas.push(objeto);
                    });
                    that.salas = salas;
                    loader.hide();
                })
                .catch(error => {
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar setSelectedSala",
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
        setSelectedMedico(value) {
            let that = this;
            var loader = that.$loading.show();
            let url =
                "/modulos/admision/medico/cargar_medico_por_especializacion/" +
                that.form.id_especializacion;
            if (value != null) {
                this.form.id_medico = value.id_medico;
                loader.hide();
                //this.consultarSello();
            }
            axios
                .get(url)
                .then(function(response) {
                    let medicos = [];
                    response.data.medicos.forEach(medico => {
                        let objeto = {};
                        objeto.display = that.$funcionesGlobales.toCapitalFirstAllWords(
                            medico.FULLNAME
                        );
                        objeto.id_medico = medico.id;
                        medicos.push(objeto);
                    });
                    that.medicos = medicos;
                    loader.hide();
                })
                .catch(error => {
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar setSelectedMedico",
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
    },

    computed: {}
};
</script>

<template>
    <div class="col-md-12">
        <div class="card card-warning">
            <div class="card-body">
                <form role="form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="card-footer">
                                    <!-- EXAMEN FÍSICO -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- PA -->
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >PA</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                type="number"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_pa
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FC -->
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >FC</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                type="number"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_fc
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- PESO -->
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >PESO(Kg)</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                type="number"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_peso
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- TALLA -->
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >TALLA(cm)</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                type="number"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_talla
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Estado General -->
                                                <div class="col-sm-12">
                                                    <label>Estado General</label>
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-12 col-sm-12 "
                                                >
                                                    <!-- B Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="dentadura_b" class="mr-2"
                                                            >B</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="dentadura_b"
                                                            value="b"
                                                            v-model="form.frm_estado_general"
                                                        />
                                                    </span>
                                                    <!-- R Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="dentadura_r" class="mr-2"
                                                            >R</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="dentadura_r"
                                                            value="r"
                                                            v-model="form.frm_estado_general"
                                                        />
                                                    </span>
                                                    <!-- M Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="dentadura_m" class="mr-2"
                                                            >M</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="dentadura_m"
                                                            value="m"
                                                            v-model="form.frm_estado_general"
                                                        />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cuello Corto -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Cuello Corto -->
                                                <div class="col-sm-3">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline50"
                                                            value="1"
                                                            @click="
                                                                validarChkCuelloCorto()
                                                            "
                                                            v-model="
                                                                chk.chk_cuelloCorto
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline50"
                                                            >Cuello Corto</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- DMT -->
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >DMT(cm)</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                 type="number"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_dmt
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- cm Cuello Corto-->
                                                <!-- <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >cm</label
                                                        >
                                                        <div class="col-sm-5 mr-2">
                                                            <input
                                                                 type="number"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_cmCuelloCorto
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- Movilidad del Cuello -->
                                                <div class="col-sm-12">
                                                    <label
                                                        >Movilidad del Cuello</label
                                                    >
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-12 col-sm-12 "
                                                >
                                                    <!-- B Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="movilidad_cuello_b" class="mr-2"
                                                            >B</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="movilidad_cuello_b"
                                                            value="b"
                                                            v-model="form.frm_movilidad_cuello"
                                                        />
                                                    </span>
                                                    <!-- R Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="movilidad_cuello_r" class="mr-2"
                                                            >R</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="movilidad_cuello_r"
                                                            value="r"
                                                            v-model="form.frm_movilidad_cuello"
                                                        />
                                                    </span>
                                                    <!-- M Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="movilidad_cuello_m" class="mr-2"
                                                            >M</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="movilidad_cuello_m"
                                                            value="m"
                                                            v-model="form.frm_movilidad_cuello"
                                                        />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Escala de MallaMPATI -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Escala de MallaMPATI -->
                                                <div class="col-sm-12">
                                                    <label
                                                        >Escala de MallaMPATI</label
                                                    >
                                                </div>
                                                <!-- Clase 1 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline51"
                                                            value="1"
                                                            @click="
                                                                validarChkClase1()
                                                            "
                                                            v-model="chk.chk_clase1"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline51"
                                                            >Clase 1: total
                                                            visibilidad de las
                                                            amígdalas, úvula y
                                                            paladar blando.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Clase 2 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline52"
                                                            value="1"
                                                            @click="
                                                                validarChkClase2()
                                                            "
                                                            v-model="chk.chk_clase2"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline52"
                                                            >Clase 2: visivilidad
                                                            del paladar duro y
                                                            blando, porción superior
                                                            de las amígdalas y
                                                            úvula.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Clase 3 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline53"
                                                            value="1"
                                                            @click="
                                                                validarChkClase3()
                                                            "
                                                            v-model="chk.chk_clase3"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline53"
                                                            >Clase 3: son visibles
                                                            el paladar duro y blando
                                                            y la base de la
                                                            úvula.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Clase 4 -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline54"
                                                            value="1"
                                                            @click="
                                                                validarChkClase4()
                                                            "
                                                            v-model="chk.chk_clase4"
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline54"
                                                            >Clase 4: sólo es visible
                                                            el paladar duro.</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Ingurgitación yugular -->
                                                <div class="col-sm-12">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline55"
                                                            value="1"
                                                            @click="
                                                                validarChkIngurgitaciónYugular()
                                                            "
                                                            v-model="
                                                                chk.chk_ingurgitacionYugular
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline55"
                                                            >Ingurgitación
                                                            yugular</label
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Boca Apertura Ora -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Boca Apertura Ora -->
                                                <div class="col-sm-12">
                                                    <label
                                                        >Boca Apertura Oral</label
                                                    >
                                                </div>
                                                <!-- cm Boca Apertura Ora-->
                                                <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >cm</label
                                                        >
                                                        <div class="col-sm-8">
                                                            <input
                                                                type="number"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_cmBocaAperturaOral
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Dentadura -->
                                                <div class="col-sm-12">
                                                    <label>Dentadura</label>
                                                </div>
                                                <div
                                                    class="col-lg-12 col-md-12 col-sm-12 "
                                                >
                                                    <!-- B Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="estado_general_b" class="mr-2"
                                                            >B</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="estado_general_b"
                                                            value="b"
                                                            v-model="form.frm_dentadura"
                                                        />
                                                    </span>
                                                    <!-- R Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="estado_general_r" class="mr-2"
                                                            >R</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="estado_general_r"
                                                            value="r"
                                                            v-model="form.frm_dentadura"
                                                        />
                                                    </span>
                                                    <!-- M Estado General-->
                                                    <span class="col-lg-4 col-md-4 col-sm-4">
                                                        <label for="estado_general_m" class="mr-2"
                                                            >M</label
                                                        >
                                                        <input
                                                            type="radio"
                                                            id="_m"
                                                            value="m"
                                                            v-model="form.frm_dentadura"
                                                        />
                                                    </span>
                                                </div>
                                                <!-- B Dentadura -->
                                                <!-- <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >B</label
                                                        >
                                                        <div class="col-sm-3 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_bDentadura
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- R Dentadura -->
                                                <!-- <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >R</label
                                                        >
                                                        <div class="col-sm-3 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_rDentadura
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- M Dentadura -->
                                                <!-- <div class="col-sm-3">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >M</label
                                                        >
                                                        <div class="col-sm-3 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_mDentadura
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="w-100"></div>
                                                <!-- Edéntulo -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline56"
                                                            value="1"
                                                            @click="
                                                                validarChkEdentulo()
                                                            "
                                                            v-model="
                                                                chk.chk_edentulo
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline56"
                                                            >Edéntulo</label
                                                        >
                                                    </div>
                                                </div>
                                                <!-- Prótesis -->
                                                <div class="col-sm-2">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline"
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            class="custom-control-input"
                                                            id="defaultInline57"
                                                            value="1"
                                                            @click="
                                                                validarChkProtesis()
                                                            "
                                                            v-model="
                                                                chk.chk_protesis
                                                            "
                                                        />
                                                        <label
                                                            class="custom-control-label"
                                                            for="defaultInline57"
                                                            >Prótesis</label
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
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Cardiovascular -->
                                                <div class="col-sm-12 mt-2">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >Cardiovascular</label
                                                        >
                                                        <div class="col-sm-9 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Cardiovascular"
                                                                v-model="
                                                                    form.frm_cardiovascular
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Respiratorio -->
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >Respiratorio</label
                                                        >
                                                        <div class="col-sm-9 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Respiratorio"
                                                                v-model="
                                                                    form.frm_respiratorio
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Abdomen -->
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >Abdomen</label
                                                        >
                                                        <div class="col-sm-9 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Abdomen"
                                                                v-model="
                                                                    form.frm_abdomen
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Extremidades -->
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-2 col-form-label"
                                                            >Extremidades</label
                                                        >
                                                        <div class="col-sm-9 mr-2">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Extremidades"
                                                                v-model="
                                                                    form.frm_extremidades
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
                                                        <div class="col-sm-9 mr-2">
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
                                    <!-- Neurologico: ESCALA DE GLASGOW -->
                                    <div
                                        class="card"
                                        style="background-color: #C8C8C5;"
                                    >
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Titulo -->
                                                <div class="col-sm-12">
                                                    <label
                                                        >Neurologico: ESCALA DE
                                                        GLASGOW</label
                                                    >
                                                </div>
                                                <!-- Apertura Ocular -->
                                                <div class="col-sm-4">
                                                    <label>Apertura Ocular</label>
                                                    <h5>Espontánea: 4</h5>
                                                    <h5>
                                                        Estímulo verbal (al
                                                        pedírselo): 3
                                                    </h5>
                                                    <h5>Al dolor: 2</h5>
                                                    <h5>No responde: 1</h5>
                                                </div>
                                                <!-- Respuesta Verbal -->
                                                <div class="col-sm-4">
                                                    <label>Respuesta Verbal</label>
                                                    <h5>Orientado: 5</h5>
                                                    <h5>Desorientado: 4</h5>
                                                    <h5>
                                                        Palabras inapropiadas: 3
                                                    </h5>
                                                    <h5>
                                                        Sonidos incomprensibles: 2
                                                    </h5>
                                                    <h5>No responde: 1</h5>
                                                </div>
                                                <!-- Respuesta Motora -->
                                                <div class="col-sm-4">
                                                    <label>Respuesta Motora</label>
                                                    <h5>
                                                        Cumple Ordenes expresadas por voz: 6
                                                    </h5>
                                                    <h5>
                                                        Localizada el Estímulo
                                                        doloroso: 5
                                                    </h5>
                                                    <h5>
                                                        Retira ante el Estímulo
                                                        doloroso: 4
                                                    </h5>
                                                    <h5>
                                                        Respuesta en flexíon
                                                        (postura de decorticación):
                                                        3
                                                    </h5>
                                                    <h5>
                                                        Respuesta en extensión
                                                        (postura de descerebración):
                                                        2
                                                    </h5>
                                                    <h5>No responde: 1</h5>
                                                </div>
                                                <!-- PUNTUACIÓN -->
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label
                                                            class="col-sm-4 col-form-label"
                                                            >PUNTUACIÓN</label
                                                        >
                                                        <div class="col-sm-4 mr-2">
                                                            <input
                                                                type="number"
                                                                class="form-control"
                                                                placeholder=""
                                                                v-model="
                                                                    form.frm_puntuacionNeurologico
                                                                "
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
        }
    },
    data: function() {
        return {
             rutaSello: "",
            frmimg: {
                imgFirma: null,
                imgGrafica: null,
            },
            chk: {
                /* Cuello Corto */
                chk_cuelloCorto: false,

                /* Escala de Malla */
                chk_clase1: false,
                chk_clase2: false,
                chk_clase3: false,
                chk_clase4: false,
                chk_ingurgitacionYugular: false,

                /* Dentadura */
                chk_edentulo: false,
                chk_protesis: false,
            },
            form: {
                frm_idCirugiaProgramada: "",

                /* Examen Fisico */
                frm_pa: "",
                frm_fc: "",
                frm_peso: "",
                frm_talla: "",

                /* Estado General */
                frm_estado_general: "",

                /* Cuello Corto */
                frm_cuelloCorto: false,
                frm_dmt: "",
                frm_cmCuelloCorto: "",

                /* Movilidad del Cuello */
                frm_movilidad_cuello: "",

                /* Escala de Malla */
                frm_clase1: false,
                frm_clase2: false,
                frm_clase3: false,
                frm_clase4: false,
                frm_ingurgitacionYugular: false,

                /* Boca Apertura Oral */
                frm_cmBocaAperturaOral: "",

                /* Dentadura */
                frm_dentadura: "",
                frm_edentulo: false,
                frm_protesis: false,

                /* Caja de Texto */
                frm_cardiovascular: "",
                frm_respiratorio: "",
                frm_abdomen: "",
                frm_extremidades: "",
                frm_otros: "",

                /* Neurologico: ESCALA DE GLASGOW */
                frm_puntuacionNeurologico: 0
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
            if(this.form.frm_cmBocaAperturaOral <1 || this.form.frm_cmBocaAperturaOral > 4){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "El campo cm debe ser mayor o igual a 1, o menor o igual a 4.",
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
            if(this.form.frm_puntuacionNeurologico <3 || this.form.frm_puntuacionNeurologico > 15){
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "El campo puntuación debe sumar ser mayor o igual a 3, o menor o igual a 15.",
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
        //Metodo para cargar el motivo antecedente del paciente mediantes el cod cita
        cargarExamenFisico: function() {
            let that = this;
            let url =
                "/modulos/cirugia/valoracionPreanestecia/cargar_examen_fisico_campo/" +that.$props.idSecCirPro;
            var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {
                    //Obtiene los datos de Motivo Antecedentes
                    if(response.data.examenFisico!=null && response.data.examenFisico!=undefined){
                        /* PA */
                        that.form.frm_pa= response.data.examenFisico.pa;

                        that.form.frm_fc = response.data.examenFisico.fc;

                        that.form.frm_traumatico = response.data.examenFisico.traumatico;

                        that.form.frm_peso = response.data.examenFisico.peso;

                        that.form.frm_talla = response.data.examenFisico.talla;

                        /* Estado General  */
                        that.form.frm_estado_general = response.data.examenFisico.estado_general;

                        /* Cuello Corto */
                        that.chk.chk_cuelloCorto = +response.data.examenFisico.cuelloCorto;
                        that.form.frm_cuelloCorto = +response.data.examenFisico.cuelloCorto;

                        that.form.frm_dmt = response.data.examenFisico.dmt;

                        that.form.frm_cmCuelloCorto = response.data.examenFisico.cmCuelloCorto;

                        that.form.frm_movilidad_cuello = response.data.examenFisico.movilidad_cuello;

                        /* Escala de MallaMPATI */
                        that.chk.chk_clase1 = +response.data.examenFisico.clase1;
                        that.form.frm_clase1 = +response.data.examenFisico.clase1;

                        that.chk.chk_clase2 = +response.data.examenFisico.clase2;
                        that.form.frm_clase2 = +response.data.examenFisico.clase2;

                        that.chk.chk_clase3 = +response.data.examenFisico.clase3;
                        that.form.frm_clase3 = +response.data.examenFisico.clase3;

                        that.chk.chk_clase4 = +response.data.examenFisico.clase4 ;
                        that.form.frm_clase4  = +response.data.examenFisico.clase4 ;

                        that.chk.chk_ingurgitacionYugular = +response.data.examenFisico.ingurgitacionYugular;
                        that.form.frm_ingurgitacionYugular = +response.data.examenFisico.ingurgitacionYugular;

                        /* Boca Apertura Oral */
                        that.form.frm_cmBocaAperturaOral = response.data.examenFisico.cmBocaAperturaOral;

                        /* Dentadura */
                        that.form.frm_dentadura = response.data.examenFisico.dentadura;

                        that.chk.chk_edentulo = +response.data.examenFisico.edentulo;
                        that.form.frm_edentulo  = +response.data.examenFisico.edentulo;

                        that.chk.chk_protesis = +response.data.examenFisico.protesis;
                        that.form.frm_protesis = +response.data.examenFisico.protesis;

                        /* Cardiovascular */
                        that.form.frm_cardiovascular = response.data.examenFisico.cardiovascular;

                        that.form.frm_respiratorio = response.data.examenFisico.respiratorio;

                        that.form.frm_abdomen = response.data.examenFisico.abdomen;

                        that.form.frm_extremidades = response.data.examenFisico.extremidades;
                        that.form.frm_otros = response.data.examenFisico.otros;

                        that.form.frm_puntuacionNeurologico = response.data.examenFisico.puntuacionNeurologico;

                    }
                    loader.hide()
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
                        title: "Error al procesar cargarExamenFisico",
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
            if (this.$props.idSecCirPro != "" || this.$props.idSecCirPro) {
                let idSecCirPro = this.$props.idSecCirPro;
                let url =
                    "/modulos/cirugia/valoracionPreanestecia/guardar_modificar_examen_fisico";
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
                        //that.cargarAtencionMotivo();
                    })
                    .catch(error => {
                        that.flashMessage.show({
                            status: "error",
                            title: "Error al procesar cargarExamenFisico",
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
                let that = this;
                /* that.$swal({
                    icon: "error",
                    title: "Citas",
                    text: "Debe seleccionar un paciente"
                }); */
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
            }
        },
        /* Cuello Corto */
        validarChkCuelloCorto() {
            if (this.chk.chk_cuelloCorto) {
                this.form.frm_cuelloCorto = 0;
            } else {
                this.form.frm_cuelloCorto = 1;
            }
        },
        /* Fin Cuello Corto */

        /* Escala de MallaMPATI */
        validarChkClase1() {
            if (this.chk.chk_clase1) {
                this.form.frm_clase1 = 0;
            } else {
                this.form.frm_clase1 = 1;
            }
        },
        validarChkClase1() {
            if (this.chk.chk_clase1) {
                this.form.frm_clase1 = 0;
            } else {
                this.form.frm_clase1 = 1;
            }
        },
        validarChkClase1() {
            if (this.chk.chk_clase1) {
                this.form.frm_clase1 = 0;
            } else {
                this.form.frm_clase1 = 1;
            }
        },
        validarChkClase2() {
            if (this.chk.chk_clase2) {
                this.form.frm_clase2 = 0;
            } else {
                this.form.frm_clase2 = 1;
            }
        },
        validarChkClase3() {
            if (this.chk.chk_clase3) {
                this.form.frm_clase3 = 0;
            } else {
                this.form.frm_clase3 = 1;
            }
        },
        validarChkClase4() {
            if (this.chk.chk_clase4) {
                this.form.frm_clase4 = 0;
            } else {
                this.form.frm_clase4 = 1;
            }
        },
        validarChkIngurgitaciónYugular() {
            if (this.chk.chk_ingurgitacionYugular) {
                this.form.frm_ingurgitacionYugular = 0;
            } else {
                this.form.frm_ingurgitacionYugular = 1;
            }
        },
        /* Fin Escala de MallaMPATI */

        /* Dentadura */
        validarChkEdentulo() {
            if (this.chk.chk_edentulo) {
                this.form.frm_edentulo = 0;
            } else {
                this.form.frm_edentulo = 1;
            }
        },
        validarChkProtesis() {
            if (this.chk.chk_protesis) {
                this.form.frm_protesis = 0;
            } else {
                this.form.frm_protesis = 1;
            }
        },
        /* Fin Dentadura */
    }
};
</script>

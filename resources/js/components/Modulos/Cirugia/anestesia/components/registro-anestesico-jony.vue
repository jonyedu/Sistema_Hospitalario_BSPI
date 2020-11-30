<template>
    <div>
        <div class="flex flex-center-x mt-2 mb-2">
            <button
                class="btn btn-success"
                v-if="!iniciado"
                v-on:click="start_time"
            >
                Iniciar
            </button>
            <button
                class="btn btn-danger"
                v-if="iniciado"
                v-on:click="end_time"
            >
                Finalizar
            </button>
        </div>
        <div class="" style="width: 90%; margin: 0 auto">
            <div class="row flex-center-x">
                <p
                    class="badge badge-warning pl-3 pr-3 pt-2 pb-2"
                    style="font-size: 1.0em"
                >
                    <!-- Tiempo : <span>{{ hour }}</span
                    >:<span>{{ minutes }}</span
                    >:<span>{{ seconds }}</span> -->
                    Tiempo: <span id="total">{{ tiempo }}</span>
                </p>
            </div>
            <div class="row mb-5" v-if="iniciado">
                <!-- MAX y MIN -->
                <div class="col-md-3 border-t pt-2 pb-4">
                    <div class="text-center"><p class="text-center">TA</p></div>
                    <div class="row">
                        <!-- MAX -->
                        <div class="col-md-10 flex fle">
                            <label for="ta_max" class="mr-2">MAX</label>
                            <input
                                class="input-registro text-center"
                                type="number"
                                name="ta_max"
                                v-model="valoresFormulario.ta_max.valor"
                                id="ta_max"
                            />
                        </div>
                        <!-- MIN -->
                        <div class="col-md-10 mt-2 flex flex-x">
                            <label for="ta_min" class="mr-2">MIN</label>
                            <input
                                class="input-registro text-center"
                                type="number"
                                name="ta_value"
                                v-model="valoresFormulario.ta_min.valor"
                                id="ta_min"
                            />
                        </div>
                    </div>
                </div>
                <!-- PULSO -->
                <div
                    class="col-md-2 flex border-t flex-y flex-center-x flex-center-y pt-2 pb-4"
                >
                    <label for="valor_pulso" class="mr-2">PULSO</label>
                    <input
                        class="input-registro text-center"
                        type="number"
                        name="valor_pulso"
                        v-model="valoresFormulario.valor_pulso.valor"
                        id="valor_pulso"
                    />
                </div>
                <!-- RESPIRACIÓN -->
                <div class="col-md-4 border-t pt-2 pb-4">
                    <div class="text-center">
                        <p class="text-center">RESPIRACIÓN</p>
                    </div>
                    <div class="row flex flex-center-x">
                        <!-- ESP -->
                        <div
                            class="col-lg-4 col-md-5 flex flex-x flex-center-y"
                        >
                            <label for="respiracion_esp" class="mr-2"
                                >ESP</label
                            >
                            <input
                                class="input-registro"
                                type="radio"
                                name="respiracion_esp"
                                id="respiracion_esp"
                                value="ESP"
                                v-model="
                                    valoresFormulario.respiracion.descripcion
                                "
                            />
                        </div>
                        <!-- ASIS -->
                        <div
                            class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                        >
                            <label for="respiracion_asis" class="mr-2"
                                >ASIS</label
                            >
                            <input
                                class="input-registro"
                                type="radio"
                                name="respiracion_asis"
                                id="respiracion_asis"
                                value="ASIS"
                                v-model="
                                    valoresFormulario.respiracion.descripcion
                                "
                            />
                        </div>
                        <!-- CONT -->
                        <div
                            class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                        >
                            <label for="respiracion_cont" class="mr-2"
                                >CONT</label
                            >
                            <input
                                class="input-registro"
                                type="radio"
                                name="respiracion_cont"
                                id="respiracion_cont"
                                value="CONT"
                                v-model="
                                    valoresFormulario.respiracion.descripcion
                                "
                            />
                        </div>
                    </div>
                </div>
                <!-- TEMPERATURA -->
                <div
                    class="col-md-3 flex border-t flex-y flex-center-x flex-center-y pt-2 pb-4"
                >
                    <div
                        class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                    >
                        <label for="temperatura" class="mr-2"
                            >TEMPERATURA</label
                        >
                        <input
                            type="checkbox"
                            name="temperatura"
                            id="temperatura"
                            v-model="chk.temperatura"
                        />
                    </div>
                    <input
                        class="input-registro text-center"
                        type="number"
                        name="valor_temperatura"
                        id="valor_temperatura"
                        v-model="valoresFormulario.temperatura.valor"
                    />
                </div>
                <!-- FETO -->
                <div
                    class="col-md-3 flex border-t flex-y flex-center-x flex-center-y pt-2 pb-4"
                >
                    <div
                        class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                    >
                        <label for="feto" class="mr-2">FETO</label>
                        <input
                            type="checkbox"
                            name="feto"
                            id="feto"
                            v-model="chk.feto"
                        />
                    </div>
                    <input
                        class="input-registro text-center"
                        type="number"
                        name="valor_feto"
                        id="valor_feto"
                        v-model="valoresFormulario.feto.valor"
                    />
                </div>
                <!-- PRES VENOSA -->
                <div
                    class="col-md-3 flex border-t flex-y flex-center-x flex-center-y pt-2 pb-4"
                >
                    <div
                        class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                    >
                        <label for="pares_venosa" class="mr-2"
                            >PRES VENOSA</label
                        >
                        <input
                            type="checkbox"
                            name="pares_venosa"
                            id="pares_venosa"
                            v-model="chk.pares_venosa"
                        />
                    </div>
                    <input
                        class="input-registro text-center"
                        type="number"
                        name="valor_pres_venosa"
                        id="valor_pres_venosa"
                        v-model="valoresFormulario.pares_venosa.valor"
                    />
                </div>
                <!-- TORNIQUETE -->
                <div
                    class="col-md-3 flex border-t flex-y flex-center-x flex-center-y pt-2 pb-4"
                >
                    <div
                        class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                    >
                        <label for="torniquete" class="mr-2">TORNIQUETE</label>
                        <input
                            type="checkbox"
                            name="torniquete"
                            id="torniquete"
                            v-model="chk.torniquete"
                        />
                    </div>
                    <input
                        class="input-registro text-center"
                        type="number"
                        name="valor_torniquete"
                        id="valor_torniquete"
                        v-model="valoresFormulario.torniquete.valor"
                    />
                </div>
                <!-- POSICIÓN -->
                <div class="col-md-3 border-t pt-2 pb-4">
                    <div class="text-center">
                        <p class="text-center grid-center">POSICIÓN</p>
                    </div>
                    <div class="row flex flex-center-x">
                        <div
                            class="col-lg-5 col-md-12 p-0 grid grid-2-c"
                            v-for="(posicion, index) of posiciones"
                            :key="index"
                        >
                            <label
                                :for="'radio-posicion-' + posicion.id"
                                class="mr-2 grid-center"
                                >{{ posicion.descripcion }}</label
                            >
                            <span class="flex flex-center-x flex-center-y">
                                <input
                                    type="radio"
                                    v-model="valoresFormulario.posicion.id"
                                    v-bind:value="posicion.id"
                                    :id="'radio-posicion-' + posicion.id"
                                    checked
                                />
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Boton Agregar -->
                <div class="flex felx-center mt-2 mb-2" style="margin: 0 auto">
                    <button
                        class="btn btn-primary"
                        v-on:click="obtenerDatosFormulario"
                    >
                        Agregar
                    </button>
                </div>
            </div>

            <div v-if="iniciado">
                <div ref="printMe">
                    <div class="row border-t flex-center-x">
                        <span class="">Registro anestésico</span>
                    </div>
                    <div class="border-t row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-4">
                                    <div
                                        class="border-b row ml-2"
                                        style="background: transparent"
                                    >
                                        AGENTE/HORA
                                    </div>
                                    <div
                                        class="row he25 border-b border-r"
                                        v-for="(text, index) of agentes_text"
                                        :key="index"
                                    >
                                        <!-- Se crea varios input para Agente/Hora -->
                                        <input
                                            type="text"
                                            v-model="
                                                agentes_text[index].descripcion
                                            "
                                            style="width:100%"
                                        />
                                    </div>
                                    <!-- Agente hora -->
                                    <div class="row">
                                        <!-- Seccion donde muestra los tipos de agentes -->
                                        <div
                                            class="col-8"
                                            id="tabla-datos-grafica"
                                        >
                                            <div
                                                class="row mt-2 mb-2"
                                                v-for="(item,
                                                index) of tabla_datos_grafica"
                                                :key="index"
                                            >
                                                <!-- {{item}} -->
                                                <div class="col-9">
                                                    {{ item.descripcion }}
                                                </div>
                                                <div class="col-3">
                                                    <img
                                                        v-if="item.img_url"
                                                        width="15"
                                                        :src="
                                                            '/' + item.img_url
                                                        "
                                                        alt="no carga"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Muestra los valores en grados del arreglo datos_grados -->
                                        <div class="col-2 p-0">
                                            <div style="margin-top: 5.4rem">
                                                <p
                                                    style="margin-bottom:2.1rem"
                                                    v-for="(item,
                                                    index) of datos_grados"
                                                    :key="index"
                                                >
                                                    {{ item }}&deg;
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Muestra los valores en Y 0..220 -->
                                        <div class="col-2 p-0">
                                            <div
                                                v-for="(item,
                                                index) of valoresAnestecia_v"
                                                style="height: 1.80em"
                                                :key="index"
                                            >
                                                {{ item.inicio }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- POSICION -->
                                    <div
                                        class="row border-r flex-x-end"
                                        style="padding: 15px 5px"
                                    >
                                        <span>POSICION</span>
                                    </div>
                                </div>
                                <!-- DATOS  -->
                                <div
                                    class="col-lg-9 col-md-8 col-8 overflow-x-hidden p-0"
                                >
                                    <div
                                        class="row no-wrap-flex ml-0"
                                        style="height: 100% !important"
                                    >
                                        <!-- Cada hora -->
                                        <div
                                            v-for="(item,
                                            index) of lista_horas_avanzadas_v"
                                            style="min-width: 270px"
                                            :key="index"
                                        >
                                            <div
                                                :style="{
                                                    minWidth: '240px',
                                                    height: item.height
                                                        ? item.height
                                                        : '20px'
                                                }"
                                                class="border-b"
                                            >
                                                <!-- Cada fila de la hora -->
                                                <div
                                                    v-for="(dato,
                                                    index_fila) of item.datos"
                                                    :style="dato.styles"
                                                    :key="index_fila"
                                                >
                                                    <div
                                                        :style="dato.style"
                                                        :class="dato._class"
                                                    >
                                                        <!-- Muestra los tiempos 0 15 30 45  -->
                                                        <template
                                                            v-if="
                                                                dato.es_tiempo
                                                            "
                                                        >
                                                            <div
                                                                style="height: 25px; width: 100%"
                                                                v-for="(columna,
                                                                index_columna) of dato.columnasQuinceMin"
                                                                :class="
                                                                    columna._class
                                                                "
                                                                :key="
                                                                    index_columna
                                                                "
                                                            >
                                                                <div
                                                                    class="p-0 flex space-btw relative"
                                                                >
                                                                    <span
                                                                        v-if="
                                                                            columna.tiempo_inicio
                                                                        "
                                                                    >
                                                                        {{
                                                                            columna.tiempo_inicio
                                                                        }}</span
                                                                    >
                                                                    <span
                                                                        v-if="
                                                                            !columna.tiempo_inicio
                                                                        "
                                                                        ><img
                                                                            src="/img/icons/time_00.png"
                                                                            alt=""
                                                                            class="time-triangle-abs"
                                                                        />
                                                                        <p
                                                                            class="blue ml-4"
                                                                        >
                                                                            {{
                                                                                horasInicial[
                                                                                    index_columna +
                                                                                        index
                                                                                ]
                                                                            }}
                                                                        </p></span
                                                                    >
                                                                    <!-- <span > {{ columna.tiempo_fin }}</span> -->
                                                                </div>
                                                            </div>
                                                        </template>
                                                        <!-- Ingreso de datos de manera libre -->
                                                        <!-- Aquí pones los datos los tipos de oxigeno -->
                                                        <template
                                                            v-if="dato.es_dato"
                                                        >
                                                            <div
                                                                style="height: 25px"
                                                                v-for="(columna,
                                                                index_columna) of dato.columnasQuinceMin"
                                                                :class="
                                                                    columna._class
                                                                "
                                                                :key="
                                                                    index_columna
                                                                "
                                                            >
                                                                <div
                                                                    v-if="
                                                                        dato.es_dato
                                                                    "
                                                                >
                                                                    <!-- {{ index_fila | json }} -->
                                                                    <input
                                                                        type="text"
                                                                        style="width: 100%"
                                                                        v-model="
                                                                            agentes_text[
                                                                                index_fila -
                                                                                    1
                                                                            ]
                                                                                .valores[
                                                                                index_columna +
                                                                                    index *
                                                                                        4
                                                                            ]
                                                                        "
                                                                    />
                                                                </div>
                                                            </div>
                                                        </template>
                                                        <!-- Aqui van los datos de agentes que pinta en la grafica -->
                                                        <template
                                                            v-if="
                                                                dato.es_agente
                                                            "
                                                        >
                                                            <div
                                                                style="height: 1.82em;grid-template-columns: 1fr 1fr 1fr;"
                                                                v-for="(columna,
                                                                index_columna) of dato.columnasQuinceMin"
                                                                :class="
                                                                    columna._class
                                                                "
                                                                :key="
                                                                    index_columna
                                                                "
                                                            >
                                                                <div
                                                                    v-for="(minutos_columna,
                                                                    index_minutos_columna) of columna.columnas"
                                                                    class="relative border-r"
                                                                    :key="
                                                                        index_minutos_columna
                                                                    "
                                                                >
                                                                    <!-- {{minutos_columna}} -->
                                                                    <template
                                                                        v-if="
                                                                            minutos_columna.agentes
                                                                        "
                                                                    >
                                                                        <a
                                                                            v-for="(agente,
                                                                            index_agente) of minutos_columna.agentes"
                                                                            :key="
                                                                                index_agente
                                                                            "
                                                                            @click="
                                                                                eliminarAgente(
                                                                                    index,
                                                                                    index_fila,
                                                                                    index_columna,
                                                                                    index_minutos_columna,
                                                                                    index_agente
                                                                                )
                                                                            "
                                                                            ><img
                                                                                class="figure-celds"
                                                                                :src="
                                                                                    '/' +
                                                                                        agente._src
                                                                                "
                                                                                alt=""
                                                                                style="width: 20px"
                                                                        /></a>
                                                                    </template>
                                                                </div>
                                                            </div>
                                                        </template>
                                                        <!-- Aqui va los valores de posicion que pinta al final de la grafica -->
                                                        <template
                                                            v-if="
                                                                dato.es_posicion
                                                            "
                                                        >
                                                            <div
                                                                style="height: 50px;grid-template-columns: 1fr 1fr 1fr;"
                                                                v-for="(columna,
                                                                index_columna) of dato.columnasQuinceMin"
                                                                :class="
                                                                    columna._class
                                                                "
                                                                :key="
                                                                    index_columna
                                                                "
                                                            >
                                                                <!-- <div v-for="minutos_columna of columna.columnas" class="relative border-r border-b"> -->
                                                                <img
                                                                    v-if="
                                                                        columna
                                                                            .posicion
                                                                            .id !=
                                                                            0
                                                                    "
                                                                    class="ml-3"
                                                                    :src="
                                                                        '/' +
                                                                            columna
                                                                                .posicion
                                                                                .img_url
                                                                    "
                                                                    alt=""
                                                                    style="width: 70px"
                                                                />
                                                                <!-- </div> -->
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DROGAS ADMINISTRADAS -->
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
                            <!-- <input
                                type="text"
                                class="input-line col-md-4"
                                name="conducido_por"
                                id="conducido_por"
                                v-model="form.por"
                            /> -->
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
                            <span class="col-md-12">COMENTATIOS:</span>
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
        <modal
            :width="'30%'"
            height="auto"
            :scrollable="true"
            name="ConfirmarCandelar"
            style="z-index: 1200;"
        >
            <vue-confirmar-cancelar
                :icon="icon"
                :titulo="titulo"
                :mensaje="mensaje"
                ref="ConfirmarCandelar"
                @respuestaConfirmarCancelar="respuestaConfirmarCancelar"
            ></vue-confirmar-cancelar>
        </modal>
        <!--  <FlashMessage></FlashMessage> -->
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
            resConfirmarCancelar: false,
            icon: "",
            titulo: "",
            mensaje: "",
            selectedSala: "",
            selectedMedico: "",
            horasInicial: [],
            salas: [],
            medicos: [],
            validarImgFirma: 0,
            isFirstPaintable: "firmaAnestesiologo",
            rutaSello: "/img/selloFirma.png",
            validarImprimir: 0,
            selectedTipoPosiciones: "",
            tipoPosiciones: "",
            chk: {
                temperatura: 0,
                feto: 0,
                pares_venosa: 0,
                torniquete: 0
            },
            form: {
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
                conducido_a: "",
                por: "",
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
            registro_id: 1,
            drogas_administradas: [],
            peso: "",
            estatura: "",
            system_posicion: "posicion",
            system_agente: "agente",
            system_respiracion: "respiracion",
            /***
             * Datos para el conteo del la hora
             */
            hour: new Date().getHours(),
            minutes: new Date().getMinutes(),
            seconds: new Date().getSeconds(),
            time: new Date().getSeconds(),
            /**
             * End
             */

            /**
             * Datos para el registro de la rejilla
             */
            // Posociones
            posiciones: [],
            // Datos que van a aparecer en AGENTE/ HORA {id, descripcion, name_system, img_url}
            tabla_datos_grafica: [],
            // Datos de grados, estáticos
            datos_grados: [40, 38, 36, 34, 32, 30, 28, 26],
            // Control de la rejilla, cada objeto tiene X filas, cada fila tiene un arreglo de 4 objetos
            //(representan la hora separada en partes por 15 minutos de la hora)[adicional,
            //cada objeto de 15 min tiene los datos de la posición de paciente], cada objeto de 15
            //minutos tiene su arreglo que representa sus 15 minutos separados en 5 minutos,
            //cada objeto de 5  minutos tiene los valores de los agentes
            lista_horas_avanzadas_v: [],
            // DATOS numéricos para los valores de la anestesia
            valoresAnestecia_v: [
                { inicio: 220, fin: 500 },
                { inicio: 210, fin: 220 },
                { inicio: 200, fin: 210 },
                { inicio: 190, fin: 200 },
                { inicio: 180, fin: 190 },
                { inicio: 170, fin: 190 },
                { inicio: 160, fin: 170 },
                { inicio: 150, fin: 160 },
                { inicio: 140, fin: 150 },
                { inicio: 130, fin: 140 },
                { inicio: 120, fin: 130 },
                { inicio: 110, fin: 120 },
                { inicio: 100, fin: 110 },
                { inicio: 90, fin: 100 },
                { inicio: 80, fin: 90 },
                { inicio: 70, fin: 80 },
                { inicio: 60, fin: 80 },
                { inicio: 50, fin: 70 },
                { inicio: 40, fin: 60 },
                { inicio: 30, fin: 40 },
                { inicio: 20, fin: 30 },
                { inicio: 10, fin: 20 },
                { inicio: 0, fin: 10 }
            ],
            // índice que indica donde empieza el registro de los agentes ya que hay filas
            //extras antes de cada ítem del agente
            index_points: 5,
            counter: 0,
            // El proceso se ha iniciado
            iniciado: false,
            // Contador de horas
            indice_hora: 0,
            indice_minuto: 0,
            // Texto adicional ubicados en las primeras columnas de las rejillas
            agentes_text: [
                { descripcion: "Oxigeno litros po min", valores: [] },
                { descripcion: "Sevoflorane vol %", valores: [] },
                { descripcion: "Remifentanil 5mg/500 ML", valores: [] },
                { descripcion: "Spo2 %", valores: [] }
            ],
            // Formulario de recolección de datos
            valoresFormulario: {
                ta_max: {
                    habilitado: true,
                    ruta_img: "img/icons/max.png",
                    descripcion: "MAX",
                    valor: 0
                },
                ta_min: {
                    habilitado: true,
                    ruta_img: "img/icons/min.png",
                    descripcion: "MIN",
                    valor: 0
                },
                valor_pulso: {
                    habilitado: true,
                    descripcion: "PULSO",
                    ruta_img: "img/icons/pulso.png",
                    valor: 0
                },
                respiracion: {
                    habilitado: true,
                    descripcion: "ESP",
                    ruta_img: "",
                    valor: 0
                },
                temperatura: {
                    habilitado: false,
                    ruta_img: "img/icons/temperatura.png",
                    descripcion: "TEMPERATURA",
                    valor: 0
                },
                feto: {
                    habilitado: true,
                    ruta_img: "img/icons/feto.png",
                    descripcion: "FETO",
                    valor: 0
                },
                pares_venosa: {
                    ruta_img: "img/icons/pares_venosa.png",
                    habilitado: true,
                    descripcion: "PARES VENOSA",
                    valor: 0
                },
                torniquete: {
                    ruta_img: "img/icons/torniquete.png",
                    habilitado: true,
                    descripcion: "TORNIQUETE",
                    valor: 0
                },
                posicion: {
                    id: 0,
                    descripcion: ""
                }
            },

            //   VALORES A ENVIAR AL SERVER
            datos_anestecia_envio: [],
            datos_server: []
        };
    },
    computed: {
        /**
         * Cácular el valor final para las infusiones
         */
        total_infusiones: function(params) {
            var subTotal = 0;
            this.form.infusiones.forEach(function(infusion) {
                subTotal += +Number(infusion.valor);
            });
            return (this.form.total = subTotal);
        },
        tiempo: function(params) {
            var tiempo = 0;
            var segundo = this.$funcionesGlobales.addCeroToTime(this.seconds);
            var minuto = this.$funcionesGlobales.addCeroToTime(this.minutes);
            var hora = this.$funcionesGlobales.addCeroToTime(this.hour);
            tiempo = hora + ":" + minuto + ":" + segundo;
            return tiempo;
        }
    },
    mounted: function() {
        this.flashMessage.setStrategy("multiple");
        this.form.cirugia_id = this.$props.idSecCirPro;
        /**
         * Se empiezan a llenar los datos de la rejilla
         */
        this.llenarDatos();
        /**
         * Obtiene los datos [posiciones], [agentes]
         */
        this.obtenerDatos();
        /**
         * Control de tiempo
         */
        this.setSelectedTipoPosiciones();
        this.setSelectedSala();
        this.setSelectedMedico();
        setInterval(() => {
            this.seconds += 1;
            if (this.seconds >= 59) {
                this.seconds = 0;
                if (this.iniciado) {
                    if (this.minutes % 5 == 0) {
                        this.indice_minuto += 15;
                    }
                }
                if (this.minutes >= 59) {
                    this.hour += 1;
                    this.minutes = 0;
                    if (this.iniciado) {
                        this.indice_hora += 1;
                        // Si la hora se ha completado, se agrega otro objeto de horas al
                        //arreglo de datos
                        this.agregarHora();
                        this.agregarHorasInicial();

                        //es para actualizar el registro_anestesia_id cada vez que se haya pasado mas de 4 horas
                        if (this.indice_hora % 5 == 0) {
                            this.getNewIdRegistroAnestesia();
                            this.getImgGrafica();
                        }
                    }
                } else {
                    this.minutes += 1;
                }
            }
            // Han pasado 5 min
            if (this.minutes % 5 == 0) {
                // En caso que hayan pasado los 5 minutos, se registra de manera automática los datos
                if (this.seconds == 1) {
                    this.obtenerDatosFormulario();
                }
            }
        }, 1000);
    },
    beforeDestroy: function() {},
    methods: {
        eliminarAgente(
            index,
            index_fila,
            index_columna,
            index_minutos_columna,
            index_agente
        ) {
            var mensaje =
                "index: " +
                index +
                ", index_fila: " +
                index_fila +
                ", index_columna: " +
                index_columna +
                ", index_minutos_columna: " +
                index_minutos_columna +
                ", index_agente: " +
                index_agente;
            this.flashMessage.show({
                status: "error",
                title: "Error al procesar consultarSello",
                message: mensaje,
                clickable: true,
                time: 0,
                icon: "/iconsflashMessage/error.svg",
                customStyle: {
                    flashMessageStyle: {
                        background: "linear-gradient(#e66465, #9198e5)"
                    }
                }
            });
            let indexLista = null;
            /* for (let i = 0; i < this.lista_horas_avanzadas_v.length; i++) {
                if (this.lista_horas_avanzadas_v[i] != "") {
                    if (i == index) {
                        for (let j = 0;j < this.lista_horas_avanzadas_v[i].datos.length;j++) {
                            if (this.lista_horas_avanzadas_v[i].datos[j] != "") {
                                if (j == index_fila){
                                    for (let k = 0;k <this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin.length;k++) {
                                        if (this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin[k] != "") {
                                            if (k == index_columna){
                                                for (let l = 0;l <this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin[k].columnas.length;l++) {
                                                    if (this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin[k].columnas != "") {
                                                        if (l == index_minutos_columna){
                                                            console.log(this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin[k].columnas[l]);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                } */
                /* this.agregaDatoEnRejilla(
                    true,
                    false,
                    250,
                    "img/icons/induccion.png",
                    { system_name: "INDUCCION", tipo: this.system_agente }
                ); */

                /* if (this.lista_horas_avanzadas_v[i].datos == id_producto) {
                    indexLista = i;
                    break;
                } */
            for (const columna_quince of this.lista_horas_avanzadas_v[index].datos[index_fila].columnasQuinceMin) {
                //console.log(columna_quince.columnas);
                for (const index_agente of columna_quince.columnas[index_columna]) {

                }



            }
            /* for (let i = 0; i < this.lista_horas_avanzadas_v.length; i++) {
                if (this.lista_horas_avanzadas_v[i] != "") {
                    if (i == index) {
                        for (let j = 0;j < this.lista_horas_avanzadas_v[i].datos.length;j++) {
                            if (this.lista_horas_avanzadas_v[i].datos[j] != "") {
                                if (j == index_fila){
                                    for (let k = 0;k <this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin.length;k++) {
                                        if (this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin[k] != "") {
                                            if (k == index_columna){
                                                for (let l = 0;l <this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin[k].columnas.length;l++) {
                                                    if (this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin[k].columnas != "") {
                                                        if (l == index_minutos_columna){
                                                            console.log(this.lista_horas_avanzadas_v[i].datos[j].columnasQuinceMin[k].columnas[l]);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } */
            //this.lista_horas_avanzadas_v.splice(index, 1);
        },
        /**
         * Método para pintar el dato en una rejilla y enviar ese dato al servidor
         * @param is_tpo_init
         * @param is_tpo_fin
         * @param valor
         * @param ruta_icono
         * @param adicional
         * @param fila_indice
         * @param es_posicion
         * @param posicion
         */
        agregaDatoEnRejilla: function(
            is_tpo_init,
            is_tpo_fin,
            valor,
            ruta_icono,
            adicional = { system_name: "" },
            fila_indice = 0,
            es_posicion = false,
            posicion = {}
        ) {
            // if(posicion)debugger
            var indice_fila =
                fila_indice != 0 ? fila_indice : this.obtenerIndice(valor);

            // Verifica el índice según la hora
            for (const column_quince of this.lista_horas_avanzadas_v[
                this.indice_hora
            ].datos[indice_fila + this.index_points].columnasQuinceMin) {
                // Recorre cada fila
                // Si tiene columnas ( cada 5 min del cuarto de hora por separación)
                if (column_quince.columnas) {
                    // Recorre datos
                    if (es_posicion) {
                        // posiciones
                        if (
                            column_quince.tiempo_inicio <= this.minutes &&
                            column_quince.tiempo_fin > this.minutes
                        ) {
                            // Agregar dato de envío
                            this.enviarDatosAgente(
                                {
                                    tpo_ini: is_tpo_init,
                                    tpo_fin: is_tpo_fin,
                                    hora: this.hour,
                                    min: this.minutes,
                                    segundos: this.seconds,
                                    valor: valor,
                                    name: adicional.system_name,
                                    indice_hora: this.indice_hora
                                },
                                adicional.tipo
                            );
                            column_quince.posicion = posicion;
                            return;
                        }
                    } else {
                        // figuras en rejillas
                        for (const col_cince_min of column_quince.columnas) {
                            if (
                                col_cince_min.t_init <= this.minutes &&
                                col_cince_min.t_fin > this.minutes
                            ) {
                                if (
                                    this.minutes >= col_cince_min.t_init &&
                                    col_cince_min.t_fin > this.minutes
                                ) {
                                    col_cince_min.agentes.push({
                                        descripcion: adicional.system_name,
                                        valor: valor,
                                        _src: ruta_icono
                                    });

                                    // Agregar dato de envío
                                    this.enviarDatosAgente(
                                        {
                                            tpo_ini: is_tpo_init,
                                            tpo_fin: is_tpo_fin,
                                            hora: this.hour,
                                            min: this.minutes,
                                            segundos: this.seconds,
                                            valor: valor,
                                            name: adicional.system_name,
                                            indice_hora: this.indice_hora
                                        },
                                        adicional.tipo
                                    );
                                }
                                return;
                            }
                        }
                    }
                }
            }
        },
        mostrarModalConfirmarCandelar() {
            this.icon = "/iconsflashMessage/warning.svg";
            this.titulo = "¿Desea cerrar el proceso?";
            this.mensaje = "Al dar en Aceptar, el proceso dará por finalizado.";
            this.$modal.show("ConfirmarCandelar");
        },
        respuestaConfirmarCancelar(value) {
            this.resConfirmarCancelar = value;
            this.$modal.hide("ConfirmarCandelar");
            this.end_time();
        },
        agregarHorasInicial() {
            this.horasInicial.push(this.hour);
        },
        consultarSello() {
            let that = this;
            if (this.form.id_medico > 0) {
                var loader = that.$loading.show();
                let url =
                    "/modulos/cirugia/anestesia/cargar_sello/" +
                    this.form.id_medico;
                axios
                    .get(url)
                    .then(function(response) {
                        if (response.data.sello != null) {
                            if (response.data.sello.medico_sellos != null) {
                                that.rutaSello =
                                    "data:image/jpeg;base64," +
                                    response.data.sello.medico_sellos
                                        .IMAGEN_SELLO;
                            }
                        }
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
                            title: "Error al procesar consultarSello",
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
        getNewIdRegistroAnestesia() {
            if (this.iniciado) return;
            this.iniciado = true;

            let url = "/modulos/cirugia/anestesia/registro/post";
            axios
                .post(url, this.form)
                .then(function(response) {
                    this.form.registro_anestesia_id = response.data.id;
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar IdRegistroAnestesia",
                        message: "Se generó una nueva pagina.",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/success.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
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
                        title: "Error al procesar getNewIdRegistroAnestesia",
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
                    //Errores
                    /* that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    }); */
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
                        objeto.id_sala = sala.id;
                        salas.push(objeto);
                    });
                    that.salas = salas;
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
                this.consultarSello();
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
                    //Errores
                    /* that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    }); */
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
        /**
         * Método para obtener datos principales desde el server
         */
        obtenerDatos: function() {
            this.obtenerDatosAgentes();
            this.obtenerDatosPosiciones();
        },
        /**
         * Obtener agentes
         */
        obtenerDatosAgentes: function() {
            let url = "/modulos/cirugia/anestesia/agentes";
            axios
                .get(url + "/agente")
                .then(response => {
                    this.tabla_datos_grafica = response.data;
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
                        title: "Error al procesar obtenerDatosAgentes",
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
        /**
         * Obtener posiciones
         */
        obtenerDatosPosiciones: function() {
            let url = "/modulos/cirugia/anestesia/agentes";
            axios
                .get(url + "/posicion")
                .then(response => {
                    this.posiciones = response.data;
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
                        title: "Error al procesar obtenerDatosPosiciones",
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
        /**
         * Método para enviar datos de la rejilla (agentes), cada que se registen (pasando 5 min)
         */
        enviarDatosAgente(datos = {}, tipo) {
            let that = this;
            //var loader = that.$loading.show();
            this.form.cirugia_id = this.$props.idSecCirPro;
            let url =
                "/modulos/cirugia/anestesia/agentes/guardado/" +
                this.registro_id;
            axios
                .post(url, {
                    registro_anestesia_id: this.form.registro_anestesia_id,
                    datos: datos,
                    tipo: tipo,
                    SecCirPro: this.form.cirugia_id
                })
                .then(response => {
                    ///console.log(response.data);
                    this.datos_server = response.data;
                    //loader.hide();
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
                        title: "Error al procesar obtenerDatosPosiciones",
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
                    //loader.hide();
                });
        },
        /**
         * Inicio de la recolección de datos
         */
        start_time: async function(event) {
            if (this.iniciado) return;
            this.iniciado = true;
            this.agregarHorasInicial();
            //this.consultarSello();

            //Guardar datos en la tabla tb_registro_anestesia
            let url = "/modulos/cirugia/anestesia/registro/post";
            let $id = await axios.post(url, this.form).then(response => {
                this.form.registro_anestesia_id = response.data.id;
            });
            this.$emit("guardarCabecera", this.form.registro_anestesia_id);
            //Guardar datos en la tabla tb_tipo_agente_anestesia
            // let urlTip = "/modulos/cirugia/anestesia/registro_tipo_agente/post";
            // axios.post(urlTip, this.form).then(response => {
            //     this.form.agente_id = response.data.id;
            // });
            // Poner el dato al inicio de la rejilla cuando se haya iniciado
            this.agregaDatoEnRejilla(
                true,
                false,
                250,
                "img/icons/induccion.png",
                { system_name: "INDUCCION", tipo: this.system_agente }
            );
            this.flashMessage.show({
                status: "success",
                title: "Éxito al procesar",
                message: "Agente agregado correctamente.",
                clickable: true,
                time: 5000,
                icon: "/iconsflashMessage/success.svg",
                customStyle: {
                    flashMessageStyle: {
                        background: "linear-gradient(#e66465, #9198e5)"
                    }
                }
            });
        },
        /**
         * Finaliza el proceso, aquí se deben enviar los demás datos para que el registro se edite
         */
        end_time: function() {
            if (this.validarImgFirma) {
                if (!this.iniciado) return;
                this.mostrarModalConfirmarCandelar();
                if (this.resConfirmarCancelar) {
                    //if (!confirm("¿Desea cerrar el proceso?")) return;
                    //this.iniciado = false;

                    // Poner el dato al final de la rejilla cuando se haya finalizado
                    this.agregaDatoEnRejilla(
                        true,
                        false,
                        0,
                        "img/icons/fin_anestecia.png",
                        {
                            system_name: "FIN-ANESTECIA",
                            tipo: this.system_agente
                        }
                    );
                    var idFlashMessage1 = this.flashMessage.show({
                        status: "info",
                        title: "Generando Gráfica",
                        message:
                            "Se está generando la gráfica, por favor espere.",
                        clickable: false,
                        time: 0,
                        icon: "/iconsflashMessage/time.gif",
                        blockClass: "custom_msg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });

                    this.getImgGrafica(idFlashMessage1);

                    //this.flashMessage.deleteMessage(idFlashMessage1);

                    //Se guardan los datos a la base
                    this.guardarDrograAdministrada();
                }
            } else {
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia al procesar firma",
                    message: "Se necesita una firma por favor.",
                    clickable: true,
                    time: 0,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
            }
        },
        async getImgGrafica(idFlashMessage1) {
            const la = this.$refs.printMe;
            const optiones = {
                type: "dataURL"
            };
            this.form.imgGrafica = await this.$html2canvas(la, optiones);
            this.flashMessage.deleteMessage(idFlashMessage1);
            this.flashMessage.show({
                status: "success",
                title: "Exito en Graficar",
                message: "Grafico generado correctamente.",
                clickable: true,
                time: 5000,
                icon: "/iconsflashMessage/success.svg",
                customStyle: {
                    flashMessageStyle: {
                        background: "linear-gradient(#e66465, #9198e5)"
                    }
                }
            });
            this.guardarImgGrafica();
        },
        guardarImgGrafica() {
            let that = this;
            let url = "";
            let mensaje = "";
            let formNew = {
                cirugia_id: that.form.cirugia_id,
                registro_anestesia_id: that.form.registro_anestesia_id,
                imgGrafica: that.form.imgGrafica
            };
            url = "/modulos/cirugia/anestesia/guardar_img_grafica";

            var loader = that.$loading.show();
            axios
                .post(url, formNew)
                .then(function(response) {
                    //Llamar metodo de parent para que actualice el grid.
                    //that.guardarModificarAgenteText();
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar Img. Gráfica",
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
                    /* that.$swal({
                        icon: "error",
                        title: "Error Guardar Imagen Grafica",
                        text: error
                    }); */
                    that.resConfirmarCancelar = false;
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar guardarImgGrafica",
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
        guardarDrograAdministrada() {
            let that = this;
            let url = "";
            let mensaje = "";
            let formNew = {
                frm_registro_anestesia_id: that.form.registro_anestesia_id,
                frm_descripciones: that.drogas_administradas
            };

            url = "/modulos/cirugia/anestesia/guardar_droga_administrada";

            var loader = that.$loading.show();
            axios
                .post(url, formNew)
                .then(function(response) {
                    that.modifcarRegistroAnestesia();
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar Drogra Administrada",
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
                    that.resConfirmarCancelar = false;
                    /* that.$swal({
                        icon: "error",
                        title: "Error Guardar Drogas Administradas",
                        text: error
                    }); */
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar guardarDrograAdministrada",
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
        modifcarRegistroAnestesia() {
            let that = this;
            let url = "";
            let mensaje = "";
            url = "/modulos/cirugia/anestesia/modifcar_registro_anestesia";

            var loader = that.$loading.show();
            axios
                .post(url, this.form)
                .then(function(response) {
                    that.guardarRegistroInfusiones();
                    loader.hide();
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar Registro Anestesia",
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
                })
                .catch(error => {
                    //Errores de validación
                    loader.hide();
                    that.resConfirmarCancelar = false;
                    /* that.$swal({
                        icon: "error",
                        title: "Error Modificar Registro Administradas",
                        text: error
                    }); */
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar modifcarRegistroAnestesia",
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
        guardarRegistroInfusiones() {
            let that = this;
            let url = "";
            let mensaje = "";
            let formNew = {
                registro_anestesia_id: that.form.registro_anestesia_id,
                infusiones: that.form.infusiones
            };
            url = "/modulos/cirugia/anestesia/guardar_registro_infusiones";

            var loader = that.$loading.show();
            axios
                .post(url, formNew)
                .then(function(response) {
                    //Llamar metodo de parent para que actualice el grid.
                    /* that.$swal({
                        icon: "success",
                        title: "Proceso realizado exitosamente",
                        text: "Datos guardados correctamente."
                    }); */
                    that.guardarFirmaPorAtencion();
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar Registro Infusiones",
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
                    /* that.$swal({
                        icon: "error",
                        title: "Error Guardar Infusiones",
                        text: error
                    }); */
                    that.resConfirmarCancelar = false;
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar guardarRegistroInfusiones",
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
        guardarFirmaPorAtencion() {
            let that = this;
            let url = "";
            let mensaje = "";
            let formNew = {
                cirugia_id: that.form.cirugia_id,
                imgFirma: that.form.imgFirma
            };
            url = "/modulos/cirugia/anestesia/guardar_firma_atencion";

            var loader = that.$loading.show();
            axios
                .post(url, formNew)
                .then(function(response) {
                    //Llamar metodo de parent para que actualice el grid.
                    /* that.$swal({
                        icon: "success",
                        title: "Proceso realizado exitosamente",
                        text: "Datos guardados correctamente."
                    }); */
                    loader.hide();
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar Firma por Atención",
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
                    /* var idFlashMessage1 = that.flashMessage.show({
                        status: "info",
                        title: "Generando Gráfica",
                        message: "Se está generando la gráfica, por favor espere.",
                        clickable: false,
                        time: 0,
                        icon: "/iconsflashMessage/time.gif",
                        blockClass: 'custom_msg',
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    }); */
                    //that.getImgGrafica(idFlashMessage1);
                    //that.flashMessage.deleteMessage(idFlashMessage1);
                    that.guardarModificarAgenteText();
                })
                .catch(error => {
                    //Errores de validación
                    /* that.$swal({
                        icon: "error",
                        title: "Error Guardar Firma por Atención",
                        text: error
                    }); */
                    that.resConfirmarCancelar = false;
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar guardarFirmaPorAtencion",
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
        guardarModificarAgenteText() {
            let that = this;
            let url = "";
            let formNew = {
                datos: that.agentes_text,
                registro_anestesia_id: that.form.registro_anestesia_id,
                hora: that.hour,
                minuto: that.minutes,
                indice_minuto: that.indice_minuto
            };
            url = "/modulos/cirugia/anestesia/guardar_modificar_agente_text";
            var loader = that.$loading.show();
            axios
                .post(url, formNew)
                .then(function(response) {
                    /* that.$swal({
                        icon: "success",
                        title: "Proceso realizado exitosamente",
                        text: "Datos guardados correctamente."
                    }); */
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar Modificar Agente Text",
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
                    that.$emit(
                        "guardarCabecera",
                        that.form.registro_anestesia_id
                    );
                    that.validarImprimir = 1;
                    that.resConfirmarCancelar = false;
                    that.$emit("RespuestaImprimir", that.validarImprimir);
                    that.iniciado = false;
                    loader.hide();
                })
                .catch(error => {
                    //Errores de validación
                    /* that.$swal({
                        icon: "error",
                        title: "Error Guardar Agente Text",
                        text: error
                    }); */
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar guardarModificarAgenteText",
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

        /**
         * Método para obtener el índice en la posición Y, según el valor que se le envíe, usa los valores estáticos 'valoresAnestecia_v'
         * @return int
         */
        obtenerIndice: function(valor) {
            return this.valoresAnestecia_v.findIndex(
                ob_limite => ob_limite.inicio <= valor && ob_limite.fin > valor
            );
        },

        /**
         * Agrega datos a la rejilla
         */
        agregarDatos: function(campo) {
            // console.log(campo);
            this.agregaDatoEnRejilla(
                false,
                false,
                campo.valor,
                campo.ruta_img,
                { system_name: campo.descripcion, tipo: this.system_agente }
            );
        },
        /**
         *
         */

        obtenerDatosFormulario: function() {
            if (!this.iniciado) return;
            // img/icons/'+this.valoresFormulario.descripcion.toLowerCase()+'.png
            if (this.valoresFormulario.posicion.id == 0) {
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia Campos Vacios",
                    message: "Complete los campos de agente por favor.",
                    clickable: true,
                    time: 0,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return;
            }
            //console.log(this.valoresFormulario);
            this.agregarDatos(this.valoresFormulario.ta_max);
            this.agregarDatos(this.valoresFormulario.ta_min);

            this.agregarDatos(this.valoresFormulario.valor_pulso);

            // debugger
            this.agregarDatoRespiracion();
            //this.agregarDatos(this.valoresFormulario.respiracion);

            if (this.chk.temperatura) {
                this.agregarDatos(this.valoresFormulario.temperatura);
            }

            if (this.chk.feto) {
                this.agregarDatos(this.valoresFormulario.feto);
            }

            if (this.chk.pares_venosa) {
                this.agregarDatos(this.valoresFormulario.pares_venosa);
            }

            if (this.chk.torniquete) {
                this.agregarDatos(this.valoresFormulario.torniquete);
            }

            //Aqui va el metodo de guardar los text
            //this.guardarModificarAgenteText();

            // Agregar posición en la rejilla
            let post_text = this.posiciones.find(
                e => e.id == this.valoresFormulario.posicion.id
            );
            this.agregaDatoEnRejilla(
                false,
                false,
                0,
                "",
                {
                    system_name: post_text ? post_text.name_system : "",
                    tipo: this.system_posicion
                },
                this.lista_horas_avanzadas_v[this.indice_hora].datos.length -
                    2 -
                    this.index_points,
                true,
                this.posiciones.find(
                    pos => pos.id == this.valoresFormulario.posicion.id
                )
            );
            this.flashMessage.show({
                status: "success",
                title: "Éxito al procesar",
                message: "Agente agregado correctamente.",
                clickable: true,
                time: 5000,
                icon: "/iconsflashMessage/success.svg",
                customStyle: {
                    flashMessageStyle: {
                        background: "linear-gradient(#e66465, #9198e5)"
                    }
                }
            });
        },

        agregarDatoRespiracion() {
            this.valoresFormulario.respiracion.img_url =
                this.valoresFormulario.respiracion.descripcion == "ESP"
                    ? "img/icons/esp.png"
                    : this.valoresFormulario.respiracion.descripcion == "ASIS"
                    ? "img/icons/asis.png"
                    : this.valoresFormulario.respiracion.descripcion == "CONT"
                    ? "img/icons/cont.png"
                    : "";
            // Agregar posicón en la rejilla
            this.agregaDatoEnRejilla(
                false,
                false,
                0,
                this.valoresFormulario.respiracion.img_url,
                {
                    system_name: this.valoresFormulario.respiracion.descripcion,
                    tipo: this.system_respiracion
                },
                this.lista_horas_avanzadas_v[this.indice_hora].datos.length -
                    1 -
                    this.index_points,
                false,
                {},
                true
            );
        },

        // Datos de ingreso

        columnaCincoMin(t_ini, t_fin, mostrar_t_ini, mostrar_t_fin) {
            return {
                mostrar_t_ini: mostrar_t_ini,
                mostrar_t_fin: mostrar_t_fin,
                t_init: t_ini,
                t_fin: t_fin,
                columnas: [
                    {
                        html: ""
                    }
                ],
                agentes: []
            };
        },

        /**
         *
         * @param {*} inicio
         * @param {*} fin
         * @param {*} es_agente
         * @param {*} styles
         */
        agregarDatoEnColumna(
            inicio,
            fin,
            es_agente = false,
            styles = { display: "flex" },
            add_class = ""
        ) {
            // Agregar nuevas columnas
            var columnas = [];
            var tiempo_acum = 5;
            if (es_agente) {
                tiempo_acum = inicio;
                columnas.push(
                    this.columnaCincoMin(
                        tiempo_acum,
                        tiempo_acum + 5,
                        false,
                        true
                    )
                );
                tiempo_acum += 5;
                columnas.push(
                    this.columnaCincoMin(
                        tiempo_acum,
                        tiempo_acum + 5,
                        false,
                        true
                    )
                );
                tiempo_acum += 5;
                columnas.push(
                    this.columnaCincoMin(
                        tiempo_acum,
                        tiempo_acum + 5,
                        false,
                        true
                    )
                );
            }

            return {
                tiempo_inicio: inicio,
                tiempo_fin: fin,
                styles: styles,
                _class: "col-3 p-0 grid grid-4-c border-t" + add_class,
                dato_text: "",
                columnas: columnas,
                posicion: {
                    img_url: "",
                    descripcion: "",
                    id: 0
                }
            };
        },

        /**
         * Ex;: 0 , 15, true, false, false,
         * @param {*} tiempo_inicio
         * @param {*} tiempo_fin
         * @param {*} es_tiempo
         * @param {*} es_agente
         * @param {*} es_dato
         */
        agregarNuevaColumna(
            tiempo_inicio,
            tiempo_fin,
            es_tiempo = false,
            es_agente = false,
            es_dato = false
        ) {
            return {
                tiempo_inicio: tiempo_inicio,
                tiempo_fin: tiempo_fin,
                styles: { display: "flex", maxHeight: "100%" },
                //
                es_tiempo: es_tiempo,
                es_agente: es_agente,
                es_dato: es_dato,
                dato_text: "",
                columnas: []
            };
        },

        /**
         *
         * @param {*} height
         */
        agregarNuevaHora(height = "50px") {
            return {
                height: height,
                datos: []
            };
        },
        /**
         *
         * @param {*} es_tiempo
         * @param {*} es_dato
         * @param {*} es_agente
         */
        agregarFilaEnHora(
            es_tiempo = false,
            es_dato = false,
            es_agente = false,
            es_posicion = false
        ) {
            return {
                columnasQuinceMin: [],
                styles: { width: "100%" },
                _class: "flex row ml-0 width-100-p",
                es_tiempo: es_tiempo,
                es_agente: es_agente,
                es_dato: es_dato,
                es_posicion: es_posicion
            };
        },
        agregarHora() {
            var hora = this.agregarNuevaHora("auto");
            hora.datos.push(this.agregarFilaEnHora(true));
            hora.datos.push(this.agregarFilaEnHora(false, true));
            hora.datos.push(this.agregarFilaEnHora(false, true));
            hora.datos.push(this.agregarFilaEnHora(false, true));
            hora.datos.push(this.agregarFilaEnHora(false, true));

            // Filas
            for (const items of this.valoresAnestecia_v) {
                hora.datos.push(this.agregarFilaEnHora(false, false, true));
            }
            hora.datos.push(this.agregarFilaEnHora(false, false, false, true));
            hora.datos.push(this.agregarFilaEnHora(false, false, true));

            for (const dato of hora.datos) {
                dato.columnasQuinceMin.push(
                    this.agregarDatoEnColumna(0, 14, dato.es_agente)
                );
                dato.columnasQuinceMin.push(
                    this.agregarDatoEnColumna(15, 29, dato.es_agente)
                );
                dato.columnasQuinceMin.push(
                    this.agregarDatoEnColumna(30, 44, dato.es_agente)
                );
                dato.columnasQuinceMin.push(
                    this.agregarDatoEnColumna(45, 60, dato.es_agente)
                );
            }

            this.lista_horas_avanzadas_v.push(hora);
        },

        llenarDatos() {
            var hora = this.agregarNuevaHora("auto");
            hora.datos.push(this.agregarFilaEnHora(true));
            hora.datos.push(this.agregarFilaEnHora(false, true));
            hora.datos.push(this.agregarFilaEnHora(false, true));
            hora.datos.push(this.agregarFilaEnHora(false, true));
            hora.datos.push(this.agregarFilaEnHora(false, true));

            // Filas
            for (const items of this.valoresAnestecia_v) {
                hora.datos.push(this.agregarFilaEnHora(false, false, true));
            }
            hora.datos.push(this.agregarFilaEnHora(false, false, false, true));
            hora.datos.push(this.agregarFilaEnHora(false, false, true));

            for (const dato of hora.datos) {
                dato.columnasQuinceMin.push(
                    this.agregarDatoEnColumna(0, 14, dato.es_agente)
                );
                dato.columnasQuinceMin.push(
                    this.agregarDatoEnColumna(15, 29, dato.es_agente)
                );
                dato.columnasQuinceMin.push(
                    this.agregarDatoEnColumna(30, 44, dato.es_agente)
                );
                dato.columnasQuinceMin.push(
                    this.agregarDatoEnColumna(45, 60, dato.es_agente)
                );
            }
            // hora.datos.push(agregarFilaEnHora(false, false, true));
            // hora.datos.push(agregarFilaEnHora(false, false, true));

            this.lista_horas_avanzadas_v.push(hora);
        }
    }
};
</script>

<style lang="css">
table {
    border-collapse: collapse;
}
.flex {
    display: flex;
}
.flex-y {
    flex-direction: column;
}

.flex-x {
    flex-direction: row;
}
.border-t {
    border: 1px solid #000;
}
.border-l {
    border-left: 1px solid #000;
}
.border-r {
    border-right: 1px solid #000;
}
.flex-center-x {
    justify-content: center;
}
.flex-center-y {
    align-items: center;
}
.border-top {
    border-top: 1px solid #000 !important;
}

.border-b {
    border-bottom: 1px solid #000;
}

.upper {
    text-transform: uppercase;
}

.input-line {
    border: none;
    border-bottom: 1px solid #000;
    outline: none;
}
.input-no-line {
    border: none;
    outline: none;
}

.space-left {
    box-sizing: border-box;
    padding-left: 5px;
}
.m-w {
    max-width: 35px;
}

.no-line {
    border: none;
    outline: none;
}
.w-100p {
    width: 100%;
}

.border-none-b- {
    border: none;
    outline: none;
    border-bottom: 1px solid #000;
}

.grid {
    display: grid;
}

.grid-2-c {
    grid-template-columns: 1fr 1fr;
}

.grid-center {
    align-self: center;
    justify-self: center;
}

.flex-x-end {
    justify-content: flex-end;
}

.he25 {
    height: 25px;
}
.overflow-x-hidden {
    overflow-x: scroll;
}
.wrap-flex {
    flex-wrap: wrap;
}

.no-wrap-flex {
    flex-wrap: nowrap !important;
}
.line-second {
    width: 20px;
    height: 20px;
    display: flex;
}

.space-btw {
    justify-content: space-between;
}
.width-100-p {
    width: 100%;
}

.time-triangle-abs {
    width: 15px;
    position: absolute;
    bottom: 0;
    /* left: -18px; */
    z-index: 1000;
}

.grid {
    display: grid;
}
.grid-4-c {
    /* grid-template-columns: repeat(4 , 1fr); */
}
.relative {
    position: relative;
}

.figure-celds {
    position: absolute;
}

.figure-celds:nth-child(1) {
    left: 0;
}
.figure-celds:nth-child(2) {
    left: 15px;
}
.figure-celds:nth-child(3) {
    left: 30px;
}
.figure-celds:nth-child(4) {
    left: 45px;
}
.figure-celds:nth-child(5) {
    left: 60px;
}
.figure-celds:nth-child(6) {
    left: 75px;
}
.input-registro {
    border-bottom: 1px solid;
    width: 100%;
}
p.blue {
    background: #5178d0;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 0.8em;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 1.6em;
    margin-right: 15px;
    text-align: center;
    width: 1.6em;
}
</style>

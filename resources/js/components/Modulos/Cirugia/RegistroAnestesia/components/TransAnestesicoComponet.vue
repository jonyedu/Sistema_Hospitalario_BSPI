<template>
    <div class="row justify-content-center">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="flex flex-center-x mt-2 mb-2">
                        <!-- <button
                            class="btn btn-outline-primary"
                            v-if="!iniciado"
                            v-on:click="start_time"
                            :style="{display: isHidden}"
                        >
                            Iniciar
                        </button>
                        <button
                            class="btn btn-outline-danger"
                            v-if="iniciado"
                            v-on:click="end_time"
                        >
                            Finalizar
                        </button> -->
                    </div>
                    <div
                        class=""
                        :style="{ display: isHidden }"
                        style="width: 90%; margin: 0 auto"
                    >
                        <div class="row flex-center-x">
                            <p
                                class="badge badge-warning  col-lg-4 col-md-4 col-sm-12"
                                style="font-size: 1.0em"
                            >
                                Tiempo:
                                <span
                                    ><input
                                        class="col-lg-2 col-md-2 col-sm-2"
                                        v-model="hour"
                                        type="text"
                                    />:</span
                                ><span
                                    ><input
                                        class="col-lg-2 col-md-2 col-sm-2"
                                        v-model="minutes"
                                        type="text"
                                    />:</span
                                ><span
                                    ><input
                                        class="col-lg-2 col-md-2 col-sm-2"
                                        v-model="seconds"
                                        type="text"
                                /></span>
                            </p>
                            <span
                                v-if="iniciado"
                            >
                                <button
                                    class="btn btn-primary"
                                    v-on:click="obtenerDatosFormulario"
                                >
                                    <!-- Agregar -->
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </span>
                            <span v-if="iniciado">
                                <button
                                    v-if="false"
                                    type="button"
                                    class="btn btn-outline-success"
                                    @click="agregarObjetoPorHora"
                                >
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </span>
                            <span v-if="iniciado_eliminar">
                                <button
                                    v-if="false"
                                    type="button"
                                    class="btn btn-outline-danger"
                                    @click="eliminarObjetoPorHora"
                                >
                                    <i class="fas fa-window-close"></i>
                                </button>
                            </span>
                        </div>
                        <div class="row mb-5" v-if="iniciado">
                            <!-- MAX y MIN -->
                            <div class="col-md-3 border-t pt-2 pb-4">
                                <div class="text-center">
                                    <p class="text-center">T.A.</p>
                                </div>
                                <div class="row">
                                    <!-- MAX -->
                                    <div class="col-md-10 flex fle">
                                        <label for="ta_max" class="mr-2"
                                            >MAX</label
                                        >
                                        <input
                                            class="input-registro text-center"
                                            type="number"
                                            name="ta_max"
                                            v-model="
                                                valoresFormulario.ta_max.valor
                                            "
                                            id="ta_max"
                                        />
                                    </div>
                                    <!-- MIN -->
                                    <div class="col-md-10 mt-2 flex flex-x">
                                        <label for="ta_min" class="mr-2"
                                            >MIN</label
                                        >
                                        <input
                                            class="input-registro text-center"
                                            type="number"
                                            name="ta_value"
                                            v-model="
                                                valoresFormulario.ta_min.valor
                                            "
                                            id="ta_min"
                                        />
                                    </div>
                                </div>
                            </div>
                            <!-- PULSO -->
                            <div
                                class="col-md-2 flex border-t flex-y flex-center-x flex-center-y pt-2 pb-4"
                            >
                                <label for="valor_pulso" class="mr-2"
                                    >PULSO</label
                                >
                                <input
                                    class="input-registro text-center"
                                    type="number"
                                    name="valor_pulso"
                                    v-model="
                                        valoresFormulario.valor_pulso.valor
                                    "
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
                                        <label
                                            for="respiracion_esp"
                                            class="mr-2"
                                            >ESP</label
                                        >
                                        <input
                                            class="input-registro"
                                            type="radio"
                                            name="respiracion_esp"
                                            id="respiracion_esp"
                                            value="ESP"
                                            v-model="
                                                valoresFormulario.respiracion
                                                    .descripcion
                                            "
                                        />
                                    </div>
                                    <!-- ASIS -->
                                    <div
                                        class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                                    >
                                        <label
                                            for="respiracion_asis"
                                            class="mr-2"
                                            >ASIS</label
                                        >
                                        <input
                                            class="input-registro"
                                            type="radio"
                                            name="respiracion_asis"
                                            id="respiracion_asis"
                                            value="ASIS"
                                            v-model="
                                                valoresFormulario.respiracion
                                                    .descripcion
                                            "
                                        />
                                    </div>
                                    <!-- CONT -->
                                    <div
                                        class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                                    >
                                        <label
                                            for="respiracion_cont"
                                            class="mr-2"
                                            >CONT</label
                                        >
                                        <input
                                            class="input-registro"
                                            type="radio"
                                            name="respiracion_cont"
                                            id="respiracion_cont"
                                            value="CONT"
                                            v-model="
                                                valoresFormulario.respiracion
                                                    .descripcion
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
                                    v-model="
                                        valoresFormulario.temperatura.valor
                                    "
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
                                    v-model="
                                        valoresFormulario.pares_venosa.valor
                                    "
                                />
                            </div>
                            <!-- TORNIQUETE -->
                            <div
                                class="col-md-3 flex border-t flex-y flex-center-x flex-center-y pt-2 pb-4"
                            >
                                <div
                                    class="col-lg-4 col-md-5 flex flex-x flex-center-x flex-center-y"
                                >
                                    <label for="torniquete" class="mr-2"
                                        >TORNIQUETE</label
                                    >
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
                                    <p class="text-center grid-center">
                                        POSICIÓN
                                    </p>
                                </div>
                                <div class="row flex flex-center-x">
                                    <div
                                        class="col-lg-5 col-md-12 p-0 grid grid-2-c"
                                        v-for="(posicion, index) of posiciones"
                                        :key="index"
                                    >
                                        <label
                                            :for="
                                                'radio-posicion-' + posicion.id
                                            "
                                            class="mr-2 grid-center"
                                            >{{ posicion.descripcion }}</label
                                        >
                                        <span
                                            class="flex flex-center-x flex-center-y"
                                        >
                                            <input
                                                type="radio"
                                                v-model="
                                                    valoresFormulario.posicion
                                                        .id
                                                "
                                                v-bind:value="posicion.id"
                                                :id="
                                                    'radio-posicion-' +
                                                        posicion.id
                                                "
                                                checked
                                            />
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Boton Agregar -->
                            <!-- <div
                                class="flex felx-center mt-2 mb-2"
                                style="margin: 0 auto"
                            >
                                <button
                                    class="btn btn-primary"
                                    v-on:click="obtenerDatosFormulario"
                                >
                                    Agregar
                                </button>
                            </div> -->
                        </div>
                        <div v-if="iniciado">
                            <div ref="printMe">
                                <div class="row border-t flex-center-x">
                                    <span class=""
                                        >Registro Trans-Anestésico</span
                                    >
                                </div>
                                <div class="border-t row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div
                                                class="col-lg-3 col-md-4 col-4"
                                            >
                                                <div
                                                    class="border-b row ml-2"
                                                    style="background: transparent"
                                                >
                                                    AGENTE/HORA
                                                </div>
                                                <div
                                                    class="row he25 border-b border-r"
                                                    v-for="(text,
                                                    index) of agentes_text"
                                                    :key="index"
                                                >
                                                    <!-- Se crea varios input para Agente/Hora -->
                                                    <input
                                                        type="text"
                                                        v-model="
                                                            agentes_text[index]
                                                                .descripcion
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
                                                                {{
                                                                    item.descripcion
                                                                }}
                                                            </div>
                                                            <div class="col-3">
                                                                <img
                                                                    v-if="
                                                                        item.img_url
                                                                    "
                                                                    width="15"
                                                                    :src="
                                                                        '/' +
                                                                            item.img_url
                                                                    "
                                                                    alt="no carga"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Muestra los valores en grados del arreglo datos_grados -->
                                                    <div class="col-2 p-0">
                                                        <div
                                                            style="margin-top: 5.4rem"
                                                        >
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
                                                <!-- POSICIÓN -->
                                                <div
                                                    class="row border-r flex-x-end"
                                                    style="padding: 15px 5px"
                                                >
                                                    <span>POSICIÓN</span>
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
                                                                minWidth:
                                                                    '240px',
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
                                                                :style="
                                                                    dato.styles
                                                                "
                                                                :key="
                                                                    index_fila
                                                                "
                                                            >
                                                                <div
                                                                    :style="
                                                                        dato.style
                                                                    "
                                                                    :class="
                                                                        dato._class
                                                                    "
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
                                                                        v-if="
                                                                            dato.es_dato
                                                                        "
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
                                                                                                index_agente,
                                                                                                minutos_columna,
                                                                                                agente,
                                                                                                dato
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
                                                                            <a
                                                                                v-if="
                                                                                    columna
                                                                                        .posicion
                                                                                        .id !=
                                                                                        0
                                                                                "
                                                                                @click="
                                                                                    eliminarPosicion(
                                                                                        index,
                                                                                        index_fila,
                                                                                        index_columna,
                                                                                        columna.posicion
                                                                                    )
                                                                                "
                                                                            >
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
                                                                            </a>
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
                            @respuestaConfirmarCancelar="
                                respuestaConfirmarCancelar
                            "
                        ></vue-confirmar-cancelar>
                    </modal>
                    <modal
                        :width="'20%'"
                        height="auto"
                        :scrollable="true"
                        name="EliminarAgente"
                        style="z-index: 1200;"
                    >
                        <eliminar-agente
                            ref="EliminarAgente"
                            :datos="datos_eliminar_agente"
                            @handleSeleccionarClick="handleSeleccionarClick"
                        ></eliminar-agente>
                    </modal>
                </div>
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
        idRegistroAnestesia: {
            type: Number,
            required: true
        }
    },
    data: function() {
        return {
            iniciadoGrafica: false,
            isHidden: "block",
            // Detectar cuando Inicia/Finaliza el Proceso
            iniciado: false,
            //Datos para el conteo del la hora
            hour: new Date().getHours(),
            minutes: new Date().getMinutes(),
            seconds: new Date().getSeconds(),
            time: new Date().getSeconds(),
            //Para eliminar la grafica por hora
            iniciado_eliminar: false,
            //Variables para el componente de ConfirmarCandelar
            resConfirmarCancelar: false,
            icon: "",
            titulo: "",
            mensaje: "",
            //Objeto para capturar los datos del agente/posicion que se vaya a modificar o eliminar en la grafica
            datos_eliminar_agente: {
                respuesta_modificar: false,
                respuesta_eliminar: false,
                index_all: {
                    index: "",
                    index_fila: "",
                    index_columna: "",
                    index_minutos_columna: "",
                    index_agente: ""
                },
                columnas: {
                    agente: {
                        src: "",
                        description: "",
                        cod: "",
                        value: "",
                        valueNew: ""
                    },
                    t_fin: "",
                    t_init: ""
                },
                posicion: {
                    description: "",
                    cod: "",
                    codRe: "",
                    src: "",
                    nombre_sistema: ""
                },
                dato: {
                    es_agente: "",
                    es_posicion: ""
                },
                adicional: {
                    system_name: "",
                    tipo: ""
                }
            },
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
                    descripcion: "",
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
                    descripcion: "PRES VENOSA",
                    valor: 0
                },
                torniquete: {
                    ruta_img: "img/icons/torniquete.png",
                    habilitado: true,
                    descripcion: "TORNIQUETE",
                    valor: 0
                },
                posicion: {
                    //idRe: 0,
                    id: 0,
                    descripcion: ""
                }
            },
            //Variables para validar si/no graficar
            chk: {
                temperatura: 0,
                feto: 0,
                pares_venosa: 0,
                torniquete: 0
            },
            form: {
                cirugia_id: 0,
                registro_anestesia_id: 0,
                id_datos_agente: 0,
                imgGrafica: ""
            },
            // Posociones
            posiciones: [],
            // Control de la rejilla, cada objeto tiene X filas, cada fila tiene un arreglo de 4 objetos
            //(representan la hora separada en partes por 15 minutos de la hora)[adicional,
            //cada objeto de 15 min tiene los datos de la posición de paciente], cada objeto de 15
            //minutos tiene su arreglo que representa sus 15 minutos separados en 5 minutos,
            //cada objeto de 5  minutos tiene los valores de los agentes
            lista_horas_avanzadas_v: [],
            // Datos que van a aparecer en AGENTE/ HORA {id, descripcion, name_system, img_url}
            tabla_datos_grafica: [],
            // Datos de grados, estáticos
            datos_grados: [40, 38, 36, 34, 32, 30, 28, 26],
            // Texto adicional ubicados en las primeras columnas de las rejillas
            agentes_text: [
                { descripcion: "Oxigeno L/min", valores: [] },
                { descripcion: "Sevoflorane vol %", valores: [] },
                { descripcion: "Remifentanil 5mg/500 ML", valores: [] },
                { descripcion: "Spo2 %", valores: [] }
            ],
            //Arreglo de Objetos que servirá para guardar los valores de cada celda en la grafica
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
            //Variable para guardar las horas
            horasInicial: [],
            //Variables para saber el tipo de datos
            system_posicion: "posicion",
            system_agente: "agente",
            system_respiracion: "respiracion",
            // índice que indica donde empieza el registro de los agentes ya que hay filas
            //extras antes de cada ítem del agente
            index_points: 5,
            // Contador de horas
            indice_hora: 0,
            indice_minuto: 0
        };
    },
    mounted: function() {
        this.flashMessage.setStrategy("multiple");
        //Es para asignar 0 al tiempo
        var segundo = this.$funcionesGlobales.addCeroToTime(this.seconds);
        var minuto = this.$funcionesGlobales.addCeroToTime(this.minutes);
        var hora = this.$funcionesGlobales.addCeroToTime(this.hour);
        //Asigna los valores con el 0 incluido
        this.seconds = segundo;
        this.minutes = minuto;
        this.hour = hora;
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
    },
    methods: {
        //Metodo para llenar los datos a la Grafica
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
            this.lista_horas_avanzadas_v.push(hora);
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
        //Metodos para cargar los comboBox
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
        //Metodo para iniciar el proceso de la grafica
        start_time: async function(event) {
            if (this.iniciado) return;
            this.iniciado = true;
            this.$emit("Iniciado", true);
            this.iniciadoGrafica = true;
            this.agregarHorasInicial();
            // Poner el dato al inicio de la rejilla cuando se haya iniciado
            this.agregaDatoEnRejilla(
                true,
                false,
                250,
                "img/icons/induccion.png",
                { system_name: "INDUCCIÓN", tipo: this.system_agente }
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
        //Metodo para finalizar el proceso de la grafica
        end_time: function() {
            if (!this.iniciado) return;
            this.mostrarModalConfirmarCandelar();
            if (this.resConfirmarCancelar) {
                this.agregaDatoEnRejilla(
                    true,
                    false,
                    0,
                    "img/icons/fin_anestecia.png",
                    {
                        system_name: "FIN-ANESTESIA",
                        tipo: this.system_agente
                    }
                );
                this.form.cirugia_id = this.$props.idSecCirPro;
                this.form.registro_anestesia_id = this.$props.idRegistroAnestesia;
                var idFlashMessage1 = this.flashMessage.show({
                    status: "info",
                    title: "Generando Gráfica",
                    message: "Se está generando la gráfica, por favor espere.",
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
                this.guardarModificarAgenteText();
            }
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
                            if (column_quince.posicion.id == 0) {
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
                                    adicional.tipo,
                                    es_posicion,
                                    {},
                                    adicional.system_name,
                                    valor,
                                    ruta_icono,
                                    posicion,
                                    column_quince
                                );
                                return;
                            }
                            //Pinta en la grafica los valores
                            //Si funciona, llevar este codigo a donde guarda en base
                            /* Object.assign(posicion,{nue:0});
                            column_quince.posicion = posicion;
                            return; */
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
                                    if (col_cince_min.agentes.length == 0) {
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
                                            adicional.tipo,
                                            es_posicion,
                                            col_cince_min,
                                            adicional.system_name,
                                            valor,
                                            ruta_icono
                                        );
                                    }
                                }
                                return;
                            }
                        }
                    }
                }
            }
        },
        /**
         * Método para enviar datos de la rejilla (agentes), cada que se registen (pasando 5 min)
         */
        enviarDatosAgente1(
            datos = {},
            tipo,
            agente = {},
            col_cince_min = {},
            column_quince = []
        ) {
            let that = this;
            this.form.cirugia_id = this.$props.idSecCirPro;
            let url = "/modulos/cirugia/anestesia/agentes/guardado";
            axios
                .post(url, {
                    id_datos_agente: this.form.id_datos_agente,
                    registro_anestesia_id: this.form.registro_anestesia_id,
                    datos: datos,
                    tipo: tipo,
                    SecCirPro: this.form.cirugia_id
                })
                .then(response => {
                    this.datos_server = response.data;
                    //alert("es_posicion:" + es_posicion);
                    if (agente.dato.es_agente) {
                        col_cince_min.agentes.push({
                            descripcion: agente.columnas.agente.description,
                            valor: agente.columnas.agente.valueNew,
                            _src: agente.columnas.agente.src,
                            id: response.data.datos
                        });
                    } else {
                        column_quince.posicion.descripcion =
                            agente.posicion.description;
                        column_quince.posicion.id = agente.posicion.cod;
                        column_quince.posicion.img_url = agente.posicion.src;
                        column_quince.posicion.idRe = agente.posicion.codRe;
                    }
                    this.form.id_datos_agente = 0;
                })
                .catch(error => {
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar enviarDatosAgente1",
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
        enviarDatosAgente(
            datos = {},
            tipo,
            es_posicion,
            col_cince_min = {},
            descripcion,
            valor,
            src,
            posicion = {},
            column_quince = []
        ) {
            let that = this;
            this.form.cirugia_id = this.$props.idSecCirPro;
            let url = "/modulos/cirugia/anestesia/agentes/guardado";
            axios
                .post(url, {
                    id_datos_agente: this.form.id_datos_agente,
                    registro_anestesia_id: this.form.registro_anestesia_id,
                    datos: datos,
                    tipo: tipo,
                    SecCirPro: this.form.cirugia_id
                })
                .then(response => {
                    this.datos_server = response.data;
                    //alert("es_posicion:" + es_posicion);
                    if (es_posicion == false) {
                        col_cince_min.agentes.push({
                            descripcion: descripcion,
                            valor: valor,
                            _src: src,
                            id: response.data.datos
                        });
                    } else {
                        Object.assign(posicion, {
                            idRe: response.data.datos
                        });
                        column_quince.posicion = posicion;
                    }
                    this.form.id_datos_agente = 0;
                })
                .catch(error => {
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar enviarDatosAgente",
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
        async getImgGrafica(idFlashMessage1) {
            var loader = this.$loading.show();
            const la = this.$refs.printMe;
            const optiones = {
                type: "dataURL"
            };
            this.form.imgGrafica = await this.$html2canvas(la, optiones);
            this.flashMessage.deleteMessage(idFlashMessage1);
            loader.hide();
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
                    that.flashMessage.show({
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
                    that.resConfirmarCancelar = false;
                    that.iniciado = false;
                    that.$emit("Iniciado", false);
                    that.isHidden = "none";
                    that.$emit("IsHidden", that.isHidden);
                    loader.hide();
                })
                .catch(error => {
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
                    loader.hide();
                })
                .catch(error => {
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
        //Metodos para el componente ConfirmarCandelar
        mostrarModalConfirmarCandelar() {
            this.icon = "/iconsflashMessage/warning.svg";
            this.titulo = "¿Desea cerrar el proceso?";
            this.mensaje =
                "Al dar en Aceptar, el proceso trans-anestésico dará por finalizado.";
            this.$modal.show("ConfirmarCandelar");
        },
        respuestaConfirmarCancelar(value) {
            this.resConfirmarCancelar = value;
            this.$modal.hide("ConfirmarCandelar");
            this.end_time();
        },
        eliminarAgente(
            index,
            index_fila,
            index_columna,
            index_minutos_columna,
            index_agente,
            minutos_columna = {},
            agente = {},
            dato = {}
        ) {
            this.lmpDatosEliminarAgente();
            //Inicia la optimizacion
            this.datos_eliminar_agente.index_all.index = index;
            this.datos_eliminar_agente.index_all.index_fila = index_fila;
            this.datos_eliminar_agente.index_all.index_columna = index_columna;
            this.datos_eliminar_agente.index_all.index_minutos_columna = index_minutos_columna;
            this.datos_eliminar_agente.index_all.index_agente = index_agente;
            this.datos_eliminar_agente.columnas.t_init =
                minutos_columna["t_init"];
            this.datos_eliminar_agente.columnas.t_fin =
                minutos_columna["t_fin"];
            //Agente
            this.datos_eliminar_agente.columnas.agente.cod = agente.id;
            this.datos_eliminar_agente.columnas.agente.description =
                agente.descripcion;
            this.datos_eliminar_agente.columnas.agente.src = agente._src;
            this.datos_eliminar_agente.columnas.agente.value = agente.valor;
            //Fin Agente
            this.datos_eliminar_agente.dato.es_agente = dato.es_agente;
            this.datos_eliminar_agente.dato.es_posicion = dato.es_posicion;
            //Fin la optimizacion

            if (
                this.datos_eliminar_agente.dato.es_agente &&
                this.datos_eliminar_agente.index_all.index_fila != 29
            ) {
                this.datos_eliminar_agente.adicional = {
                    system_name: this.datos_eliminar_agente.columnas.agente
                        .description,
                    tipo: "agente"
                };
            } else if (
                this.datos_eliminar_agente.dato.es_agente &&
                this.datos_eliminar_agente.index_all.index_fila == 29
            ) {
                this.datos_eliminar_agente.adicional = {
                    system_name: this.datos_eliminar_agente.columnas.agente
                        .description,
                    tipo: "respiracion"
                };
            }
            this.$modal.show("EliminarAgente");
        },
        eliminarPosicion(index, index_fila, index_columna, posicion = {}) {
            this.lmpDatosEliminarAgente();
            this.datos_eliminar_agente.index_all.index = index;
            this.datos_eliminar_agente.index_all.index_fila = index_fila;
            this.datos_eliminar_agente.index_all.index_columna = index_columna;
            //Posicicion
            this.datos_eliminar_agente.posicion.cod = posicion.id;
            this.datos_eliminar_agente.posicion.codRe = posicion.idRe;
            this.datos_eliminar_agente.posicion.description =
                posicion.descripcion;
            this.datos_eliminar_agente.posicion.nombre_sistema =
                posicion.name_system;
            this.datos_eliminar_agente.posicion.src = posicion.img_url;
            //Fin

            this.datos_eliminar_agente.adicional = {
                system_name: this.datos_eliminar_agente.posicion.description,
                tipo: "posicion"
            };
            this.$modal.show("EliminarAgente");
        },
        //Metodo para cerrar el modal y procesar el modificado o eliminado del agentes
        handleSeleccionarClick(value) {
            if (value.respuesta) {
                var valor = parseInt(value.columnas.agente.valueNew);
                var minutes = value.columnas.t_init;
                var is_tpo_init = value.columnas.t_init;
                var is_tpo_fin = value.columnas.t_fin;
                var adicional = value.adicional;
                var ruta_icono =
                    value.posicion.src == ""
                        ? value.columnas.agente.src
                        : value.posicion.src;
                this.form.id_datos_agente =
                    value.posicion.codRe == ""
                        ? value.columnas.agente.cod
                        : value.posicion.codRe;
                var indice_fila = this.obtenerIndice(valor);
                if (adicional.tipo == "agente") {
                    for (const column_quince of this.lista_horas_avanzadas_v[
                        this.indice_hora
                    ].datos[indice_fila + this.index_points]
                        .columnasQuinceMin) {
                        // Recorre cada fila
                        // Si tiene columnas ( cada 5 min del cuarto de hora por separación)
                        if (column_quince.columnas) {
                            // figuras en rejillas
                            for (const col_cince_min of column_quince.columnas) {
                                if (
                                    col_cince_min.t_init <= minutes &&
                                    col_cince_min.t_fin > minutes
                                ) {
                                    if (
                                        minutes >= col_cince_min.t_init &&
                                        col_cince_min.t_fin > minutes
                                    ) {
                                        // Agregar dato de envío
                                        this.enviarDatosAgente1(
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
                                            adicional.tipo,
                                            value,
                                            col_cince_min,
                                            column_quince
                                        );
                                    }
                                }
                            }
                        }
                    }
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[
                        value.index_all.index_fila
                    ].columnasQuinceMin[value.index_all.index_columna].columnas[
                        value.index_all.index_minutos_columna
                    ].agentes.splice(value.index_all.indexLista, 1);
                } else if (adicional.tipo == "respiracion") {
                    this.enviarDatosAgente1(
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
                        adicional.tipo,
                        value,
                        this.lista_horas_avanzadas_v[value.index_all.index]
                            .datos[value.index_all.index_fila]
                            .columnasQuinceMin[value.index_all.index_columna]
                            .columnas[value.index_all.index_minutos_columna]
                    );
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[
                        value.index_all.index_fila
                    ].columnasQuinceMin[value.index_all.index_columna].columnas[
                        value.index_all.index_minutos_columna
                    ].agentes.splice(value.index_all.indexLista, 1);
                } else if (adicional.tipo == "posicion") {
                    this.enviarDatosAgente1(
                        {
                            tpo_ini: is_tpo_init,
                            tpo_fin: is_tpo_fin,
                            hora: this.hour,
                            min: this.minutes,
                            segundos: this.seconds,
                            valor: this.form.id_datos_agente,
                            name: adicional.system_name,
                            indice_hora: this.indice_hora
                        },
                        adicional.tipo,
                        value,
                        {},
                        this.lista_horas_avanzadas_v[value.index_all.index]
                            .datos[value.index_all.index_fila]
                            .columnasQuinceMin[value.index_all.index_columna]
                    );
                }
                /* Esta linea eliminará el agente de la grafica */
                this.flashMessage.show({
                    status: "success",
                    title: "Éxito al procesar",
                    message: "Agente Modificado Correctamente",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/success.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
            } else if (value.respuestaEliminar) {
                var adicional = value.adicional;
                if (adicional.tipo == "agente") {
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[
                        value.index_all.index_fila
                    ].columnasQuinceMin[value.index_all.index_columna].columnas[
                        value.index_all.index_minutos_columna
                    ].agentes.splice(value.index_all.indexLista, 1);
                } else if (adicional.tipo == "respiracion") {
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[
                        value.index_all.index_fila
                    ].columnasQuinceMin[value.index_all.index_columna].columnas[
                        value.index_all.index_minutos_columna
                    ].agentes.splice(value.index_all.indexLista, 1);
                } else if (adicional.tipo == "posicion") {
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[
                        value.index_all.index_fila
                    ].columnasQuinceMin[
                        value.index_all.index_columna
                    ].posicion = {
                        descripcion: "",
                        idRe: "",
                        img_url: "",
                        name_system: ""
                    };
                }
                /* Esta linea eliminará el agente de la grafica */
                this.flashMessage.show({
                    status: "success",
                    title: "Éxito al procesar",
                    message: "Agente Eliminados Correctamente",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/success.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
            }
            this.$modal.hide("EliminarAgente");
        },
        lmpDatosEliminarAgente() {
            this.datos_eliminar_agente.respuesta_modificar = false;
            this.datos_eliminar_agente.respuesta_modificar = false;
            this.datos_eliminar_agente.index_all.index = "";
            this.datos_eliminar_agente.index_all.index_fila = "";
            this.datos_eliminar_agente.index_all.index_columna = "";
            this.datos_eliminar_agente.index_all.index_minutos_columna = "";
            this.datos_eliminar_agente.index_all.index_agente = "";
            this.datos_eliminar_agente.columnas.agente.src = "";
            this.datos_eliminar_agente.columnas.agente.description = "";
            this.datos_eliminar_agente.columnas.agente.cod = "";
            this.datos_eliminar_agente.columnas.agente.value = "";
            this.datos_eliminar_agente.columnas.agente.valueNew = "";
            this.datos_eliminar_agente.columnas.t_fin = "";
            this.datos_eliminar_agente.columnas.t_init = "";
            this.datos_eliminar_agente.posicion.description = "";
            this.datos_eliminar_agente.posicion.cod = "";
            this.datos_eliminar_agente.posicion.codRe = "";
            this.datos_eliminar_agente.posicion.src = "";
            this.datos_eliminar_agente.posicion.nombre_sistema = "";
            this.datos_eliminar_agente.dato.es_agente = "";
            this.datos_eliminar_agente.dato.es_posicion = "";
        },
        //Metodo para agregar una nueva hora en la grafica
        agregarObjetoPorHora() {
            // Validar que se haya guardado todos los valores
            //var valor;
            //this.lista_horas_avanzadas_v[this.indice_hora].datos[value.index_fila].columnasQuinceMin[value.index_columna].columnas[value.index_minutos_columna].agentes
            var acumulador = 0;
            for (let i = 0; i < this.lista_horas_avanzadas_v.length; i++) {
                if (this.lista_horas_avanzadas_v[i] != "") {
                    if (i == this.indice_hora) {
                        for (
                            let j = 0;
                            j < this.lista_horas_avanzadas_v[i].datos.length;
                            j++
                        ) {
                            if (
                                this.lista_horas_avanzadas_v[i].datos[j] != ""
                            ) {
                                for (
                                    let k = 0;
                                    k <
                                    this.lista_horas_avanzadas_v[i].datos[j]
                                        .columnasQuinceMin.length;
                                    k++
                                ) {
                                    if (
                                        this.lista_horas_avanzadas_v[i].datos[j]
                                            .columnasQuinceMin[k] != ""
                                    ) {
                                        for (
                                            let l = 0;
                                            l <
                                            this.lista_horas_avanzadas_v[i]
                                                .datos[j].columnasQuinceMin[k]
                                                .columnas.length;
                                            l++
                                        ) {
                                            if (
                                                this.lista_horas_avanzadas_v[i]
                                                    .datos[j].columnasQuinceMin[
                                                    k
                                                ].columnas != ""
                                            ) {
                                                if (
                                                    this
                                                        .lista_horas_avanzadas_v[
                                                        i
                                                    ].datos[j]
                                                        .columnasQuinceMin[k]
                                                        .columnas[l].agentes
                                                        .length > 0
                                                ) {
                                                    acumulador += 1;
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
            if (acumulador >= 4) {
                acumulador = 0;
                this.indice_hora += 1;
                this.iniciado_eliminar = true;
                // Si la hora se ha completado, se agrega otro objeto de horas al
                //arreglo de datos
                this.agregarHora();
                this.$emit("IniciadoEliminar", true);
            } else {
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message: "Debe agregar los agentes en la hora.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
            }
        },
        //Metodo para eliminar una hora en la grafica
        eliminarObjetoPorHora() {
            if (this.lista_horas_avanzadas_v.length > 1) {
                this.lista_horas_avanzadas_v.splice(this.indice_hora, 1);
                this.indice_hora -= 1;
            }
            if (this.lista_horas_avanzadas_v.length == 1) {
                this.iniciado_eliminar = false;
                this.$emit("IniciadoEliminar", false);
            }
        },
        //Metodo pora graficar los agentes. Se se crea mas agente, aquí en donde se debe codificar
        obtenerDatosFormulario: function() {
            if (!this.iniciado) return;
            if (this.validarCampoAgente()) {
                return;
            }
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
        validarCampoAgente() {
            var validarCampo = false;
            if (
                this.valoresFormulario.ta_max.valor == undefined ||
                this.valoresFormulario.ta_max.valor == 0
            ) {
                validarCampo = true;
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia Campos Vacios",
                    message: "El campo T.A. MAX, necesita una valor.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return validarCampo;
            }
            if (
                this.valoresFormulario.ta_min.valor == undefined ||
                this.valoresFormulario.ta_min.valor == 0
            ) {
                validarCampo = true;
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia Campos Vacios",
                    message: "El campo T.A. MIN, necesita una valor.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return validarCampo;
            }
            if (
                this.valoresFormulario.valor_pulso.valor == undefined ||
                this.valoresFormulario.valor_pulso.valor == 0
            ) {
                validarCampo = true;
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia Campos Vacios",
                    message: "El campo PULSO, necesita una valor.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return validarCampo;
            }
            if (this.valoresFormulario.respiracion.descripcion == undefined) {
                validarCampo = true;
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia Campos Vacios",
                    message: "El campo RESPIRACIÓN, necesita ser marcado.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return validarCampo;
            }
            if (this.chk.temperatura) {
                if (
                    this.valoresFormulario.temperatura.valor == undefined ||
                    this.valoresFormulario.temperatura.valor == 0
                ) {
                    validarCampo = true;
                    this.flashMessage.show({
                        status: "warning",
                        title: "Advertencia Campos Vacios",
                        message: "El campo TEMPERATURA, necesita un valor.",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/warning.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                    return validarCampo;
                }
            }
            if (this.chk.feto) {
                if (
                    this.valoresFormulario.feto.valor == undefined ||
                    this.valoresFormulario.feto.valor == 0
                ) {
                    validarCampo = true;
                    this.flashMessage.show({
                        status: "warning",
                        title: "Advertencia Campos Vacios",
                        message: "El campo FETO, necesita un valor.",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/warning.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                    return validarCampo;
                }
            }
            if (this.chk.pares_venosa) {
                if (
                    this.valoresFormulario.pares_venosa.valor == undefined ||
                    this.valoresFormulario.pares_venosa.valor == 0
                ) {
                    validarCampo = true;
                    this.flashMessage.show({
                        status: "warning",
                        title: "Advertencia Campos Vacios",
                        message: "El campo PRES VENOSA, necesita un valor.",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/warning.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                    return validarCampo;
                }
            }
            if (this.chk.torniquete) {
                if (
                    this.valoresFormulario.torniquete.valor == undefined ||
                    this.valoresFormulario.torniquete.valor == 0
                ) {
                    validarCampo = true;
                    this.flashMessage.show({
                        status: "warning",
                        title: "Advertencia Campos Vacios",
                        message: "El campo TORNIQUETE, necesita un valor.",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/warning.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                    return validarCampo;
                }
            }
            if (this.valoresFormulario.posicion.descripcion == undefined) {
                validarCampo = true;
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia Campos Vacios",
                    message: "El campo POSICIÓN, necesita ser seleccionado.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return validarCampo;
            }
        },
        //Metodo para agregar el valor de hora a un arreglo
        agregarHorasInicial() {
            this.horasInicial.push(this.hour);
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
        /**
         * Agrega datos a la rejilla
         */
        agregarDatos: function(campo) {
            this.agregaDatoEnRejilla(
                false,
                false,
                campo.valor,
                campo.ruta_img,
                { system_name: campo.descripcion, tipo: this.system_agente }
            );
        },
        validarForm() {
            //return true;
            if (this.iniciadoGrafica == false) {
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Usted aun no ha Iniciado el proceso de Registro Trans-Anestésico. Por favor de en iniciar para continuar.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            if (this.iniciado) {
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia",
                    message:
                        "Usted aun no ha terminado el proceso de Registro Trans-Anestésico. Por favor de en finalizar para continuar.",
                    clickable: true,
                    time: 5000,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            return true;
        }
    },
    computed: {}
};
</script>

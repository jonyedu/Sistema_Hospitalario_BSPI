<template>
    <div class="row justify-content-center">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="flex flex-center-x mt-2 mb-2">
                        <button
                            class="btn btn-outline-primary"
                            v-if="!iniciado"
                            v-on:click="start_time"
                        >
                            Iniciar
                        </button>
                        <button
                            class="btn btn-outline-danger"
                            v-if="iniciado"
                            v-on:click="end_time"
                        >
                            Finalizar
                        </button>
                    </div>
                    <div class="" style="width: 90%; margin: 0 auto">
                        <div class="row flex-center-x">
                            <p
                                class="badge badge-warning  col-lg-4 col-md-4 col-sm-4"
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
                            <span v-if="iniciado">
                                <button
                                    type="button"
                                    class="btn btn-outline-success"
                                    @click="agregarObjetoPorHora"
                                >
                                    <!-- Nuevo -->
                                    <i class="fas fa-plus-circle"></i>
                                </button>
                            </span>
                            <span v-if="iniciado_eliminar">
                                <button
                                    type="button"
                                    class="btn btn-outline-danger"
                                    @click="eliminarObjetoPorHora"
                                >
                                    <!-- Eliminar -->
                                    <i class="fas fa-window-close"></i>
                                </button>
                            </span>
                        </div>
                        <div class="row mb-5" v-if="iniciado">
                            <!-- MAX y MIN -->
                            <div class="col-md-3 border-t pt-2 pb-4">
                                <div class="text-center">
                                    <p class="text-center">TA</p>
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
                            <div
                                class="flex felx-center mt-2 mb-2"
                                style="margin: 0 auto"
                            >
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
    props: {},
    data: function() {
        return {
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
                index_all:{
                    index: "",
                    index_fila: "",
                    index_columna: "",
                    index_minutos_columna: "",
                    index_agente: "",
                },
                columnas:{
                    agente:{
                        src: "",
                        description: "",
                        cod:"",
                        value:"",
                        valueNew: "",
                    },
                    t_fin: "",
                    t_init: "",
                },
                posicion:{
                    description: "",
                    cod: "",
                    codRe: "",
                    src: "",
                    nombre_sistema: "",
                },
                dato:{
                    es_agente: "",
                    es_posicion: ""
                },
                adicional: {
                    system_name: "",
                    tipo: "",
                },
            },
        };
    },
    mounted: function() {},
    methods: {
        //Metodo para iniciar el proceso
        start_time: async function(event) {
            if (this.iniciado) return;
            this.iniciado = true;
            this.agregarHorasInicial();
            this.consultarSello();
            //Guardar datos en la tabla tb_registro_anestesia
            let url = "/modulos/cirugia/anestesia/registro/post";
            let $id = await axios.post(url, this.form).then(response => {
                this.form.registro_anestesia_id = response.data.id;
            });
            this.$emit("guardarCabecera", this.form.registro_anestesia_id);
            //Guardar datos en la tabla tb_tipo_agente_anestesia
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
        //Metodos para el componente ConfirmarCandelar
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
        //Metodo para cerrar el modal y procesar el modificado o eliminado del agentes
        handleSeleccionarClick(value) {
            if (value.respuesta) {
                var valor = parseInt(value.columnas.agente.valueNew);
                var minutes = value.columnas.t_init;
                var is_tpo_init = value.columnas.t_init;
                var is_tpo_fin = value.columnas.t_fin;
                var adicional = value.adicional;
                var ruta_icono = value.posicion.src == "" ? value.columnas.agente.src:value.posicion.src;
                this.form.id_datos_agente = value.posicion.codRe == "" ? value.columnas.agente.cod: value.posicion.codRe;
                var indice_fila = this.obtenerIndice(valor);
                if (adicional.tipo == "agente") {
                    for (const column_quince of this.lista_horas_avanzadas_v[this.indice_hora].datos[indice_fila + this.index_points].columnasQuinceMin) {
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
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[value.index_all.index_fila].columnasQuinceMin[value.index_all.index_columna].columnas[value.index_all.index_minutos_columna].agentes.splice(value.index_all.indexLista, 1);
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
                        this.lista_horas_avanzadas_v[value.index_all.index].datos[value.index_all.index_fila].columnasQuinceMin[value.index_all.index_columna].columnas[value.index_all.index_minutos_columna]
                    );
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[value.index_all.index_fila].columnasQuinceMin[value.index_all.index_columna].columnas[value.index_all.index_minutos_columna].agentes.splice(value.index_all.indexLista, 1);
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
                        this.lista_horas_avanzadas_v[value.index_all.index].datos[value.index_all.index_fila].columnasQuinceMin[value.index_all.index_columna]

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
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[value.index_all.index_fila].columnasQuinceMin[value.index_all.index_columna].columnas[value.index_all.index_minutos_columna].agentes.splice(value.index_all.indexLista, 1);
                } else if (adicional.tipo == "respiracion") {
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[value.index_all.index_fila].columnasQuinceMin[value.index_all.index_columna].columnas[value.index_all.index_minutos_columna].agentes.splice(value.index_all.indexLista, 1);
                } else if (adicional.tipo == "posicion") {
                    this.lista_horas_avanzadas_v[value.index_all.index].datos[value.index_all.index_fila].columnasQuinceMin[value.index_all.index_columna].posicion = {
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

    },

    computed: {}
};
</script>

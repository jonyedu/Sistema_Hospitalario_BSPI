<template>
    <div class="row justify-content-center">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!-- Icono -->
                        <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                            <img
                                class="mt-5 mb-5"
                                :src="'/' + datos.ruta_icono"
                                alt="no carga"
                                style="margin:auto;"
                            />
                        </div>
                        <!-- Nombre del Agente -->
                        <template>
                            <!-- Cuando es agente, pero no incluye posicion -->
                            <template v-if="datos.adicional.tipo == 'agente'">
                                <div
                                    class="col-lg-12 col-md-12 col-sm-12 text-left"
                                >
                                    <input
                                        disabled
                                        type="text"
                                        class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                        placeholder="Agente"
                                        v-model="datos.descripcion"
                                    />
                                </div>
                            </template>
                        </template>
                        <!-- Valor anterior -->
                        <template>
                            <!-- Cuando es agente, pero no incluye posicion -->
                            <template v-if="datos.adicional.tipo == 'agente'">
                                <div
                                    class="col-lg-12 col-md-12 col-sm-12 text-left"
                                >
                                    <input
                                        disabled
                                        type="number"
                                        class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                        placeholder="Valor"
                                        v-model="datos.valor"
                                    />
                                </div>
                            </template>
                            <!-- Cuando solo es respiracion -->
                            <template
                                v-else-if="
                                    datos.adicional.tipo == 'respiracion'
                                "
                            >
                                <div
                                    class="col-lg-12 col-md-12 col-sm-12 text-left"
                                >
                                    <input
                                        disabled
                                        type="text"
                                        class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                        placeholder="Agente"
                                        v-model="datos.adicional.system_name"
                                    />
                                </div>
                            </template>
                            <!-- Cuando solo es posicion -->
                            <template> </template>
                        </template>
                        <!-- Valor nuevo -->
                        <template>
                            <!-- Cuando es agente, pero no incluye posicion -->
                            <template v-if="datos.adicional.tipo == 'agente'">
                                <div
                                    class="col-lg-12 col-md-12 col-sm-12 text-left"
                                >
                                    <input
                                        type="number"
                                        class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                        placeholder="Nuevo valor"
                                        v-model="datos.valorNuevo"
                                    />
                                </div>
                            </template>
                            <!-- Cuando solo es respiracion -->
                            <template
                                v-else-if="
                                    datos.adicional.tipo == 'respiracion'
                                "
                            >
                                <v-select

                                    :value="respiraciones.value"
                                    :options="respiraciones"
                                    label="descripcion"
                                    class="col-lg-12 col-md-12 col-sm-12"
                                    @input="setSelectedRespiracion"
                                >
                                </v-select>
                            </template>
                            <!-- Cuando solo es posicion -->
                            <template> </template>
                        </template>
                    </div>
                    <div
                        class="col-lg-12 col-md-12 col-sm-12 text-center mt-4 mb-5"
                    >
                        <button
                            type="button"
                            class="btn btn-primary"
                            @click="validarConfirmarCandelar(true)"
                        >
                            Aceptar
                        </button>
                        <button
                            type="button"
                            class="btn btn-danger"
                            @click="validarConfirmarCandelar(false)"
                        >
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        /* mostrar el botón deshacer y rehacer */
        datos: {
            type: Object,
            required: true
        }
    },
    methods: {
        validarConfirmarCandelar(value) {
            this.$props.datos.respuesta = value;
            this.$emit("handleSeleccionarClick", this.$props.datos);
        },
        setSelectedRespiracion(value) {
            if(value != null){
                this.$props.datos.ruta_icono = value.img;
                this.$props.datos.valor = 0;
                this.$props.datos.adicional.system_name = value.descripcion;
            }
        }
    },
    mounted: function() {},
    data: function() {
        return {
            respuestaConfirmarCancelar: false,
            respiraciones: [
                {
                    value: "ESP",
                    descripcion: "ESP",
                    img: "img/icons/esp.png"
                },
                {
                    value: "ASIS",
                    descripcion: "ASIS",
                    img: "img/icons/asis.png"
                },
                {
                    value: "CONT",
                    descripcion: "CONT",
                    img: "img/icons/cont.png"
                }
            ],
            selectRespiracion: ""
        };
    },
    computed: {}
};
</script>

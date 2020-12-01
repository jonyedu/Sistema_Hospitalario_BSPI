<template>
    <div class="row justify-content-center">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                            <img
                                class="mt-5 mb-5"
                                :src=" '/'+ datos.ruta_icono"
                                alt="no carga"
                                style="margin:auto;"
                            />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                            <input
                                disabled
                                type="text"
                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                placeholder="Agente"
                                v-model="datos.descripcion"
                            />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                            <input
                                disabled
                                type="number"
                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                placeholder="Valor"
                                v-model="datos.valor"
                            />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                            <input
                                type="number"
                                class="col-lg-12 col-md-12 col-sm-12 text-left form-control"
                                placeholder="Nuevo valor"
                                v-model="datos.valorNuevo"
                            />
                        </div>
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
        }
    },
    mounted: function() {},
    data: function() {
        return {
            respuestaConfirmarCancelar: false,
            form: {
                valor: 0
            }
        };
    },
    computed: {}
};
</script>

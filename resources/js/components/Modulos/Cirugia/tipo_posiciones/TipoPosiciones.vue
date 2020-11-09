<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                            <li>
                                <router-link
                                    :to="prefijo"
                                    style="margin-top:-9px"
                                    class="nav-link"
                                    >Home</router-link
                                >
                            </li>
                            <li><p>/</p></li>
                            <li><p style="margin-left:10px">Tipo Posiciones</p></li>
                        </ol>
                    </div>
                    &nbsp;
                    <!-- Seccion de los menu de botones: Historial clínico, Nueva, Guardar, etc y la Tabla Historial Clinico-->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 text-right"
                                    >
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="float-right">
                                                    <button
                                                        class="btn btn-primary"
                                                        @click="
                                                            nuevoTipoPosiciones()
                                                        "
                                                    >
                                                        Nuevo
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div
                                                class="col-lg-12 col-md-12 col-sm-12"
                                            >
                                                <vuetable-component
                                                    :anular-button="true"
                                                    :modificar-button="true"
                                                    :info-button="false"
                                                    :columns-data="columns"
                                                    :rows-data="tipoPosiciones"
                                                    :imagen="tipoPosicionesMod?false: true"
                                                    @handleModificarClick="
                                                        modificarTipoPosiciones
                                                    "
                                                    @handleAnularClick="
                                                        anularTipoPosicionesConfirmacion
                                                    "
                                                ></vuetable-component>
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

        <!-- Seccion donde muestra la lista de los pacientes que tienen una cita -->
        <modal
            :width="'70%'"
            :height="'auto'"
            :scrollable="true"
            style="z-index: 1200;"
            name="crearTipoPosiciones"
        >
            <crear-modificar-tipo-posiciones
                :tipo-posiciones-mod="tipoPosicionesMod"
                @recargarTipoPosiciones="cargarTipoPosiciones"
                @cerrarModalCrearTipoPosiciones="cerrarModalCrearTipoPosiciones"
                ref="crearTipoPosiciones"
            ></crear-modificar-tipo-posiciones>
        </modal>
        <!-- Fin Seccion donde muestra la lista de los pacientes que tienen una cita -->
    </div>
</template>

<script>
import { prefix } from "../../../../variables";
export default {
    data: function() {
        return {
            prefijo: "",
            tipoPosicionesMod: null,
            url_data: "",
            errores: {},
            form: {},
            tipoPosiciones: [],
            columns: [
                {
                    label: "Descripción",
                    field: "descripcion",
                    type: "String"
                },
                {
                    label: "Name System",
                    field: "name_system",
                    type: "String"
                }
            ]
        };
    },
    mounted: function() {
        this.cargarTipoPosiciones();
        /* let nombreModulo = this.$nombresModulo.datos_generales;
        let nombreFormulario = this.$nombresFormulario.datos_generales
            .generalidades.organizacion_bspi.organizacion_bspi
            .nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Ingreso"
        ); */
        this.prefijo = prefix;
    },
    beforeDestroy: function() {
        /* let nombreModulo = this.$nombresModulo.datos_generales;
        let nombreFormulario = this.$nombresFormulario.datos_generales
            .generalidades.organizacion_bspi.organizacion_bspi
            .nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Salida"
        ); */
    },
    methods: {
        cargarTipoPosiciones: function() {
            let that = this;
            let url =
                "/modulos/cirugia/tipo_posiciones/cargar_tipo_posiciones_table";
            var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {
                    let tipoPosiciones = [];
                    for (let i = 0; i < response.data.tipoPosiciones.length; i++) {
                        let objeto = {
                            id:response.data.tipoPosiciones[i].id,
                            descripcion: that.$funcionesGlobales.toCapitalFirstAllWords(response.data.tipoPosiciones[i].descripcion),
                            name_system: response.data.tipoPosiciones[i].name_system,
                            imagen: response.data.tipoPosiciones[i].img_src,
                        };
                        tipoPosiciones.push(objeto);
                    }
                    that.tipoPosiciones = tipoPosiciones;
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
        modificarTipoPosiciones(value) {
            this.tipoPosicionesMod = value;
            this.abrirModalCrearTipoPosiciones();
        },
        anularTipoPosicionesConfirmacion(value) {
            let that = this;
            this.$swal({
                title: "¿Desea anular el elemento seleccionado?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Aceptar",
                cancelButtonText: "Cancelar"
            }).then(result => {
                if (result.value) {
                    that.anularTipoPosiciones(value.id);
                }
            });
        },
        anularTipoPosiciones(id) {
            let that = this;
            let url =
                "/modulos/cirugia/tipo_posiciones/eliminar_tipo_posiciones/" +
                id;
            var loader = that.$loading.show();
            axios
                .delete(url)
                .then(function(response) {
                    loader.hide();
                    that.cargarTipoPosiciones();
                    that.$swal({
                        icon: "success",
                        title: "Proceso realizado exitosamente",
                        text: "Dato anulado correctamente."
                    });
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
        cerrarModalCrearTipoPosiciones: function() {
            this.$modal.hide("crearTipoPosiciones");
            this.cargarTipoPosiciones();
        },
        nuevoTipoPosiciones: function() {
            this.tipoPosicionesMod = null;
            this.abrirModalCrearTipoPosiciones();
        },
        abrirModalCrearTipoPosiciones: function() {
            this.$modal.show("crearTipoPosiciones");
        },

    }
};
</script>

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
                            <li><p style="margin-left:10px">Tipo Agente</p></li>
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
                                                            nuevoTipoAgente()
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
                                                    :rows-data="tipoAgente"
                                                    @handleModificarClick="
                                                        modificarTipoAgente
                                                    "
                                                    @handleAnularClick="
                                                        anularTipoAgenteConfirmacion
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
            name="crearTipoAgente"
        >
            <crear-modificar-tipo-agente
                :tipo-agente-mod="tipoAgenteMod"
                @recargarTipoAgente="cargarTipoAgente"
                @cerrarModalCrearTipoAgente="cerrarModalCrearTipoAgente"
                ref="crearTipoAgente"
            ></crear-modificar-tipo-agente>
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
            tipoAgenteMod: null,
            url_data: "",
            errores: {},
            form: {},
            tipoAgente: [],
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
                },
                {
                    label: "Imagen",
                    field: "imagen",
                    type: "String"
                }

            ]
        };
    },
    mounted: function() {
        this.cargarTipoAgente();
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
        cargarTipoAgente: function() {
            let that = this;
            let url =
                "/modulos/cirugia/tipo_agente/cargar_tipo_agente_table";
            var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {
                    let tipoAgente = [];
                    for (let i = 0; i < response.data.tipoAgente.length; i++) {
                        let objeto = {
                            id:response.data.tipoAgente[i].id,
                            descripcion: that.$funcionesGlobales.toCapitalFirstAllWords(response.data.tipoAgente[i].descripcion),
                            name_system: response.data.tipoAgente[i].name_system,
                            imagen: response.data.tipoAgente[i].img_src,
                        };
                        tipoAgente.push(objeto);
                    }
                    that.tipoAgente = tipoAgente;
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
        modificarTipoAgente(value) {
            this.tipoAgenteMod = value;
            this.abrirModalCrearTipoAgente();
        },
        anularTipoAgenteConfirmacion(value) {
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
                    that.anularTipoAgente(value.id);
                }
            });
        },
        anularTipoAgente(id) {
            let that = this;
            let url =
                "/modulos/cirugia/tipo_agente/eliminar_tipo_agente/" +
                id;
            var loader = that.$loading.show();
            axios
                .delete(url)
                .then(function(response) {
                    loader.hide();
                    that.cargarTipoAgente();
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
        cerrarModalCrearTipoAgente: function() {
            this.$modal.hide("crearTipoAgente");
            this.cargarTipoAgente();
        },
        nuevoTipoAgente: function() {
            this.tipoAgenteMod = null;
            this.abrirModalCrearTipoAgente();
        },
        abrirModalCrearTipoAgente: function() {
            this.$modal.show("crearTipoAgente");
        },

    }
};
</script>

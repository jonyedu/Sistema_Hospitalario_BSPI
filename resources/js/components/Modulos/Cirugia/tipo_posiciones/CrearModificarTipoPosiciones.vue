<template>
    <div class="row m-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <center>
                <h5 class="mt-4">Tipo Posiciones</h5>
            </center>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="col-lg-12 col-md-12 col-sm-12 p-5">
                    <form>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="form-group">
                                    <label for="nombre"
                                        ><span class="text-danger">(*)</span>
                                        Descripción</label
                                    >
                                    <input
                                        type="text"
                                        :class="
                                            errores.err_descripcion === ''
                                                ? 'form-control'
                                                : 'form-control is-invalid'
                                        "
                                        id="cicloInicial"
                                        placeholder="Descripción del modulo"
                                        v-model="form.frm_descripcion"
                                    />
                                    <small
                                        v-if="errores.err_descripcion !== ''"
                                        id="correoHelp"
                                        class="text-danger"
                                        >{{ errores.err_descripcion[0] }}</small
                                    >
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="abreviatura">Name System</label>
                                    <input
                                        type="text"
                                        id="abreviatura"
                                        :class="
                                            errores.err_name_system === ''
                                                ? 'form-control'
                                                : 'form-control is-invalid'
                                        "
                                        placeholder="Abreviatura"
                                        v-model="form.frm_name_system"
                                    />
                                </div>
                                <small
                                    v-if="errores.err_name_system !== ''"
                                    id="correoHelp"
                                    class="text-danger"
                                    >{{ errores.err_name_system[0] }}</small
                                >
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="form-group">
                                    <label for="abreviatura">Imagen</label>
                                    <input
                                        type="text"
                                        id="imagen"
                                        :class="
                                            errores.err_imagen === ''
                                                ? 'form-control'
                                                : 'form-control is-invalid'
                                        "
                                        placeholder="Imagen"
                                        v-model="form.frm_imagen"
                                    />
                                </div>
                                <small
                                    v-if="errores.err_imagen !== ''"
                                    id="correoHelp"
                                    class="text-danger"
                                    >{{ errores.err_imagen[0] }}</small
                                >
                            </div>
                        </div>
                        <div class="row">
                            <div
                                class="col-lg-12 col-md-12 col-sm-12 mt-4 pt-1"
                            >
                                <div class="form-inline">
                                    <button
                                        type="button"
                                        class="btn btn-success btn-block"
                                        @click="guardarActualizarTipoPosiciones()"
                                    >
                                        {{
                                            tipoPosicionesMod === null
                                                ? "Guardar"
                                                : "Modificar"
                                        }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        tipoPosicionesMod: {
            type: Object
        }
    },
    data: function() {
        return {
            errores: {
                err_descripcion: "",
                err_name_system: "",
                err_imagen: ""
            },
            form: {
                frm_id: "",
                frm_descripcion: "",
                frm_name_system: "",
                frm_imagen: ""
            }
        };
    },
    mounted: function() {
        if (this.$props.tipoPosicionesMod !== null) {
            var tipoPosiciones = this.$props.tipoPosicionesMod;
            this.form.frm_id = tipoPosiciones.id;
            this.form.frm_descripcion = tipoPosiciones.descripcion;
            this.form.frm_name_system = tipoPosiciones.name_system;
            this.form.frm_imagen = tipoPosiciones.imagen;
        }
        /* let nombreModulo = this.$nombresModulo.datos_generales;
        let nombreFormulario = this.$nombresFormulario.datos_generales
            .generalidades.organizacion_bspi.crear_organizacion_bspi
            .nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Ingreso"
        ); */
    },
    beforeDestroy: function() {
        /* let nombreModulo = this.$nombresModulo.datos_generales;
        let nombreFormulario = this.$nombresFormulario.datos_generales
            .generalidades.organizacion_bspi.crear_organizacion_bspi
            .nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Salida"
        ); */
    },
    methods: {
        limpiarForm() {
            this.errores = {
                err_descripcion: "",
                err_name_system: "",
                err_imagen: ""
            };
            this.form = {
                frm_id: "",
                frm_descripcion: "",
                frm_name_system: "",
                frm_imagen: ""
            };
        },
        guardarActualizarTipoPosiciones: function() {
            let that = this;
            let url = "";
            let mensaje = "";
            //if()
            if (this.$props.tipoPosicionesMod !== null) {
                url =
                    "/modulos/cirugia/tipo_posiciones/modificar_tipo_posiciones";
                mensaje = "Datos actualizados correctamente.";
            } else {
                url =
                    "/modulos/cirugia/tipo_posiciones/guardar_tipo_posiciones";
                mensaje = "Datos guardados correctamente.";
            }
            var loader = that.$loading.show();
            axios
                .post(url, this.form)
                .then(function(response) {
                    //Llamar metodo de parent para que actualice el grid.
                    loader.hide();
                    that.$emit("recargarTipoPosiciones");
                    that.$emit("cerrarModalCrearTipoPosiciones");
                    that.$swal({
                        icon: "success",
                        title: "Proceso realizado exitosamente",
                        text: that.mensaje
                    });
                    that.limpiarForm();
                })
                .catch(error => {
                    //Errores de validación
                    if (error.response.status === 422) {
                        if (error.response.data.errors.frm_descripcion != null) {
                            that.errores.err_descripcion =
                                error.response.data.errors.frm_descripcion;
                        }
                        if (error.response.data.errors.frm_name_system != null) {
                            that.errores.err_name_system =
                                error.response.data.errors.frm_name_system;
                        }
                        if (error.response.data.errors.frm_imagen != null) {
                            that.errores.err_imagen =
                                error.response.data.errors.frm_imagen;
                        }
                        loader.hide();
                    }
                    loader.hide();
                    that.$swal({
                        icon: "error",
                        title: "Existen errores",
                        text: error
                    });
                });
        }
    }
};
</script>

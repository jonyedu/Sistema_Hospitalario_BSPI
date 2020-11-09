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
                            <!-- Permitir la imagen -->
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <label for="abreviatura">Imagen</label>
                                <div
                                    class="row"
                                    style="border: 1px solid black;display:block;height: 75px; width: 150px;"
                                >
                                    <!-- Seccion para la imagen guardada en base -->
                                    <div
                                        v-if="
                                            this.$props.tipoPosicionesMod !== null
                                        "
                                    >
                                        <img
                                            style="display:block;margin:auto;height: 75px; width: 150px;"
                                            class="w-50"
                                            v-if="form.frm_fotoURL != ''"
                                            :src="form.frm_fotoURL"
                                            alt
                                            srcset
                                        />
                                    </div>
                                    <!-- Seccion para la imagen nueva que se vaya a guardar -->
                                    <div
                                        v-if="
                                            this.$props.tipoPosicionesMod === null
                                        "
                                    >
                                        <img
                                            style="display:block;margin:auto;height: 75px; width: 150px;"
                                            class="w-50"
                                            v-if="form.frm_logo != ''"
                                            :src="form.frm_fotoURL"
                                            alt
                                            srcset
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input
                                            type="file"
                                            ref="file"
                                            @change="onFileSelected"
                                            style="display: none"
                                        />
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                            @click="$refs.file.click()"
                                        >
                                            <i class="fas fa-image"></i>Cargar
                                            Imagen
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin la imagen -->
                        </div>
                        <div class="row">
                            <div
                                class="col-lg-12 col-md-12 col-sm-12 mt-4 pt-1"
                            >
                                <div class="form-inline">
                                    <button
                                        type="button"
                                        class="btn btn-success btn-block"
                                        @click="guardarModificarArchivo()"
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
                err_logo: "",
                err_fotoURL: "",
                err_nuevaURL: ""
            },
            form: {
                frm_id: "",
                frm_descripcion: "",
                frm_name_system: "",
                frm_logo: "",
                frm_fotoURL: "",
                frm_nuevaURL: ""
            }
        };
    },
    mounted: function() {
        if (this.$props.tipoPosicionesMod !== null) {
            var tipoPosiciones = this.$props.tipoPosicionesMod;
            this.form.frm_id = tipoPosiciones.id;
            this.form.frm_descripcion = tipoPosiciones.descripcion;
            this.form.frm_name_system = tipoPosiciones.name_system;
            this.form.frm_fotoURL = tipoPosiciones.imagen;
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
        onFileSelected(event) {
            if (
                event.target.files[0]["type"] === "image/jpeg" ||
                event.target.files[0]["type"] === "image/png" ||
                event.target.files[0]["type"] === "image/jpg"
            ) {
                this.form.frm_logo = event.target.files[0];
                this.form.frm_fotoURL = URL.createObjectURL(this.form.frm_logo);
            } else {
                this.$swal({
                    icon: "error",
                    title: "Error de Archivo",
                    text:
                        "Solo imagenes de formato: .jpeg, .jpg, .png son permitidos!"
                });
            }
        },
        guardarModificarArchivo() {
            if (this.form.frm_fotoURL == null || this.form.frm_fotoURL == "") {
                this.$swal({
                    icon: "error",
                    title: "Existen errores",
                    text: "Se necesita una imagen"
                });
            } else {
                let that = this;
                let file = that.form.frm_logo;
                let formData = new FormData();
                formData.append("logo", file);
                const config = {
                    headers: { "content-type": "multipart/form-data" }
                };
                var loader = that.$loading.show();
                axios
                    .post(
                        "/modulos/cirugia/tipo_posiciones/guardar_archivo_tipo_posiciones",
                        formData,
                        config
                    )
                    .then(function(response) {
                        loader.hide();
                        that.guardarActualizarTipoPosiciones(
                            response.data.pathFoto
                        );
                    })
                    .catch(error => {
                        if (!error.response) {
                            this.errorStatus = "Error: Network Error";
                        } else {
                            this.errorStatus = error.response.data.message;
                        }
                        loader.hide();
                    });
            }
        },
        guardarActualizarTipoPosiciones: function(pathFoto) {
            let that = this;
            let url = "";
            let mensaje = "";
            let formNew = {
                frm_id: that.form.frm_id,
                frm_descripcion: that.form.frm_descripcion,
                frm_name_system: that.form.frm_name_system,
                frm_logo: that.form.frm_logo,
                frm_fotoURL: that.form.frm_fotoURL,
                frm_imagen: pathFoto == "" ? this.form.frm_fotoURL : pathFoto
            };
            that.errores = {
                err_descripcion: "",
                err_name_system: "",
                err_logo: "",
                err_fotoURL: "",
                err_nuevaURL: ""
            };
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
                .post(url, formNew)
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

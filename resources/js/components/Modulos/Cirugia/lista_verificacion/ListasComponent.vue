<template>
    <div class="content-wrapper">
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
                            <li>
                                <p style="margin-left:10px">
                                    Listas de Verificacion
                                </p>
                            </li>
                        </ol>
                    </div>

                    <hr />
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
                                                        type="button"
                                                        class="btn btn-outline-primary"
                                                        @click="
                                                            mostrarModalListaCirugiaPaciente()
                                                        "
                                                    >
                                                        Nuevo
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-primary"
                                                        @click="
                                                            llamarMetodoImprimir()
                                                        "
                                                        v-bind:style="{
                                                            display: isHidden
                                                        }"
                                                    >
                                                        Imprimir
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-12 col-md-12 col-sm-12"
                        v-if="listas.SecCirPro != ''"
                    >
                        <div
                            class="col-lg-12 col-md-12 col-sm-12"
                            v-if="form.SecCirPro != ''"
                        >
                            <div class="card card-default collapsed-card">
                                <div
                                    class="card-header"
                                    style="background: #590303"
                                >
                                    <h3
                                        class="card-title"
                                        style="color: #FFFFFF"
                                    >
                                        DATOS DEL PACIENTE
                                    </h3>

                                    <div class="card-tools">
                                        <button
                                            type="button"
                                            class="btn btn-tool"
                                            data-card-widget="collapse"
                                        >
                                            <i class="fas fa-plus"></i>
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-tool"
                                            data-card-widget="remove"
                                        >
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: none;">
                                    <div class="row">
                                        <!-- DATOS DEL PACIENTE -->
                                        <div
                                            class="col-lg-12 col-md-12 col-sm-12"
                                        >
                                            <div
                                                class="text-left col-lg-12 col-md-12 col-sm-12"
                                            >
                                                <div class="row">
                                                    <input
                                                        type="hidden"
                                                        id="SecCirPro"
                                                        name="SecCirPro"
                                                        v-model="
                                                            listas.SecCirPro
                                                        "
                                                    />
                                                    <div
                                                        class="col-sm-6 text-left"
                                                    >
                                                        <label
                                                            class="col-form-label"
                                                            >Paciente:</label
                                                        >
                                                        <span
                                                            class="text-left"
                                                            v-text="
                                                                form.frm_paciente
                                                            "
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="col-sm-6 text-left"
                                                    >
                                                        <label
                                                            class="col-form-label"
                                                            >Cirujano:</label
                                                        >
                                                        <span
                                                            class="text-left"
                                                            v-text="
                                                                form.frm_cirujano
                                                            "
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="col-sm-6 text-left"
                                                    >
                                                        <label
                                                            class="col-form-label"
                                                            >Anestesiologo:</label
                                                        >
                                                        <span
                                                            class="text-left"
                                                            v-text="
                                                                form.frm_anestesiologo
                                                            "
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="col-sm-6 text-left"
                                                    >
                                                        <label
                                                            class="col-form-label"
                                                            >Quirófano:</label
                                                        >
                                                        <span
                                                            class="text-left"
                                                            v-text="
                                                                form.frm_quirofano
                                                            "
                                                        ></span>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 text-left"
                                                    >
                                                        <label
                                                            class="col-form-label"
                                                            >Procedimiento:</label
                                                        >
                                                        <span
                                                            class="text-left"
                                                            v-text="
                                                                form.frm_procedimiento
                                                            "
                                                        ></span>
                                                    </div>
                                                </div>

                                                <button
                                                    type="button"
                                                    class="close"
                                                    data-dismiss="alert"
                                                    aria-label="Close"
                                                >
                                                    <span aria-hidden="true"
                                                        >&times;</span
                                                    >
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <form-wizard
                                ref="formValoracionPreanestecia"
                                :title="''"
                                :subtitle="''"
                                :nextButtonText="'Siguiente'"
                                :backButtonText="'Anterior'"
                                :finishButtonText="'Finalizar'"
                                :stepSize="'xs'"
                                :shape="''"
                                color="#590303"
                                @on-change="onChangeTab"
                                @on-validate="onValidateTab"
                                @on-complete="onComplete"
                            >
                                <tab-content
                                    title="Entrada"
                                    icon="fas fa-user-check"
                                >
                                    <lista-entrada ref="listaEntrada">
                                    </lista-entrada>

                                    <!-- <revision-sistema
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        @ValidarCargarDatos="
                                            respuestaCargarDatos = $event
                                        "
                                        @RespuestaImprimir="
                                            respuestaImprimir = $event
                                        "
                                        ref="revisionSistema"
                                    ></revision-sistema> -->
                                </tab-content>

                                <tab-content
                                    title="Pausa Quirúrgica"
                                    icon="fas fa-procedures"
                                >
                                    <!-- <examen-fisico
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        ref="examenFisico"
                                    ></examen-fisico> -->
                                    <lista-pausa ref="listaPausa">
                                    </lista-pausa>
                                </tab-content>
                                <tab-content
                                    title="Salida"
                                    icon="fas fa-user-nurse"
                                   :before-change="validateAsync"
                                >
                                    <lista-salida ref="listaSalida">
                                    </lista-salida>
                                    <!-- <paraclinico
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        @validarFinProceso="
                                            respuestaFinProceso = $event
                                        "
                                        @FinProceso="cambiarEstado"
                                        ref="paraclinico"
                                    ></paraclinico> -->
                                </tab-content>
                                <tab-content
                                    title="Visualización"
                                    icon="ti-folder"
                                >
                                <lista-visualizacion></lista-visualizacion>
                                    <!-- <antecedente
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        ref="antecedente"
                                    ></antecedente> -->
                                </tab-content>
                                <tab-content title="Firma" icon="ti-folder">
                                    <lista-firma>

                                    </lista-firma>
                                    <!-- <antecedente
                                        :id-sec-cir-pro="
                                            form.frm_idCirugiaProgramada
                                        "
                                        ref="antecedente"
                                    ></antecedente> -->
                                </tab-content>
                            </form-wizard>
                        </div>
                    </div>
                    <!-- Seccion donde muestra la lista de los pacientes que tienen una cita -->
                    <modal
                        :width="'65%'"
                        height="auto"
                        :scrollable="true"
                        name="ListaCirugiaProgramadaPaciente"
                    >
                        <lista-cirugia-programa-paciente
                            ref="ListaCirugiaProgramadaPaciente"
                            @handleSeleccionarClick="handleSeleccionarClick"
                        ></lista-cirugia-programa-paciente>
                    </modal>
                    <!-- Fin Seccion donde muestra la lista de los pacientes que tienen una cita -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { prefix } from "../../../../variables";
export default {
    props: {
        user: {
            type: Object
        }
    },

    data() {
        return {
            variableG: 4,
            prefijo: "",
            isHidden: "none",
            idHiddenNuevo: "none",
            rutaSello: "",
            idPromesa:[],

            listas: {
                SecCirPro: "",
                frm_id_user: "",
                chkentrada01: false,
                chkentrada02: false,
                chkentrada03: false,
                chkentrada04: false,
                chkentrada05: false,
                chkentrada06: false,
                chkentrada07: false,
                chkquirurgica01: false,
                chkquirurgica02: false,
                chkquirurgica03: false,
                chkquirurgica04: false,
                chkquirurgica05: false,
                chkquirurgica06: false,
                chkquirurgica07: false,
                chksalida01: false,
                chksalida02: false,
                chksalida03: false,
                chksalida04: false,
                chksalida05: false,
                user_id: "",
                cargo: "",
                observacion: "",
                firma: ""
            },
            validarImgFirma: 0,
            isFirstPaintable: "firmaAnestesiologo",
            form: {
                /* Datos del paciente */
                // frm_idCirugiaProgramada: "",
                frm_idCirugiaProgramada: 0,
                id_lista: 0,
                tipo_servicio: 4,
                id_visita: 0,
                id_tipo_documento: 13,
                frm_paciente: "",
                frm_cirujano: "",
                frm_anestesiologo: "",
                frm_quirofano: "",
                frm_procedimiento: "",
                imgFirma: null,

                imgGrafica: null
            }
        };
    },
    mounted() {
        // this.$refs.listaEntrada.listas.chkentrada01 = true
        // alert(this.$refs.listaEntrada.listas.chkentrada01)
    },
    methods: {
        /* Metodos para Llamar al Modal y la Tabla */
        validateAsync: function() {
            
              let that = this;

            that.listas.chkentrada01 =
                that.$refs.listaEntrada.listas.chkentrada01;
            that.listas.chkentrada02 =
                that.$refs.listaEntrada.listas.chkentrada02;
            that.listas.chkentrada03 =
                that.$refs.listaEntrada.listas.chkentrada03;
            that.listas.chkentrada04 =
                that.$refs.listaEntrada.listas.chkentrada04;
            that.listas.chkentrada05 =
                that.$refs.listaEntrada.listas.chkentrada05;
            that.listas.chkentrada06 =
                that.$refs.listaEntrada.listas.chkentrada06;
            that.listas.chkentrada07 =
                that.$refs.listaEntrada.listas.chkentrada07;
            that.listas.chkquirurgica01 =
                that.$refs.listaPausa.listas.chkquirurgica01;
            that.listas.chkquirurgica02 =
                that.$refs.listaPausa.listas.chkquirurgica02;
            that.listas.chkquirurgica03 =
                that.$refs.listaPausa.listas.chkquirurgica03;
            that.listas.chkquirurgica04 =
                that.$refs.listaPausa.listas.chkquirurgica04;
            that.listas.chkquirurgica05 =
                that.$refs.listaPausa.listas.chkquirurgica05;
            that.listas.chkquirurgica06 =
                that.$refs.listaPausa.listas.chkquirurgica06;
            that.listas.chkquirurgica07 =
                that.$refs.listaPausa.listas.chkquirurgica07;
            that.listas.chksalida01 = that.$refs.listaSalida.listas.chksalida01;
            that.listas.chksalida02 = that.$refs.listaSalida.listas.chksalida02;
            that.listas.chksalida03 = that.$refs.listaSalida.listas.chksalida03;
            that.listas.chksalida04 = that.$refs.listaSalida.listas.chksalida04;
            that.listas.chksalida05 = that.$refs.listaSalida.listas.chksalida05;
            that.listas.observacion = that.$refs.listaSalida.listas.observacion;
            // console.log(that.listas);

            // if (that.validarImgFirma == 0) {
            //     that.$swal({
            //         icon: "error",
            //         title: "Favor Guardar la Firma",
            //         text: "."
            //     });
            //     return;
            // }
            // var loader = that.$loading.show();
            const ListaInsert = this.listas;
            //console.log(this.listas);
            (this.listas = {
                SecCirPro: "",
                id_lista: 0,
                chkentrada01: false,
                chkentrada02: false,
                chkentrada03: false,
                chkentrada04: false,
                chkentrada05: false,
                chkentrada06: false,
                chkentrada07: false,
                chkquirurgica01: false,
                chkquirurgica02: false,
                chkquirurgica03: false,
                chkquirurgica04: false,
                chkquirurgica05: false,
                chkquirurgica06: false,
                chkquirurgica07: false,
                chksalida01: false,
                chksalida02: false,
                chksalida03: false,
                chksalida04: false,
                chksalida05: false,
                user_id: "",
                cargo: "",
                observacion: "",
                firma: ""
            });
               
                
       
                  axios
                    .post(
                        "/modulos/cirugia/lista_verificacion/ListarValoracion",
                        ListaInsert
                    )
                    .then(response => {
                      that.$refs.formValoracionPreanestecia[3].activeTabIndex;
                    })
                    .catch(e => {
                       // this.errors.push(e);
                    });
                  
           
                // resolve(este);
                

            
        },
        mostrarModalListaCirugiaPaciente() {
            this.$modal.show("ListaCirugiaProgramadaPaciente");
        },
        handleSeleccionarClick(value) {
            this.listas.SecCirPro = value.SecCirPro;
            this.form.frm_paciente = value.nombrePaciente;
            this.form.frm_cirujano = value.cirujano;
            this.form.frm_anestesiologo = value.anestesiologo;
            this.form.frm_quirofano = value.quirofano;
            this.form.frm_procedimiento = value.procedimiento;
            this.$modal.hide("ListaCirugiaProgramadaPaciente");
            // if (this.$refs.revisionSistema != null) {
            //     this.$refs.revisionSistema.cargarRevisionSistema();
            // }

            this.cargarLista(value.SecCirPro);
            // this.consultarSello();
        },
        cargarLista: function(value) {
            let that = this;
            let url =
                "/modulos/cirugia/lista_verificacion/buscarpaciente/" + value;
            // var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {
                    if (response.data.contador > 0) {
                          that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar IdRegistroAnestesia",
                        message:"El proceso ya se encuentra realizado, Seleccione Imprimir para visualizar el reporte",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/success.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                         
                            (that.isHidden = "block");
                        that.idHiddenNuevo = "none";
                    } else {
                         that.flashMessage.show({
                        status: "success",
                        title: "Lista de Verifacion",
                        message:"Paciente Nuevo",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/success.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                        that.isHidden = "none";
                        that.idHiddenNuevo = "block";
                    }
                })
                .catch(error => {
                    //Errores
                    that.$swal({
                        icon: "success",
                        title: "Paciente Nuevo",
                        text: "."
                    });
                    that.isHidden = "none";
                });
            //  llamarMetodoImprimir();
        },
        onChangeTab(prevIndex, nextIndex) {
            // if (nextIndex == 3) {
            //     this.guardarLista();
            //     // nextIndex = 0
            //     //this.$refs.formValoracionPreanestecia.changeTab(0,1)
            // }
            //Se debera realizar las validaciones respectivas para cada tab
            //  this.setFormTitle(nextIndex);
            /* if (typeof this.onChangeTab() === "function") {
                alert("entra");
                //Es seguro ejecutar la función
                this.guardarModificar(prevIndex);
            } */
            //  this.guardarModificar(prevIndex);
            // alert(nextIndex);
            //   this.listas.chksalida01 = $this.$refs.chkentrada01.value();
            //      alert(this.listas.chksalida01);
        },
        onValidateTab(validationResult, activeTabIndex) {
            //Se debera realizar las validaciones respectivas para cada tab
        },
        onComplete() {
            this.guardarLista();
            //  this.$refs.paraclinico.guardarModificar();
            //this.$refs.paraclinico.guardarFirmaPorAtencion();
            //await this.$refs.paraclinico.cargarParaclinico();
            //await this.cambiarEstado();
        },
        guardarFirmaPorAtencion() {
            let that = this;
            let url = "";
            let mensaje = "";
            // alert(that.form.imgFirma);
            let formNew = {
                tipo_servicio: 4,
                id_atencion: that.form.id_lista,
                // that.form.id_lista,
                id_visita: 0,
                id_tipo_documento: 13,
                imgFirma: that.form.imgFirma
            };
            url = "/modulos/cirugia/anestesia/guardar_firma_atencion";

            var loader = that.$loading.show();
            axios
                .post(url, formNew)
                .then(function(response) {
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
                })
                .catch(error => {
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
        consultarSello() {
            let that = this;
            if (this.$props.user.id > 0) {
                var loader = that.$loading.show();
                let url =
                    "/modulos/cirugia/anestesia/cargar_sello/" +
                    this.$props.user.id;

                axios
                    .get(url)
                    .then(function(response) {
                        if (response.data.sello != null) {
                            if (response.data.sello.seguridad_medico != null) {
                                that.rutaSello =
                                    "data:image/jpeg;base64," +
                                    response.data.sello.seguridad_medico.medico
                                        .medico_sellos.IMAGEN_SELLO;
                                // alert( response.data.sello.medico_sellos);
                            }
                        }
                        loader.hide();
                    })
                    .catch(error => {
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

        
      async  guardarLista() {
            //validamos la lista segun la referencia listaPausa listaSalida

            let that = this;

            that.listas.chkentrada01 =
                that.$refs.listaEntrada.listas.chkentrada01;
            that.listas.chkentrada02 =
                that.$refs.listaEntrada.listas.chkentrada02;
            that.listas.chkentrada03 =
                that.$refs.listaEntrada.listas.chkentrada03;
            that.listas.chkentrada04 =
                that.$refs.listaEntrada.listas.chkentrada04;
            that.listas.chkentrada05 =
                that.$refs.listaEntrada.listas.chkentrada05;
            that.listas.chkentrada06 =
                that.$refs.listaEntrada.listas.chkentrada06;
            that.listas.chkentrada07 =
                that.$refs.listaEntrada.listas.chkentrada07;
            that.listas.chkquirurgica01 =
                that.$refs.listaPausa.listas.chkquirurgica01;
            that.listas.chkquirurgica02 =
                that.$refs.listaPausa.listas.chkquirurgica02;
            that.listas.chkquirurgica03 =
                that.$refs.listaPausa.listas.chkquirurgica03;
            that.listas.chkquirurgica04 =
                that.$refs.listaPausa.listas.chkquirurgica04;
            that.listas.chkquirurgica05 =
                that.$refs.listaPausa.listas.chkquirurgica05;
            that.listas.chkquirurgica06 =
                that.$refs.listaPausa.listas.chkquirurgica06;
            that.listas.chkquirurgica07 =
                that.$refs.listaPausa.listas.chkquirurgica07;
            that.listas.chksalida01 = that.$refs.listaSalida.listas.chksalida01;
            that.listas.chksalida02 = that.$refs.listaSalida.listas.chksalida02;
            that.listas.chksalida03 = that.$refs.listaSalida.listas.chksalida03;
            that.listas.chksalida04 = that.$refs.listaSalida.listas.chksalida04;
            that.listas.chksalida05 = that.$refs.listaSalida.listas.chksalida05;
            that.listas.observacion = that.$refs.listaSalida.listas.observacion;
            // console.log(that.listas);

            // if (that.validarImgFirma == 0) {
            //     that.$swal({
            //         icon: "error",
            //         title: "Favor Guardar la Firma",
            //         text: "."
            //     });
            //     return;
            // }
            // var loader = that.$loading.show();
            const ListaInsert = this.listas;
            //console.log(this.listas);
            (this.listas = {
                SecCirPro: "",
                id_lista: 0,
                chkentrada01: false,
                chkentrada02: false,
                chkentrada03: false,
                chkentrada04: false,
                chkentrada05: false,
                chkentrada06: false,
                chkentrada07: false,
                chkquirurgica01: false,
                chkquirurgica02: false,
                chkquirurgica03: false,
                chkquirurgica04: false,
                chkquirurgica05: false,
                chkquirurgica06: false,
                chkquirurgica07: false,
                chksalida01: false,
                chksalida02: false,
                chksalida03: false,
                chksalida04: false,
                chksalida05: false,
                user_id: "",
                cargo: "",
                observacion: "",
                firma: ""
            });
              let url = "/modulos/cirugia/lista_verificacion/ListarValoracion";
            let $id = await axios.post(url, ListaInsert).then(response => {
                this.idPromesa = response.data.id;
            });            
            //     axios
            //         .post(
            //             "/modulos/cirugia/lista_verificacion/ListarValoracion",
            //             ListaInsert
            //         )
            //         .then(response => {
            //             return true;
            //         })
            //         .catch(e => {
            //             this.errors.push(e);
            //         });
            // return true;
            // .then(function(response) {
            //     that.form.id_lista = response.data.id;
            //     // alert(response.data.id);
            //     //  loader.hide();
            //     //alert(that.form.id_lista);
            //    // that.guardarFirmaPorAtencion();
            //     // that.form = {
            //     //     id_lista: 0,
            //     //     tipo_servicio: 4,
            //     //     id_visita: 0,
            //     //     id_tipo_documento: 13,
            //     //     frm_paciente: "",
            //     //     frm_cirujano: "",
            //     //     frm_anestesiologo: "",
            //     //     frm_quirofano: "",
            //     //     frm_procedimiento: "",
            //     //     imgFirma: null,

            //     //     imgGrafica: null
            //     // };
            //     // that.$swal({
            //     //     icon: "success",
            //     //     title: "Proceso Realizado con Exito",
            //     //     text: "."
            //     // });
            // });

            //   alert( that.form.id_lista);
            // guardarFirmaPorAtencion();

            // aui
        },
        llamarMetodoImprimir() {
            window.open(
                "/modulos/cirugia/lista_verificacion/mostrarreporte/" +
                    this.listas.SecCirPro
            );
        }
    }
};
</script>

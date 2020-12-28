<template>
    <div>
        <!-- {{-- antes de la induccion --}} -->

        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                        <h2 class="card-title"  >
                            ANTES DE LA INDUCCIÓN DE LA ANESTESIA (ENTRADA)
                        </h2>
                    </div>
            </div>

            <hr>
            <br>
            <div class="row">
                <div class="col-md-6">

                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"

                            name="chkentrada01"
                            id="chkentrada01"
                            @change= "enviarvalor()"
                            v-model="listas.chkentrada01"
                        />
                        <label for="chkentrada01" class="custom-control-label"
                            >EL PACIENTE HA CONFIRMADO</label
                        >
                        <ul>
                            <li>
                                Su Identidad
                            </li>
                            <li>
                                El Sitio Quirúrgico
                            </li>
                            <li>
                                El Procedimiento
                            </li>
                            <li>
                                Su Consentimiento
                            </li>
                        </ul>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkentrada02"
                            id="chkentrada02"
                            v-model="listas.chkentrada02"
                        />
                        <label for="chkentrada02" class="custom-control-label"
                            >DEMARCACIÓN DEL SITIO/NO PROCEDE</label
                        >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkentrada03"
                            id="chkentrada03"
                            v-model="listas.chkentrada03"
                        />
                        <label for="chkentrada03" class="custom-control-label"
                            >SE HA COMPLETADO EL CONTROL DE LA SEGURIDAD DE
                            LA ANESTESIA</label
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkentrada04"
                            id="chkentrada04"
                            v-model="listas.chkentrada04"
                        />
                        <label for="chkentrada04" class="custom-control-label"
                            >PULSIOXÍMETRO COLOCADO Y EN FUNCIONAMIENTO</label
                        >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            id="chkentrada05"
                            name="chkentrada05"
                            v-model="listas.chkentrada05"
                        />
                        <label for="chkentrada05" class="custom-control-label"
                            >TIENE EL PACIENTE: ALERGIAS CONOCIDAD?</label
                        >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkentrada06"
                            id="chkentrada06"
                            v-model="listas.chkentrada06"
                        />
                        <label for="chkentrada06" class="custom-control-label"
                            >VÍA AÉREA DIFÍCIL/RIESGO DE ASPIRACIÓN
                        </label>
                        <ul>
                            <li>
                                SI, Y HAY INSTRUMENTAL Y EQUIPOS/AYUDA DISPONIBLE
                            </li>
                        </ul>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkentrada07"
                            id="chkentrada07"
                            v-model="listas.chkentrada07"
                        />

                        <label for="chkentrada07" class="custom-control-label"
                            >RIESGO DE HEMORRAGIA > 500 ML (7ML VKG EN
                            NIÑOS)?</label
                        >
                        <ul>
                            <li>
                                SI, Y SE HA PREVISTO LA DISPONIBILIDAD DE ACCESO
                                INTRAVENOSO Y LÍQUIDOS ADECUADOS
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.form-group -->

                <!-- /.form-group -->

                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /.card-body -->
    </div>
</template>
<script>
export default {
    props: {
        user: {
            type: Object
        },

    },
    data() {
        return {

              listas: {
                SecCirPro: "",
                frm_id_user:"",
                chkentrada01: false,
                chkentrada02: false,
                chkentrada03: false,
                chkentrada04: false,
                chkentrada05: false,
                chkentrada06: false,
                chkentrada07: false,

                user_id: "",
                cargo: "",
                observacion: "",
                firma: ""
            },
        };
    },
    mounted() {


    },
    methods: {
        enviarvalor(){
            // this.$$refs.formValoracionPreanestecia.chkentrada01 = this.chkentrada01
            // alert(this.$$refs.formValoracionPreanestecia.chkentrada01);
            // console.log(this.$$refs.formValoracionPreanestecia.chkentrada01);

        },
        /* Metodos para Llamar al Modal y la Tabla */
    },

};
</script>

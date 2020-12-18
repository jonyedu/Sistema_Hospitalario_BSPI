<template>
    <div>
                 <!-- {{-- antes de la induccion --}} -->
                                                     
                                                        <div class="card-header" style="background: #590303">
                                                            <h3 class="card-title" style="color: #FFFFFF">
                                                                ANTES DE LA
                                                                INDUCCIÓN DE LA
                                                                ANESTESIA (ENTRADA)
                                                            </h3>

                                                            <div class="card-tools">
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-tool"
                                                                    data-card-widget="collapse"
                                                                >
                                                                    <i
                                                                        class="fas fa-plus"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-tool"
                                                                    data-card-widget="remove"
                                                                >
                                                                    <i
                                                                        class="fas fa-times"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div
                                                            class="card-body"
                                                            style="display: none;"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-6"
                                                                >
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada01"
                                                                            id="chkentrada01"
                                                                            v-model="
                                                                                listas.chkentrada01
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada01"
                                                                            class="custom-control-label"
                                                                            >EL
                                                                            PACIENTE
                                                                            HA
                                                                            CONFIRMADO</label
                                                                        >
                                                                        <ul>
                                                                            <li>
                                                                                Su
                                                                                Identidad
                                                                            </li>
                                                                            <li>
                                                                                El
                                                                                Sitio
                                                                                Quirurgico
                                                                            </li>
                                                                            <li>
                                                                                El
                                                                                Procedimiento
                                                                            </li>
                                                                            <li>
                                                                                Su
                                                                                Consentimiento
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada02"
                                                                            id="chkentrada02"
                                                                            v-model="
                                                                                listas.chkentrada02
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada02"
                                                                            class="custom-control-label"
                                                                            >DEMARCACION
                                                                            DEL
                                                                            SITIO/NO
                                                                            PROCEDE</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada03"
                                                                            id="chkentrada03"
                                                                            v-model="
                                                                                listas.chkentrada03
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada03"
                                                                            class="custom-control-label"
                                                                            >SE HA
                                                                            COMPLEMENTADO
                                                                            EL
                                                                            CONTROL
                                                                            DE LA
                                                                            SEGURIDAD
                                                                            DE LA
                                                                            ANESTESIA</label
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-6"
                                                                >
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada04"
                                                                            id="chkentrada04"
                                                                            v-model="
                                                                                listas.chkentrada04
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada04"
                                                                            class="custom-control-label"
                                                                            >PULSIOXIMETRO
                                                                            COLOCADO
                                                                            Y EN
                                                                            FUNCIONAMIENTO</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            id="chkentrada05"
                                                                            name="chkentrada05"
                                                                            v-model="
                                                                                listas.chkentrada05
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada05"
                                                                            class="custom-control-label"
                                                                            >TIENE
                                                                            EL
                                                                            PACIENTE:
                                                                            ALERGIAS
                                                                            CONOCIDAD?</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada06"
                                                                            id="chkentrada06"
                                                                            v-model="
                                                                                listas.chkentrada06
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada06"
                                                                            class="custom-control-label"
                                                                            >VIA
                                                                            AÉREA
                                                                            DIFICIL/RIESGO
                                                                            DE
                                                                            ASPIRACION
                                                                        </label>
                                                                        <ul>
                                                                            <li>
                                                                                SI
                                                                                HAY
                                                                                INSTRUMENTAL
                                                                                Y
                                                                                EQUIPOS/AYUDA
                                                                                DISPONIBLE
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada07"
                                                                            id="chkentrada07"
                                                                            v-model="
                                                                                listas.chkentrada07
                                                                            "
                                                                        />

                                                                        <label
                                                                            for="chkentrada07"
                                                                            class="custom-control-label"
                                                                            >RIESGO
                                                                            DE
                                                                            HEMORRAGIA
                                                                            > 500 ML
                                                                            (7ML VKG
                                                                            EN
                                                                            NIÑOS)?</label
                                                                        >
                                                                        <ul>
                                                                            <li>
                                                                                SI,
                                                                                Y SE
                                                                                HA
                                                                                PREVISTO
                                                                                LA
                                                                                DISPONIBILIDAD
                                                                                DE
                                                                                ACCESO
                                                                                INTRAVENOSO
                                                                                Y
                                                                                LIQUIDOS
                                                                                ADECUADOS
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
        }
    },
     data() {
        return {
               prefijo: "",
               isHidden: 'none',
               idHiddenNuevo:'none',
                rutaSello: "",
                
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
             validarImgFirma: 0,
            isFirstPaintable: "firmaAnestesiologo",
            form: {
                /* Datos del paciente */
                // frm_idCirugiaProgramada: "",
                id_lista:0,
                tipo_servicio:4,
                id_visita:0,
                id_tipo_documento:13,
                frm_paciente: "",
                frm_cirujano: "",
                frm_anestesiologo: "",
                frm_quirofano: "",
                frm_procedimiento: "",
                imgFirma: null,
               
                imgGrafica: null,
            }
        };
    },
    methods: {
        /* Metodos para Llamar al Modal y la Tabla */
     
         
         
         
        
         
    }
};
</script>
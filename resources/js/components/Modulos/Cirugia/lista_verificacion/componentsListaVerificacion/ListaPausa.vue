<template>
    <div>
        <!-- {{-- pausa quirurgica --}} -->

        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="card-title">
                        ANTES DE LA INCISIÓN CUTÁNEA (PAUSA QUIRÚRGICA)
                    </h2>
                </div>
            </div>

            <hr />
            <br />
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkquirurgica01"
                            id="chkquirurgica01"
                            v-model="listas.chkquirurgica01"
                        />
                        <label
                            for="chkquirurgica01"
                            class="custom-control-label"
                            >CONFIRMA QUE TODOS LOS MIENBROS DEL EQUIPO SE HAYAN
                            PRESENTADO POR SU NOMBRE Y FUNCIÓN</label
                        >
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkquirurgica02"
                            id="chkquirurgica02"
                            v-model="listas.chkquirurgica02"
                        />
                        <label
                            for="chkquirurgica02"
                            class="custom-control-label"
                            >CIRUJANO, ANESTESISTA Y ENFERMERO CONFIRMAN
                            VERBALMENTE:</label
                        >
                        <ul>
                            <li>
                                La Identidad del Paciente
                            </li>
                            <li>
                                El Sitio Quirúrgico
                            </li>
                            <li>
                                El Procedimiento
                            </li>
                        </ul>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <label for="chkquirurgica03"
                            >PREVISIÓN DE EVENTOS CRÍTICOS</label
                        >
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkquirurgica03"
                            id="chkquirurgica03"
                            v-model="listas.chkquirurgica03"
                        />
                        <label
                            for="chkquirurgica03"
                            class="custom-control-label"
                            >EL CIRUJANO REVISA: LOS PASOS CRÍTICOS O IMPREVISTOS.
                            LA DURACIÓN DE LA OPERACIÓN Y LA PÉRDIDA DE SANGRE
                            PREVISTA</label
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkquirurgica04"
                            id="chkquirurgica04"
                            v-model="listas.chkquirurgica04"
                        />
                        <label
                            for="chkquirurgica04"
                            class="custom-control-label"
                            >EL EQUIPO DE ANESTESIA REVISA: SI EL PACIENTE
                            PRESENTA ALGÚN PROBLEMA ESPECÍFICO</label
                        >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkquirurgica05"
                            id="chkquirurgica05"
                            v-model="listas.chkquirurgica05"
                        />
                        <label
                            for="chkquirurgica05"
                            class="custom-control-label"
                            >EL EQUIPO DE ENFERMERÍA REVISA: SI SE HA CONFIRMADO
                            LA ESTERILIDAD (CON RESULTADOS DE LOS INDICADORES; Y
                            SI EXISTEN DUDAS O PROBLEMAS RELACIONADOS CON EL
                            INSTRUMENTAL Y LOS EQUIPOS</label
                        >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkquirurgica06"
                            id="chkquirurgica06"
                            v-model="listas.chkquirurgica06"
                        />
                        <label
                            for="chkquirurgica06"
                            class="custom-control-label"
                            >¿SI HA ADMINISTRADO PROFILAXIS ANTIBIÓTICA EN LOS
                        </label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chkquirurgica07"
                            id="chkquirurgica07"
                            v-model="listas.chkquirurgica07"
                        />

                        <label
                            for="chkquirurgica07"
                            class="custom-control-label"
                            >¿PUEDEN VISUALIZARSE LAS IMÁGENES
                            DIAGNÓSTICAS?</label
                        >
                        <ul>
                            <li>
                                NO, NO PROCEDE
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
            listas: {
                SecCirPro: "",
                frm_id_user:"",

                chkquirurgica01: false,
                chkquirurgica02: false,
                chkquirurgica03: false,
                chkquirurgica04: false,
                chkquirurgica05: false,
                chkquirurgica06: false,
                chkquirurgica07: false,

                user_id: "",
                cargo: "",
                observacion: "",
                firma: ""
            },

        };
    },
    methods: {
        /* Metodos para Llamar al Modal y la Tabla */
    }
};
</script>

<template>
    <div>
        <!-- {{-- pausa quirurgica --}} -->

        <!-- /.card-header -->
        <!-- {{-- Antes que el paciente salga del quirofano --}} -->

        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="card-title">
                        ANTES DEL QUE PACIENTE SALGA DEL QUIRÓFANO(SALIDA)
                    </h2>
                </div>
            </div>
            <hr />
            <br />
            <label for="" class="card-blue">
                EL ENFERMERO CONFIRMA VERBALMENTE CON EL EQUIPO:
            </label>
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chksalida01"
                            id="chksalida01"
                            v-model="listas.chksalida01"
                        />
                        <label for="chksalida01" class="custom-control-label"
                            >EL NOMBRE DEL PROCEDIMIENTO REALIZADO.</label
                        >
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chksalida02"
                            id="chksalida02"
                            v-model="listas.chksalida02"
                        />
                        <label for="chksalida02" class="custom-control-label">
                            QUE LOS RECUENTOS DE INSTRUMENTOS, GASAS Y AGUJAS SON
                            CORRECTOS</label
                        >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chksalida03"
                            id="chksalida03"
                            v-model="listas.chksalida03"
                        />
                        <label for="chksalida03" class="custom-control-label"
                            >EL ETIQUETADO DE LAS MUESTRAS (QUE FIGURE EL NOMBRE
                            DEL PACIENTE)</label
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chksalida04"
                            id="chksalida04"
                            v-model="listas.chksalida04"
                        />
                        <label for="chksalida04" class="custom-control-label"
                            >SI HAY PROBLEMAS QUE RESOLVER RELACIONADOS CON EL
                            INSTRUMENTAL Y LOS EQUIPOS</label
                        >
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input
                            class="custom-control-input"
                            type="checkbox"
                            name="chksalida05"
                            id="chksalida05"
                            v-model="listas.chksalida05"
                        />
                        <label for="chksalida05" class="custom-control-label"
                            >EL CIRUJANO, EL ANESTESISTA Y EL ENFERMERO REVISAN
                            LOS PRINCIPALES ASPECTOS DE LA RECUPERACIÓN Y EL
                            TRATAMIENTO DEL PACIENTE</label
                        >
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Observaciones</label>
                <textarea
                    class="form-control"
                    rows="3"
                    placeholder="Observaciones"
                    name="observacion"
                    id="observacion"
                    v-model="listas.observacion"
                    required
                ></textarea>
            </div>
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
             listas: {
                SecCirPro: "",
                frm_id_user:"",

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
        };
    },
    methods: {
        validarForm(){
            //Se comprueba que un checkbox tenga data
            if (this.listas.observacion == "") {
                this.flashMessage.show({
                    status: "warning",
                    title: "Advertencia al finalizar con el proceso",
                    message: "Usted debe ingresar una observación.",
                    clickable: true,
                    time: 0,
                    icon: "/iconsflashMessage/warning.svg",
                    customStyle: {
                        flashMessageStyle: {
                            background: "linear-gradient(#e66465, #9198e5)"
                        }
                    }
                });
                return false;
            }
            return true;
        },
    }
};
</script>

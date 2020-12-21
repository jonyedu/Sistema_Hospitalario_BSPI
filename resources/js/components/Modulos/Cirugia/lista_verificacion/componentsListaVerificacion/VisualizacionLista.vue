<template>
    <div>
        <!-- {{-- antes de la induccion --}} -->

        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="card-title">
                        Visualizacion Antes de Grabar
                    </h2>
                </div>
            </div>

            <hr />
            <br />
            <div class="row">
                <embed
                    :src="'/modulos/cirugia/lista_verificacion/mostrarreporte/' +
                                                    listas.SecCirPro
                                            "
                    type="application/pdf"
                    width="100%"
                    height="980px"
                />
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

                user_id: "",
                cargo: "",
                observacion: "",
                firma: ""
            }
        };
    },
    mounted() {},
    methods: {
        enviarvalor() {
            // this.$$refs.formValoracionPreanestecia.chkentrada01 = this.chkentrada01
            // alert(this.$$refs.formValoracionPreanestecia.chkentrada01);
            // console.log(this.$$refs.formValoracionPreanestecia.chkentrada01);
        }
        /* Metodos para Llamar al Modal y la Tabla */
    }
};
</script>

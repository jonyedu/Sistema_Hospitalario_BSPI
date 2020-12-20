<template>
    <div>
        <!-- FIRMA DEL MEDICO -->
     <div class="">
                            <div class="" style="height: 70px"></div>
                            <div class="flex flex-y">
                                <span
                                    class="col-md-5 text-center"
                                    style="margin: auto"
                                >
                                    <vue-painttable
                                        @getOutput="form.imgFirma = $event"
                                        @RespuestaImgFirma="
                                            validarImgFirma = $event
                                        "
                                        :hidePaintable="true"
                                        :isFirstPaintable="isFirstPaintable"
                                        :disableNavigation="true"
                                        :showUndoRedo="false"
                                        :showLineWidth="false"
                                        :rutaImagen="rutaSello"
                                        :width="800"
                                        :height="800"
                                        ref="paintFirma"
                                    ></vue-painttable>
                                </span>
                                <span class="col-md-12 text-center"
                                    >______________________________________________</span
                                >
                                <span class="col-md-12 text-center"
                                    >FIRMA DEL ANESTESIOLOGO:</span
                                >
                            </div>
                        </div>



                                                        <!-- FIN DE FIRMA DEL MEDICO -->
        
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
             prefijo: "",
            isHidden: "none",
            idHiddenNuevo: "none",
            rutaSello: "",
            validarImgFirma: 0,
            isFirstPaintable: "firmaAnestesiologo",
          
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
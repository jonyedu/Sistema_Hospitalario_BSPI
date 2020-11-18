<template>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-warning">
            <div class="card-body">
                <form role="form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="card-footer">
                                    <!-- Quirúrgico y Traumático -->
                                    <div class="card">
                                        <div class="card-body mt-2 ml-2">
                                            <div class="row">
                                                <!-- Quirúrgico -->
                                                <div>
                                                    <vue-painttable
                                                        id="firma"
                                                        :isFirstPaintable="isFirstPaintable"
                                                        :disableNavigation="true"
                                                        :showUndoRedo="false"
                                                        :showLineWidth="false"
                                                        :rutaImagen="rutaImagen"
                                                        :width="800"
                                                        :height="800"
                                                    ></vue-painttable>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Antecedentes Familiares-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {},
    data: function() {
        return {
            isFirstPaintable: "pruebaGrafica",
            rutaImagen: "/img/selloFirma.png",
            newUrl: ""
        };
    },
    mounted: function() {
        /* let nombreModulo = this.$nombresModulo.gestion_hospitalaria;
        let nombreFormulario = this.$nombresFormulario.gestion_hospitalaria
            .admistracion_de_citas.citas.motivo_antecedentes.nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Ingreso"
        );
        if (this.$props.idCita != null) {
            this.cargarAtencionMotivo();
        } */
    },
    beforeDestroy: function() {
        /* let nombreModulo = this.$nombresModulo.gestion_hospitalaria;
        let nombreFormulario = this.$nombresFormulario.gestion_hospitalaria
            .admistracion_de_citas.citas.motivo_antecedentes.nombre_formulario;
        this.$funcionesGlobales.registrarLogForm(
            nombreModulo,
            nombreFormulario,
            "Salida"
        ); */
    },
    methods: {
        /* getItem(){
            this.newUrl = this.document.getElementsById("firma").innerHTML;
        } */
    }
};
</script>

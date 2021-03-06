require('./bootstrap');

import Vue from "vue";
import VModal from "vue-js-modal";
import VueGoodTablePlugin from "vue-good-table";
import "vue-good-table/dist/vue-good-table.css";
import router from "./router";
import VueRouter from "vue-router";
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/vue-loading.css";
import VueSweetalert2 from "vue-sweetalert2";
import vSelect from "vue-select";
import 'vue-select/dist/vue-select.css';
import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import Paintable from 'vue-paintable';
import VueHtml2Canvas from 'vue-html2canvas';
import RegeneratorRuntime from "regenerator-runtime";
import FlashMessage from '@smartweb/vue-flash-message';
import App from "./components/App";
import { funcionesGlobales } from "./funciones.js";
import swal from 'sweetalert2';
window.Swal = swal;

Vue.prototype.$funcionesGlobales = funcionesGlobales;


Vue.use(Loading);
Vue.use(VueRouter);
Vue.use(VueSweetalert2);
Vue.use(VueGoodTablePlugin);
Vue.use(VModal);
Vue.use(VueFormWizard);
Vue.use(VueHtml2Canvas);
Vue.use(RegeneratorRuntime);
Vue.use(Paintable, {
    // optional methods
    setItem(key, image) {
      localStorage.setItem(key, image);
    },
    // you also can use async
    getItem(key) {
      return localStorage.getItem(key);
    },
    removeItem(key) {
      localStorage.removeItem(key);
    }
});
Vue.use(FlashMessage);

Vue.component("v-select", vSelect);

//*********COMPONENTES GENERALES*********\\
Vue.component(
    "menuComponente",
    require("./components/componentesGenerales/MenuComponent.vue").default
);
Vue.component(
    "vuetable-component",
    require("./components/componentesGenerales/VueTableComponent.vue").default
);
Vue.component(
    "vue-painttable",
    require("./components/componentesGenerales/VuePaintableComponent.vue").default
);
Vue.component(
    "vue-confirmar-cancelar",
    require("./components/componentesGenerales/VueConfirmarCancelarComponent.vue").default
);
Vue.component(
    "vue-firma",
    require("./components/componentesGenerales/VueFirmaComponent.vue").default
);
//*********FIN COMPONENTES GENERALES*********\\

/* Vue.component(
    "prueba",
    require("./components/Prueba.vue").default
); */

//Modulo de Parametrizacion
Vue.component(
    "crear-modificar-modulo",
    require("./components/Modulos/Parametrizacion/modulo/CrearModificarModulo.vue").default
);
Vue.component(
    "crear-modificar-sub-modulo",
    require("./components/Modulos/Parametrizacion/sub_modulo/CrearModificarSubModulo.vue").default
);

//*********MODULO CIRUGÍA*********\\

Vue.component(
    "lista-cirugia-programa-paciente",
    require("./components/Modulos/Cirugia/valoracionPreanestecia/ListaCirugiaProgramadaPaciente.vue").default
);
//Registro de Tiempo

//Valoracion Preanestesia
Vue.component(
    "revision-sistema",
    require("./components/Modulos/Cirugia/valoracionPreanestecia/componentsValoracionPreanestecia/RevisionSistema.vue").default
);
Vue.component(
    "antecedente",
    require("./components/Modulos/Cirugia/valoracionPreanestecia/componentsValoracionPreanestecia/Antecedente.vue").default
);
Vue.component(
    "examen-fisico",
    require("./components/Modulos/Cirugia/valoracionPreanestecia/componentsValoracionPreanestecia/ExamenFisico.vue").default
);
Vue.component(
    "paraclinico",
    require("./components/Modulos/Cirugia/valoracionPreanestecia/componentsValoracionPreanestecia/Paraclinico.vue").default
);

//Registro Anestesia
Vue.component(
    "datos-paciente",
    require("./components/Modulos/Cirugia/RegistroAnestesia/components/DatosPacienteComponet.vue").default
);
Vue.component(
    "trans-anestesico",
    require("./components/Modulos/Cirugia/RegistroAnestesia/components/TransAnestesicoComponet.vue").default
);
Vue.component(
    "administracion-farmaco",
    require("./components/Modulos/Cirugia/RegistroAnestesia/components/AdministracionFarmacoComponet.vue").default
);
Vue.component(
    "registro-anestesico",
    require("./components/Modulos/Cirugia/anestesia/components/registro-anestesico.vue").default
);
Vue.component(
    "eliminar-agente",
    require("./components/Modulos/Cirugia/anestesia/components/EliminarAgenteComponet.vue").default
);

//Listado Verificacion
Vue.component(
    "lista-entrada",
    require("./components/Modulos/Cirugia/lista_verificacion/componentsListaVerificacion/ListaEntrada.vue").default
);
Vue.component(
    "lista-pausa",
    require("./components/Modulos/Cirugia/lista_verificacion/componentsListaVerificacion/ListaPausa.vue").default
);
Vue.component(
    "lista-salida",
    require("./components/Modulos/Cirugia/lista_verificacion/componentsListaVerificacion/ListaSalida.vue").default
);
Vue.component(
    "lista-visualizacion",
    require("./components/Modulos/Cirugia/lista_verificacion/componentsListaVerificacion/VisualizacionLista.vue").default
);
Vue.component(
    "lista-firma",
    require("./components/Modulos/Cirugia/lista_verificacion/componentsListaVerificacion/ListaFirma.vue").default
);

//*********FIN MODULO CIRUGÍA*********\\


/*
Vue.component(
    "crear-modificar-tipo-agente",
    require("./components/Modulos/Cirugia/tipo_agente/CrearModificarTipoAgente.vue").default
);

Vue.component(
    "crear-modificar-tipo-posiciones",
    require("./components/Modulos/Cirugia/tipo_posiciones/CrearModificarTipoPosiciones.vue").default
);*/

new Vue({
    el: "#app",
    components: {
        App
    },
    router
})

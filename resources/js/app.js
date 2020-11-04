require('./bootstrap');

import Vue from "vue";
import VModal from "vue-js-modal";
import VueGoodTablePlugin from "vue-good-table";
import "vue-good-table/dist/vue-good-table.css";
import router from "./router";
import VueRouter from "vue-router";
import Loading from "vue-loading-overlay";
import VueSweetalert2 from "vue-sweetalert2";
import vSelect from "vue-select";
import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
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
Vue.use(VueFormWizard)

Vue.component("v-select", vSelect);

Vue.component(
    "menuComponente",
    require("./components/componentesGenerales/MenuComponent.vue").default
);

Vue.component(
    "vuetable-component",
    require("./components/componentesGenerales/VueTableComponent.vue").default
);

//Modulo de Parametrizacion
Vue.component(
    "crear-modificar-modulo",
    require("./components/Modulos/Parametrizacion/modulo/CrearModificarModulo.vue").default
);

//Modulo de Cirugía
Vue.component(
    "lista-cirugia-programa-paciente",
    require("./components/Modulos/Cirugia/valoracionPreanestecia/ListaCirugiaProgramadaPaciente.vue").default
);

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
new Vue({
    el: "#app",
    components: {
        App
    },
    router
})

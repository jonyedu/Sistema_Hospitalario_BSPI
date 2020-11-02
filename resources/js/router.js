import Vue from "vue";
import { prefix } from "./variables";
import VueRouter from "vue-router";

import IndexValoracionPreanestesica from "./components/modulos/cirugia/valoracionPreanestecia/IndexValoracionPreanestesica";

Vue.use(VueRouter);
let prefijo = prefix;
export default new VueRouter({
    routes: [
        {
            path:
                prefijo +
                "/modulos/cirugia/valoracionPreanestecia/mostrar_valoracion_preanestesica",
            component: IndexValoracionPreanestesica
        },
    ],
    mode: "history" //Evita que aparezca # en la ruta
});

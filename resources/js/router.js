import Vue from "vue";
import { prefix } from "./variables";
import VueRouter from "vue-router";

//Parametrizacion
import Modulo from "./components/Modulos/Parametrizacion/modulo/Modulo";

//Cirugia
import IndexValoracionPreanestesica from "./components/Modulos/Cirugia/valoracionPreanestecia/IndexValoracionPreanestesica";

Vue.use(VueRouter);
let prefijo = prefix;
export default new VueRouter({
    routes: [
        //Parametrizacion
        {
            path:
                prefijo +
                "/modulos/parametrizacion/modulo/mostrar_modulo",
            component: Modulo
        },
        //Cirugia
        {
            path:
                prefijo +
                "/modulos/cirugia/valoracionPreanestecia/mostrar_valoracion_preanestesica",
            component: IndexValoracionPreanestesica,
        },
    ],
    mode: "history" //Evita que aparezca # en la ruta
});

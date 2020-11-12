import Vue from "vue";
import { prefix } from "./variables";
import VueRouter from "vue-router";

//Parametrizacion
import Modulo from "./components/Modulos/Parametrizacion/modulo/Modulo";
import SubModulo from "./components/Modulos/Parametrizacion/sub_modulo/SubModulo";

//Cirugia
import IndexValoracionPreanestesica from "./components/Modulos/Cirugia/valoracionPreanestecia/IndexValoracionPreanestesica";
import IndexAnestesia from "./components/Modulos/Cirugia/anestesia/index";

import TipoAgente from "./components/Modulos/Cirugia/tipo_agente/TipoAgente";
import TipoPosiciones from "./components/Modulos/Cirugia/tipo_posiciones/TipoPosiciones";
import ListaVerificacion from "./components/Modulos/Cirugia/lista_verificacion/ListasComponent";

//import emplo from "./components/ejenplo";



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
        {
            path:
                prefijo +
                "/modulos/parametrizacion/sub_modulo/mostrar_sub_modulo",
            component: SubModulo
        },
        //Cirugia
        {
            path:
                prefijo +
                "/modulos/cirugia/valoracionPreanestecia/mostrar_valoracion_preanestesica",
            component: IndexValoracionPreanestesica,
        },
        {
            path:
                prefijo +
                "/modulos/cirugia/anestesia",
            component: IndexAnestesia,
        },
        {
            path:
                prefijo +
                "/modulos/cirugia/tipo_agente/mostrar_tipo_agente",
            component: TipoAgente
        },
        {
            path:
                prefijo +
                "/modulos/cirugia/tipo_posiciones/mostrar_tipo_posiciones",
            component: TipoPosiciones
        },
        {
            path:
                prefijo +
                "/modulos/cirugia/lista_verificacion/mostrar_tipo_lista",
            component: ListaVerificacion
        },
    ],
    mode: "history" //Evita que aparezca # en la ruta
});

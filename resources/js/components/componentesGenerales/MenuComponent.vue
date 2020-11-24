<template>
    <nav class="mt-2">
        <ul
            class="nav nav-pills nav-sidebar flex-column"
            data-widget="treeview"
            role="menu"
            data-accordion="false"
        >
            <li
                class="nav-item has-treeview"
                v-for="(gestion, index) in menus"
                :key="index"
            >
                <a class="nav-link">
                    <i :class="gestion.imagen"></i>
                    <p>
                        {{
                            $funcionesGlobales.toCapitalFirstAllWords(
                                gestion.descripcion
                            )
                        }}
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul
                    class="nav nav-treeview"
                    v-for="(subMenu, index) in gestion.sub_modulo"
                    :key="index"
                >
                    <li class="nav-item">
                        <router-link
                            :to="prefijo + subMenu.route"
                            class="nav-link ml-3"
                            ><i :class="subMenu.imagen"> </i>
                            <p>
                                {{
                                    $funcionesGlobales.toCapitalFirstAllWords(
                                        subMenu.descripcion
                                    )
                                }}
                            </p>
                        </router-link>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</template>
<script>
import { prefix } from "../../variables";
export default {
    data: function() {
        return {
            id_rol: "",
            id_menu: 0,
            id_sub_menu: 0,
            prefijo: "",
            modulos: [],
            sub_modulos: [],
            menus: [],
        };
    },
    mounted: function() {
        //this.cargarModulos();
        this.cargarMenu();
        this.prefijo = prefix;
    },
    methods: {
        cargarMenu() {
            let that = this;
            let url = "/modulos/parametrizacion/modulo/cargar_menu";
            axios
                .get(url)
                .then(function(response) {
                    let menus= [];
                    menus = response.data.menus;
                    that.menus = menus;
                })
                .catch(error => {
                    //Errores
                    that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    });
                });
        },
        /* cargarModulos() {
            let that = this;
            let url = "/modulos/parametrizacion/modulo/cargar_modulo_combo_box";
            axios
                .get(url)
                .then(function(response) {
                    let modulos = [];
                    modulos = response.data.modulo;
                    that.modulos = modulos;
                    //alert(that.sub_modulos.length)
                    if (that.sub_modulos.length == 0) {
                        if(response.data.modulo[0] != null){
                            that.cargarSubModulos(response.data.modulo[0].codigo);
                        }

                    }
                })
                .catch(error => {
                    //Errores
                    that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    });
                });
        }, */
        /* cargarSubModulos(id) {
            let that = this;
            let url =
                "/modulos/parametrizacion/sub_modulo/cargar_sub_modulo_combo_box/" +
                id;
            axios
                .get(url)
                .then(function(response) {
                    let subModulo = [];
                    subModulo = response.data.subModulo;
                    that.sub_modulos = subModulo;
                })
                .catch(error => {
                    //Errores
                    that.$swal({
                        icon: "error",
                        title: "Existe un error",
                        text: error
                    });
                });
        } */
    }
};
</script>

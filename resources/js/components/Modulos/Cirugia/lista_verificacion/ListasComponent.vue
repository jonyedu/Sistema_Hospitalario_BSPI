<template>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                            <li>
                                <router-link
                                    :to="prefijo"
                                    style="margin-top:-9px"
                                    class="nav-link"
                                    >Home</router-link
                                >
                            </li>
                            <li><p>/</p></li>
                            <li>
                                <p style="margin-left:10px">Listas de Verificacion</p>
                            </li>
                        </ol>
                    </div>

                    <hr />
                    <!-- Seccion de los menu de botones: Historial clínico, Nueva, Guardar, etc y la Tabla Historial Clinico-->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div
                                        class="col-lg-12 col-md-12 col-sm-12 text-right"
                                    >
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="float-right">
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-primary"
                                                        @click="
                                                            mostrarModalListaCirugiaPaciente()
                                                        "
                                                       
                                                    >
                                                        Nuevo
                                                    </button>
                                                     <button
                                                        type="button"
                                                        class="btn btn-outline-primary"
                                                        @click="
                                                            llamarMetodoImprimir()
                                                        "
                                                        v-bind:style="{ display: isHidden}"

                                                    >
                                                        Imprimir
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-12 col-md-12 col-sm-12"
                        v-if="listas.SecCirPro != ''"
                    >
                        <div
                            class="col-lg-12 col-md-12 col-sm-12"
                            v-if="form.SecCirPro != ''"
                        >
                            <div
                                class="card card-default collapsed-card"
                            >
                                <div class="card-header" style="background: #590303">
                                    <h3 class="card-title" style="color: #FFFFFF">
                                        DATOS DEL PACIENTE
                                    </h3>

                                    <div class="card-tools">
                                        <button
                                            type="button"
                                            class="btn btn-tool"
                                            data-card-widget="collapse"
                                        >
                                            <i class="fas fa-plus"></i>
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-tool"
                                            data-card-widget="remove"
                                        >
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: none;">
                                    <div class="row">
                                        <!-- DATOS DEL PACIENTE -->
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div
                                                class="text-left col-lg-12 col-md-12 col-sm-12"
                                            >
                                                    <div class="row">
                                                        
                                                        <input
                                                            type="hidden"
                                                            id="SecCirPro"
                                                            name="SecCirPro"
                                                            v-model="
                                                                listas.SecCirPro
                                                            "
                                                        />
                                                        <div
                                                            class="col-sm-6 text-left"
                                                        >
                                                            <label
                                                                class="col-form-label"
                                                                >Paciente:</label
                                                            >
                                                            <span
                                                                class="text-left"
                                                                v-text="
                                                                    form.frm_paciente
                                                                "
                                                            ></span>
                                                        </div>
                                                        <div
                                                            class="col-sm-6 text-left"
                                                        >
                                                            <label
                                                                class="col-form-label"
                                                                >Cirujano:</label
                                                            >
                                                            <span
                                                                class="text-left"
                                                                v-text="
                                                                    form.frm_cirujano
                                                                "
                                                            ></span>
                                                        </div>
                                                        <div
                                                            class="col-sm-6 text-left"
                                                        >
                                                            <label
                                                                class="col-form-label"
                                                                >Anestesiologo:</label
                                                            >
                                                            <span
                                                                class="text-left"
                                                                v-text="
                                                                    form.frm_anestesiologo
                                                                "
                                                            ></span>
                                                        </div>
                                                        <div
                                                            class="col-sm-6 text-left"
                                                        >
                                                            <label
                                                                class="col-form-label"
                                                                >Quirófano:</label
                                                            >
                                                            <span
                                                                class="text-left"
                                                                v-text="
                                                                    form.frm_quirofano
                                                                "
                                                            ></span>
                                                        </div>
                                                        <div
                                                            class="col-sm-12 text-left"
                                                        >
                                                            <label
                                                                class="col-form-label"
                                                                >Procedimiento:</label
                                                            >
                                                            <span
                                                                class="text-left"
                                                                v-text="
                                                                    form.frm_procedimiento
                                                                "
                                                            ></span>
                                                        </div>
                                                    </div>

                                                    <button
                                                        type="button"
                                                        class="close"
                                                        data-dismiss="alert"
                                                        aria-label="Close"
                                                    >
                                                        <span aria-hidden="true"
                                                            >&times;</span
                                                        >
                                                    </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div
                                            class="col-lg-12 col-md-12 col-sm-12 text-left"
                                        >

                                        <form
                                                    @submit.prevent="guardarLista"
                                                    method="POST"
                                                >
                                                <!-- {{-- antes de la induccion --}} -->
                                                    <div
                                                        class="card card-default collapsed-card"
                                                    >
                                                        <div class="card-header" style="background: #590303">
                                                            <h3 class="card-title" style="color: #FFFFFF">
                                                                ANTES DE LA
                                                                INDUCCIÓN DE LA
                                                                ANESTESIA (ENTRADA)
                                                            </h3>

                                                            <div class="card-tools">
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-tool"
                                                                    data-card-widget="collapse"
                                                                >
                                                                    <i
                                                                        class="fas fa-plus"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-tool"
                                                                    data-card-widget="remove"
                                                                >
                                                                    <i
                                                                        class="fas fa-times"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div
                                                            class="card-body"
                                                            style="display: none;"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-6"
                                                                >
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada01"
                                                                            id="chkentrada01"
                                                                            v-model="
                                                                                listas.chkentrada01
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada01"
                                                                            class="custom-control-label"
                                                                            >EL
                                                                            PACIENTE
                                                                            HA
                                                                            CONFIRMADO</label
                                                                        >
                                                                        <ul>
                                                                            <li>
                                                                                Su
                                                                                Identidad
                                                                            </li>
                                                                            <li>
                                                                                El
                                                                                Sitio
                                                                                Quirurgico
                                                                            </li>
                                                                            <li>
                                                                                El
                                                                                Procedimiento
                                                                            </li>
                                                                            <li>
                                                                                Su
                                                                                Consentimiento
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada02"
                                                                            id="chkentrada02"
                                                                            v-model="
                                                                                listas.chkentrada02
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada02"
                                                                            class="custom-control-label"
                                                                            >DEMARCACION
                                                                            DEL
                                                                            SITIO/NO
                                                                            PROCEDE</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada03"
                                                                            id="chkentrada03"
                                                                            v-model="
                                                                                listas.chkentrada03
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada03"
                                                                            class="custom-control-label"
                                                                            >SE HA
                                                                            COMPLEMENTADO
                                                                            EL
                                                                            CONTROL
                                                                            DE LA
                                                                            SEGURIDAD
                                                                            DE LA
                                                                            ANESTESIA</label
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-6"
                                                                >
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada04"
                                                                            id="chkentrada04"
                                                                            v-model="
                                                                                listas.chkentrada04
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada04"
                                                                            class="custom-control-label"
                                                                            >PULSIOXIMETRO
                                                                            COLOCADO
                                                                            Y EN
                                                                            FUNCIONAMIENTO</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            id="chkentrada05"
                                                                            name="chkentrada05"
                                                                            v-model="
                                                                                listas.chkentrada05
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada05"
                                                                            class="custom-control-label"
                                                                            >TIENE
                                                                            EL
                                                                            PACIENTE:
                                                                            ALERGIAS
                                                                            CONOCIDAD?</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada06"
                                                                            id="chkentrada06"
                                                                            v-model="
                                                                                listas.chkentrada06
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkentrada06"
                                                                            class="custom-control-label"
                                                                            >VIA
                                                                            AÉREA
                                                                            DIFICIL/RIESGO
                                                                            DE
                                                                            ASPIRACION
                                                                        </label>
                                                                        <ul>
                                                                            <li>
                                                                                SI
                                                                                HAY
                                                                                INSTRUMENTAL
                                                                                Y
                                                                                EQUIPOS/AYUDA
                                                                                DISPONIBLE
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkentrada07"
                                                                            id="chkentrada07"
                                                                            v-model="
                                                                                listas.chkentrada07
                                                                            "
                                                                        />

                                                                        <label
                                                                            for="chkentrada07"
                                                                            class="custom-control-label"
                                                                            >RIESGO
                                                                            DE
                                                                            HEMORRAGIA
                                                                            > 500 ML
                                                                            (7ML VKG
                                                                            EN
                                                                            NIÑOS)?</label
                                                                        >
                                                                        <ul>
                                                                            <li>
                                                                                SI,
                                                                                Y SE
                                                                                HA
                                                                                PREVISTO
                                                                                LA
                                                                                DISPONIBILIDAD
                                                                                DE
                                                                                ACCESO
                                                                                INTRAVENOSO
                                                                                Y
                                                                                LIQUIDOS
                                                                                ADECUADOS
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
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
                                                    <!-- {{-- pausa quirurgica --}} -->
                                                    <div
                                                        class="card card-default collapsed-card"
                                                    >
                                                        <div class="card-header" style="background: #590303">
                                                            <h3 class="card-title" style="color: #FFFFFF">
                                                                ANTES DE A INCISIÓN
                                                                CUTÁNEA (PAUSA
                                                                QUIRURGICA)
                                                            </h3>

                                                            <div class="card-tools">
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-tool"
                                                                    data-card-widget="collapse"
                                                                >
                                                                    <i
                                                                        class="fas fa-plus"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-tool"
                                                                    data-card-widget="remove"
                                                                >
                                                                    <i
                                                                        class="fas fa-times"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div
                                                            class="card-body"
                                                            style="display: none;"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-6"
                                                                >
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkquirurgica01"
                                                                            id="chkquirurgica01"
                                                                            v-model="
                                                                                listas.chkquirurgica01
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkquirurgica01"
                                                                            class="custom-control-label"
                                                                            >CONFIRMA
                                                                            QUE
                                                                            TODOS
                                                                            LOS
                                                                            MIENBROS
                                                                            DEL
                                                                            EQUIPO
                                                                            SE HAYAN
                                                                            PRESENTADO
                                                                            POR SU
                                                                            NOMBRE Y
                                                                            FUNCIÓN</label
                                                                        >
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkquirurgica02"
                                                                            id="chkquirurgica02"
                                                                            v-model="
                                                                                listas.chkquirurgica02
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkquirurgica02"
                                                                            class="custom-control-label"
                                                                            >CIRUJANO,
                                                                            ANESTESISTA
                                                                            Y
                                                                            ENFERMERO
                                                                            CONFIRMAN
                                                                            VERBALMENTE:</label
                                                                        >
                                                                        <ul>
                                                                            <li>
                                                                                La
                                                                                Identidad
                                                                                del
                                                                                Paciente
                                                                            </li>
                                                                            <li>
                                                                                El
                                                                                Sitio
                                                                                Quirurgico
                                                                            </li>
                                                                            <li>
                                                                                El
                                                                                Procedimiento
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <label
                                                                            for="chkquirurgica03"
                                                                            >PREVISIÓN
                                                                            DE
                                                                            EVENTOS
                                                                            CRÍTICOS</label
                                                                        >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkquirurgica03"
                                                                            id="chkquirurgica03"
                                                                            v-model="
                                                                                listas.chkquirurgica03
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkquirurgica03"
                                                                            class="custom-control-label"
                                                                            >EL
                                                                            CIRUJANO
                                                                            REVISA:
                                                                            LOS
                                                                            PASOS
                                                                            CRITICOS
                                                                            O
                                                                            IMPREVISTO
                                                                            LA
                                                                            DURACION
                                                                            DE LA
                                                                            OPERACION
                                                                            Y LA
                                                                            PERDIDA
                                                                            DE
                                                                            SANGRE
                                                                            PERVISTA</label
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-6"
                                                                >
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkquirurgica04"
                                                                            id="chkquirurgica04"
                                                                            v-model="
                                                                                listas.chkquirurgica04
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkquirurgica04"
                                                                            class="custom-control-label"
                                                                            >EL
                                                                            EQUIPO
                                                                            DE
                                                                            ANESTESIA
                                                                            REVISA:
                                                                            SI EL
                                                                            PACIENTE
                                                                            PRESENTA
                                                                            ALGUN
                                                                            PROBLEMA
                                                                            ESPECIFICO</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkquirurgica05"
                                                                            id="chkquirurgica05"
                                                                            v-model="
                                                                                listas.chkquirurgica05
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkquirurgica05"
                                                                            class="custom-control-label"
                                                                            >EL
                                                                            EQUIPO
                                                                            DE
                                                                            ENFERMERIA
                                                                            REVISA:
                                                                            SI SE HA
                                                                            CONFIRMADO
                                                                            LA
                                                                            ESTERILIDAD
                                                                            (CON
                                                                            RESULTADOS
                                                                            DE LOS
                                                                            INDICADORES;
                                                                            Y SI
                                                                            EXISTEN
                                                                            DUDAS O
                                                                            PROBLEMAS
                                                                            RELACIONADOS
                                                                            CON EL
                                                                            INSTRUMENTAL
                                                                            Y LOS
                                                                            EQUIPOS</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkquirurgica06"
                                                                            id="chkquirurgica06"
                                                                            v-model="
                                                                                listas.chkquirurgica06
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chkquirurgica06"
                                                                            class="custom-control-label"
                                                                            >SI SE
                                                                            HA
                                                                            ADMINISTRADO
                                                                            PROFILAXIS
                                                                            ANTIBIOTICA
                                                                            EN LOS
                                                                        </label>
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chkquirurgica07"
                                                                            id="chkquirurgica07"
                                                                            v-model="
                                                                                listas.chkquirurgica07
                                                                            "
                                                                        />

                                                                        <label
                                                                            for="chkquirurgica07"
                                                                            class="custom-control-label"
                                                                            >PUEDEN
                                                                            VISUALIZAR
                                                                            LAS
                                                                            IMAGENES
                                                                            DIAGNOSTICADAS</label
                                                                        >
                                                                        <ul>
                                                                            <li>
                                                                                NO,
                                                                                NO
                                                                                PROCEDE
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- {{-- Antes que el paciente salga del quirofano --}} -->
                                                    <div
                                                        class="card card-default collapsed-card"
                                                    >
                                                        <div class="card-header" style="background: #590303">
                                                            <h3 class="card-title" style="color: #FFFFFF">
                                                                ANTES DEL QUE
                                                                PACIENTE SALGA DEL
                                                                QUIRÓFANO(SALIDA)
                                                            </h3>

                                                            <div class="card-tools">
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-tool"
                                                                    data-card-widget="collapse"
                                                                >
                                                                    <i
                                                                        class="fas fa-plus"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-tool"
                                                                    data-card-widget="remove"
                                                                >
                                                                    <i
                                                                        class="fas fa-times"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div
                                                            class="card-body"
                                                            style="display: none;"
                                                        >
                                                            <label
                                                                for=""
                                                                class="card-blue"
                                                            >
                                                                EL ENFERMERO
                                                                CONFIRMA VERBALMENTE
                                                                CON EL EQUIPO:
                                                            </label>
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-6"
                                                                >
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chksalida01"
                                                                            id="chksalida01"
                                                                            v-model="
                                                                                listas.chksalida01
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chksalida01"
                                                                            class="custom-control-label"
                                                                            >EL
                                                                            NOMBRE
                                                                            DEL
                                                                            PROCEDIMIENTO
                                                                            REALIZADO.</label
                                                                        >
                                                                    </div>
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chksalida02"
                                                                            id="chksalida02"
                                                                            v-model="
                                                                                listas.chksalida02
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chksalida02"
                                                                            class="custom-control-label"
                                                                        >
                                                                            QUE LOS
                                                                            RECUENTOS
                                                                            DE
                                                                            INSTRUMENTOS,
                                                                            GASAS
                                                                            AGUJAS
                                                                            SON
                                                                            CORRECTOS</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chksalida03"
                                                                            id="chksalida03"
                                                                            v-model="
                                                                                listas.chksalida03
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chksalida03"
                                                                            class="custom-control-label"
                                                                            >EL
                                                                            ETIQUETADO
                                                                            DE LAS
                                                                            MUESTRAS
                                                                            (QUE
                                                                            FIGURE
                                                                            EL
                                                                            NOMBRE
                                                                            DEL
                                                                            PACIENTE)</label
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-6"
                                                                >
                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chksalida04"
                                                                            id="chksalida04"
                                                                            v-model="
                                                                                listas.chksalida04
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chksalida04"
                                                                            class="custom-control-label"
                                                                            >SI HAY
                                                                            PROBLEMAS
                                                                            QUE
                                                                            RESOLVER
                                                                            RELACIONADOS
                                                                            CON EL
                                                                            INSTRUMENTAL
                                                                            Y LOS
                                                                            EQUIPOS</label
                                                                        >
                                                                    </div>

                                                                    <div
                                                                        class="custom-control custom-checkbox"
                                                                    >
                                                                        <input
                                                                            class="custom-control-input"
                                                                            type="checkbox"
                                                                            name="chksalida05"
                                                                            id="chksalida05"
                                                                            v-model="
                                                                                listas.chksalida05
                                                                            "
                                                                        />
                                                                        <label
                                                                            for="chksalida05"
                                                                            class="custom-control-label"
                                                                            >EL
                                                                            CIRUJANO,
                                                                            EL
                                                                            ANESTESISTA
                                                                            Y EL
                                                                            ENFERMERO
                                                                            REVISAN
                                                                            LOS
                                                                            PRINCIPALES
                                                                            ASPECTOS
                                                                            DE LA
                                                                            RECUPERACION
                                                                            Y EL
                                                                            TRATAMIENTO
                                                                            DEL
                                                                            PACIENTE</label
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header" style="background: #590303">
                                                            <h3 class="card-title" style="color: #FFFFFF">
                                                                OBSERVACIÓN
                                                            </h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label
                                                                    >Observacion</label
                                                                >
                                                                <textarea
                                                                    class="form-control"
                                                                    rows="3"
                                                                    placeholder="Enter ..."
                                                                    name="observacion"
                                                                    id="observacion"
                                                                    v-model="
                                                                        listas.observacion
                                                                    "
                                                                required></textarea>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
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
                                                    <div class="card-footer">
                                                        <button
                                                            type="submit"
                                                            class="btn btn-primary"
                                                              v-bind:style="{ display: idHiddenNuevo}"
                                                        >
                                                            Enviar
                                                        </button>
                                                    </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Seccion donde muestra la lista de los pacientes que tienen una cita -->
                    <modal
                        :width="'65%'"
                        height="auto"
                        :scrollable="true"
                        name="ListaCirugiaProgramadaPaciente"
                    >
                        <lista-cirugia-programa-paciente
                            ref="ListaCirugiaProgramadaPaciente"
                            @handleSeleccionarClick="handleSeleccionarClick"
                        ></lista-cirugia-programa-paciente>
                    </modal>
                    <!-- Fin Seccion donde muestra la lista de los pacientes que tienen una cita -->

                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { prefix } from "../../../../variables";
export default {
      props: {
       
        user: {
            type: Object
        }
    },
    data() {
        return {
               prefijo: "",
               isHidden: 'none',
               idHiddenNuevo:'none',
                rutaSello: "",
                
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
                chkquirurgica01: false,
                chkquirurgica02: false,
                chkquirurgica03: false,
                chkquirurgica04: false,
                chkquirurgica05: false,
                chkquirurgica06: false,
                chkquirurgica07: false,
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
             validarImgFirma: 0,
            isFirstPaintable: "firmaAnestesiologo",
            form: {
                /* Datos del paciente */
                // frm_idCirugiaProgramada: "",
                id_lista:0,
                tipo_servicio:4,
                id_visita:0,
                id_tipo_documento:13,
                frm_paciente: "",
                frm_cirujano: "",
                frm_anestesiologo: "",
                frm_quirofano: "",
                frm_procedimiento: "",
                imgFirma: null,
               
                imgGrafica: null,
            }
        };
    },
    methods: {
        /* Metodos para Llamar al Modal y la Tabla */
        mostrarModalListaCirugiaPaciente() {
            this.$modal.show("ListaCirugiaProgramadaPaciente");
        },
        handleSeleccionarClick(value) {
            this.listas.SecCirPro = value.SecCirPro;
            this.form.frm_paciente = value.nombrePaciente;
            this.form.frm_cirujano = value.cirujano;
            this.form.frm_anestesiologo = value.anestesiologo;
            this.form.frm_quirofano = value.quirofano;
            this.form.frm_procedimiento = value.procedimiento;
            this.$modal.hide("ListaCirugiaProgramadaPaciente");
            // if (this.$refs.revisionSistema != null) {
            //     this.$refs.revisionSistema.cargarRevisionSistema();
            // }

            this.cargarLista(value.SecCirPro);
            this.consultarSello();
        },
        cargarLista: function(value) {
            let that = this;
            let url = "/modulos/cirugia/lista_verificacion/buscarpaciente/" + value;
            // var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {


                    if (response.data.contador>0) {
                         that.$swal({
                        icon: "success",
                        title: "El proceso ya se encuentra realizado, Seleccione Imprimir para visualizar el reporte",
                        text: "."
                    }),
                    that.isHidden = 'block'
                     that.idHiddenNuevo = 'none'
                    
                          

                    } else {
                        that.$swal({
                        icon: "success",
                        title: "Paciente Nuevo",
                        text: "."
                    });
                     that.isHidden = 'none'
                      that.idHiddenNuevo = 'block'
                    }
                })
                .catch(error => {
                    //Errores
                     that.$swal({
                        icon: "success",
                        title: "Paciente Nuevo",
                        text: "."
                    });
                    that.isHidden = 'none'
                });
              //  llamarMetodoImprimir();
        },
         guardarFirmaPorAtencion() {
            let that = this;
            let url = "";
            let mensaje = "";
          // alert(that.form.imgFirma);
            let formNew = {
                tipo_servicio:4,
                id_atencion:that.form.id_lista,
                // that.form.id_lista,
                id_visita:0,
                id_tipo_documento:13,
                imgFirma: that.form.imgFirma,
            };
            url = "/modulos/cirugia/anestesia/guardar_firma_atencion";

            var loader = that.$loading.show();
            axios
                .post(url, formNew)
                .then(function(response) {
                    
                    loader.hide();
                    that.flashMessage.show({
                        status: "success",
                        title: "Éxito al procesar Firma por Atención",
                        message: "Datos guardados correctamente.",
                        clickable: true,
                        time: 5000,
                        icon: "/iconsflashMessage/success.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                 
                })
                .catch(error => {
                  
                    that.resConfirmarCancelar = false;
                    that.flashMessage.show({
                        status: "error",
                        title: "Error al procesar guardarFirmaPorAtencion",
                        message:
                            "Por favor comuníquese con el administrador. " +
                            error,
                        clickable: true,
                        time: 0,
                        icon: "/iconsflashMessage/error.svg",
                        customStyle: {
                            flashMessageStyle: {
                                background: "linear-gradient(#e66465, #9198e5)"
                            }
                        }
                    });
                    loader.hide();
                });
        },
         consultarSello() {
            let that = this;
            if (this.$props.user.id > 0) {
                var loader = that.$loading.show();
                let url =
                    "/modulos/cirugia/anestesia/cargar_sello/" +
                    this.$props.user.id;
                  
                axios
                    .get(url)
                    .then(function(response) {
                        if (response.data.sello != null) {
                            if (response.data.sello.seguridad_medico != null) {
                                that.rutaSello =
                                    "data:image/jpeg;base64," +
                                    response.data.sello.seguridad_medico.medico.medico_sellos
                                        .IMAGEN_SELLO;
                                         // alert( response.data.sello.medico_sellos);
                            }
                        }
                        loader.hide();
                    })
                    .catch(error => {
                        
                        that.flashMessage.show({
                            status: "error",
                            title: "Error al procesar consultarSello",
                            message:
                                "Por favor comuníquese con el administrador. " +
                                error,
                            clickable: true,
                            time: 0,
                            icon: "/iconsflashMessage/error.svg",
                            customStyle: {
                                flashMessageStyle: {
                                    background:
                                        "linear-gradient(#e66465, #9198e5)"
                                }
                            }
                        });
                        loader.hide();
                    });
            }
        },
        guardarLista: function() {
            let that = this;

            if(that.validarImgFirma==0){
               that.$swal({ 
                        icon: "error",
                        title: "Favor Guardar la Firma",
                        text: "."
                    }); 
                    return;
            }
            // var loader = that.$loading.show();
            const ListaInsert = this.listas;
            //console.log(this.listas);
            (this.listas = {
                SecCirPro: "",
                id_lista:0,
                chkentrada01: false,
                chkentrada02: false,
                chkentrada03: false,
                chkentrada04: false,
                chkentrada05: false,
                chkentrada06: false,
                chkentrada07: false,
                chkquirurgica01: false,
                chkquirurgica02: false,
                chkquirurgica03: false,
                chkquirurgica04: false,
                chkquirurgica05: false,
                chkquirurgica06: false,
                chkquirurgica07: false,
                chksalida01: false,
                chksalida02: false,
                chksalida03: false,
                chksalida04: false,
                chksalida05: false,
                user_id: "",
                cargo: "",
                observacion: "",
                firma: ""
            }),
               
       

                axios
                .post("/modulos/cirugia/lista_verificacion/ListarValoracion", ListaInsert)
                .then(function(response) {
                    that.form.id_lista =  response.data.id;
                   // alert(response.data.id);
                    //  loader.hide();
                    //alert(that.form.id_lista);
                    that.guardarFirmaPorAtencion();
                     (that.form = {
                      id_lista:0,
                tipo_servicio:4,
                id_visita:0,
                id_tipo_documento:13,
                frm_paciente: "",
                frm_cirujano: "",
                frm_anestesiologo: "",
                frm_quirofano: "",
                frm_procedimiento: "",
                imgFirma: null,
               
                imgGrafica: null,
                });
                  that.$swal({ 
                        icon: "success",
                        title: "Proceso Realizado con Exito",
                        text: "."
                    });
                });

                 

             //   alert( that.form.id_lista);
               // guardarFirmaPorAtencion();

            // aui
        },
         llamarMetodoImprimir() {

                window.open(
                    "/modulos/cirugia/lista_verificacion/mostrarreporte/" +
                        this.listas.SecCirPro
                );

        }
    }
};
</script>

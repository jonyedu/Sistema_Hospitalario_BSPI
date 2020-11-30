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
                                                <div
                                                    class="col-lg-12 col-md-12 col-sm-12"
                                                >
                                                    <div
                                                        class="text-left col-lg-12 col-md-12 col-sm-12"
                                                    >
                                                        <div
                                                            class="alert alert-success alert-dismissible fade show"
                                                            role="alert"
                                                        >
                                                            <div class="row">
                                                                <input
                                                                    type="hidden"
                                                                    id="SecCirPro"
                                                                    name="SecCirPro"
                                                                    v-model="
                                                                        listas.frm_idCirugiaProgramada
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
                                                                <span
                                                                    aria-hidden="true"
                                                                    >&times;</span
                                                                >
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- {{-- antes de la induccion --}} -->
                                                <div
                                                    class="card card-default collapsed-card card-warning"
                                                >
                                                    <div class="card-header">
                                                        <h3 class="card-title">
                                                            Antes de la
                                                            Inducción de la
                                                            anestesia (Entrada)
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
                                                    class="card card-default collapsed-card card-blue"
                                                >
                                                    <div class="card-header">
                                                        <h3 class="card-title">
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
                                                    class="card card-default collapsed-card card-green"
                                                >
                                                    <div class="card-header">
                                                        <h3 class="card-title">
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

                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h3 class="card-title">
                                                            Observacion
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
                                                            ></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>

                                                <div class="card-footer">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-primary"
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
    data() {
        return {
               prefijo: "",
               isHidden: 'none',
            listas: {
                frm_idCirugiaProgramada: "",
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
            form: {
                /* Datos del paciente */
                // frm_idCirugiaProgramada: "",
                frm_paciente: "",
                frm_cirujano: "",
                frm_anestesiologo: "",
                frm_quirofano: "",
                frm_procedimiento: ""
            }
        };
    },
    methods: {
        /* Metodos para Llamar al Modal y la Tabla */
        mostrarModalListaCirugiaPaciente() {
            this.$modal.show("ListaCirugiaProgramadaPaciente");
        },
        handleSeleccionarClick(value) {
            this.listas.frm_idCirugiaProgramada = value.SecCirPro;
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
        },
        cargarLista: function(value) {
            let that = this;
            let url = "/modulos/cirugia/lista_verificacion/buscarpaciente/" + value;
            // var loader = that.$loading.show();
            axios
                .get(url)
                .then(function(response) {
                    if (response.data.listaValoracion) {
                    //   this.$swal({
                    //     icon: "warning",
                    //     title: "Paciente a Modificar",
                    //     text: "."
                    // }),
                            that.listas.chkentrada01 = Boolean(
                                Number(
                                    response.data.listaValoracion.chkentrada01
                                )
                            );
                        that.listas.chkentrada02 = Boolean(
                            Number(response.data.listaValoracion.chkentrada02)
                        );
                        that.listas.chkentrada03 = Boolean(
                            Number(response.data.listaValoracion.chkentrada03)
                        );
                        that.listas.chkentrada04 = Boolean(
                            Number(response.data.listaValoracion.chkentrada04)
                        );
                        that.listas.chkentrada05 = Boolean(
                            Number(response.data.listaValoracion.chkentrada05)
                        );
                        that.listas.chkentrada06 = Boolean(
                            Number(response.data.listaValoracion.chkentrada06)
                        );
                        that.listas.chkentrada07 = Boolean(
                            Number(response.data.listaValoracion.chkentrada07)
                        );
                        that.listas.chkquirurgica01 = Boolean(
                            Number(
                                response.data.listaValoracion.chkquirurgica01
                            )
                        );
                        that.listas.chkquirurgica02 = Boolean(
                            Number(
                                response.data.listaValoracion.chkquirurgica02
                            )
                        );
                        that.listas.chkquirurgica03 = Boolean(
                            Number(
                                response.data.listaValoracion.chkquirurgica03
                            )
                        );
                        that.listas.chkquirurgica04 = Boolean(
                            Number(
                                response.data.listaValoracion.chkquirurgica04
                            )
                        );
                        that.listas.chkquirurgica05 = Boolean(
                            Number(
                                response.data.listaValoracion.chkquirurgica05
                            )
                        );
                        that.listas.chkquirurgica06 = Boolean(
                            Number(
                                response.data.listaValoracion.chkquirurgica06
                            )
                        );
                        that.listas.chkquirurgica07 = Boolean(
                            Number(
                                response.data.listaValoracion.chkquirurgica07
                            )
                        );
                        that.listas.chksalida01 = Boolean(
                            Number(response.data.listaValoracion.chksalida01)
                        );
                        that.listas.chksalida02 = Boolean(
                            Number(response.data.listaValoracion.chksalida02)
                        );
                        that.listas.chksalida03 = Boolean(
                            Number(response.data.listaValoracion.chksalida03)
                        );
                        that.listas.chksalida04 = Boolean(
                            Number(response.data.listaValoracion.chksalida04)
                        );
                        that.listas.chksalida05 = Boolean(
                            Number(response.data.listaValoracion.chksalida05)
                        );
                        // user_id: "",
                        // cargo: "",
                        that.listas.observacion =
                            response.data.listaValoracion.observacion;
                        //firma: ""
                           that.$swal({
                        icon: "success",
                        title: "Paciente a Modificar",
                        text: "."
                    }),
                    that.isHidden = 'block'

                    } else {
                        that.$swal({
                        icon: "success",
                        title: "Paciente Nuevo",
                        text: "."
                    });
                     that.isHidden = 'none'
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
        },
        guardarLista: function() {
            let that = this;
            // var loader = that.$loading.show();
            const ListaInsert = this.listas;
            //console.log(this.listas);
            (this.listas = {
                frm_idCirugiaProgramada: "",
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
                (this.form = {
                    /* Datos del paciente */
                    // frm_idCirugiaProgramada: "",
                    frm_paciente: "",
                    frm_cirujano: "",
                    frm_anestesiologo: "",
                    frm_quirofano: "",
                    frm_procedimiento: ""
                });
            axios
                .post("/modulos/cirugia/lista_verificacion/ListarValoracion", ListaInsert)
                .then(function(response) {
                    //  loader.hide();
                  that.$swal({
                        icon: "success",
                        title: "Proceso Realizado con Exito",
                        text: "."
                    });
                });

            // aui
        },
         llamarMetodoImprimir() {

                window.open(
                    "/modulos/cirugia/lista_verificacion/mostrarreporte/" +
                        this.listas.frm_idCirugiaProgramada
                );

        }
    }
};
</script>

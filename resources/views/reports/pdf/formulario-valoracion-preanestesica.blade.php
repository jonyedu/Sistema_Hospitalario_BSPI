</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Valoración Preanestesica</title>
    <style>
        div {
            position: absolute;
            z-index: 25;
        }
        /* Estilo para todas las tablas */
        .tableStyleAll {
            width: 100%;
            border-collapse: collapse;
        }

        .cabeceraPrin td {
           /*  border: 1px solid #000000; */
            height: 10px;
        }

        .cabezaAll{
            top: -50px;
        }

        .cabecera {
            font-size: 8pt;
            color: #000000;
            font-family: Arial;
            font-weight: bold;
        }

        .tablePaciente td,
        th {
            border: 1px solid #000000;
        }

        .tablePaciente th {
            background-color: #ccffcc;
            font-size: 6pt;
            color: #000000;
            font-family: Arial;
            font-weight: bold;
            text-align: center;
            height: 15px;
        }

        .tablePaciente td {
            font-size: 6pt;
            color: #000000;
            font-family: Arial;
            text-align: center;
            height: 10px;
        }

        /* Revision Por Sistema */
        /* .tableGeneral td,
        th {
            border: 1px solid #000000;
        } */

        .tableParaclinico td,
        th {
            border: 1px solid #000000;
        }

        .tableGeneral th {
            background-color: #ccffcc;
            font-size: 6pt;
            color: #000000;
            font-family: Arial;
            font-weight: bold;
            text-align: center;
            height: 15px;
        }

        .tableGeneral td {
            font-size: 6pt;
            color: #000000;
            font-family: Arial;
            text-align: left;
            height: 15px;
            font-weight: bold;
        }
    </style>
    <!-- Icono de la Pestaña -->
    <link rel="shortcut icon" href="{{public_path('img/icono.png') }}">
</head>

<body>

    <!-- Inicio Cabecera -->
    <div class="cabezaAll" style="top:0px;">
        <table class="tableStyleAll cabeceraPrin" width="100%">
            <tr>
                <td align="left" width="40px" ROWSPAN=3><img src="{{public_path('img/LogoCompleto.png') }}" borde="0" width="102px" height="50px" /></td>
                <td align="center"><span class="cabecera">Benemerita Sociedad Protectora de la Infancia</span></td>
            </tr>
            <tr>
                <td align="center"><span class="cabecera">HOSPITAL "LEON BECERRA"</span></td>
            </tr>
            <tr>
                <td align="center"><span class="cabecera">GUAYAQUIL</span></td>
            </tr>
        </table>
    </div>
    <!-- Fin Cabecera -->

    <!-- Datos del Paciente -->
    <div class="tablePaciente" style="top:65px;">
        <table class="tableStyleAll">
            <tr>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>PRIMER NOMBRE</th>
                <th>SEGUNDO NOMBRE</th>
                <th>N° HISTORIA CLINICA</th>
            </tr>
            @if(sizeOf($datosPaciente)> 0)
            @forelse($datosPaciente as $paciente)
            <tr>
                <td>{{ $paciente->Apellido_paterno }} </td>
                <td>{{ $paciente->Apellido_materno }} </td>
                <td>{{ $paciente->Primer_nombre }} </td>
                <td>{{ $paciente->Segundo_nombre }} </td>
                <td>{{ $paciente->HistoriaClinica }} </td>
            </tr>
            @empty
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforelse
            @else
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endif
        </table>
        <table class="tableStyleAll">
            <tr>
                <th>PENSIONADO</th>
                <th>PACIENTE DE HOSPITAL</th>
                <th>SALA GENERAL</th>
                <th rowspan=2>CIRUGIA</th>
                <th>PROGRAMADA</th>
                <th>EDAD</th>
                <th colspan=4>SEXO</th>
                <th>FECHA</th>
            </tr>
            @if(sizeOf($datosPaciente)> 0)
            @forelse($datosPaciente as $paciente)
            <tr>
                <td>{{$paciente->Pensionado}}</td>
                <td></td>
                <td>{{$paciente->Sala}} </td>
                <td></td>
                <td>{{$edadPaciente}} </td>
                @if($paciente->Genero == 'M')
                <td>M</td>
                <td>X</td>
                <td>F</td>
                <td style="color: white;">X</td>
                @elseif($paciente->Genero == 'F')
                <td>M</td>
                <td style="color: white;">X</td>
                <td>F</td>
                <td>X</td>
                @else
                <td>M</td>
                <td></td>
                <td>F</td>
                <td></td>
                @endif

                <td>{{date('Y-m-d H:i:s')}} </td>
            </tr>
            @empty
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>M</td>
                <td></td>
                <td>F</td>
                <td></td>
                <td></td>
            </tr>
            @endforelse
            @else
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>M</td>
                <td></td>
                <td>F</td>
                <td></td>
                <td></td>
            </tr>
            @endif
        </table>
    </div>

    <!-- REVISIÓN POR SISTEMAS -->
    <div class="tableGeneral" style="top:135px;">
        <table class="tableStyleAll">
            <tr>
                <th>REVISIÓN POR SISTEMAS</th>
            </tr>
        </table>
    </div>
    <!-- Cardiovasculares -->
    <div class="tableGeneral" style="top:160px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="height: 25px;" colspan=25>Cardiovasculares</td>
            </tr>
            <tr>
                <!-- Validar Hipertensión -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Hipertensión</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->hipertension)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <!-- Fin Validar Hipertensión -->
                <!-- Validar Enf. Coronaria -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Enf. Coronaria</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->enfCoronaria)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <!-- Fin Validar Enf. Coronaria -->
                <!-- Validar Arritmias -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Arritmias</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->arritmias)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <!-- Fin Validar Arritmias -->
                <!-- Validar Otros Cardiovascular -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Otros</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->otrosCardiovascular)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <!-- Validar Enf. Valvula -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Enf. Valvula</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->enfValvular)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Enf. Valvula -->
                <!-- Validar Várices -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Várices</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->varices)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Várices -->
                <!-- Validar Ciaudicación -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Ciaudicación</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->claudicacion)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Ciaudicación -->
                <td style="width:20px;color:white;">x</td>
                <td colspan=6></td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>
    <!-- Respiratorio -->
    <div class="tableGeneral" style="top:245px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="height: 25px;" colspan=25>Respiratorio</td>
            </tr>
            <tr>
                <!-- Validar EPOC -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">EPOC</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->epoc)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar EPOC -->
                <!-- Validar ASMA -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">ASMA</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->asma)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar ASMA -->
                <!-- Validar TBC -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">TBC</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->tbc)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar TBC -->
                <!-- Validar Otros Respiratorio -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Otros</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->otrosRespiratorio)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Otros Respiratorio -->
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>
    <!-- Neurológico -->
    <div class="tableGeneral" style="top:310px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="height: 25px;" colspan=25>Neurológico</td>
            </tr>
            <tr>
                <!-- Validar Convulsiones -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Convulsiones</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->convulsiones)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Convulsiones -->
                <!-- Validar ECV -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">ECV</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->ecv)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar ECV -->
                <!-- Validar Meningitis -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Meningitis</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->meningitis)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Meningitis -->
                <!-- Validar Enf. Menta -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Enf. Menta</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->enfMental)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Enf. Menta -->
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <!-- Validacion Otros Neurologico -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Otros</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->otrosNeurologico)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validacion Otros Neurologico -->
                <td style="width:20px;color:white;">x</td>
                <td colspan=18></td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>
    <!-- Nefrológicos -->
    <div class="tableGeneral" style="top:395px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="height: 25px;" colspan=25>Nefrológicos</td>
            </tr>
            <tr>
                <!-- Validacion IRA -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">IRA</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->ira)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validacion IRA -->
                <!-- Validacion Infección Urinaria -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Infección Urinaria</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->infeccionUnitaria )
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validacion Infección Urinaria -->
                <!-- Validacion IRC -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">IRC</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->irc)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validacion IRC -->
                <!-- Validacion Otros Nefrologicos -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Otros</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->otrosNefrologicos)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validacion Otros Nefrologicos -->
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>
    <!-- Gastrointestinal -->
    <div class="tableGeneral" style="top:460px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="height: 25px;" colspan=25>Cardiovasculares</td>
            </tr>
            <tr>
                <!-- Validar Ulcera -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Ulcera</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->ulcera)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Ulcera -->
                <!-- Validar Estomago Lleno -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Estomago Lleno</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->estomagoLleno)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Estomago Lleno -->
                <!-- Validar Otros Gastrointestinal -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Otros</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->otrosGastrointestinal)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Otros Gastrointestinal -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;color:white;">Otros</td>
                <td style="width:10px;color:white;">Si</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:10px;color:white;">No</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>

    <!-- ANTECEDENTES -->
    <div class="tablePaciente" style="top:530px;">
        <table class="tableStyleAll">
            <tr>
                <th>ANTECEDENTES</th>
            </tr>
        </table>
    </div>
    <div class="tableGeneral" style="top:555px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="height: 10px;color:white;" colspan=17>x</td>
            </tr>
            <tr>
                <!-- Validar Quirúrgico -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Quirúrgico</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->quirurgico)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Quirúrgico -->
                <!-- Validar Traumáticos -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:60px;">Traumáticos</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->traumatico)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Quirúrgico -->
                <!-- Validar Quirúrgico Descripcion -->
                <td style="width:20px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    <th style="width:80px;"> {{$datosValoracionPreanestesica->antecedente->descripcionQuirurgico}} </th>
                @else
                    <th style="width:80px;color:#ccffcc;">x</th>
                @endif
                <td style="width:5px;color:white;"></td>
                <!-- Fin Validar Quirúrgico Descripcion -->
                <!-- Validar Traumáticos Descripcion -->
                @if($datosValoracionPreanestesica != null)
                    <th style="width:80px;"> {{$datosValoracionPreanestesica->antecedente->descripcionTraumatico}} </th>
                @else
                    <th style="width:80px;color:#ccffcc;">x</th>
                @endif
                <td style="width:5px;color:white;">x</td>
                <!-- Fin Validar Traumáticos Descripcion -->
            </tr>
            <tr>
                <td style="height: 10px;" colspan=17>Toxicoalérgicos</td>
            </tr>
        </table>
        <!-- Alergias -->
        <table class="tableStyleAll">
            <tr>
                <!-- Validar Alergias -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Alergias</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->alergia)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Alergias -->
                <td style="width:330px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- Tóxicos: Tabaco -->
        <table class="tableStyleAll">
            <tr>
                <!-- Validar Tabaco -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:62px;">Tóxicos: Tabaco</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->tabaco)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Tabaco -->
                <!-- Validar Cocaina -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:40px;">Cocaina</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->cocaina)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Cocaina -->
                <!-- Validar Marihuana -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:40px;">Marihuana</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->marihuana)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Cocaina -->
                <!-- Validar Otros Toxico -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:35px;">Otros cuál?</td>
                @if($datosValoracionPreanestesica != null)
                    <th style="width:80px;"> {{$datosValoracionPreanestesica->antecedente->cual_otrosToxico}} </th>
                @else
                    <th style="width:80px;color:white;">x</th>
                @endif
                <td style="width:5px;color:white;">x</td>
                <!-- Validar Otros Toxico -->
            </tr>
        </table>
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:70px;">Gineco-obstétricos</td>
                <td style="width:10px;">G</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:40px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->antecedente->g}} </td>
                @else
                    <td style="width:40px;color:#ccffcc;">x</td>
                @endif
                <td style="width:10px;">P</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:40px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->antecedente->p}} </td>
                @else
                    <td style="width:40px;color:#ccffcc;">x</td>
                @endif
                <td style="width:10px;">A</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:40px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->antecedente->a}} </td>
                @else
                    <td style="width:40px;color:#ccffcc;">x</td>
                @endif
                <td style="width:10px;">C</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:40px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->antecedente->c}} </td>
                @else
                    <td style="width:40px;color:#ccffcc;">x</td>
                @endif
                <td style="width:10px;">FUR</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:100px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->antecedente->fur}} </td>
                @else
                    <td style="width:100px;color:#ccffcc;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;height: 2px; color:white;" colspan=13>x</td>
            </tr>
        </table>
        <table class="tableStyleAll">
            <tr>
                <!-- Validar Familiares -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Familiares</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->familiar)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <!-- Fin Validar Familiares -->
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Otros cuáles?</td>
                @if($datosValoracionPreanestesica != null)
                    <th style="width:80px;"> {{$datosValoracionPreanestesica->antecedente->cual_familiar}} </th>
                @else
                    <th style="width:80px;color:#ccffcc;">x</th>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- Drogas -->
        <table class="tableStyleAll">
            <tr>
                <td style="height: 10px;" colspan=19>Drogas</td>
            </tr>
            <tr>
                <!-- Validar Esteroides -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Esteroides</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->esteroide)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Esteroides -->
                <!-- Validar AINES -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">AINES</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->aines)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar AINES -->
                <!-- Validar IECA -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">IECA</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->ieca)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar IECA -->
                <!-- Validar Inotrópicos -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">Inotrópicos</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->inetropico)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Inotrópicos -->
                <!-- Validar AntiH2 -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">AntiH2</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->anti_h2)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar AntiH2 -->
                <!-- Validar ASA -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">ASA</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->asa)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:5px;color:white;">x</td>
                <!-- Fin Validar ASA -->
            </tr>
            <tr>
                <!-- Validar Antibióticos -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Antibióticos</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->antibiotico)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Antibióticos -->
                <!-- Validar Betabloqueadores -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">Betabloqueadores</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->betabloqueador)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Betabloqueadores -->
                <!-- Validar Diuréticos -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">Diuréticos</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->diuretico)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Diuréticos -->
                <!-- Validar Anticoagulantes -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">Anticoagulantes</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->anticoagulante)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Anticoagulantes -->
                <!-- Validar Calcioantagonista -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">Calcioantagonista</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->calcioantagonista)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Calcioantagonista -->
                <td style="color:white;" colspan=3>x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <!-- Validar ACOS -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">ACOS</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->acos)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar ACOS -->
                <!-- Validar Anticolinesterásico -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">Anticolinesterásico</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->anticolinesterasico)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Anticolinesterásico -->
                <!-- Validar Otros -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">Otros</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->antecedente->otrasDroga)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <!-- Fin Validar Otros -->
                <!-- Validar otras Droga -->
                <td style="width:10px;color:white;">x</td>
                <td style="width:60px;">Cuál?</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;" colspan=6> {{$datosValoracionPreanestesica->antecedente->cual_otrasDroga}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;" colspan=7>x</td>
                @endif
                <!-- Fin Validar otras Droga -->
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=19>x</td>
            </tr>
        </table>
    </div>

    <!-- EXAMEN FISICO -->
    <div class="tablePaciente" style="top:775px;">
        <table class="tableStyleAll">
            <tr>
                <th>EXAMEN FISICO</th>
            </tr>
        </table>
    </div>

    <div class="tableGeneral" style="top:800px;border: #000000 1px solid;">
        <!-- PA, PC, etc -->
        <table class="tableStyleAll">
            <tr>
                <!-- Validar PA -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:20px;">PA</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2> {{$datosValoracionPreanestesica->examenFisico->pa}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;" colspan=2>x</td>
                @endif
                <!-- Fin Validar PA -->
                <!-- Validar PC -->
                <td style="width:20px;">PC</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2> {{$datosValoracionPreanestesica->examenFisico->pc}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;" colspan=2>x</td>
                @endif
                <!-- Fin Validar PC -->
                <!-- Validar PESO -->
                <td style="width:20px;">PESO</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2> {{$datosValoracionPreanestesica->examenFisico->peso}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;" colspan=2>x</td>
                @endif
                <!-- Fin Validar PESO -->
                <!-- Validar TALLA -->
                <td style="width:20px;">TALLA</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2> {{$datosValoracionPreanestesica->examenFisico->talla}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;" colspan=2>x</td>
                @endif
                <!-- Fin Validar TALLA -->

                <td style="width:100px;color:white;">x</td>
                <td style="width:100px;">ESTADO GENERAL</td>
                <!-- Validar B-->
                <td style="width:10px;">B</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->bEstadoGeneral}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <!-- Fin Validar B -->
                <!-- Validar R -->
                <td style="width:10px;">R</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->rEstadoGeneral}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <!-- Fin Validar R -->
                <!-- Validar M -->
                <td style="width:10px;">M</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->mEstadoGeneral}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <!-- Fin Validar M -->
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- Cuello: Corto -->
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;height: 2px; color:white;">x</td>
            </tr>
            <tr>
                <!-- Validar Cuello: Corto -->
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Cuello: Corto</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->examenFisico->cuelloCorto)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <!-- Fin Validar Cuello: Corto -->
                <!-- Validar DMT -->
                <td style="width:20px;color:white;">x</td>
                <td style="width:20px;">DMT</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:20px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->dmt}} </td>
                @else
                    <td style="width:20px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <!-- Fin Validar DMT -->
                <!-- Validar cm -->
                <td style="width:40px;color:white;">x</td>
                <td style="width:20px;">cm</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:20px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->cmCuelloCorto}} </td>
                @else
                    <td style="width:20px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <!-- Fin Validar cm -->
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Movilidad del Cuello</td>
                <!-- Validar B -->
                <td style="width:10px;">B</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->bMovilidadCuello}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <!-- Fin Validar B -->
                <!-- Validar R -->
                <td style="width:10px;">R</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->rMovilidadCuello}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <!-- Fin Validar R -->
                <!-- Validar M -->
                <td style="width:10px;">M</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->mMovilidadCuello}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <!-- Fin Validar M -->
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- ESCALA DE MALLAMPATI -->
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">ESCALA DE MALLAMPATI</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:100px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Clases 1: Total visibilidad de las amígdalas, úvula y paladar blando.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->examenFisico->clase1)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:100px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Clases 2: visilidad del paladar duro y blando, porción superior de las amígdalas y úvula.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->examenFisico->clase2)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:100px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Clases 3: son visibles el paladar duro y blando y la base de la úvula.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->examenFisico->clase3)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:100px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Clases 4: solo es visible el paladar duro.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->examenFisico->clase4)
                        <th style="width:10px;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:100px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- Ingurgilación Yugular -->
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Ingurgitación Yugular</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->examenFisico->ingurgitacionYugular)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <td style="width:350px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- Boca: Apertura Oral -->
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Boca: Apertura Oral</td>
                <td style="width:1px;color:white;">X</td>
                <td style="width:10px;">cm</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->cmBocaAperturaOral}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:50px;">Dentadura B</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->bDentadura}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:10px;">R</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->rDentadura}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:10px;">M</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:10px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->mDentadura}} </td>
                @else
                    <td style="width:10px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:30px;color:white;">x</td>
                <td style="width:60px;">Edéntulo</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->examenFisico->edentulo)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <td style="width:30px;color:white;">x</td>
                <td style="width:60px;">Prótesis</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->examenFisico->protesis)
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @else
                        <td style="width:10px;">Si</td>
                        <th style="width:10px;color:#ccffcc;">X</th>
                        <td style="width:10px;">No</td>
                        <th style="width:10px;">X</th>
                    @endif
                @else
                    <td style="width:10px;">Si</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                    <td style="width:10px;">No</td>
                    <th style="width:10px;color:#ccffcc;;">X</th>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- Cardiovascular -->
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Cardiovascular</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:500px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->cardiovascular}} </td>
                @else
                    <td style="width:500px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Respiratorio</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:500px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->respiratorio}} </td>
                @else
                    <td style="width:500px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Abdomen</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:500px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->abdomen}} </td>
                @else
                    <td style="width:500px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">Extremidades</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:500px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->examenFisico->extremidades}} </td>
                @else
                    <td style="width:500px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
        </table>
    </div>

    <!-- Salto de linea, para que me envie a la otra pagina -->
    <div style="page-break-after:always;"></div>

    <!-- Inicio Cabecera para la siguiente pagina-->
    <div class="cabezaAll" style="top:0px;">
        <table class="tableStyleAll cabeceraPrin" width="100%">
            <tr>
                <td align="left" width="40px" ROWSPAN=3><img src="{{public_path('img/LogoCompleto.png') }}" borde="0" width="102px" height="50px" /></td>
                <td align="center"><span class="cabecera">Benemerita Sociedad Protectora de la Infancia</span></td>
            </tr>
            <tr>
                <td align="center"><span class="cabecera">HOSPITAL "LEON BECERRA"</span></td>
            </tr>
            <tr>
                <td align="center"><span class="cabecera">GUAYAQUIL</span></td>
            </tr>
        </table>
    </div>
    <!-- Fin Cabecera -->

    <!-- Siguiente parte de Examen Fisico-->
    <div class="tableGeneral" style="top:70px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:150px;">Neurológico: ESCALA DE GLASGOW</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;color:white;">x</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:150px;">Apertura Ocular</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;">Respuesta Verbal</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;">Respuesta Motora</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Espontánea: 4</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Orientado: 5</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Cumple Ordenes expresadas: 6</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Estimulo verbal (al pedirselo): 3</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Desorientado: 4</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Localizada el Estimulo doloroso: 5</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Al dolor: 2</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Palabras inapropiadas: 3</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Retira ante el Estimulo doloroso: 4</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">No responde: 1</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Sonidos incomprensibles: 2</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Respuesta en flexíon (postura de decorticación): 3</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;"></td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">No responde: 1</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">Respuesta en extensión (postura de descerebración): 2</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;"></td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;"></td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:150px;font-weight: normal;">No responde: 1</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:20px;">PUNTUACIÓN</td>
                @if($datosValoracionPreanestesica != null)
                    <th style="width:20px;"> {{$datosValoracionPreanestesica->examenFisico->puntuacionNeurologico}} </th>
                @else
                    <th style="width:20px;color:white;">x</th>
                @endif
                <td style="width:500px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=5>x</td>
            </tr>
        </table>
    </div>

    <!-- PARACLINICO -->
    <div class="tablePaciente" style="top:255px;">
        <table class="tableStyleAll">
            <tr>
                <th>PARACLINICO</th>
            </tr>
        </table>
    </div>
    <!-- Partes Hb, Hcto, etc -->
    <div class="tableGeneral tableParaclinico" style="top:280px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="width:40px;text-align: center;">Hb</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->hb)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">Hcto</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->hcto)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:60px;text-align: center;">Leucocitos</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->leucocito)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">Na</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->na)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">CI</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->ci)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">K</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->k)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">Ca</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->ca)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
            </tr>
            <tr>
                <td style="width:40px;text-align: center;">BUN</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->bun)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">Creati</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->creati)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:60px;text-align: center;">Glicemia</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->glicemia)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">Plaquetas</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->plaqueta)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">T.P.</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->tp)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">T.P.T</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->tpt)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:40px;text-align: center;">Mg</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->mg)
                    <th style="width:40px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
            </tr>
        </table>
    </div>

    <!-- E.K.G, Ecocardiograma -->
    <div class="tableGeneral" style="top:325px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:40px;">E.K.G</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:400px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->paraclinico->ekg}} </td>
                @else
                    <td style="width:400px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:40px;">Ecocardiograma</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:400px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->paraclinico->ecocardiograma}} </td>
                @else
                    <td style="width:400px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:40px;">Rx Tórax</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:400px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->paraclinico->rxTorax}} </td>
                @else
                    <td style="width:400px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
        </table>
    </div>

    <!-- CLASIFICACIÓN ASA -->
    <div class="tableGeneral" style="top:400px;border: #000000 1px solid;">
        <!-- CLASIFICACIÓN ASA -->
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:200px;">CLASIFICACIÓN ASA</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:200px;">ASA 1</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->asa1)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:200px;">ASA 2</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->asa2)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:200px;">ASA 3</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->asa3)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:200px;">ASA 4</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->asa4)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:200px;">ASA 5</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->asa5)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:200px;">U</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->u)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- Clasificación de riesgo quirúrgico del Hospital JonhsHopkins -->
        <table class="tableStyleAll">
            <tr>
                <td style="height:1px;color:white;" colspan=6>x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <!-- Inicio CATEGORIA 1 -->
            <tr>
                <td style="height:1px;color:white;" colspan=6>x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">CATEGORIA 1</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Riesgo mínimo independiente de la anestesia. Procedimiento minimamente invasivo con poca o mínima pérdida sanguínea.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->categoria1)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <!-- Fin CATEGORIA 1 -->
            <!-- Inicio CATEGORIA 2 -->
            <tr>
                <td style="height:1px;color:white;" colspan=6>x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">CATEGORIA 2</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Procedimiento con invasividad leve o moderada. Pérdida sanguínea menor a 500 ml. Riesgo leve independiente de la anestesia.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->categoria2)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <!-- Fin CATEGORIA 2 -->
            <!-- Inicio CATEGORIA 3 -->
            <tr>
                <td style="height:1px;color:white;" colspan=6>x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">CATEGORIA 3</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Procedimiento moderado o significamente invasivo. Pérdida sanguínea potencial entre 500 y 1500 ml. Riesgo moderado independiente de la anestesia.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->categoria3)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <!-- Fin CATEGORIA 3 -->
            <!-- Inicio CATEGORIA 4 -->
            <tr>
                <td style="height:1px;color:white;" colspan=6>x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">CATEGORIA 4</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Procedimiento altamente invasivo. Pérdida sanguínea mayor a 1500 ml. Riesgo alto independiente de la anestesia.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->categoria4)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <!-- Fin CATEGORIA 4 -->
            <!-- Inicio CATEGORIA 5 -->
            <tr>
                <td style="height:1px;color:white;" colspan=6>x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">CATEGORIA 5</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:10px;color:white;">X</td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:300px;">Procedimiento altamente invasivo. Pérdida sanguínea mayor a 1500 ml. Riesgo crítico para el paciente independiente de la anestesia.</td>
                <td style="width:50px;color:white;">x</td>
                @if($datosValoracionPreanestesica != null)
                    @if($datosValoracionPreanestesica->paraclinico->categoria5)
                        <th style="width:10px;text-align: center;">X</th>
                    @else
                        <th style="width:10px;color:#ccffcc;">X</th>
                    @endif
                @else
                    <th style="width:10px;color:#ccffcc;">X</th>
                @endif
                <td style="width:50px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <!-- Fin CATEGORIA 5 -->
            <tr>
                <td style="height:1px;color:white;" colspan=6>x</td>
            </tr>
        </table>
    </div>

    <!-- OBSERVACIONES -->
    <div class="tableGeneral" style="top:825px;border: #000000 1px solid;">
        <table class="tableStyleAll">
            <tr>
                <td style="width:5px;color:white;">x</td>
                <td style="width:60px;">OBSERVACIONES:</td>
                @if($datosValoracionPreanestesica != null)
                    <td style="width:400px;border-bottom: #000000 1px solid;"> {{$datosValoracionPreanestesica->paraclinico->observacion}} </td>
                @else
                    <td style="width:400px;color:white;border-bottom: #000000 1px solid;">x</td>
                @endif
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
        </table>
    </div>
</body>

</html>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Valoración Preanestesica</title>
    <style>
        /* Para la cabecera */
        .cabeceraPrin th {
            top: -50px;
        }

        .cabecera {
            font-size: 10pt;
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
            height: 20px;
        }

        .tablePaciente td {
            font-size: 6pt;
            color: #000000;
            font-family: Arial;
            text-align: center;
            height: 15px;
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
            height: 20px;
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
    <style>
        div {
            position: absolute;
            z-index: 25;
        }

        a {
            text-decoration: none;
        }

        a img {
            border-style: none;
            border-width: 0;
        }

        .fc1id4d81rd6h6o-0 {
            font-size: 10pt;
            color: #000000;
            font-family: Arial;
            font-weight: bold;
        }

        .fc1id4d81rd6h6o-1 {
            font-size: 6pt;
            color: #000000;
            font-family: Arial;
            font-weight: bold;
        }

        .fc1id4d81rd6h6o-2 {
            font-size: 3pt;
            color: #000000;
            font-family: Arial;
            font-weight: bold;
        }

        .fc1id4d81rd6h6o-3 {
            font-size: 5pt;
            color: #000000;
            font-family: Arial;
            font-weight: bold;
        }

        .ad1id4d81rd6h6o-0 {
            border-color: #000000;
            border-left-width: 0;
            border-right-width: 0;
            border-top-width: 0;
            border-bottom-width: 0;
        }

        .ad1id4d81rd6h6o-1 {
            background-color: #cffccf;
            layer-background-color: #cffccf;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-left-width: 0;
            border-right-width: 0;
            border-top-style: solid;
            border-top-width: 1;
            border-bottom-style: solid;
            border-bottom-width: 1;
        }

        .ad1id4d81rd6h6o-2 {
            background-color: #ffff99;
            layer-background-color: #ffff99;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-left-width: 0;
            border-right-style: solid;
            border-right-width: 1;
            border-top-width: 0;
            border-bottom-width: 0;
        }

        .ad1id4d81rd6h6o-3 {
            background-color: #ccffcc;
            layer-background-color: #ccffcc;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-left-style: solid;
            border-left-width: 1;
            border-right-width: 0;
            border-top-style: solid;
            border-top-width: 1;
            border-bottom-style: solid;
            border-bottom-width: 1;
        }

        .ad1id4d81rd6h6o-4 {
            background-color: #ccffcc;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            text-align: center;
            /* border-top: 1px solid black;
            border-right: 1px solid black;
            border-left: 1px solid black;
            border-bottom: 1px solid black; */
        }


        .bordered-all {
            border-top: 1px solid black;
            border-right: 1px solid black;
            border-left: 1px solid black;
            border-bottom: 1px solid black;
        }
    </style>

    <!-- Inicio Cabecera -->
    <div class="row">
        <div class="col-xs-3">
            <img src="{{public_path('img/LogoCompleto.png') }}" borde="0" width="102px" height="61px" />
        </div>
        <div class="col-xs-9">
            <table width="600px" class="cabeceraPrin">
                <td align="center">
                    <span class="cabecera">Benemerita Sociedad Protectora de la Infancia</span>
                </td>
            </table>
            <table width="600x" class="cabeceraPrin">
                <td align="center">
                    <span class="cabecera">HOSPITAL "LEON BECERRA"</span>
                </td>
            </table>
            <table width="600x">
                <td align="center"><span class="cabecera">GUAYAQUIL</span></td>
            </table>
        </div>
    </div>
    <!-- Fin Cabecera -->

    <!-- Datos del Paciente -->
    <div class="tablePaciente" style="top:79px;">
        <table style="width: 100%;">
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
            @endif
        </table>
        <table style="width: 100%;">
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
                @if($paciente->Genero ==  'M')
                <td>M</td>
                <td>X</td>
                <td>F</td>
                <td style="color: white;">X</td>
                @elseif($paciente->Genero ==  'F')
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
            @endif
        </table>
    </div>

    <!-- REVISIÓN POR SISTEMAS -->
    <div class="tablePaciente" style="top:160px;">
        <table style="width: 100%;">
            <tr>
                <th>REVISIÓN POR SISTEMAS</th>
            </tr>
        </table>
    </div>

    <!-- Cardiovasculares -->
    <div class="tableGeneral" style="top:190px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="height: 25px;" colspan=25>Cardiovasculares</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Hipertensión</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Enf. Coronaria</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Arritmias</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Otros</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Enf. Valvular</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Várices</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Ciaudicación</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>
    <!-- Respiratorio -->
    <div class="tableGeneral" style="top:275px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="height: 25px;" colspan=25>Respiratorio</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">EPOC</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">ASMA</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">TBC</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Otros</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>
    <!-- Neurológico -->
    <div class="tableGeneral" style="top:340px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="height: 25px;" colspan=25>Neurológico</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Convulsiones</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">ECV</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Meningitis</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Enf. Mental</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Otros</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>
    <!-- Nefrológicos -->
    <div class="tableGeneral" style="top:425px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="height: 25px;" colspan=25>Nefrológicos</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">IRA</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Infección Urinaria</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">IRC</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Otros</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>
    <!-- Gastrointestinal -->
    <div class="tableGeneral" style="top:490px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="height: 25px;" colspan=25>Gastrointestinal</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Ulcera</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Estomago Lleno</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Otros</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;"></td>
                <td style="width:110px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:5px;color:white;"></td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=25>x</td>
            </tr>
        </table>
    </div>

    <!-- ANTECEDENTES -->
    <div class="tablePaciente" style="top:555px;">
        <table style="width: 100%;">
            <tr>
                <th>ANTECEDENTES</th>
            </tr>
        </table>
    </div>
    <div class="tableGeneral" style="top:585px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="height: 10px;color:white;" colspan=25>x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Quirúrgico</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Traumáticos</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <th style="width:110px;" colspan=4>Quirúrgico Descripcion</th>
                <td style="width:5px;color:white;"></td>
                <th style="width:110px;" colspan=4>Traumáticos Descripcion</th>
                <td style="width:5px;color:white;"></td>
            </tr>
            <tr>
                <td style="height: 10px;" colspan=25>Toxicoalérgicos</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Alergias</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:40px;color:white;"></td>
                <td style="width:110px;" colspan=4></td>
                <td style="width:5px;color:white;"></td>
                <td style="width:110px;" colspan=4></td>
                <td style="width:5px;color:white;"></td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Tóxicos: Tabaco</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Cocaina</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Marihuana</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:25px;color:white;">x</td>
                <td style="width:45px;">Otros cuál?</td>
                <th style="width:110px;" colspan=2>Traumáticos Descripcion</th>
                <td style="width:5px;color:white;"></td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Gineco-obstétricos</td>
                <td style="width:20px;">G</td>
                <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:20px;">P</td>
                <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:20px;">A</td>
                <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:20px;">C</td>
                <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:20px;">FUR</td>
                <td style="width:70px;border-bottom: #000000 1px solid;" colspan=9></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:5px;height: 2px; color:white;">x</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Quirúrgico</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Otros cuáles?</td>
                <td style="width:555px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="height: 10px;" colspan=19>Drogas</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Esteroides</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">AINES</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">IECA</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Inotrópicos</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">AntiH2</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">ASA</td>
                <th style="width:20px;"></th>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Antibióticos</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Betabloqueadores</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Diuréticos</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Anticoagulantes</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Calcioantagonista</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;"></td>
                <td style="width:20px;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">ACOS</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Anticolinesterásico</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Otros</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:90px;">Otros cuál?</td>
                <td style="width:20px;border-bottom: #000000 1px solid;" colspan=7></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=19>x</td>
            </tr>
        </table>
    </div>

    <!-- EXAMEN FISICO -->
    <div class="tablePaciente" style="top:810px;">
        <table style="width: 100%;">
            <tr>
                <th>EXAMEN FISICO</th>
            </tr>
        </table>
    </div>

    <div class="tableGeneral" style="top:840px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:20px;">PA</td>
                <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:20px;">PC</td>
                <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:20px;">PESO</td>
                <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:20px;">TALLA</td>
                <td style="width:10px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:100px;">ESTADO GENERAL</td>
                <td style="width:100px;color:white;">x</td>
                <td style="width:20px;">B</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:20px;">R</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:20px;">M</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width:5px;height: 2px; color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Cuello: Corto</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:60px;color:white;">x</td>
                <td style="width:20px;">DMT</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:200px;color:white;">x</td>
                <td style="width:20px;">cm</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:200px;color:white;">x</td>
                <td style="width:20px;">B</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:20px;">R</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:20px;">M</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>ESCALA DE MALLAMPATI</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Clase 1: Total visibilidad de las amígdalas, úvula y paladar blando.</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Clases 2: visilidad del paladar duro y blando, porción superior de las amígdalas y y úvula</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Clases 3: son visibles el paladar duro y blando y la base de la úvula</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Clases 4: solo es visible el paladar duro</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Ingurgilación Yugular</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;"></td>
                <td style="width:5px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:20px;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:110px;">Boca: Apertura Oral</td>
                <td style="width:65px;"></td>
                <td style="width:20px;">cm</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:50px;">Dentadura B</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:20px;">R</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:20px;">M</td>
                <td style="width:20px;border-bottom: #000000 1px solid;"></td>
                <td style="width:50px;color:white;">x</td>
                <td style="width:90px;">Edéntulo</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:60px;color:white;">x</td>
                <td style="width:110px;">Prótesis</td>
                <td style="width:20px;">Si</td>
                <th style="width:20px;"></th>
                <td style="width:20px;">No</td>
                <th style="width:20px;"></th>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Cardiovascular</td>
                <td style="width:800px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Respiratorio</td>
                <td style="width:800px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Abdomen</td>
                <td style="width:800px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Extremidades</td>
                <td style="width:800px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
        </table>
    </div>

    <!-- Inicio Cabecera para la siguiente pagina-->
    <div class="row" style="top:1300px;">
        <div class="col-xs-3">
            <img src="{{public_path('img/LogoCompleto.png') }}" borde="0" width="102px" height="61px" />
        </div>
        <div class="col-xs-9">
            <table width="600px" class="cabeceraPrin">
                <td align="center">
                    <span class="cabecera">Benemerita Sociedad Protectora de la Infancia</span>
                </td>
            </table>
            <table width="600x" class="cabeceraPrin">
                <td align="center">
                    <span class="cabecera">HOSPITAL "LEON BECERRA"</span>
                </td>
            </table>
            <table width="600x">
                <td align="center"><span class="cabecera">GUAYAQUIL</span></td>
            </table>
        </div>
    </div>
    <!-- Fin Cabecera -->

    <!-- Siguiente parte de Examen Fisico-->
    <div class="tableGeneral" style="top:1400px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>Neurológico: ESCALA DE GLASGOW</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Apertura Ocular</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;">Respuesta Verbal</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;">Respuesta Motora</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Espontánea: 4</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Orientado: 5</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Cumple Ordenes expresadas: 6</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Estimulo verbal (al pedirselo): 3</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Desorientado: 4</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Localizada el Estimulo doloroso: 5</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Al dolor: 2</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Palabras inapropiadas: 3</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Retira ante el Estimulo doloroso: 4</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">No responde: 1</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Sonidos incomprensibles: 2</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Respuesta en flexíon (postura de decorticación): 3</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;"></td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">No responde: 1</td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">Respuesta en extensión (postura de descerebración): 2</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;"></td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;"></td>
                <td style="width:400px;color:white;">x</td>
                <td style="width:400px;font-weight: normal;">No responde: 1</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:20px;">PUNTUACIÓN</td>
                <th style="width:20px;">x</th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
        </table>
    </div>

    <!-- PARACLINICO -->
    <div class="tablePaciente" style="top:1560px;">
        <table style="width: 100%;">
            <tr>
                <th>PARACLINICO</th>
            </tr>
        </table>
    </div>

    <div class="tableGeneral tableParaclinico" style="top:1590px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;text-align: center;">Hb</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">Hcto</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:60px;text-align: center;">Leucocitos</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">Na</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">CI</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">K</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">Ca</td>
                <td style="width:40px;text-align: center;"></td>
            </tr>
            <tr>
                <td style="width:40px;text-align: center;">BUN</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">Creati</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:60px;text-align: center;">Glicemia</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">Plaquetas</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">T.P.</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">T.P.T</td>
                <td style="width:40px;text-align: center;"></td>
                <td style="width:40px;text-align: center;">Mg</td>
                <td style="width:40px;text-align: center;"></td>
            </tr>
        </table>
    </div>

    <div class="tableGeneral" style="top:1630px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">E.K.G</td>
                <td style="width:800px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Ecocardiograma</td>
                <td style="width:800px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">Rx Tórax</td>
                <td style="width:800px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
        </table>
    </div>

    <!-- CLASIFICACIÓN ASA -->
    <div class="tableGeneral" style="top:1695px;border: #000000 1px solid;">
        <!-- CLASIFICACIÓN ASA -->
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>CLASIFICACIÓN ASA</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">ASA 1</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">ASA 2</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">ASA 3</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">ASA 4</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">ASA 5</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">U</td>
                <th style="width:20px;"></th>
                <td style="width:400px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
        </table>
        <!-- Clasificación de riesgo quirúrgico del Hospital JonhsHopkins -->
        <table style="width: 100%;">
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>Clasificación de riesgo quirúrgico del Hospital Jonhs Hopkins</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>CATEGORIA 1</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Riesgo mínimo independiente de la anestesia. Procedimiento minimamente invasivo con poca o mínima pérdida sanguínea.</td>
                <td style="width:400px;color:white;">x</td>
                <th style="width:20px;"></th>
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>CATEGORIA 2</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Procedimiento con invasividad leve o moderada. Pérdida sanguínea menor a 500 ml. Riesgo leve independiente de la anestesia.</td>
                <td style="width:400px;color:white;">x</td>
                <th style="width:20px;"></th>
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>CATEGORIA 3</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Procedimiento moderado o significamente invasivo. Pérdida sanguínea potencial entre 500 y 1500 ml. Riesgo moderado independiente de la anestesia.</td>
                <td style="width:400px;color:white;">x</td>
                <th style="width:20px;"></th>
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>CATEGORIA 4</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Procedimiento altamente invasivo. Pérdida sanguínea mayor a 1500 ml. Riesgo alto independiente de la anestesia.</td>
                <td style="width:400px;color:white;">x</td>
                <th style="width:20px;"></th>
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:900px;" colspan=4>CATEGORIA 5</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:400px;">Procedimiento altamente invasivo. Pérdida sanguínea mayor a 1500 ml. Riesgo crítico para el paciente independiente de la anestesia.</td>
                <td style="width:400px;color:white;">x</td>
                <th style="width:20px;"></th>
                <td style="width:200px;color:white;">x</td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
        </table>
    </div>

    <!-- OBSERVACIONES -->
    <div class="tableGeneral" style="top:2100px;border: #000000 1px solid;">
        <table style="width: 100%;">
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:60px;">OBSERVACIONES:</td>
                <td style="width:800px;border-bottom: #000000 1px solid;"></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:800px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="width:40px;color:white;">x</td>
                <td style="width:800px;border-bottom: #000000 1px solid;" colspan=2></td>
                <td style="width:5px;color:white;">x</td>
            </tr>
            <tr>
                <td style="height:1px;color:white;" colspan=4>x</td>
            </tr>
        </table>
    </div>


    <link rel="stylesheet" href="{{public_path('css/bootstrap3/css/bootstrap.min.css')}}">
</body>

</html>

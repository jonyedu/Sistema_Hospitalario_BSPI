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

        .cabezaAll {
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


        /* Me une los bordes de la tabla */
        .tableStyleCollapse {
            width: 100%;
            border-collapse: collapse;
        }

        /* Me pinta los bordes al td y th */
        .tableBorderAll td,
        th {
            border: 1px solid #000000;
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

    <!-- Cardiovasculares -->
    <div class="tableBorderAll" style="top:160px;border: #000000 1px solid;">
        <table class="tableStyleCollapse">
            <tr>
                <td colspan=6>DROGAS ADMINISTRATIVA</td>
                <td>TIEMPOS</td>
            </tr>
            <tr>
                <td>N°</td>
                <td>X</td>
                <td>5</td>
                <td>X</td>
                <td>10</td>
                <td>x</td>
                <td>DURACION ANESTESIA</td>
            </tr>
            <tr>
                <td>1</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>Hs Min</td>
            </tr>
            <tr>
                <td>2</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>DURACION OPERACION</td>
            </tr>
            <tr>
                <td>3</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>H. Min</td>
            </tr>
            <tr>
                <td>4</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
                <td>x</td>
            </tr>
        </table>
    </div>


</body>

</html>

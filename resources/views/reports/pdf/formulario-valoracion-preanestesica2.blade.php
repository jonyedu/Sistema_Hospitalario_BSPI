</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Valoración Preanestesica</title>

    <style>
        .tablePaciente td, th {
            border: 1px solid #000000;
            text-align: center;
            padding: 8px;
        }

        .tablePaciente th{
            background-color:#ccffcc;
            font-size: 6pt;
            color: #000000;
            font-family: Arial;
            font-weight: bold;
        }

        .tablePaciente td {
            font-size: 6pt;
            color: #000000;
            font-family: Arial;
            text-align: center;
           /*  z-index:10;
            top:100px;
            left:6px;
            width:50px;
            height:14px; */
        }

        /* table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        } */
    </style>

    <!-- Icono de la Pestaña -->
    <!-- <link rel="shortcut icon" href="{{ asset('img/icono.png') }}"> -->
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
            layer-background-color: #ccffcc;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-left-style: solid;
            border-left-width: 1;
            border-right-style: solid;
            border-right-width: 1;
            border-top-style: solid;
            border-top-width: 1;
            border-bottom-style: solid;
            border-bottom-width: 1;
        }


        .bordered-all {
            border-top: 1px solid black;
            border-right: 1px solid black;
            border-left: 1px solid black;
            border-bottom: 1px solid black;
        }
    </style>

    <!-- Inicio Cabecera -->
    <div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 0px; left: 3px; width: 102px; height: 61px">
            <img src="img/LogoCompleto.png" border="0" width="102px" height="61px" />
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 0px; left: 1px; width: 744px; height: 15px">
            <table width="744px" border="0" cellpadding="0" cellspacing="0">
                <td align="center">
                    <span class="fc1id4d81rd6h6o-0">Benemerita Sociedad Protectora de la Infancia</span>
                </td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 13px; left: 1px; width: 744px; height: 15px">
            <table width="744px" border="0" cellpadding="0" cellspacing="0">
                <td align="center">
                    <span class="fc1id4d81rd6h6o-0">HOSPITAL "LEON BECERRA"</span>
                </td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 29px; left: 1px; width: 744px; height: 15px">
            <table width="744px" border="0" cellpadding="0" cellspacing="0">
                <td align="center"><span class="fc1id4d81rd6h6o-0">GUAYAQUIL</span></td>
            </table>
        </div>
    </div>
    <!-- Fin Cabecera -->

    <!-- Datos del Paciente -->
    <div class="tablePaciente">
        <table style="font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;">
            <tr>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>PRIMER NOMBRE</th>
                <th>SEGUNDO NOMBRE</th>
                <th>N° HISTORIA CLINICA</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <th>PENSIONADO</th>
                <th>PACIENTE DE HOSPITAL</th>
                <th>SALA GENERAL</th>
                <th>PROGRAMADA</th>
                <th>EDAD</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
        </table>
    </div>

    <div>
        <div>
            <!-- Borde para la seccion de datos del paciente -->
            <div style="z-index:10;top:79px;left:4px;width:741px;height:75px;border-color:#000000;border-style:solid;border-width:1px;">

            </div>
            <!-- Verde para el fondo para la fila APELLIDO PATERNO, APELLIDO MATERNO, etc  -->
            <div style="z-index:10;top:80px;left:6px;width:735px;height:14px;border-color:#ccffcc;border-style:solid;border-width:1px;background-color:#ccffcc;">

            </div>
            <!-- Titulo del Encabezado de APELLIDO PATERNO -->
            <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 80px; left: 8px; width: 133px; height: 16px">
                <table width="133px" border="0" cellpadding="0" cellspacing="0">
                    <th align="center">
                        <span class="fc1id4d81rd6h6o-1">APELLIDO PATERNO</span>
                    </th>
                </table>
            </div>
            <div class="cellTable">
                <table width="133px" border="0" cellpadding="0" cellspacing="0">
                    <td align="center">
                        <span>APELLIDO PATERNO</span>
                    </td>
                </table>
            </div>


        </div>

        <!-- Apellido Materno -->
        <div style="
            z-index: 15;
            top: 80px;
            left: 136px;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-left-width: 1px;
            clip: rect(0px, 1px, 77px, 0px);
            height: 77px;
        ">
            <table width="0px" height="72px">
                <tr>
                    <td>Apellido Materno</td>
                </tr>
            </table>
        </div>
        <!-- Primer Nombre -->
        <div style="
            z-index: 15;
            top: 79px;
            left: 298px;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-left-width: 1px;
            clip: rect(0px, 1px, 76px, 0px);
            height: 76px;
        ">
            <table width="0px" height="71px">
                <tr>
                    <td>Primer Nombre</td>
                </tr>
            </table>
        </div>
        <!-- Segundo Nombre -->
        <div style="
            z-index: 15;
            top: 80px;
            left: 440px;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-left-width: 1px;
            clip: rect(0px, 1px, 76px, 0px);
            height: 76px;
        ">
            <table width="0px" height="71px">
                <tr>
                    <td>Segundo Nombre</td>
                </tr>
            </table>
        </div>
        <!-- N° HISTORIA CLINICA -->
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 80px; left: 625px; width: 121px; height: 15px">
            <table width="121px" border="0" cellpadding="0" cellspacing="0">
                <td align="center">
                    <span class="fc1id4d81rd6h6o-1">N° HISTORIA CLINICA</span>
                </td>
            </table>
        </div>



        <!-- PACIENTE HOSPITAL  -->
        <div style="
            z-index: 15;
            top: 117px;
            left: 136px;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-top-width: 1px;
            width: 166px;
        ">PAciente Hospital
        </div>

        <!-- Cirugia texto amarillo -->
        <div style="
            z-index: 15;
            top: 117px;
            left: 443px;
            border-color: #000000;
            border-style: solid;
            border-width: 0px;
            border-top-width: 1px;
            width: 148px;
        ">Cirugia
        </div>


        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 81px; left: 281px; width: 149px; height: 15px">
            <table width="149px" border="0" cellpadding="0" cellspacing="0">
                <td align="center">
                    <span class="fc1id4d81rd6h6o-1">PRIMER&nbsp;NOMBRE</span>
                </td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 80px; left: 138px; width: 157px; height: 15px">
            <table width="157px" border="0" cellpadding="0" cellspacing="0">
                <td align="center">
                    <span class="fc1id4d81rd6h6o-1">APELLIDO&nbsp;MATERNO</span>
                </td>
            </table>
        </div>

        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 81px; left: 459px; width: 163px; height: 15px">
            <table width="163px" border="0" cellpadding="0" cellspacing="0">
                <td align="center">
                    <span class="fc1id4d81rd6h6o-1">SEGUNDO&nbsp;NOMBRE</span>
                </td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 140px; left: 140px; width: 109px; height: 10px">
            <table width="109px" border="0" cellpadding="0" cellspacing="0">
                <td align="left">
                    <span class="fc1id4d81rd6h6o-1">PACIENTE&nbsp;PRIVADO</span>
                </td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 119px; left: 141px; width: 125px; height: 12px">
            <table width="125px" border="0" cellpadding="0" cellspacing="0">
                <td align="left">
                    <span class="fc1id4d81rd6h6o-1">PACIENTE&nbsp;HOSPITAL&nbsp;</span>
                </td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-1" nowrap="true" style="z-index: 25; top: 117px; left: 5px; width: 131px; height: 19px">
            <table width="126px" border="0" cellpadding="0" cellspacing="0">
                <td align="center">
                    <span class="fc1id4d81rd6h6o-1">PENSIONADO</span>
                </td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 147px; left: 479px; width: 58px; height: 7px">
            <table width="58px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-2">EMERGENCIA</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 122px; left: 504px; width: 48px; height: 8px">
            <table width="48px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-2">PROGRAMADA</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-2" nowrap="true" style="z-index: 25; top: 119px; left: 442px; width: 62px; height: 35px">
            <div style="top: 50%; margin-top: -6px; width: 100%">
                <table width="54px" border="0" cellpadding="0" cellspacing="0">
                    <td align="center"><span class="fc1id4d81rd6h6o-1">CIRUGIA</span></td>
                </table>
            </div>
        </div>
        <div class="ad1id4d81rd6h6o-3" nowrap="true" style="z-index: 25; top: 117px; left: 298px; width: 142px; height: 19px">
            <table width="134px" border="0" cellpadding="0" cellspacing="0">
                <td align="center">
                    <span class="fc1id4d81rd6h6o-1">SALA&nbsp;GENERAL</span>
                </td>
            </table>
        </div>
    </div>

    <!-- <div style="
        z-index: 15;
        top: 513px;
        left: 465px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 268px;
      ">
    </div> -->
    <!-- <div style="
        z-index: 15;
        top: 529px;
        left: 107px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      "></div> -->
    <!-- <div style="
        z-index: 15;
        top: 529px;
        left: 145px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      "></div> -->
    <!-- <div style="
        z-index: 15;
        top: 528px;
        left: 186px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      "></div> -->

    <!-- <div style="
        z-index: 15;
        top: 529px;
        left: 278px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 173px;
      "></div> -->

    <!-- <div style="
        z-index: 15;
        top: 611px;
        left: 384px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 268px;
      "></div> -->
    <!-- <div style="
        z-index: 15;
        top: 664px;
        left: 300px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 62px;
      "></div> -->
    <!-- <div style="
        z-index: 15;
        top: 664px;
        left: 194px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 69px;
      "></div> -->
    <!-- <div style="
        z-index: 15;
        top: 664px;
        left: 111px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 52px;
      "></div> -->
    <!-- <div style="
        z-index: 15;
        top: 664px;
        left: 22px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 67px;
      "></div> -->








    <!-- <div style="
        z-index: 3;
        clip: rect(0px, 748px, 173px, 0px);
        top: 0px;
        left: 0px;
        width: 748px;
        height: 173px;
      "></div> -->


    <!-- Borde para Cardiovasculares -->
    <div style="
        z-index: 10;
        top: 176px;
        left: 3px;
        width: 740px;
        height: 54px;
        border-color: #000000;
        border-style: solid;
        border-width: 1px;
      ">
        <table width="732px" height="46px">
            <tr>
                <td></td>
            </tr>
        </table>
    </div>
    <!-- Borde para Respiratorio -->
    <div style="
        z-index: 10;
        top: 235px;
        left: 3px;
        width: 740px;
        height: 33px;
        border-color: #000000;
        border-style: solid;
        border-width: 1px;
      ">
        <table width="732px" height="25px">
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
    <!-- Borde para Neurológico -->
    <div style="
        z-index: 10;
        top: 273px;
        left: 3px;
        width: 740px;
        height: 53px;
        border-color: #000000;
        border-style: solid;
        border-width: 1px;
      ">
        <table width="732px" height="46px">
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
    <!-- Borde para Nefrológicos -->
    <div style="
        z-index: 10;
        top: 329px;
        left: 3px;
        width: 740px;
        height: 39px;
        border-color: #000000;
        border-style: solid;
        border-width: 1px;
      ">
        <table width="732px" height="31px">
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
    <!-- Borde para Gastrointestinal -->
    <div style="
        z-index: 10;
        top: 371px;
        left: 3px;
        width: 740px;
        height: 39px;
        border-color: #000000;
        border-style: solid;
        border-width: 1px;
      ">
        <table width="732px" height="31px">
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
    <!-- Borde para Toda la Seccion de Antecedente -->
    <div style="
        z-index: 10;
        top: 431px;
        left: 2px;
        width: 740px;
        height: 185px;
        border-color: #000000;
        border-style: solid;
        border-width: 1px;
      ">
        <table width="732px" height="177px">
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
    <!-- Borde para Toda la Seccion de EXAMEN FISICO -->
    <div style="
        z-index: 10;
        top: 640px;
        left: 3px;
        width: 740px;
        height: 294px;
        border-color: #000000;
        border-style: solid;
        border-width: 1px;
      ">
        <table width="732px" height="286px">
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>





    <div class="ad1id4d81rd6h6o-3" nowrap="true" style="z-index: 25; top: 117px; left: 686px; width: 59px; height: 19px">
        <div style="top: 50%; margin-top: -6px; width: 100%">
            <table width="51px" border="0" cellpadding="0" cellspacing="0">
                <td align="center"><span class="fc1id4d81rd6h6o-1">FECHA</span></td>
            </table>
        </div>
    </div>
    <div class="ad1id4d81rd6h6o-3" nowrap="true" style="z-index: 25; top: 117px; left: 587px; width: 43px; height: 19px">
        <div style="top: 50%; margin-top: -6px; width: 100%">
            <table width="35px" border="0" cellpadding="0" cellspacing="0">
                <td align="center"><span class="fc1id4d81rd6h6o-1">EDAD</span></td>
            </table>
        </div>
    </div>
    <div class="ad1id4d81rd6h6o-3" nowrap="true" style="z-index: 25; top: 117px; left: 629px; width: 57px; height: 19px">
        <div style="top: 50%; margin-top: -6px; width: 100%">
            <table width="49px" border="0" cellpadding="0" cellspacing="0">
                <td align="center"><span class="fc1id4d81rd6h6o-1">SEXO</span></td>
            </table>
        </div>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="
        z-index: 25;
        top: 158px;
        left: 4px;
        width: 745px;
        height: 14px;
        clip: rect(0px, 744px, 14px, 0px);
      ">
        <table width="734px" border="0" cellpadding="0" cellspacing="0">
            <td align="center">
                <span class="fc1id4d81rd6h6o-1">REVISIÓN&nbsp;POR&nbsp;SISTEMAS</span>
            </td>
        </table>
    </div>
    <div style="
        z-index: 3;
        clip: rect(0px, 748px, 60px, 0px);
        top: 173px;
        left: 0px;
        width: 748px;
        height: 60px;
      "></div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 179px; left: 7px; width: 125px; height: 12px">
        <table width="125px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Cardiovasculares</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Hipertensión</span>
            </td>
        </table>
    </div>
    <!-- Inicio de Hipertensión -->
    <div>
        <!-- Si está maracado SI, entra por aquí -->
        @if($datosValoracionPreanestesica->quirurgico)
        <!-- Hipertensión  Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 197px; left: 104px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 88px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Hipertensión  No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 197px; left: 143px; width: 20px; height: 13px;">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        <!-- Si está maracado NO, entra por aquí -->
        @else
        <!-- Hipertensión  Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 197px; left: 104px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1"></span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 88px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Hipertensión  No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 197px; left: 143px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin de Hipertensión -->
    <!-- Inicio de Enf. Valvular -->
    <div>
        @if(!$datosValoracionPreanestesica->enfValvular)
        <!-- Enf. Valvular No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 143px; width: 19px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 215px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        <!-- Enf. Valvular Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 104px; width: 20px; height: 13px;">
            <table width="9px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 87px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        @else
        <!-- Enf. Valvular No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 143px; width: 19px; height: 13px;">
            <table width="9px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 215px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        <!-- Enf. Valvular Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 104px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 87px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        @endif
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 215px; left: 7px; width: 75px; height: 12px">
            <table width="75px" border="0" cellpadding="0" cellspacing="0">
                <td align="left">
                    <span class="fc1id4d81rd6h6o-1">Enf.&nbsp;Valvular</span>
                </td>
            </table>
        </div>
    </div>
    <!-- Fin de Enf. Valvular -->
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 197px; left: 576px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Otros</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 198px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Enf.&nbsp;Coronaria</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 215px; left: 198px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Várices</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 197px; left: 401px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Arritmias</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 213px; left: 401px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Ciaudicación</span>
            </td>
        </table>
    </div>
    <!-- Inicio Enf. Coronaria -->
    <div>
        @if($datosValoracionPreanestesica->enfCoronaria)
        <!-- Enf. Coronaria Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 196px; left: 290px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 198px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Enf. Coronaria No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 196px; left: 330px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 196px; left: 290px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 198px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Enf. Coronaria No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 196px; left: 330px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Enf. Coronaria -->

    <!-- Inicio Várices -->
    <div>
        @if(!$datosValoracionPreanestesica->varices)
        <!-- Várices No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 330px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 314px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        <!-- Várices Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 290px; width: 21px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 273px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        @else
        <!-- Várices No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 330px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 314px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        <!-- Várices Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 290px; width: 21px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 273px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Várices -->

    <!-- Inicio Arritmias -->
    <div>
        @if($datosValoracionPreanestesica->arritmias)
        <!-- Arritmias Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 196px; left: 498px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 198px; left: 482px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Arritmias No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 196px; left: 537px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 521px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Arritmias Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 196px; left: 498px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 198px; left: 482px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Arritmias No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 196px; left: 537px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 521px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Arritmias -->

    <!-- Inicio Ciaudicación -->
    <div>
        @if(!$datosValoracionPreanestesica->claudicacion)
        <!-- Ciaudicación No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 537px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 522px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
            <!-- Ciaudicación Si -->
        </div>
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 499px; width: 20px; height: 13px">
            <table width="9px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 481px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        @else
        <!-- Ciaudicación No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 537px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 522px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
            <!-- Ciaudicación Si -->
        </div>
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 212px; left: 499px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 214px; left: 481px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Ciaudicación -->

    <!-- Inicio Otros Cardiovasculares -->
    <div>
        @if($datosValoracionPreanestesica->otrosCardiovascular)
        <!-- Otros Cardiovasculares Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 197px; left: 671px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 655px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Otros Cardiovasculares No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 197px; left: 710px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 694px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 197px; left: 671px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 655px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Otros Cardiovasculares No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 197px; left: 710px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 199px; left: 694px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Otros Cardiovasculares -->
    <div style="
        z-index: 3;
        clip: rect(0px, 748px, 39px, 0px);
        top: 232px;
        left: 0px;
        width: 748px;
        height: 39px;
      "></div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 239px; left: 5px; width: 125px; height: 12px">
        <table width="125px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Respiratorio</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 5px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">EPOC</span></td>
        </table>
    </div>
    <!-- Inicio EPOC -->
    <div>
        @if($datosValoracionPreanestesica->epoc)
        <!-- EPOC Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 102px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 86px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- EPOC No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 251px; left: 142px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 253px; left: 128px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- EPOC Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 102px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 86px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- EPOC No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 251px; left: 142px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 253px; left: 128px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin EPOC -->

    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 250px; left: 574px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Otros</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 196px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">ASMA</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 250px; left: 399px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">TBC</span></td>
        </table>
    </div>
    <!-- Inicio de Asma -->
    <div>
        @if($datosValoracionPreanestesica->asma)
        <!-- Asma Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 289px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 275px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Asma No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 330px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 314px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Asma Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 289px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 275px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Asma No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 330px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 314px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin de Asma -->

    <!-- Inicio TBC -->
    <div>
        @if($datosValoracionPreanestesica->tbc)
        <!-- TBC Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 249px; left: 499px; width: 20px; height: 13px;">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 480px; width: 15px; height: 12px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- TBC No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 538px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 522px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- TBC Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 249px; left: 499px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 480px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- TBC No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 538px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 522px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin TBC -->

    <!-- Inicio Otros Respiratorio -->
    <div>
        @if($datosValoracionPreanestesica->otrosRespiratorio)
        <!-- Otros Respiratorio Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 669px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 653px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Otros Respiratorio No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 708px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 253px; left: 692px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Otros Respiratorio Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 669px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 252px; left: 653px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Otros Respiratorio No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 250px; left: 708px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 253px; left: 692px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Otros Respiratorio -->

    <div style="
        z-index: 3;
        clip: rect(0px, 748px, 57px, 0px);
        top: 272px;
        left: 0px;
        width: 748px;
        height: 57px;
      "></div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 276px; left: 6px; width: 125px; height: 12px">
        <table width="125px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Neurológico</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 6px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Convulsiones</span>
            </td>
        </table>
    </div>
    <!-- Inicio Convulsiones -->
    <div>
        <!-- Convulsiones Si -->
        @if($datosValoracionPreanestesica->convulsiones)
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 103px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 87px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Convulsiones No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 142px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 126px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 103px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 87px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Convulsiones No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 142px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 126px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Convulsiones -->

    <!-- Inicio Otros Neurológico -->
    <div>
        @if(!$datosValoracionPreanestesica->otrosNeurologico)
        <!-- Otros Neurológico No  -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 310px; left: 142px; width: 21px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 312px; left: 126px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        <!-- Otros Neurológico Si  -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 310px; left: 102px; width: 21px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 311px; left: 86px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        @else
        <!-- Otros Neurológico No  -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 310px; left: 142px; width: 21px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 312px; left: 126px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        <!-- Otros Neurológico Si  -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 310px; left: 102px; width: 21px; height: 13px;">
            <table align="center">
                <td align="left"><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 311px; left: 86px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Otros Neurológico -->

    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 312px; left: 6px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Otros</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 294px; left: 575px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Enf.&nbsp;Mental</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 197px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">ECV</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 294px; left: 400px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Meningitis</span></td>
        </table>
    </div>

    <!-- Inicio ECV -->
    <div>
        @if($datosValoracionPreanestesica->enfValvular)
        <!-- ECV Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 288px; width: 21px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 295px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- ECV No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 329px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- ECV Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 288px; width: 21px; height: 13px">
            <table width="11px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 295px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- ECV No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 329px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin ECV -->

    <!-- Inicio Meningitis -->
    <div>
        @if($datosValoracionPreanestesica->meningitis)
        <!-- Meningitis Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 499px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 295px; left: 481px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Meningitis No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 536px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 520px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Meningitis Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 499px; width: 20px; height: 13px">
            <table width="9px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 295px; left: 481px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Meningitis No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 536px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 520px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Meningitis -->

    <!-- Inicio Enf. Mental -->
    <div>
        @if($datosValoracionPreanestesica->enfMental)
        <!-- Enf. Mental Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 670px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 654px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Enf. Mental No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 709px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 693px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Enf. Mental Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 670px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 654px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Enf. Mental No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 294px; left: 709px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 296px; left: 693px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Enf. Mental -->

    <div style="
        z-index: 3;
        clip: rect(0px, 748px, 42px, 0px);
        top: 328px;
        left: 0px;
        width: 748px;
        height: 42px;
      "></div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 333px; left: 7px; width: 125px; height: 12px">
        <table width="125px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Nefrológicos</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">IRA</span></td>
        </table>
    </div>
    <!-- Inicio IRA -->
    <div>
        @if($datosValoracionPreanestesica->ira)
        <!-- IRA Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 351px; left: 104px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 87px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- IRA No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 351px; left: 142px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 126px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- IRA Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 351px; left: 104px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 87px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- IRA No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 351px; left: 142px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 126px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin IRA -->

    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 351px; left: 576px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Otros</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 345px; left: 198px; width: 75px; height: 21px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Infección</span></td>
        </table>
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Urinaria</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 351px; left: 401px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">IRC</span></td>
        </table>
    </div>

    <!-- Inicio Infección Urinaria -->
    <div>
        @if($datosValoracionPreanestesica->infeccionUnitaria)
        <!-- Infección Urinaria Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 350px; left: 289px; width: 21px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 352px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Infección Urinaria No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 350px; left: 330px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Infección Urinaria Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 350px; left: 289px; width: 21px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 352px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Infección Urinaria No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 350px; left: 330px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1"></span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Infección Urinaria -->

    <!-- Inicio IRC -->
    <div>
        @if($datosValoracionPreanestesica->irc)
        <!-- IRC Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 350px; left: 500px; width: 19px; height: 13px;">
            <table align="center">
                <t><span class="fc1id4d81rd6h6o-1">X</span></t>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 352px; left: 482px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- IRC No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 350px; left: 537px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 521px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- IRC Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 350px; left: 500px; width: 19px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 352px; left: 482px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- IRC No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 350px; left: 537px; width: 20px; height: 13px;">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 521px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin IRC -->

    <!-- Inicio Otros Nefrológicos -->
    <div>
        @if($datosValoracionPreanestesica->otrosNeurologico)
        <!-- Otros Nefrológicos Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 351px; left: 671px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 655px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Otros Nefrológicos No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 351px; left: 710px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 694px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Otros Nefrológicos Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 351px; left: 671px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 655px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Otros Nefrológicos No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 351px; left: 710px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 353px; left: 694px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Otros Nefrológicos -->
    <div style="
        z-index: 3;
        clip: rect(0px, 748px, 41px, 0px);
        top: 370px;
        left: 0px;
        width: 748px;
        height: 41px;
      "></div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 374px; left: 7px; width: 125px; height: 12px">
        <table width="125px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Gastrointestinal</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Ulcera</span></td>
        </table>
    </div>
    <!-- Inicio Ulcera -->
    <div>
        <!-- Ulcera Si -->
        @if($datosValoracionPreanestesica->ulcera)
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 104px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 87px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Ulcera No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 142px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 126px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 104px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 87px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Ulcera No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 142px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 126px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Ulcera -->
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 387px; left: 198px; width: 75px; height: 21px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Estomago</span></td>
        </table>
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">lleno</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 392px; left: 401px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Otros</span></td>
        </table>
    </div>

    <!-- Inicio Estomago lleno  -->
    <div>
        @if($datosValoracionPreanestesica->estomagoLleno)
        <!-- Estomago lleno Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 289px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 393px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Estomago lleno No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 329px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Estomago lleno Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 289px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 393px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Estomago lleno No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 329px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Estomago lleno  -->

    <!-- Inicio Otros Gastrointestinal -->
    <div>
        @if($datosValoracionPreanestesica->otrosGastrointestinal)
        <!-- Otros Gastrointestinal Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 499px; width: 19px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 393px; left: 482px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Otros Gastrointestinal No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 537px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 521px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Otros Gastrointestinal Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 499px; width: 19px; height: 13px">
            <table width="9px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 393px; left: 482px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Otros Gastrointestinal No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 392px; left: 537px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 394px; left: 521px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Otros Gastrointestinal -->
    <div style="
        z-index: 3;
        clip: rect(0px, 748px, 208px, 0px);
        top: 412px;
        left: 0px;
        width: 748px;
        height: 208px;
      "></div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 414px; left: 2px; width: 743px; height: 15px">
        <table width="732px" border="0" cellpadding="0" cellspacing="0">
            <td align="center">
                <span class="fc1id4d81rd6h6o-1">ANTECEDENTES</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 454px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Quirúrgico</span></td>
        </table>
    </div>
    <!-- Inicio Quirúrgico -->
    <div>
        @if($datosValoracionPreanestesica->antecedente->quirurgico)
        <!-- Quirúrgico Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 452px; left: 102px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 454px; left: 88px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Quirúrgico No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 452px; left: 142px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 454px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Quirúrgico Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 452px; left: 102px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 454px; left: 88px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Quirúrgico No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 452px; left: 142px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 454px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Quirúrgico -->
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 470px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Toxicoalérgicos::</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 454px; left: 198px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Traumáticos</span></td>
        </table>
    </div>
    <!-- Inicio Traumáticos -->
    <div>
        @if($datosValoracionPreanestesica->antecedente->quirurgico)
        <!-- Traumáticos Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 451px; left: 289px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 453px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Traumáticos No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 451px; left: 330px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 454px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Traumáticos Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 451px; left: 289px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 453px; left: 274px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Traumáticos No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 451px; left: 330px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 454px; left: 313px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Traumáticos -->

    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 451px; left: 386px; width: 146px; height: 13px">
        <table width="136px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">{{$datosValoracionPreanestesica->antecedente->descripcionQuirurgico}}</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 451px; left: 537px; width: 193px; height: 13px">
        <table width="183px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">{{$datosValoracionPreanestesica->antecedente->descripcionTraumatico}}</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 484px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Alergias</span></td>
        </table>
    </div>

    <!-- Inicio Alergias -->
    <div>
        @if($datosValoracionPreanestesica->antecedente->alergia)
        <!-- Alergias Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 482px; left: 102px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 484px; left: 88px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Alergias No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 482px; left: 142px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 484px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Alergias Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 482px; left: 102px; width: 20px; height: 13px">
            <table width="10px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 484px; left: 88px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Alergias No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 482px; left: 142px; width: 20px; height: 13px;">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 484px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Alergias -->

    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 505px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Tóxicos:&nbsp;Tabaco</span>
            </td>
        </table>
    </div>

    <!-- Inicio Tabaco -->
    <div>
        @if($datosValoracionPreanestesica->antecedente->tabaco)
        <!-- Tabaco Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 503px; left: 102px; width: 20px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 505px; left: 88px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Tabaco No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 503px; left: 142px; width: 20px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 505px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @else
        <!-- Tabaco Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 503px; left: 102px; width: 20px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 505px; left: 88px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Si</span></td>
            </table>
        </div>
        <!-- Tabaco No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 503px; left: 142px; width: 20px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 505px; left: 127px; width: 15px; height: 12px">
            <table width="15px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Tabaco -->

    <!-- Inicio Cocaina -->
    <div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 505px; left: 198px; width: 75px; height: 12px">
            <table width="75px" border="0" cellpadding="0" cellspacing="0">
                <td align="left"><span class="fc1id4d81rd6h6o-1">Cocaina</span></td>
            </table>
        </div>
        @if($datosValoracionPreanestesica->antecedente->cocaina)
        <!-- Cocaina Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 502px; left: 247px; width: 20px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        @else
        <!-- Cocaina No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 502px; left: 247px; width: 20px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1"></span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Cocaina -->

    <!-- Inicio Marihuana -->
    <div>
        <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 505px; left: 276px; width: 51px; height: 12px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">Marihuana</span></td>
            </table>
        </div>
        @if(!$datosValoracionPreanestesica->antecedente->marihuana)
        <!-- Marihuana Si -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 502px; left: 330px; width: 20px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1">X</span></td>
            </table>
        </div>
        @else
        <!-- Marihuana No -->
        <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 502px; left: 330px; width: 20px; height: 13px">
            <table align="center">
                <td><span class="fc1id4d81rd6h6o-1"></span></td>
            </table>
        </div>
        @endif
    </div>
    <!-- Fin Marihuana -->

    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 521px; left: 98px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">G</span></td>
        </table>
    </div>





    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 505px; left: 389px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Otros&nbsp;cuál?</span>
            </td>
        </table>
    </div>

    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 522px; left: 8px; width: 85px; height: 12px">
        <table width="85px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Gineco-obstétricos</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 521px; left: 136px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">P</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 521px; left: 177px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">A</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 522px; left: 221px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">C</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 522px; left: 260px; width: 24px; height: 12px">
        <table width="24px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">FUR</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 541px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Familiares&nbsp;si</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 538px; left: 82px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 541px; left: 148px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Otros&nbsp;cuáles?</span>
            </td>
        </table>
    </div>
    <!-- Otros Familiares Texto-->
    <div style="
        z-index: 15;
        top: 529px;
        left: 230px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- Otros Familiares Borde -->
    <div style="
        z-index: 15;
        top: 549px;
        left: 224px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 509px;
      ">
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 538px; left: 120px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 540px; left: 105px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 570px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Esteroides</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 568px; left: 82px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 586px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Antibióticos</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 556px; left: 8px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Drogas:</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 602px; left: 7px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">ACOS</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 584px; left: 82px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 601px; left: 82px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 570px; left: 123px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">AINES</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 568px; left: 198px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 586px; left: 123px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-3">Betabloqueadores</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 602px; left: 123px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-3">Anticolinesterásico</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 584px; left: 198px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-3">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 601px; left: 198px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-3">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 570px; left: 232px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">IECA</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 568px; left: 307px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 586px; left: 232px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Diuréticos</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 602px; left: 232px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Otros</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 584px; left: 307px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 572px; left: 351px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Inotrópicos</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 570px; left: 426px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 588px; left: 351px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Anticoagulantes</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 586px; left: 426px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 571px; left: 493px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">AntiH2</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 569px; left: 568px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 587px; left: 493px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-3">Calcioantagonista</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 585px; left: 568px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-3">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 570px; left: 606px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">ASA</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 568px; left: 681px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 584px; left: 681px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 602px; left: 308px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Otros&nbsp;cuál?</span>
            </td>
        </table>
    </div>
    <div style="
        z-index: 3;
        clip: rect(0px, 748px, 320px, 0px);
        top: 619px;
        left: 0px;
        width: 748px;
        height: 320px;
      "></div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 620px; left: 1px; width: 743px; height: 15px">
        <table width="732px" border="0" cellpadding="0" cellspacing="0">
            <td align="center">
                <span class="fc1id4d81rd6h6o-1">EXAMEN&nbsp;FISICO</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 656px; left: 267px; width: 32px; height: 12px">
        <table width="32px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">TALLA</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 656px; left: 165px; width: 27px; height: 12px">
        <table width="27px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">PESO</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 656px; left: 96px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">PC</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 656px; left: 8px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">PA</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 656px; left: 368px; width: 85px; height: 12px">
        <table width="85px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">ESTADO&nbsp;GENERAL</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 655px; left: 616px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">M</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 655px; left: 575px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">R</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 655px; left: 537px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">B</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 675px; left: 615px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">M</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 675px; left: 574px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">R</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 675px; left: 536px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">B</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 678px; left: 107px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 675px; left: 122px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 675px; left: 84px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 678px; left: 6px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Cuello:&nbsp;Corto&nbsp;Si</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 678px; left: 175px; width: 22px; height: 12px">
        <table width="22px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">DMT</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 678px; left: 334px; width: 22px; height: 12px">
        <table width="22px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">cm</span></td>
        </table>
    </div>
    <!-- M Movilidad Coello Texto -->
    <div style="
        z-index: 15;
        top: 662px;
        left: 625px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- B Movilidad Coello Texto -->
    <div style="
        z-index: 15;
        top: 663px;
        left: 546px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- R Movilidad Coello Texto -->
    <div style="
        z-index: 15;
        top: 663px;
        left: 584px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- M Movilidad Coello Borde -->
    <div style="
        z-index: 15;
        top: 682px;
        left: 624px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- B Movilidad Coello Borde -->
    <div style="
        z-index: 15;
        top: 683px;
        left: 545px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- R Movilidad Coello Borde -->
    <div style="
        z-index: 15;
        top: 683px;
        left: 583px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 696px; left: 6px; width: 144px; height: 12px">
        <table width="144px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">ESCALA&nbsp;DE&nbsp;MALLAMPATI</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 712px; left: 7px; width: 366px; height: 12px">
        <table width="366px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Clases&nbsp;1:&nbsp;total&nbsp;visilidad&nbsp;de&nbsp;las&nbsp;amígdalas,&nbsp;úvula&nbsp;y&nbsp;paladar&nbsp;blando</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 727px; left: 7px; width: 396px; height: 12px">
        <table width="396px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Clases&nbsp;2:&nbsp;visilidad&nbsp;del&nbsp;paladar&nbsp;duro&nbsp;y&nbsp;blando,&nbsp;porción&nbsp;superior&nbsp;de&nbsp;las&nbsp;amígdalas&nbsp;y&nbsp;y&nbsp;úvula</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 741px; left: 7px; width: 366px; height: 12px">
        <table width="366px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Clases&nbsp;3:&nbsp;son&nbsp;visibles&nbsp;el&nbsp;paladar&nbsp;duro&nbsp;y&nbsp;blando&nbsp;y&nbsp;la&nbsp;base&nbsp;de&nbsp;la&nbsp;úvula</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 756px; left: 6px; width: 366px; height: 12px">
        <table width="366px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Clases&nbsp;4:&nbsp;solo&nbsp;es&nbsp;visible&nbsp;el&nbsp;paladar&nbsp;duro</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 771px; left: 173px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 792px; left: 123px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">cm</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 772px; left: 132px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 772px; left: 7px; width: 120px; height: 12px">
        <table width="120px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Ingurgilación&nbsp;yugular&nbsp;&nbsp;&nbsp;Si</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 709px; left: 498px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 723px; left: 498px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 738px; left: 498px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 752px; left: 498px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 791px; left: 7px; width: 94px; height: 12px">
        <table width="94px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Boca:&nbsp;Apertura&nbsp;Oral</span>
            </td>
        </table>
    </div>
    <!-- cm Boca Apertura Oral Borde -->
    <div style="
        z-index: 15;
        top: 800px;
        left: 143px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- B Dentadura Borde -->
    <div style="
        z-index: 15;
        top: 800px;
        left: 241px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- R Dentadura Borde -->
    <div style="
        z-index: 15;
        top: 801px;
        left: 307px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <!-- M Dentadura Borde -->
    <div style="
        z-index: 15;
        top: 800px;
        left: 348px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 20px;
      ">
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 791px; left: 185px; width: 55px; height: 12px">
        <table width="55px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Dentadura&nbsp;B</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 793px; left: 339px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">M</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 793px; left: 298px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">R</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 792px; left: 512px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 789px; left: 527px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 789px; left: 489px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 792px; left: 411px; width: 75px; height: 12px">
        <table width="75px" border="0" cellpadding="0" cellspacing="0">
            <td align="center">
                <span class="fc1id4d81rd6h6o-1">Edéntulo&nbsp;Si</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 792px; left: 688px; width: 15px; height: 12px">
        <table width="15px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">No</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 789px; left: 703px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-4" nowrap="true" style="z-index: 25; top: 789px; left: 665px; width: 20px; height: 13px">
        <table width="10px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">&nbsp;</span></td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 792px; left: 605px; width: 54px; height: 12px">
        <table width="54px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Prótesis&nbsp;Si</span>
            </td>
        </table>
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 837px; left: 9px; width: 79px; height: 12px">
        <table width="79px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Cardiovascular</span>
            </td>
        </table>
    </div>
    <!-- Cardiovascular Borde -->
    <div style="
        z-index: 15;
        top: 846px;
        left: 90px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 647px;
      ">
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 861px; left: 8px; width: 79px; height: 12px">
        <table width="79px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Respiratorio</span>
            </td>
        </table>
    </div>
    <!-- Respiratorio Borde -->
    <div style="
        z-index: 15;
        top: 870px;
        left: 88px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 647px;
      ">
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 881px; left: 7px; width: 79px; height: 12px">
        <table width="79px" border="0" cellpadding="0" cellspacing="0">
            <td align="left"><span class="fc1id4d81rd6h6o-1">Abdomen</span></td>
        </table>
    </div>
    <!-- Abdomen Borde -->
    <div style="
        z-index: 15;
        top: 890px;
        left: 87px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 647px;
      ">
    </div>
    <div class="ad1id4d81rd6h6o-0" nowrap="true" style="z-index: 25; top: 901px; left: 7px; width: 79px; height: 12px">
        <table width="79px" border="0" cellpadding="0" cellspacing="0">
            <td align="left">
                <span class="fc1id4d81rd6h6o-1">Extremidades</span>
            </td>
        </table>
    </div>
    <!-- Extremidades Borde -->
    <div style="
        z-index: 15;
        top: 910px;
        left: 87px;
        border-color: #000000;
        border-style: solid;
        border-width: 0px;
        border-top-width: 1px;
        width: 647px;
      ">
    </div>

    <!-- <div style="
        z-index: 3;
        clip: rect(0px, 748px, 40px, 0px);
        top: 939px;
        left: 0px;
        width: 748px;
        height: 40px;
      "></div> -->
    <!-- <div style="
        z-index: 3;
        clip: rect(0px, 748px, 40px, 0px);
        top: 1050px;
        left: 0px;
        width: 748px;
        height: 40px;
      "></div> -->
    <!-- <div id="pageNavigator" style="
        top: 1090px;
        left: 0px;
        font-style: italic;
        font-weight: 100;
        font-size: smaller;
      ">
        <hr /xzczxczx>
    </div> -->
    <!-- Plantilla General de los JS -->
</body>

</html>

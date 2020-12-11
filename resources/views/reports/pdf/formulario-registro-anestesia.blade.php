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

        .tdrecord {
           height:2%;
        }

        .tableStyleAllImg {
            margin: 0%;
            width: 100%;
            height: 30%;
            
            

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
    <link rel="shortcut icon" href="{{ public_path('img/icono.png') }}">
</head>

<body>

    <!-- Inicio Cabecera -->
    <div class="cabezaAll" style="top:0px;">
        <table class="tableStyleAll cabeceraPrin" width="100%">
            <tr>
                <td align="left" width="40px" ROWSPAN=4><img src="{{ public_path('img/LogoCompleto.png') }}" borde="0"
                        width="102px" height="50px" /></td>
                <td align="center"><span class="cabecera">Benemerita Sociedad Protectora de la Infancia</span></td>
            </tr>
            <tr>
                <td align="center"><span class="cabecera">HOSPITAL "LEON BECERRA"</span></td>
            </tr>
            <tr>
                <td align="center"><span class="cabecera">GUAYAQUIL</span></td>

            </tr>
            <tr>
                <td align="center"><span class="cabecera">REGISTRO DE ANESTESIA</span></td>

            </tr>

        </table>
    </div>
    <!-- Fin Cabecera -->
    @if (isset($datosValoracionPreanestesica->graficoCirugia)> 0 )
        
    @else
        
    @endif
    <div class="tablePaciente" style="top:65px;">
        <table class="tableStyleAll">
            <tr>
                <th  >NOMBRES DEL PACIENTE &nbsp;


                </th>
                <th>N° HISTORIA CLINICA</th>
            </tr>

            <tr>
           
                <td >
                    <b> {{ $datosPaciente->paciente }}</b>
                   
                </td>
              
                <td>
                    <b> {{ $datosPaciente->historia_clinica }}</b>
                </td>

            </tr>


        </table>
        <table class="tableStyleAll">
            <tr>
                <th>FECHA</th>
                <th>EDAD</th>
                <th>SEXO</th>
                <th>ESTATURA</th>
                <th>PESO</th>
                <th>OCUPACION ACTUAL</th>
                <th>SERVICIO</th>
                <th>SALA</th>
                <th>CAMA</th>
            </tr>
            <tr>
                <td  >  <b> {{ $datosPaciente->fecha }}</b> </td>
                <td>  <b> {{ $datosPaciente->edad }}</b></td>
                <td><b>{{ $datosPaciente->sexo }}</b></td>
                <td><b>{{ strval ($datosPaciente->estatura) }}</b></td>
                <td><b>{{ $datosPaciente->peso }}</b></td>

                <td><b>{{ $datosPaciente->ocupacion_actual }}</b></td>
                <td><b>{{ $datosPaciente->servicio }}</b></td>
                <td><b>{{ $datosPaciente->sala }}</b></td>
                <td><b>{{ $datosPaciente->cama }}</b></td>

            </tr>

        </table>

           
        <table class="tableStyleAll">
            <tr>
                <th style="width:20%">DIAGNOSTICO PREOPERATORIO</th>
                <th style="width:20%">DIAGNOSTICO POSTOPERATORIO</th>
                <th style="width:60%">OPERACION PROPUESTA</th>

            </tr>
            @if ( isset($datosPaciente->DiagnosticoPost['descripcion']))
            @if ($datosPaciente->DiagnosticoPost['descripcion'] == NULL)
            <td  ></td>
            @else
            <td  ><b>{{ $datosPaciente->DiagnosticoPost['descripcion'] }}</b>  </td>
            @endif
            
            @else
            <td  ></td>
            @endif

            @if ( isset($datosPaciente->DiagnosticoPre['descripcion']))
            @if ($datosPaciente->DiagnosticoPre['descripcion'] == NULL)
            <td  > </td>
            @else
            <td  ><b> {{ $datosPaciente->DiagnosticoPre['descripcion'] }} </b></td>
            @endif
            
            @else
            <td  ></td>
            @endif

 
           
            <td  ><b> {{$datosPaciente->operacion_propuesta }}</b></td>
            


            </tr>

        </table>
        <table class="tableStyleAll">
            <tr>
                <th style="width:20%">CIRUJANO</th>
                <th style="width:20%">AYUDANTES</th>
                <th style="width:60%">OPERACION REALIZADA</th>

            </tr>

            @if ( isset($datosPaciente->cirujano->nombres))
            @if ($datosPaciente->cirujano->nombres == NULL)
            <td  > </td>
            @else
            <td  ><b> {{ $datosPaciente->cirujano->nombres.' '.$datosPaciente->cirujano->apellidos }}   </b></td>
            @endif
            
            @else
            @endif
            @if ( isset($datosPaciente->Ayudante->nombres))
            @if ($datosPaciente->Ayudante->nombres == NULL)
            <td  > </td>
            @else
            <td  ><b> {{ $datosPaciente->Ayudante->nombres.' '.$datosPaciente->Ayudante->apellidos }}   </b></td>
            @endif
            
            @else
            @endif
            @if ( isset($Tarifario->descripcion))
            @if ($Tarifario->descripcion == NULL)
            <td  > </td>
            @else
            <td  ><b> {{$Tarifario->descripcion  }}   </b></td>
            @endif
            
            @else
            @endif


            </tr>

        </table>
        <table class="tableStyleAll">
            <tr>
                <th style="width:20%">ANESTESIOLOGO</th>
                <th style="width:20%">AYUDANTES</th>
                <th style="width:60%">INSTRUMENTISTA</th>

            </tr>

            @if ( isset($datosPaciente->Anestesiologo->nombres))
            @if ($datosPaciente->Anestesiologo->nombres == NULL)
            <td  > </td>
            @else
            <td  ><b> {{ $datosPaciente->Anestesiologo->nombres.' '.$datosPaciente->Anestesiologo->apellidos }}   </b></td>
            @endif
            
            @else
            @endif
            @if ( isset($datosPaciente->Ayudante2->nombres))
            @if ($datosPaciente->Ayudante2->nombres == NULL)
            <td  > </td>
            @else
            <td  ><b> {{ $datosPaciente->Ayudante2->nombres.' '.$datosPaciente->Ayudante2->apellidos }}   </b></td>
            @endif
            
            @else
            @endif
            @if ( isset($datosPaciente->Instrumentrista->nombres))
            @if ($datosPaciente->Instrumentrista->nombres == NULL)
            <td  > </td>
            @else
            <td  ><b> {{ $datosPaciente->Instrumentrista->nombres.' '.$datosPaciente->Instrumentrista->apellidos }}   </b></td>
            @endif
            
            @else
            @endif


            </tr>

        </table>
 
        <table class="tableStyleAllImg">
            <tr>
                <th style= background-color:white; ">
                @if ( isset($datosValoracionPreanestesica->graficoCirugia))
                    <img src="data:image/jpeg;base64,'{{ $datosValoracionPreanestesica->graficoCirugia->GRAFICAS }}'" margin="0px" width="690px" height="370px"> 
                @else
                no hay imagen ;( 
                     {{-- <img src="data:image/jpeg;base64,'{{ $datosValoracionPreanestesica->graficoCirugia->GRAFICAS }}'" border="0" width="690px" height="360px"> --}}
                @endif
                   
                    {{-- <img src="{{ public_path('img/logoreport1.png') }}" border="0" width="690px" height="250px"> --}}
                   
                </th>
            </tr>


        </table>
        {{-- inicio de drogas administradas --}}

        <table class="tableStyleAll">
            <tr>
                <th style="width:81.5%">DROGAS ADMINISTRADAS
                </th>
                <th>TIEMPOS
                </th>
            </tr>
        </table>
 
         
         {{-- @if ( isset($datosValoracionPreanestesica->drogaAdministradaRpt)> 0) --}}
          

        <table class="tableStyleAll">
            <tr>

                <th style="width:2%;background-color:white">N°
                </th>
                <th style="width:25%;background-color:white">TIPO
                </th>
                <th style="width:2%;background-color:white">4
                </th>
                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[3]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[3]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[3]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif
               
               
                <th style="width:2%;background-color:white">8
                </th>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[7]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[7]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[7]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif



                 
                <th style="width:2%;background-color:white">12
                </th>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[11]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[11]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[11]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif
                 
                
                <th style="width:25%;background-color:white">DURACION ANESTESIA
                </th>
            </tr>

            <tr>
                <td style="width:2%">1
                </td>
                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[0]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[0]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[0]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif

 
                
                <td style="width:2%">5
                </td>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[4]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[4]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[4]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif

                 
                
                <td style="width:2%">9
                </td>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[8]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[8]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[8]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif

 
                
                <td style="width:2%">13
                </td>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[12]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[12]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[12]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif
                
                
                <td style="width:25%">12:00: Hs Min
                </td>
            </tr>

            <tr>
                <td style="width:2%">2
                </td>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[1]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[1]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[1]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif
 
                
                <td style="width:2%">6
                </td>
                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[5]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[5]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[5]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif

 
                
                <td style="width:2%">10
                </td>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[9]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[9]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[9]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif


 
                
                <td style="width:2%">14
                </td>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[13]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[13]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[13]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif
                
                
                
                <td style="width:25%">12:00: Hs Min
                </td>
            </tr>
            <tr>
                <td style="width:2%">3
                </td>
                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[2]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[2]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[2]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif


 
                
                <td style="width:2%">7
                </td>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[6]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[6]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[6]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif


 
                
                <td style="width:2%">11
                </td>

                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[10]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[10]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[10]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif



                
                
                <td style="width:2%">
                    15
                </td>
                @if (isset( $datosValoracionPreanestesica->drogaAdministradaRpt[14]->descripcion))
                @if ( $datosValoracionPreanestesica->drogaAdministradaRpt[14]->descripcion==NULL)
                <th style="width:25%;background-color:white"> 
                </th>
                @else
                <th style="width:25%;background-color:white">{{ $datosValoracionPreanestesica->drogaAdministradaRpt[14]->descripcion }}
                </th>
                @endif
                @else
                <th style="width:25%;background-color:white"> 
                @endif
                {{-- <td style="width:25%">
                </td> --}}
                <td style="width:25%">
                </td>
            </tr>
        </table>
        {{-- fin de drgas administradas y tiempos --}}
        <table class="tableStyleAll">
            <tr>
                <th style="width:35.2%">
                    TECNICAS
                </th>
                <th style="width:28%">
                    INFUSIONES
                </th>
                <th style="width:35.7%">
                    COMPLICACIONES RESPIRATORIAS
                </th>
            </tr>
        </table>
        {{-- inicio de tecnicas --}}
        <table class="tableStyleAll">
            <tr>
                <th style="background-color: white;width: 5.4%;border-bottom:none">
                    GENERAL
                </th>

                @if ( $datosValoracionPreanestesica->general==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif

               

                <th style="background-color: white;width: 5.2%">
                    CONDUCTIVA
                </th>
                @if ( $datosValoracionPreanestesica->conductiva==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <th style="background-color: white;width: 1%">
                    D
                </th>
                <th style="background-color: white;width: 7%">
                    DEXTROSAS
                </th>
                @if ( $datosValoracionPreanestesica->regitroInfunsionRpt[0]->valor ==null)
                <th style="background-color: white;width: 2%">
                    0CC
                </th>
                @else
                <th style="background-color: white;width: 2%">
                   {{$datosValoracionPreanestesica->regitroInfunsionRpt[0]->valor }}&nbsp;CC
                </th>
                @endif
               
                <th style="background-color: white;width: 5.4%">
                    HIPOTENSION
                </th>
                @if ( $datosValoracionPreanestesica->hipotension==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
               
                <th style="background-color: white;width: 5.4%">
                    ARRITMIAS
                </th>
                @if ( $datosValoracionPreanestesica->arritmias==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
            </tr>
            <tr>
                <td style="background-color: white;width: 5.4%;border-bottom:none">
                    SISTEMA ABIERTO
                </td>


                @if ( $datosValoracionPreanestesica->sistem_abierto==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif

                <td style="background-color: white;width: 5.2%">
                    ASEPSIA DE LA PIEL
                </td>
                @if ( $datosValoracionPreanestesica->asepsia_piel==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 1%">
                    R
                </td>
                <td style="background-color: white;width: 7%">
                    RINGER
                </td>
                @if ( $datosValoracionPreanestesica->regitroInfunsionRpt[1]->valor ==null)
                <th style="background-color: white;width: 2%">
                    0CC
                </th>
                @else
                <th style="background-color: white;width: 2%">
                   {{$datosValoracionPreanestesica->regitroInfunsionRpt[1]->valor }}&nbsp;CC
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">
                    DEPRESION RESPIRATORIA
                </td>
                @if ( $datosValoracionPreanestesica->depresion_respiratoria==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">
                    PERFORACION DURAMADRE
                </td>
                @if ( $datosValoracionPreanestesica->perforacion_duramadre==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
            </tr>
            <tr>
                <td style="background-color: white;width: 5.4%;border-bottom:none;border-top:none">
                    SISTEMA CERRADO
                </td>


                @if ( $datosValoracionPreanestesica->sistem_cerrado==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif

                <td style="background-color: white;width: 5.2%">
                    CON
                </td>
                @if ( $datosValoracionPreanestesica->con==null)
                <th style="background-color: white;width: 1%;">
                     
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                   {{ $datosValoracionPreanestesica->con}}                
                </th>
                @endif
                <td style="background-color: white;width: 1%">
                    S
                </td>
                <td style="background-color: white;width: 7%">
                    SANGRE
                </td>
                @if ( $datosValoracionPreanestesica->regitroInfunsionRpt[2]->valor ==null)
                <th style="background-color: white;width: 2%">
                    0CC
                </th>
                @else
                <th style="background-color: white;width: 2%">
                   {{$datosValoracionPreanestesica->regitroInfunsionRpt[2]->valor }}&nbsp;CC
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">
                    DIFICULTAD INTUBACION
                </td>
                @if ( $datosValoracionPreanestesica->dificultad_intubacion==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">
                    NAUSEAS-VOMITOS
                </td>
                @if ( $datosValoracionPreanestesica->nauses_vomitos==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
            </tr>
            <tr>
                <td style="background-color: white;width: 5.4%;border-bottom:none;border-top:none">
                    SISTEMA SEMI-CERRADO
                </td>



                @if ( $datosValoracionPreanestesica->sistem_semi_cerr==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif

                <td style="background-color: white;width: 5.2%">
                    HABON
                </td>
                @if ( $datosValoracionPreanestesica->habon==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 1%">
                    E
                </td>
                <td style="background-color: white;width: 7%">
                    EXPANSORES
                </td>
                @if ( $datosValoracionPreanestesica->regitroInfunsionRpt[3]->valor ==null)
                <th style="background-color: white;width: 2%">
                    0CC
                </th>
                @else
                <th style="background-color: white;width: 2%">
                   {{$datosValoracionPreanestesica->regitroInfunsionRpt[3]->valor }}&nbsp;CC
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">
                    CONDUCTIVA INSUFICIENTE
                </td>
                @if ( $datosValoracionPreanestesica->conductiva_insuficiente==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">
                    LARINGO ESPAMOS  
                </td>

                @if ( $datosValoracionPreanestesica->laringo_espasmo==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
            </tr>
            <tr>
                <td style="background-color: white;width: 5.4%;border-bottom:none;border-top:none">
                    CINC
                </td>


                @if ( $datosValoracionPreanestesica->cinc_aparatos_usados==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif

                <td style="background-color: white;width: 5.2%">
                    RAQUIDEA
                </td>
                @if ( $datosValoracionPreanestesica->raquidea==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 1%">
                    S
                </td>
                <td style="background-color: white;width: 7%">
                    SOLUCION SALINA
                </td>
                @if ( $datosValoracionPreanestesica->regitroInfunsionRpt[4]->valor ==null)
                <th style="background-color: white;width: 2%">
                    0CC
                </th>
                @else
                <th style="background-color: white;width: 2%">
                   {{$datosValoracionPreanestesica->regitroInfunsionRpt[4]->valor }}&nbsp;CC
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">
                    PARO CARDIACO
                </td>
                @if ( $datosValoracionPreanestesica->paro_cardiaco==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">
                    NINGUNA
                </td>
                @if ( $datosValoracionPreanestesica->ninguna==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
            </tr>
            <tr>
                <td style="background-color: white;width: 5.4%;border-bottom:none;border-top:none">
                    VAIVEN
                </td>
                @if ( $datosValoracionPreanestesica->vaiiven_aparatos_usados==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 5.2%">
                    EPIDURAL CAUD
                </td>
                @if ( $datosValoracionPreanestesica->epidural_caud==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 1%;border-right:none;border-top:none">

                </td>
                <td style="background-color: white;width: 7%;border-right:none;border-left:none;">
                    TOTAL
                </td>
                <td style="background-color: white;width: 2%">
                    100CC
                </td>
                <td style="background-color: white;width: 5.4%">
                    CAMBIO DE TECNICA
                </td>
                @if ( $datosValoracionPreanestesica->cambio_tecnica==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 5.4%">

                </td>
                <td style="background-color: white;width: 1%">

                </td>
            </tr>
            <tr>
                <td style="background-color: white;width: 5.4%; border-top:none">
                    MASCARA
                </td>


                @if ( $datosValoracionPreanestesica->mascara==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif

                <td style="background-color: white;width: 5.2%;border-bottom:none">
                    SIMPLE
                </td>
                @if ( $datosValoracionPreanestesica->simple_altura_puncion==1)
                <th style="background-color: white;width: 1%;">
                    x
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                    
                </th>
                @endif
                <td style="background-color: white;width: 1%;border-right:none;border-top:none">

                </td>
                <td style="background-color: white;width: 7%;border-right:none;border-left:none;">
                    HEMORRAGIA
                </td>
                <td style="background-color: white;width: 2%">
                    
                </td>
                <td style="background-color: white;width: 5.4%">
                    OTROS
                </td>
                <td style="background-color: white;width: 1%">
                     
                </td>
                @if ( $datosValoracionPreanestesica->otros_complicaciones==null)
                <th style="background-color: white;width: 1%;">
                     
                </th>
                @else
                <th style="background-color: white;width: 1%;">
                   {{$datosValoracionPreanestesica->otros_complicaciones}} 
                </th>
                @endif
                <td style="background-color: white;width: 1%;border-left:none;">

                </td>
            </tr>
        </table>

        <table class="tableStyleAll">
            <tr>
                <th style="background-color: white;width:19%;border-bottom:none;border-top: none">
                    INTE. TRAQUEAL
                </th>
                <th style="background-color: white;width:15.5%;border-top:none;border-bottom:none">
                    CONTINUA
                </th>
                @if ( $datosValoracionPreanestesica->simple_altura_puncion==1)
                <th style="background-color: white;width: 3%">
                    x
                </th>
                @else
                <th style="background-color: white;width: 3%">
                    
                </th>
                @endif
                {{-- <th style="background-color: white;width: 3.2%">
                    X
                </th> --}}
            </td>
            @if ( $datosValoracionPreanestesica->hemorragia==null)
            <th style="background-color: white;width: 30%;border-bottom:none">
                 
            </th>
            @else
            <th style="background-color: white;width: 30%;border-bottom:none">
               {{$datosValoracionPreanestesica->hemorragia}} &nbsp;CC
            </th>
            @endif
                {{-- <th style="background-color: white;width: 30%;border-bottom:none">
                    CC APROXI.
                </th> --}}
                <th style="background-color: white;width:37.7%">

                </th>
            </tr>
            <tr>
                <td style="border-bottom:none;border-top: none ">

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>
                    APAGAR
                </td>
                <td>
                    COMENTARIOS
                </td>
            </tr>
        </table>

        <table class="tableStyleAll">
            <tr>
                <th style="width:8.2%;border-top: none;border-bottom: none">
                    ORAL
                </th>
                @if ( $datosValoracionPreanestesica->oral_inte_traqueal==1)
                <th style="width:2%;">
                    x
                </th>
                @else
                <th style="width:2%;">
                    
                </th>
                @endif
                
                <th style="width:8%;border-top: none;border-bottom: none">
                    NASAL
                </th>
                @if ( $datosValoracionPreanestesica->nasal_inte_traqueal==1)
                <th style="width:2%;">
                    x
                </th>
                @else
                <th style="width:2%;">
                    
                </th>
                @endif
                <th style="border-top: none;width:17%;border-right: none">
                    ALTURA PUNCION
                </th>
                <th style="width:3%;border-top: none;border-left: none">

                </th>
                <th style="width:8%">
                    1MIN
                </th>
                <th style="width:8%">
                    5MIN
                </th>
                <th style="width:8%">
                    10MIN
                </th>
                <th style="width:8%">
                    p.MUERTO
                </th>
                @if ( $datosValoracionPreanestesica->comentario==null)
                <th rowspan="4" style="width:40.3%">
                  --
                </th>
            </tr>
                @else
                <th rowspan="4" style="width:40.3%">
                    {{$datosValoracionPreanestesica->comentario}}
                </th>
                @endif
              
            </tr>
            <tr>
                <td style="border-top: none;border-bottom: none">
                    RAPIDO
                </td>
                @if ( $datosValoracionPreanestesica->rapido_inte_traqueal==1)
                <th  >
                    x
                </th>
                @else
                <th  >
                    
                </th>
                @endif
                 
                <td style="border-top: none;border-bottom: none">
                    LENTO
                </td>
                @if ( $datosValoracionPreanestesica->lenta_inte_traqueal==1)
                <th  >
                    x
                </th>
                @else
                <th >
                    
                </th>
                @endif
                <td style="border-right: none">
                    
                </td>
                <td style="border-left: none">
                     
                </td>
                @if ( $datosValoracionPreanestesica->min1==null)
                <th  >
                   0
                </th>
                @else
                <th  >
                   {{$datosValoracionPreanestesica->min1}} 
                </th>
                @endif
                @if ( $datosValoracionPreanestesica->min5==null)
                <th  >
                   0
                </th>
                @else
                <th  >
                   {{$datosValoracionPreanestesica->min5}} 
                </th>
                @endif
                @if ( $datosValoracionPreanestesica->min10==null)
                <th  >
                   0
                </th>
                @else
                <th  >
                   {{$datosValoracionPreanestesica->min10}} 
                </th>
                @endif
                @if ( $datosValoracionPreanestesica->p_muerto==null)
                <th  >
                   0
                </th>
                @else
                <th  >
                   {{$datosValoracionPreanestesica->min1}} 
                </th>
                @endif
            </tr>
            <tr>
                <td colspan="4" style="border-top: none;border-bottom: none">
                    TURBO N°   {{$datosValoracionPreanestesica->turbo_inte_traqueal}} 
                </td>

                <td>
                    FUNCION LAT
                </td>
                <td>
                    x
                </td>

                <td colspan="4">
                    TECNICAS ESPECIALES
                </td>
            </tr>
            <tr>
                <td colspan="3" style="border-top: none;border-bottom: none">
                    MANGUITO
                </td>
                @if ( $datosValoracionPreanestesica->manguito_inflam_inte_traqueal==1)
                <th  >
                    x
                </th>
                @else
                <th >
                    
                </th>
                @endif
                <td>
                    LINEA MEDIA
                </td>
            </td>
            @if ( $datosValoracionPreanestesica->linea_media==1)
            <th  >
                x
            </th>
            @else
            <th >
                
            </th>
            @endif

            @if ( $datosValoracionPreanestesica->tecnicas_especiales==null)
            <td colspan="4">
                --
            </td>
            @else
            <td colspan="4">
               {{$datosValoracionPreanestesica->tecnicas_especiales}}
            </td>
            @endif
               
            </tr>
        </table>
        <table class="tableStyleAll">
            <tr>
                <th style="background-color: white;width:16.3%;border-bottom:none;border-top: none">
                    TAPONAMIENTO
                </th>
                @if ( $datosValoracionPreanestesica->taponamiento_inte_traqueal==1)
                <th style="background-color: white;width:2%;border-bottom:none;border-top: none">
                    x
                </td>
                @else
                <th style="background-color: white;width:2%;border-bottom:none;border-top: none">
                    
                </td>
                @endif
                
                <th style="background-color: white;width:15.5%;border-bottom:none;border-top: none">
                    AGUAJA N°
                </th>
                @if ( $datosValoracionPreanestesica->aguja==null)
                <th style="background-color: white;width:2%;border-bottom:none;border-top: none">
                    -
                </td>
                @else
                <th style="background-color: white;width:2%;border-bottom:none;border-top: none">
                   {{$datosValoracionPreanestesica->aguja}} 
                </td>
                @endif

                @if ( $datosValoracionPreanestesica->conducido_a==null)
                <th style="background-color: white;width:29%;border-bottom:none ">
                    -
                </td>
                @else
                <th style="background-color: white;width:29%;border-bottom:none; ">
                  CONDUCIDO A : &nbsp; {{$datosValoracionPreanestesica->conducido_a}} 
                </td>
                @endif
                
                <th rowspan="4" style="background-color: white;width:37.5%; border-top: none">
                    @if ( isset($datosPaciente->graficoFirmaMedico))
                    <img src="data:image/jpeg;base64,'{{ $datosPaciente->graficoFirmaMedico->FIRMAS }}'" border="0"  width="200px" height="80px"> 
                @else
                no hay imagen ;( 
                     {{-- <img src="data:image/jpeg;base64,'{{ $datosValoracionPreanestesica->graficoCirugia->GRAFICAS }}'" border="0" width="690px" height="360px"> --}}
                @endif
                     
                </th>
            </tr>
            <tr>
                <td>
                    ASIST. TOPICA

                </td>
                @if ( $datosValoracionPreanestesica->asist_topica_inte_traqueal==1)
                <th  >
                    x
                </th>
                @else
                <th >
                    
                </th>
                @endif
                <td>
                    NIVEL
                </td>
                @if ( $datosValoracionPreanestesica->nivel==null)
                <th  >
                     --
                </th>
                @else
                <th >
                  {{ $datosValoracionPreanestesica->nivel}} 
                </th>
                @endif
                @if ( $datosValoracionPreanestesica->por==null)
                <th  >
                  POR:  --
                </th>
                @else
                <th >
                 POR : &nbsp;  {{ $datosValoracionPreanestesica->por}} 
                </th>
                @endif
            </tr>
            <tr>
                <td>
                    ASIST. TRANBORAL

                </td>
                @if ( $datosValoracionPreanestesica->asist_tranboral_inte_traqueal==1)
                <th  >
                    x
                </th>
                @else
                <th >
                    
                </th>
                @endif
                <td>
                    HIPERBARA
                </td>
                @if ( $datosValoracionPreanestesica->hiperbara==1)
                <th  >
                    x
                </th>
                @else
                <th >
                   
                </th>
                @endif
                <td>
                    HORA  
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    HLB

                </td>
                 
                <td colspan="2">
                    @if ( isset($datosValoracionPreanestesica->tipoPosicion["descripcion"]))
            @if ($datosValoracionPreanestesica->tipoPosicion["descripcion"] == NULL)
            
            @else
           <b> POSICION:  {{  $datosValoracionPreanestesica->tipoPosicion["descripcion"] }} </b>
            @endif
            
            @else
            @endif
                   
                </td>
                @if ( $datosValoracionPreanestesica->hora==null)
                <th  >
                    --
                </th>
                @else
                <th >
                   {{ $datosValoracionPreanestesica->hora}} 
                </th>
                @endif
                
            </tr>
        </table>
         
         {{-- @else
              no hay drogas ;( 
         @endif --}}

    </div>

</body>

</html>

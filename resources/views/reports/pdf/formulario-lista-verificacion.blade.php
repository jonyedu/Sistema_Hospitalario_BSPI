 <html>

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

         .tableStyleAll2 {
             width: 100%;


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
         {{-- style="border-left:none;border-top: none; border-right: none;border-bottom:
         none" --}}
         <table class="tableStyleAll">
             <tr>
                 <th style="border-style: none">
                     LISTA DE VERIFICACIÓN DE LA SEGURIDAD DE LA CIRUGÍA  
                 </th>
             </tr>

         </table>
         <table class="tableStyleAll">
             <tr>
                 <th rowspan="3" style="width: 20%; border-style: none">
                     <img src="{{ public_path('img/logoreport1.png') }}" borde="0" width="100px" height="70px" />
                 </th>
                 <th align="left" colspan="2" style="width: 40%; border-style: none;">
                     <span ali> Nombre:  {{ $datosPaciente[0]->CirProNomPac }} </span>
                 </th>
                 <th colspan="2" style="width: 40%; border-style: none">

                 </th>
                 <th rowspan="3" style="width: 20%; border-style: none">
                     <img src="{{ public_path('img/oms.png') }}" width="120px" height="100px" />
                 </th>

             </tr>
             <tr>
                 <td>
                     N° Historia Clinica:    {{ $datosPaciente[0]->historiac }}
                 <td>
                     Edad:  
                 </td>
                 <td>
                     N° Quirofano:  {{ $datosPaciente[0]->CirProQuirofano }}
                 </td>
                 <td>
                     Fecha: {{ $datosPaciente[0]->created_at }}
                 </td>
             <tr>
                 <td colspan="6">
                     Procedimiento:  {{ $datosPaciente[0]->CirProProcedimiento }}
                 </td>
             </tr>
             </tr>
         </table>

     </div>
     <!-- Fin Cabecera -->
     <div class="tablePaciente" style="top:150px;">
         <table class="tableStyleAll">
             <tr style="border-style: none">
                 <th style="width: 33.33%;border-style: none;background-color: white">
                     Antes de la inducción de la anestesia
                 </th>
                 <th style="width: 33.33%;border-style: none;background-color: white">
                     Antes de la incisión cutánea
                 </th>
                 <th style="width: 33.33%;border-style: none;background-color: white">
                     Antes de que el paciente salga del quirófano
                 </th>
             </tr>
         </table>
         <table class="tableStyleAll">
             <tr>
                 <th colspan="2" style="width: 33.33% ;border-style: none">
                     ENTRADA
                 </th>
                 <th colspan="2" style="width: 33.33%;border-style: none">
                     PAUSA QUIRÚRGICA
                 </th>
                 <th colspan="2" style="width: 33.33%;border-style: none">
                     SALIDA
                 </th>
             </tr>
         </table>
         <table class="tableStyleAll">
 {{-- LINEA EN BLACO --}}
 <tr>
    <td style="width:2%;border-style: none ">

    </td>
    <td style="width:31.33%;border-style: none">


    </td>
    <td style="width:2%;border-style: none">

    </td>
    <td style="width:31.33%;border-style: none">


    </td>
    <td style="width:2%;border-style: none">

    </td>
    <td style="width:31.33%;border-style: none">

    </td>

</tr>
{{-- FILA --}}
<tr>
    <td style="width:2% ">
        {{ $datosPaciente[0]->chkentrada01 }}
    </td>
    <td style="width:31.33%;border-style: none">

        EL PACIENTE HA CONFIRMADO
    </td>
    <td style="width:2%">
        {{ $datosPaciente[0]->chkquirurgica01 }}
    </td>
    <td style="width:31.33%;border-style: none">
        <b>CONFIRMAR QUE TODOS LOS MIEMBROS DEL EQUIPO SE</b>
        
        

    </td>
    <td style="width:2%;border-style: none">
        
    </td>
    <td style="width:31.33%;border-style: none">
      

    </td>

</tr>
 {{-- LINEA EN BLACO --}}
 <tr>
    <td style="width:2%;border-style: none ">

    </td>
    <td style="width:31.33%;border-style: none">


    </td>
    <td style="width:2%;border-style: none">

    </td>
    <td style="width:31.33%;border-style: none">


    </td>
    <td style="width:2%;border-style: none">

    </td>
    <td style="width:31.33%;border-style: none">

    </td>

</tr>
{{-- LINEA EN BLACO --}}
<tr>
    <td style="width:2%;border-style: none ">

    </td>
    <td style="width:31.33%;border-style: none">


    </td>
    <td style="width:2%">
        {{ $datosPaciente[0]->chkquirurgica02 }}
    </td>
    <td style="width:31.33%;border-style: none">

        <b>EL CIRUJANO, ANESTESISTA Y ENFERMERO CONFIRMA VERBALMENTE</b>
    </td>
    <td style="width:2%;border-style: none">

    </td>
    <td style="width:31.33%;border-style: none">

    </td>

</tr>
             <tr>
                 <td style="width:2%;border-style: none">
                   
                 </td>
                 <td rowspan="2" style="width:31.33%;border-style: none">
                  
                     <ul>
                         <li> SU IDENTIDAD</li>
                         <li> EL SITIO QUIRURJICO</li>
                         <li> EL PROCEDIMIENTO</li>
                         <li> SU CONOCIMIENTO</li>
                     </ul>
                 </td>
                 <td style="width:2%;border-style: none">
                    
                 </td>
                 <td style="width:31.33%;border-style: none">
                    

                 </td>
                 <td style="width:2%;border-style: none">
                     
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>EL ENFERMERO CONFIRMA VERBALMENTE CON EL EQUIPO :</b>


                 </td>

             </tr>
             {{-- aqui divie --}}
             
             <tr>
                 <td style="width:2%;border-style: none">

                 </td>

                 <td rowspan="1" style="width:2%;height:2%;;border-style: none">
                     
                 </td>
                 <td style="width:31.33%;border-style: none">
                    

                     <ul>
                         <li> SU IDENTIDAD</li>
                         <li> EL SITIO QUIRURJICO</li>
                         <li> EL PROCEDIMIENTO</li>


                     </ul>
                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>

             </tr>
              {{-- LINEA EN BLACO --}}
 <tr>
    <td style="width:2%;border-style: none ">

    </td>
    <td style="width:31.33%;border-style: none">


    </td>
    <td style="width:2%;border-style: none">

    </td>
    <td style="width:31.33%;border-style: none">


    </td>
    <td style="width:2%;border-style: none">

    </td>
    <td style="width:31.33%;border-style: none">

    </td>

</tr>
             <tr>
                 <td style="width:2% ">
                    {{ $datosPaciente[0]->chkentrada02 }}
                 </td>


                 <td style="width:31.33%;border-style: none ">
                     DESMARCACION DEL SITIO/NO PROCEDE
                 </td>
                 <td style="width:2%;border-style: none ">

                 </td>



                 <td style="width:31.33%;border-style: none ">

                 </td>
                 <td style="width:2%; ">
                    {{ $datosPaciente[0]->chksalida01 }}
                 </td>
                 <td style="width:31.33%;border-style: none ">

                     <b>ELNOMBRE DEL PROCEDIMIENTO REALIZADO:</b>
                 </td>

             </tr>


             {{-- aqui finaliza --}}
             <tr>
                 <td style="width:2% ">
                    {{ $datosPaciente[0]->chkentrada03 }}
                 </td>
                 <td style="width:31.33%;border-style: none">

                     SE HA COMPLETADO EL CONTROL DE LA SEGURIDAD DE LA ANESTESIA
                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chkquirurgica03 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b> PREVISION DE EVENTOS CRITICOS EL CIRGUJANO REVISA </b>
                     LOS PASOS O IMPREVISTOS. DURACION DE LA OPERACION Y LA PERDIDA DE SANGRE PREVISTA


                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chksalida02 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>AGUJAS SON CORRECTOS:</b> O NO PROCEDEN
                     <br>

                 </td>

             </tr>
             {{-- LINEA EN BLACO --}}
             <tr>
                 <td style="width:2%;border-style: none ">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">

                 </td>

             </tr>
             {{-- FILA --}}
             <tr>
                 <td style="width:2% ">
                    {{ $datosPaciente[0]->chkentrada04 }}
                 </td>
                 <td style="width:31.33%;border-style: none">

                     PULSIOXIMETRO COLOCADO Y EN FUNCIONAMIENTO
                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chkquirurgica04 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b> EL EQUIPO DE ANESTESIA REVISA </b>
                     SI EL PACIENTE PRESENTA ALGUN PROBLEMA ESPECIFICO


                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chksalida03 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>EL ETIQUETADO DE LAS MUESTRAS</b> (QUE FIGURE EL NOMBRE DEL PACIENTE)
                     <br>

                 </td>

             </tr>
             {{-- LINEA EN BLACO --}}
             <tr>
                 <td style="width:2%;border-style: none ">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">

                 </td>

             </tr>
             {{-- FILA --}}
             <tr>
                 <td style="width:2% ">
                    {{ $datosPaciente[0]->chkquirurgica04 }}
                 </td>
                 <td style="width:31.33%;border-style: none">

                     <b> EL PACIENTE TIEN ALERGIA CONOCIDAS NO / SI
                     </b>
                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chkquirurgica05 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b> EL EQUIPO DE ENFERMERIA REVISA </b>


                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chksalida04 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>SI HAY PROBLEMAS QUE RESOLVER RELACIONADOS CON EL INSTRUMENTAL Y LOS EQUIPOS</b>

                 </td>

             </tr>
             <tr>
                 <td style="width:2%;border-style: none ">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">

                     SI SE HA CONFIRMADO LA ESTERELIDAD (CON RESULTADOS DE LOS INDICADORES)
                     Y SI EXISTEN DUDAS O PROBLEMAS RELACIONADOS CON EL INSTRUMENTAL Y LOS EQUIPOS


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>

             </tr>
             <tr>
                 <td style="width:2% ">
                    {{ $datosPaciente[0]->chkentrada06 }}
                 </td>
                 <td style="width:31.33%;border-style: none">

                     <b> VIA AEREA DIFICIL / RIESGO DE ASPIRACION? NO
                     </b>


                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chkquirurgica06 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b> SE HA ADMINISTRADO PROFILAXIS ANTIBIOTICA EN LOS </b>
                     <br>
                     SI

                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chksalida05 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>EL CIRUJANO, EL ANESTESISTA Y EL ENFERMERO REVISAN LOS PRINCIPALES ASPECTOS</b>

                 </td>

             </tr>
             <tr>
                 <td style="width:2% ">
                    {{ $datosPaciente[0]->chksalida05 }}
                 </td>
                 <td style="width:31.33%;border-style: none">

                     <b>
                         SI
                     </b> Y HAY INSTRUMENTAL Y EQUIPOS/AYUDA DISPONIBLE

                 </td>
                 <td style="width:2%">
                     X
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>NO</b>


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>DE LA RECUPERACION Y EL TRATAMIENTO DEL PACIENTE</b>
                     <br>
                     <br>

                 </td>

             </tr>
             {{-- LINEA EN BLACO --}}
             <tr>
                 <td style="width:2%;border-style: none ">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">

                 </td>

             </tr>
             {{-- aqui empieza*otra vez --}}

             <tr>
                 <td style="width:2% ">
                    {{ $datosPaciente[0]->chkentrada07 }}
                 </td>
                 <td style="width:31.33%;border-style: none">

                     <b>RIESGO DE HEMORRAGIA >500ML (7 MLVKG EN NIÑOS)
                     </b>
                     <br>
                     NO



                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chkquirurgica07 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>PUEDE VISUALIZAR IMAGENES DIAGNOSTICADAS </b>
                     <br>
                     SI

                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>

             </tr>
             {{-- LINEA EN BLACO --}}
             <tr>
                 <td style="width:2% ">
                    {{ $datosPaciente[0]->chkentrada07 }}
                 </td>
                 <td style="width:31.33%;border-style: none">

                     <b>
                         SI
                     </b> SI SE HA PREVISTO LA DISPONIBILIDAD DE ACCESO INTRAVENOSO Y LIQUIDOS ADECUADOS

                 </td>
                 <td style="width:2%">
                    {{ $datosPaciente[0]->chkquirurgica07 }}
                 </td>
                 <td style="width:31.33%;border-style: none">
                     <b>NO PROCEDE</b>


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">

                 </td>

             </tr>
             {{-- LINEA EN BLACO --}}
             <tr>
                 <td style="width:2%;border-style: none ">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">


                 </td>
                 <td style="width:2%;border-style: none">

                 </td>
                 <td style="width:31.33%;border-style: none">

                 </td>
             </tr>
             {{-- otra linea --}}

         </table>

         <table class="tableStyleAll">
             <tr>
                 <th rowspan="8" style="width:60%">
                   Observacion : 
                   <br>
                   {{ $datosPaciente[0]->observacion }}
                 </th>
                 <th rowspan="6" style="width:40%">
                    <img src="{{ public_path('img/logoreport1.png') }}" borde="0" width="100px" height="70px" />
                   
                    
                 </th>
             </tr>
            {{-- FILAS --}}
             <tr>
                  
                
             </tr>
             <tr>
                

             </tr>
             <tr>
                 

             </tr>
             <tr>
                 
             </tr>
             <tr>
                 

             </tr>
             <tr>
                 <td>
                    {{ $datosPaciente[0]->user_id }}
                _______________________________________
                <br>
                Nombre del Responsable
                 </td>

             </tr>
             <tr>
                <td>
                    {{ $datosPaciente[0]->user_id }}
                    _______________________________________
                    <br>
                    Cargo
                </td>

            </tr>
         </table>

     </div>
 </body>

 </html>

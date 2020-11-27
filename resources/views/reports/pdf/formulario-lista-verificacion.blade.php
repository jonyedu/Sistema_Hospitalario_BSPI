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
                     <span ali> Nombre:</span>
                 </th>
                 <th colspan="2" style="width: 40%; border-style: none">

                 </th>
                 <th rowspan="3" style="width: 20%; border-style: none">
                     <img src="{{ public_path('img/oms.png') }}" width="120px" height="100px" />
                 </th>

             </tr>
             <tr>
                 <td>
                     N° Historia Clinica: 151512
                 </td>
                 <td>
                     Edad: 151512
                 </td>
                 <td>
                     N° Quirofano: 151512
                 </td>
                 <td>
                     Fecha: 12/12/2020
                 </td>
             <tr>
                 <td colspan="6">
                     Procedimiento :.....................
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

             
             <tr>
                 <td style="width:2%">
                    x
                 </td>
                 <td rowspan="2" style="width:31.33%;border-style: none">
                    El paciente ha confirmado 
                    <br>
                    <ul>
                        <li> SU IDENTIDAD</li>
                        <li> EL SITIO QUIRURJICO</li>
                        <li> EL PROCEDIMIENTO</li>
                        <li> SU CONOCIMIENTO</li>
                    </ul>
                 </td>
                 <td style="width:2%">
                   X
                 </td>
                 <td style="width:31.33%;border-style: none">
                    <b>CONFIRMAR QUE TODOS LOS MIEMBROS DEL EQUIPO SE</b>
                    <br>
                    HAYAN PRESENTADO POR SU NOMBRE Y FUNCION
                 </td>
                 <td style="width:2%">
                    X
                  </td>
                  <td style="width:31.33%;border-style: none">
                     <b>CONFIRMAR QUE TODOS LOS MIEMBROS DEL EQUIPO SE</b>
                     <br>
                     HAYAN PRESENTADO POR SU NOMBRE Y FUNCION
                  </td>

             </tr>
         </table>


     </div>
 </body>

 </html>

<?php
function obtenerDatoGraficaRegistroAnestesia()
{
    $data = [];
    $columna = 60;
    $fila = 29;
    echo '<div class="tableBorderAll" style="top:140px;">';
    echo    '<table class="tableStyleCollapse" style="width:100%;">';

    for ($fil = 0; $fil < $fila; $fil++) {
        echo        '<tr>';
        for ($col = 0; $col < $columna; $col++) {
            echo            '<td style="height:1%;"></td>';
        }
        echo        '</tr>';
    }

    echo    '</table>';
    echo '</div>';
}

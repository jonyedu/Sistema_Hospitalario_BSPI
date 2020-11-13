<?php
function obtenerDatoGraficaRegistroAnestesia()
{
    $columna = 12;
    $fila = 23;
    echo '<div class="tableBorderAll" style="top:140px;">';
    echo    '<table class="tableStyleCollapse">';

    for ($fil = 0; $fil < $fila; $fil++) {
        echo        '<tr>';
        for ($col = 0; $col < $columna; $col++) {
            echo            '<td style="width:200px;height="200px"></td>';
        }
        echo        '</tr>';
    }

    echo    '</table>';
    echo '</div>';
}

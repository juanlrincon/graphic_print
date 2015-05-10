<?php
    // Vista para actualización de lista de estados/provincias según el país seleccionado 
    echo "<option value=\"\">-- Seleccione --</option>\n";
    foreach ($estados as $key => $value){
        echo "<option value=\"$key\">$value</option>\n";
    }
?>
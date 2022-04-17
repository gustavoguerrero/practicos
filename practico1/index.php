<?php

    require('personas.php');

    foreach($arrayPersonas as $array){
       echo "<a href='datos.php?id=" . $array['id'] . "'><p>" . $array['nombre'] . " " . $array['apellido'] . "</p></a>";
    }
    
    
    
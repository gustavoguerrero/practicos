<?php

    require('personas.php');

    $id = $_GET['id'];
    //echo gettype((int)$id);
    foreach($arrayPersonas as $array){
        if($array['id']===(int)$id){
            echo "<p>ID: ". $array['id']."</p>";
            echo "<p>Nombre: ". $array['nombre']."</p>";
            echo "<p>Apellido: ". $array['apellido']."</p>";
            echo "<p>Edad: ". $array['edad']."</p>";
            echo "<p>Correo Electrónico: ". $array['email']."</p>";
        };
    };
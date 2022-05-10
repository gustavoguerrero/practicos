<?php

    $ipBaseDeDatos = "172.18.0.3";
    $usuarioBaseDeDatos = "usuario";
    $passwordBaseDeDatos = "1234";
    $nombreBaseDeDatos = "base";

    $nombreDePersona = $_POST['nombre'];
    $apellidoDePersona = $_POST['apellido'];
    $telefonoDePersona = $_POST['telefono'];
    $correoDePersona = $_POST['email'];

    $conexion = new mysqli(
        $ipBaseDeDatos,
        $usuarioBaseDeDatos,
        $passwordBaseDeDatos,
        $nombreBaseDeDatos
        );
    
    if($conexion->connect_error){
        die("La conexion rompio");
    }

    $sentencia =
        "INSERT INTO
            persona(nombre, apellido, telefono, email) 
            VALUES 
            ('".$nombreDePersona."','".$apellidoDePersona."', '".$telefonoDePersona."', '".$correoDePersona."');
    ";
        

    if ($conexion->query($sentencia) === TRUE) {
        echo "Datos Guardados";
    } 
    else {
        echo "Error: " . $sentencia . "<br>" . $conexion->error;
    }
    
    $conexion->close();

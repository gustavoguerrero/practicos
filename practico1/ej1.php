<?php

    $numero1 = $_GET["numer1"];
    $numero2 = $_GET["numer2"];
    $operacion= $_GET['operacion'];

    if(isset($_GET['operacion'])){
        if(!strcmp('sum', $operacion)){
            $resultado = $numero1+$numero2;
            echo $numero1 . "+" . $numero2 . "=" . $resultado;
        }

        if(!strcmp('res', $operacion)){
            $resultado = $numero1-$numero2;
            echo $numero1 . "-" . $numero2 . "=" . $resultado;
        }

        if(!strcmp('mul', $operacion)){
            $resultado = $numero1*$numero2;
            echo $numero1 . "x" . $numero2 . "=" . $resultado;
        }

        if(!strcmp('div', $operacion)){
            $resultado = $numero1/$numero2;
            echo $numero1 . "/" . $numero2 . "=" . $resultado;
        }

        if(!strcmp('cuad', $operacion)){
            $resultado = $numero1**$numero2;
            echo $numero1 . "<sup>$numero2</sup>=" . $resultado;
        }


    }
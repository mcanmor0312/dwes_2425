<?php

    /*
        Ejemplo 13.

        Array o Matrices

        Tipo Escalar. Sólo un índice numérico
    */

    // Usando el constructor arra()
    $numeros = [1, 9, 20, 40, 91, 12, 40];

    echo $numeros[0]; 
    echo '<BR>';

    foreach ($numeros as $i => $valor) {
        echo "[$i]=$valor";
        echo'<BR>';
    }


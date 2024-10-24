<?php

    /*
        Ejemplo 13.

        Array o Matrices

        Matriz bidimensional con:

            - índice primario: escalar
            - índice secundario: asociativo
    */

    $expresion=$_GET['expresion'];
    
    $alumnos=get_tabla_alumnos();
    
    $aux=[];

    foreach ($alumnos as $registro) {
        if(array_search($expresion,$registro,false)){
            $aux[]=$registro;
        }    
    }
$alumnos=$aux;
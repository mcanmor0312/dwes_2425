<?php

    /*
        Ejemplo 13.

        Array o Matrices

        Matriz bidimensional con:

            - índice primario: escalar
            - índice secundario: asociativo
    */

    $expresion=$_GET['expresion'];
    
    $libros=get_tabla_libros();
    
    $aux=[];

    foreach ($libros as $registro) {
        if(array_search($expresion,$registro,false)){
            $aux[]=$registro;
        }    
    }
$libros=$aux;
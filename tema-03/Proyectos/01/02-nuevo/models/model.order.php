<?php

    /*
        Ejemplo 13.

        Array o Matrices

        Matriz bidimensional con:

            - índice primario: escalar
            - índice secundario: asociativo
    */

    $criterio=$_GET['criterio'];
    
    $alumnos=get_tabla_alumnos();
    
    $aux=array_column($alumnos,$criterio);

    array_multisort($aux,SORT_ASC,$alumnos);
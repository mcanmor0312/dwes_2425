<?php

    /*
        Ejemplo 13.

        Array o Matrices

        Matriz bidimensional con:

            - índice primario: escalar
            - índice secundario: asociativo
    */

    $criterio=$_GET['criterio'];
    
    $libros=get_tabla_libros();
    
    $aux=array_column($libros,$criterio);

    array_multisort($aux,SORT_ASC,$libros);
<?php

/**
 * Array de dos dimensiones con indices numericos
 */

 $matriz=[
    [3,5,7,8,10],
    [6,2,7,0,9],
    [6,4,9,1,5],
 ];

// echo $matriz[1][2];

 foreach ($matriz as $valor){
    foreach ($valor as $valor2){
        echo $valor2;
        echo", ";
    }
    echo"<BR>";
 }
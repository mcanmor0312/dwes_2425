<?php

/**
 * funcion implode()
 */
$array_equipo=[
    "portero","laterales","centrales","mediocentros","interiores","delanteros"
];
$cadena=implode(separator:", ",array:$array_equipo);
echo$cadena;
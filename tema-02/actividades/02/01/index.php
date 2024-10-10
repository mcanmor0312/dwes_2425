<?php

$v1 = 3;
$v2 = "5 la madre que me pario";
//Multiplica valor entero con una cadena que contiene un número inicial
var_dump($v1 * $v2);
echo"<BR>";
//Sumar valor entero con cadena con número inicial
var_dump($v2 + $v1);
echo"<BR>";
$v3 = 2.14;
//Sumar valor entero con valor float
var_dump($v1 + $v3);
echo"<BR>";
$v4 = $v1.$v2;
//Concatenar valor entero con cadena
var_dump($v4);
echo "<BR>";
$v5 = false;
//Sumar valor entero con valor booleano
var_dump($v1 + $v5);
<?php

/**
 * funcion y procedimientos
 */

 function sumar($valor1,$valor2) {
    $resultado= $valor1 + $valor2;
    return $resultado;
 }
 function producto($valor1,&$valor2) {
    $resultado= $valor1 * $valor2;
    $valor2=7;
    return $resultado;
 }
 function division($valor1,$valor2=5) {
    $resultado= $valor1 / $valor2;
    return $resultado;
 }

$v1=5;
$v2=4;

 $calculo=sumar(valor1:6,valor2:5);
 $calcular=producto($v1,$v2);   
 $calculitro=division($v2);


 echo $calculo;
 echo"<BR>";
 echo $calcular;//18
 echo"<BR>";
 echo $v2; //7
 echo"<BR>";
echo $calculitro;
<?php

/**
 * moddelo: model calculadora.php
 * descripcion: realiza los calculos
 */

$valor1 = $_GET["valor1"];
$valor2 = $_GET["valor2"];
$operacion = $_GET["operacion"];

$calcular = new Class_calculadora($valor1, $valor2, $operacion, null);

switch ($operacion) {
    case "sumar":
        $calcular->sumar();break;
    case "restar":
        $calcular->restar();break;
    case "multiplicar":
        $calcular->multiplicar();break;
    case "dividir":
        $calcular->dividir();break;
    case "potencia":
        $calcular->potencia();break;
    default:echo"Operación no válida";break;
}

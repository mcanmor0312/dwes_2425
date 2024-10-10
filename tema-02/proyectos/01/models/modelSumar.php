<?php

/**
 * Modelo:  modelSumar.php
 * Descripcion: suma los valores del formulario
 */

 //print_r(value: $_GET);
 $valor1=$_GET['valor1'];
 $valor2=$_GET['valor2'];

 //Variable con la operacion
 $operacion="Suma";

 //Realizo los calculos
 $resultado=$valor1+$valor2;

 echo $resultado;
<?php

/**
 * Modelo:  modelCalcular.php
 * Descripcion: hacer las cuentas
 */

// Cargo en variables
$radio = $_POST['valor1'];
$frecuencia = $_POST['valor2'];
$masa=$_POST['valor3'];

// Realizo los cálculos
$velTan = 2*pi()*$radio*$frecuencia;
$acelCen = ($velTan*$velTan)/$radio; 
$fuerzaCen =  $masa*$acelCen;
$periodo = 1/ $frecuencia;

//Formateo de resultados
$velTan=number_format( $velTan,2,',','.');
$acelCen=number_format($acelCen,2,',','.');
$fuerzaCen=number_format($fuerzaCen,2,',','.');
$periodo=number_format($periodo,10,',','.');
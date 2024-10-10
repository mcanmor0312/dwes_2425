<?php

/**
 * Modelo:  modelCalcular.php
 * Descripcion: suma los valores del formulario
 */

// Cargo en variables
$velInicial = $_POST['valor1'];
$anguloGrados = $_POST['valor2'];

// Defino constantes
define('G', 9.81); // Aceleración de la gravedad en m/s²

// Convertir el ángulo de grados a radianes
$anguloRad = $anguloGrados * (pi() / 180);

// Realizo los cálculos
$vHor = $velInicial * cos(num: $anguloRad); // (Vox = V0 * cos(A0))
$vVer = $velInicial * sin($anguloRad); // (Voy = V0 * sin(A0))
$alcanceMax = ($velInicial ** 2) * sin(2 * $anguloRad) / G; // Xmax = (g * V0^2 * sin(2 * A0)) / g
$altMax = ($velInicial ** 2) * (sin($anguloRad) ** 2) / (2 * G); // Ymax = (V0^2 * sin^2(A0)) / (2 * g)
$tiempoTot = round(((2 * $velInicial * sin($anguloRad)) / G), 2); // t = (2 * V0 * sin(A0)) / g

//Formateo de resultados
$velInicial=number_format( $velInicial,2,',','.');
$anguloGrados=number_format($anguloGrados,2,',','.');
$vVer=number_format($vVer,2,',','.');
$vHor=number_format($vHor,2,',','.');
$alcanceMax=number_format($alcanceMax,2,',','.');
$altMax=number_format($altMax,4,',','.');
$tiempoTot=number_format($tiempoTot,2,',','.');
$anguloRad=number_format($anguloRad,5,',','.');

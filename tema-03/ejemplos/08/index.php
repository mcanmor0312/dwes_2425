<?php

/**
 * Devolver el item de unna calificacion
 */
$calif = 19;
switch ($calif) {
    case ($calif <= 2):
        $nota = 'Deficiente';
        break;
    case ($calif < 5):
        $nota = 'Insuficiente';
        break;
    case ($calif < 6):
        $nota = 'Suficiente';
        break;
    case ($calif < 7):
        $nota = 'bien';
        break;
    case ($calif < 9 ):
        $nota = 'Notable';
        break;
    case ($calif <= 10):
        $nota = 'Sobresaliente';
        break;
    default:
        $nota = 'No definida';
}
echo ($nota);

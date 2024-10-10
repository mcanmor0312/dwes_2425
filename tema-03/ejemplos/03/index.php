<?php

/**
 * Calificacion de una nota de 0 a 10
 * Mostrara: deficiente, induficiente, bien notable o sobresaliente
 */

//entero
$a = 5;
$dwes=6;

if (($a >=0)and($a<=2)) {
    echo "Calificacion deficiente";
}elseif(($a>2) and ($a< 5)) {
    echo "Calificacion insuficiente";
}elseif(($a>=5)and ($a< 6)) {
    echo "Calificacion suficiente";
}elseif(($a>=6)and ($a< 7)){
    echo "Calificacion bien";
}elseif(($a>=7)and($a<9)){
    echo "Calificacion notable";
}else if(($a>=9) and ($a<= 10)) {
    echo"Calificacion sobresaliente";# code...
}else{
    echo"Calificacion no permitida";
}
/**
 * manera Óptima
 * 
 */
if ($dwes < 0 || $dwes > 10) {
    echo "Calificación no permitida";
} else if ($dwes <= 2) {
    echo "deficiente";
} else if ($dwes < 5) {
    echo "insuficiente";
} else if ($dwes < 6) {
    echo "suficiente";
} else if ($dwes < 7) {
    echo "bien";
} else if ($dwes < 9) {
    echo "notable";
} else {
    echo "sobresaliente";
}
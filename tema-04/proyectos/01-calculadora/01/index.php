<?php
#incluyo archivo de la clase calculadora
include("class/class.calculadora.php");
#creo un objeto de la clase calculadora
$calculadora=new Class_calculadora(180,32,);

echo"Suma: ".$calculadora->sumar();
echo "<br>";
echo"Restar: ".$calculadora->restar();
echo "<br>";
echo"Multiplicar: ".$calculadora->multiplicar();
echo "<br>";
echo"Dividir: ".$calculadora->dividir();
echo "<br>";
echo"Potencia: ".$calculadora->potencia();
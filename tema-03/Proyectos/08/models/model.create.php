<?php

/**
 * Modelo: model.create.php
 * 
 * Metodo Post:
 *  -id
 *  -titulo
 *  -autor
 *  -editorial
 *  -genero
 *  -precio
 */
#Extraemos los valores del formulario usando el método POST
$id=$_POST['id'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$editorial=$_POST['editorial'];
$genero=$_POST['genero'];
$precio=$_POST['precio'];


$libros=get_tabla_libros();

#Creamos array asociativo con los detalles del nuevo libro
$registro=[
    'id'=>$id,
    'titulo'=>$titulo,
    'autor'=>$autor,
    'editorial'=>$editorial,
    'genero'=>$genero,
    'precio'=>$precio

];

#Añadir nuevo libro a la tabla
$libros[]=$registro;

//otra opcion es array_push($libros,$registro);
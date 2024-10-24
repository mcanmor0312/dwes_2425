<?php

/**
 * Modelo: model.create.php
 * 
 *  Metodo Post:
 *  -id
 *  -titulo
 *  -autor
 *  -editorial
 *  -genero
 *  -precio
 */
#Extraemos los valores del formulario
$id=$_POST['id'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$editorial=$_POST['editorial'];
$genero=$_POST['genero'];
$precio=$_POST['precio'];


$libros=get_tabla_libros();
//Extraemos el id del libro
$id_editar=$_GET['id'];

$indice_editar=buscar_tabla($libros,'id',$id_editar);
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
$libros[$indice_editar]=$registro;

//otra opcion es array_push($libros,$registro);
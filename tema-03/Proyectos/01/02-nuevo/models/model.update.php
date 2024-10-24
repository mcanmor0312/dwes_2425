<?php

/**
 * Modelo: model.create.php
 * 
 * Metodo Post:
 *  -nombre
 *  -poblacion
 *  -curso
 */
#Extraemos los valores del formulario
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$poblacion=$_POST['poblacion'];
$curso=$_POST['curso'];

$alumnos=get_tabla_alumnos();
//Extraemos el id del alumno
$id_editar=$_GET['id'];

$indice_editar=buscar_tabla($alumnos,'id',$id_editar);
#Creamos array asociativo con los detalles del nuevo alumno
$registro=[
    'id'=>$id,
    'nombre'=>$nombre,
    'poblacion'=>$poblacion,
    'curso'=>$curso
];

#Añadir nuevo alumno a la tabla
$alumnos[$indice_editar]=$registro;

//otra opcion es array_push($alumnos,$registro);
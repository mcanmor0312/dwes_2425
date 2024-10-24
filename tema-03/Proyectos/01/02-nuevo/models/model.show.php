<?php

/**
 * Editar un registro
 */

$id = $_GET['id'];
$alumnos = get_tabla_alumnos();
$indice_mostrar = buscar_tabla($alumnos, 'id', $id);

if ($indice_mostrar === false) {

    echo "ERROR: alumnos no econtrado";
    exit();
}
//Creo el array registro solo con los detalles del alumno
$registro=$alumnos[$indice_mostrar];


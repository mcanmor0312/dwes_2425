<?php

/**
 * Editar un registro
 */

$id = $_GET['id'];
$libros = get_tabla_libros();
$indice_mostrar = buscar_tabla($libros, 'id', $id);

if ($indice_mostrar === false) {

    echo "ERROR: alumnos no econtrado";
    exit();
}
//Creo el array registro solo con los detalles del Libro
$registro=$libros[$indice_mostrar];


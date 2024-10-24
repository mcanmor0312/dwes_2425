<?php
    /*
        Modelo: model.edit.php
        Descripción: Muestra formulario con los detalles editables de un libro

        Método GET:
            - id libro que se desea editar
    */

    # Cargo id del alumno que voy a editar
    $id = $_GET['id'];

    # Cargar la tabla de libros
    $libros = get_tabla_libros();

    # Buscar id en la tabla alumnos y devuelvo índice.
    $indice_editar = buscar_tabla($libros, 'id', $id);

    # Validar la búsqueda
    if ($indice_editar === false) {
        
        echo "ERROR: alumno no encontrado";
        exit();

    } 

    # Creo el array registro sólo con los detalles del libro
    $registro = $libros[$indice_editar];

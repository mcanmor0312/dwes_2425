<?php

/**
 * Clase: class.libros.php
 * Descripcion: definicion de la clase libros
 */

 class Class_libro
 {
    private $id;
    private $titulo;

    private $precio;

    private $paginas;

    private $autor;

    private $tematica;

    public function __construct($id=null, $titulo=null, $precio=0, $paginas=0, $autor=null, $tematica=[]){
        $this->$id=$id;
        $this->$titulo=$titulo;
        $this-> $precio=$precio;
        $this-> $paginas=$paginas;
        $this-> $autor=$autor;
        $this-> $tematica=$tematica;
        
        
    }

 }
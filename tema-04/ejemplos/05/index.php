<?php
#incluyo archivo de la clase libro
include("class/class.libros.php");
#creo un objeto de la clase libro
$libro1=new Class_libro();
#mostrar detalles clase libro
$libro1->setId(1);
$libro1->setTitulo("Me cago en la leshe");
$libro1->setPaginas(200);
$libro1->setPrecio(12);
$libro1->setAutor("Gandalf el gris");
$libro1->setTematica(["Novela", "Drama", "Romance"]);




echo'Id: '.$libro1->getId();
echo'<br>';
echo'Titulo: '.$libro1->getTitulo();
echo'<br>';
echo'Precio: '.$libro1->getPrecio();
echo'<br>';
echo'Paginas: '.$libro1->getPaginas();
echo'<br>';
echo'Autor: '.$libro1->getAutor();
echo'<br>';
echo'Tematica: '. implode(', ',$libro1->getTematica());
echo'<br>';
echo'<br>';
$libro2=new Class_libro(2,"Mikel Ender",12,33,"Pablo Mariquita",["Novela", "Drama", "Romance"]);
echo'Id: '.$libro2->getId();
echo'<br>';
echo'Titulo: '.$libro2->getTitulo();
echo'<br>';
echo'Precio: '.$libro2->getPrecio();
echo'<br>';
echo'Paginas: '.$libro2->getPaginas();
echo'<br>';
echo'Autor: '.$libro2->getAutor();
echo'<br>';
echo'Tematica: '. implode(', ',$libro2->getTematica());
echo'<br>';

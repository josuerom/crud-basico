<?php
   require_once('crud_libro.php');
   require_once('libro.php');

   $crud = new CrudLibro();
   $libro = new Libro();
   $autor = new Libro();
   $telefono = new Libro();
   $direccion = new Libro();

   if (isset($_POST['insertar'])) {
      $libro -> setNombre($_POST['nombre']);
      $autor -> setAutor($_POST['autor']);
      $telefono -> setTelefono($_POST['telefono']);
      $direccion -> setDireccion($_POST['direccion']);
      $crud -> insertar($libro, $autor, $telefono, $direccion);
      header('Location: index.php');
   } elseif (isset($_POST['actualizar'])) {
      $libro -> setId($_POST['id']);
      $libro -> setNombre($_POST['nombre']);
      $crud -> actualizar($libro);
      header('Location: index.php');
   } elseif ($_GET['accion'] == 'e') {
      $crud -> eliminar($_GET['id']);
      header('Location: index.php');
   } elseif ($_GET['accion'] == 'a') {
      header('Location: actualizar.php');
   }
?>
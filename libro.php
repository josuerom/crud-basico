<?php
   class Libro {
      private $id;
      private $nombre;
      private $autor;
      private $telefono;
      private $direccion;
      
      function __construct() {}

      public function getId() {
         return $this -> id;
      }
      public function setId($id) {
         $this -> id = $id;
      }
      public function getNombre() {
         return $this -> nombre;
      }
      public function setNombre($nombre) {
         $this -> nombre = $nombre;
      }
      public function getAutor() {
         return $this -> autor;
      }
      public function setAutor($autor) {
         $this -> autor = $autor;
      }
      public function getTelefono() {
         return $this -> telefono;
      }
      public function setTelefono($telefono) {
         $this -> telefono = $telefono;
      }
      public function getDireccion() {
         return $this -> direccion;
      }
      public function setDireccion($direccion) {
         $this -> direccion = $direccion;
      }
   }
?>
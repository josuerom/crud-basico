<?php
   class Libro {
      private $id;
      private $nombre;
      
      function __construct() {}

      public function getNombre() {
         return $this -> nombre;
      }
      public function setNombre($nombre) {
         $this -> nombre = $nombre;
      }
      public function getId() {
         return $this -> id;
      }
      public function setId($id) {
         $this -> id = $id;
      }
   }
?>
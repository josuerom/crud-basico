<?php
   require_once('crud_libro.php');
   require_once('libro.php');

   $crud = new CrudLibro();
   $libro = new Libro();
   $listaLibros = $crud -> mostrar();
?>

<html>
<head>
<body>
   <table border=1>
      <head>
         <td>Nombre</td>
         <td>Actualizar</td>
         <td>Eliminar</td>
      </head>
      <body>
         <?php foreach($listaLibros as $libro) {?>
         <tr>
            <td><?php echo $libro -> getNombre() ?></td>
            <td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a></td>
            <td><a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a></td>
         </tr>
         <?php }?>
      </body>
   </table>
   <a href="index.php">Volver</a>
</body>
</head>
</html>
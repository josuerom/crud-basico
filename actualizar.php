<?php
   require_once('crud_libro.php');
   require_once('libro.php');

   $crud = new CrudLibro();
   $libro = new Libro();
   $libro = $crud -> obtenerLibro($_GET['id']);
?>

<html>
<head>
   <title>Actualizar Libro</title>
</head>
<body>
   <from action='administrar_libro.php' method='post'>
      <table>
         <tr>
            <input type='hidden' name='id' value='<?php echo $libro -> getId() ?>'>
            <td>Nombre libro:</td>
            <td> <input type='text' name='nombre' value='<?php echo $libro -> getNombre() ?>'> </td>
         </tr>
      </table>
      <input type='hidden' name='actualizar' value='actualizar'>
      <a href="index.php">Volver</a>
   </from>
</body>
</html>
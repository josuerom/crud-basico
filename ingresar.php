<html>
<head>
   <title>Ingresar Libro</title>
   <link rel="stylesheet" href="estilos.css">
</head>
<header>
   Ingresar los datos del libro
</header>
<form action="administrar_libro.php" method="post">
   <table>
      <tr>
         <td>Nombre libro:</td>
         <td> <input type="text" name="nombre"> </td>
      </tr>
      <tr>
         <td>Nombre del autor:</td>
         <td> <input type="text" name="autor"> </td>
      </tr>
      <tr>
         <td>Telefono:</td>
         <td> <input type="text" name="telefono"> </td>
      </tr>
      <tr>
         <td>Dirección:</td>
         <td> <input type="text" name="direccion"> </td>
      </tr>
      <input type="hidden" name="insertar" value="insertar">
   </table>
   <input type="submit" value="Guardar">
   <a href="index.php">Volver</a>
</form>
</html>
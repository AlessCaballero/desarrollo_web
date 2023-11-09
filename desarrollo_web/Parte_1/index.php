
<!DOCTYPE html>
<html lang="en">
<head>
<h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
        <title>ALESS CABALLERO</title>
        <body>


<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

    <h1>Productos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Sección</th>
            <th>Producto</th>
            <th>Origen</th>
            <th>Importado</th>
            <th>Precio</th>
        </tr>



</head>

<?php
require_once("conexion.php");

if (!$resultado) {
    die("La consulta ha fallado: " . mysqli_error($conexion));
}

while ($fila = mysqli_fetch_assoc($resultado)) {


    echo "<tr>";
    echo "<td>" . $fila['id_producto'] . "</td>";
    echo "<td>" . $fila['Seccion'] . "</td>";
    echo "<td>" . $fila['Producto'] . "</td>";
    echo "<td>" . $fila['Origen'] . "</td>";
    echo "<td>" . $fila['Importado'] . "</td>";
    echo "<td>" . $fila['precio'] . "</td>";
    echo "</tr>";
}

mysqli_close($conexion);

?>

</h1>

</body>
</html>


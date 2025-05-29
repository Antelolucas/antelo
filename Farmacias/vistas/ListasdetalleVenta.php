<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "menu.php";
?>
<DIV class="container">
    <h3>Lista medicamneto</h3>
    <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Agregar medicamneto</a>

<div class="row">
    <table class="table">
        <thead>
        <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>cantidad</th>
        <th>Fecha Registro</th>
        <th>Cantidad</th>
        <th>Costo</th>
        <th>Codigo de barra</th>
    </tr>
        </thead>
    <tbody>
        
    <?php
        include('../modelos/conexion.php');

        $query = "SELECT
                    dv.id_detalleVenta,
                    m.Nombre AS nombre_medicamento,
                    dv.cantidad,
                    dv.precio,
                    c.Nombre AS nombre_cliente,
                    c.Apellido AS apellido_cliente
                  FROM
                    detalle_venta dv
                  JOIN
                    medicamento m ON dv.id_medicamento = m.id_Medicamento
                  JOIN
                    cliente c ON dv.id_cliente = c.id_cliente";

        $resultado = $conexion->query($query);

        if ($resultado) {
            if ($resultado->num_rows > 0) {
                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID Detalle Venta</th>";
                echo "<th>Medicamento</th>";
                echo "<th>Cantidad</th>";
                echo "<th>Precio</th>";
                echo "<th>Cliente</th>";
                echo "<th>Acciones</th>"; 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['id_detalleVenta'] . "</td>";
                    echo "<td>" . $fila['nombre_medicamento'] . "</td>";
                    echo "<td>" . $fila['cantidad'] . "</td>";
                    echo "<td>" . $fila['precio'] . "</td>";
                    echo "<td>" . $fila['nombre_cliente'] . " " . $fila['apellido_cliente'] . "</td>";
                    echo "<td class='actions'>";
                    echo "<a href='editarDetalleVenta.php?id=" . $fila['id_detalleVenta'] . "'>Editar</a>";
                    echo "<a href='eliminarDetalleVenta.php?id=" . $fila['id_detalleVenta'] . "' onclick='return confirm(\"¿Estás seguro de eliminar este detalle de venta?\")'>Eliminar</a>";
                    echo "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>No hay detalles de venta registrados.</p>";
            }
            $resultado->free();
        } else {
            echo "<p class='error'>Error al consultar los detalles de venta: " . $conexion->error . "</p>";
        }

        $conexion->close();
    ?>
 </body>
</html>
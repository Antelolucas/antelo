<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Venta</title>
</head>
<body>

    <form action="../controladores/detalle_venta.php" method="post">

        <label for="id_medicamento">ID Medicamento:</label>
        <select name="id_medicamento" id="id_medicamento" required>
            <option value="">Seleccionar Medicamento</option>
            <?php
                include('../modelos/conexion.php');
                $query_medicamentos = "SELECT id_Medicamento, Nombre FROM medicamento";
                $resultado_medicamentos = $conexion->query($query_medicamentos);
                if ($resultado_medicamentos) {
                    while ($fila_medicamento = $resultado_medicamentos->fetch_assoc()) {
                        echo "<option value='" . $fila_medicamento['id_Medicamento'] . "'>" . $fila_medicamento['Nombre'] . "</option>";
                    }
                    $resultado_medicamentos->free();
                } else {
                    echo "<option value=''>Error al cargar medicamentos</option>";
                }
                $conexion->close();
            ?>
        </select>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" id="precio" required>

        <label for="id_cliente">ID Cliente:</label>
        <select name="id_cliente" id="id_cliente" required>
            <option value="">Seleccionar Cliente</option>
            <?php
                include('../modelos/conexion.php');
                $query_clientes = "SELECT id_cliente, Nombre, Apellido FROM cliente";
                $resultado_clientes = $conexion->query($query_clientes);
                if ($resultado_clientes) {
                    while ($fila_cliente = $resultado_clientes->fetch_assoc()) {
                        echo "<option value='" . $fila_cliente['id_cliente'] . "'>" . $fila_cliente['Nombre'] . " " . $fila_cliente['Apellido'] . "</option>";
                    }
                    $resultado_clientes->free();
                } else {
                    echo "<option value=''>Error al cargar clientes</option>";
                }
                $conexion->close();
            ?>
        </select>

        <button type="submit">Guardar Detalle de Venta</button>
    </form>
</body>
</html>
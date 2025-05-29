<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorías</title>
</head>
<body>
    <h1>Lista de Categorías</h1>

    <?php
        include('../modelos/conexion.php');

        if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'categoria_creada') {
            echo "<p class='success'>Categoría creada exitosamente.</p>";
        }
        $query = "SELECT id_Categoria, Nombre, Descripcion FROM categoria";
        $resultado = $conexion->query($query);

        if ($resultado) {
            if ($resultado->num_rows > 0) {
                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nombre</th>";
                echo "<th>Descripción</th>";
                echo "<th>Acciones</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['id_Categoria'] . "</td>";
                    echo "<td>" . $fila['Nombre'] . "</td>";
                    echo "<td>" . $fila['Descripcion'] . "</td>";
                    echo "<td class='actions'>";
                    echo "<a href='editarCategoria.php?id=" . $fila['id_Categoria'] . "'>Editar</a>";
                    echo "<a href='eliminarCategoria.php?id=" . $fila['id_Categoria'] . "' onclick='return confirm(\"¿Estás seguro de eliminar esta categoría?\")'>Eliminar</a>";
                    echo "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>No hay categorías registradas.</p>";
            }
            $resultado->free();
        } else {
            echo "<p class='error'>Error al consultar las categorías: " . $conexion->error . "</p>";
        }

        $conexion->close();
    ?>
</body>
</html>
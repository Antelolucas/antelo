<?php
    include('../modelos/conexion.php');

    $nombre_categoria = $_POST['nombre'];
    $descripcion_categoria = $_POST['descripcion'];

    if (empty($nombre_categoria)) {
        echo "Error: El nombre de la categoría es requerido.";
        exit();
    }

    $query = "INSERT INTO `categoria`(`Nombre`, `Descripcion`)
     VALUES ('$nombre_categoria','$descripcion_categoria')";

    $resultado = $conexion->query($query);

    if ($resultado) {
      
        header("location:../vistas/listaCategoria.php "); 
    } else {
        
        echo "Error al guardar la categoría: ";
    }

    $conexion->close();
?>
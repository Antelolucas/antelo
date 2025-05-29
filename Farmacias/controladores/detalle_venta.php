<?php
    include('../modelos/conexion.php');

  

    $id_medicamento = $_POST['id_medicamento']; 
    $cantidad = $_POST['cantidad'];          
    $precio = $_POST['precio'];               

   
    $id_cliente = $_POST['id_cliente']; 

    
    if (empty($id_medicamento) || empty($cantidad) || empty($precio) || empty($id_cliente)) {
        echo "Error: Todos los campos del detalle de venta son requeridos.";
        exit();
    }

    
    $query_detalle = "INSERT INTO `detalle_venta`(`id_medicamento`, `cantidad`, `precio`, `id_cliente`)
        VALUES ('$id_medicamento','$cantidad','$precio','$id_cliente')";

    $res_detalle = $conexion->query($query_detalle);
    if ($res_detalle) {
        
        header("location:../vistas/listaDetalleVenta.php"); 

    } else {
        echo "Error al guardar el detalle de la venta: ";
    }

    $conexion->close();
?>
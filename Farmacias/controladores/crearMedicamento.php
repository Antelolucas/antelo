<?php
    include('../modelos/conexion.php');

    $nom= $_POST['nombre'];
    $des= $_POST['descripcion'];
    $fe= $_POST['fecha_registro'];
    $can= $_POST['cantidad'];
    $cos= $_POST['costo'];
    $cod= $_POST['codigo_barra'];
    $cate= $_POST['id_categoria'];
    echo $cate;


    $query="INSERT INTO `medicamento`(`Nombre`, `descripcion`, `fecha_registro`, `cantidad`, `costo`, `codigo_barra`, `id_categoria`) 
    VALUES ('$nom','$des','$fe','$can','$cos','$cod','$cate')";

    $res=$conexion->query($query);
    if($res){
        header("location:../vistas/listaMedicamento.php");
    } else {
        echo "no se guardo: ";
    }

?>
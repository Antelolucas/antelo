<?php
    include('../modelos/conexion.php');

    $nom= $_POST['nombre'];
    $ap= $_POST['apellido'];
    $tel= $_POST['telefono'];
    $ge= $_POST['genero'];
    $dire= $_POST['direccion'];

    $query="INSERT INTO `cliente`(`Nombre`, `Apellido`, `telefono`, `genero`, `Direccion`) VALUES  ('$nom','$ap','$tel','$ge','$dire')";

    $res=$conexion->query($query);
    if($res){

        header("location:../vistas/listaCliente.php");
    }else{

        echo"no se guardo";
    }

?>
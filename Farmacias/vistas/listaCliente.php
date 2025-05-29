<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include "menu.php"
 ?>
 <div class="container">
    <h1>Lista de Registro Cliente</h1>
    <div class="row">
     <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Genero</th>
            <th>Direccion</th>
        </tr>
        </thead>
        <tbody>
        <?php
           include ("../modelos/conexion.php");
           $query="SELECT `id_cliente`, `Nombre`, `Apellido`, `telefono`, `genero`, `Direccion` FROM `cliente`  ";
        $res=$conexion->query($query);
        while($row=$res->fetch_assoc())
        {
            ?>
            <tr>
           <td><?php echo $row['id_cliente'];?></td>
            <td><?php echo $row['Nombre'];?></td>
            <td><?php echo $row['Apellido'];?></td>
            <td><?php echo $row['telefono'];?></td>
            <td><?php echo $row['genero'];?></td>
            <td><?php echo $row['Direccion'];?></td>

            </tr>
        <?php
        }
        ?>
       
        </tbody>
     </table>
       
    </div>
 </div>
</body>
</html>
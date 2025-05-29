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
    <div class="container">
        <h2>Registro de Medicamento</h2>
        <div class=row>
            <div class="col-md-6">
                <form  method="POST" action="../controladores/crearMedicamento.php">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input class="form-control" name="nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input class="form-control" name="descripcion" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha Registro</label>
                        <input class="form-control" name="fecha_registro" type="date">
                    </div>
                     <div class="form-group">
                        <label for="">cantidad</label>
                        <input class="form-control" name="cantidad" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Costo</label>
                        <input class="form-control" name="costo" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">codigo de Barra</label>
                        <input class="form-control" name="codigo_barra" type="text">
                    </div>
                    <br>
                    <div class="form-group mb-3">
                        <label for="id_categoria">Seleccione Categoría</label>
                        <select name="id_categoria" required class="form-control" id="id_categoria"> <option value="">-- Seleccione --</option> 
                        <?php
                    
                            include ("../modelos/conexion.php");

                            $query_categorias = "SELECT id_categoria AS id_categoria, Nombre FROM `categoria` ORDER BY Nombre ASC";
                            $res_categorias = $conexion->query($query_categorias);

                            if ($res_categorias && $res_categorias->num_rows > 0) {
                                while ($row_cat = $res_categorias->fetch_assoc()) { 
                                    echo "<option value='" . $row_cat['id_categoria'] . "'>" . htmlspecialchars($row_cat['Nombre']) . "</option>";
                                }
                            } else {
                                echo "<option value=''>No hay categorías disponibles</option>";
                            }
                            $conexion->close();
                        ?>
                        </select>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <button class="btn btn-primary"  type="submit"> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        ///require_once "referencias.php";
        include "referencias.php";
    ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="Inicio.html">Farmacia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gestor
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="crearCliente.php">Registro de cliente</a></li>
                        <li><a class="dropdown-item" href="listaCliente.php">Lista cliente</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="crearMedicamento.php">Registro de Medicamento</a></li>
                        <li><a class="dropdown-item" href="listaMedicamento.php">Lista Medicamento</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="ListasdetalleVenta.php">Detalle Venta</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="listaCategoria.php">Lista Categoría</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crearCliente.php" tabindex="-1" aria-disabled="true">Crear Cliente</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="crearMedicamento.php" tabindex="-1" aria-disabled="true">Crear Medicamento</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="ListasdetalleVenta.php" tabindex="-1" aria-disabled="true">Regsitro Detalle Venta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listaCategoria.php" tabindex="-1" aria-disabled="true">lista Categoria</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

</body>
</html>
<?php
    require_once "modelos/productos.php";

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="text-muted fw-light m-0"><a href="?sec=home" class="text-muted fw-light text-decoration-none">Inicio</a> / <a class="text-black fw-bold text-decoration-none"><?php echo ucfirst($_GET['sec']); ?></a></p>
        </div>
        
        <div class="col-md-6 d-flex justify-content-md-end align-items-center mt-4 m-md-0">
            <p class="m-0">Ordenar por:</p>
            <select class="mx-2 form-select-sm" aria-label=".form-select-sm example" name="orderSelector" id="orderSelector">
                <option value="0" selected>Aleatorio</option>
                <option value="1">Precio: Menor a Mayor</option>
                <option value="2">Precio: Mayor a Menor</option>
                <option value="3">A - Z</option>
                <option value="4">Z - A</option>
                <option value="5">Más Nuevo al más Viejo</option>
                <option value="6">Más Viejo al más Nuevo</option>
            </select>
        </div>
    </div>
</div>

<!-- Categorias -->

<div class="album pb-3 pt-3 pt-md-5">
    <div class="container">
        <div class="row">
            


            <?php
                require_once "views/lista_productos.php";
            ?>
        </div>
    </div>
</div>
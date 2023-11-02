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
            <div class="col-md-3">
                <div class="contact-form-area fix mtb-30 d-none d-md-block">
                    <h4 class="mb-4" style="font-weight: 700;">Categorias principales</h4>
                    <p style="text-decoration: none;">
                        <a class="anchor_links2" href="?sec=categorias&categ=dc_comics">DC Comics</a>
                        <a class="anchor_links2" href="?sec=categorias&categ=gift_cards">Gift Card</a>
                        <a class="anchor_links2" href="?sec=categorias&categ=historietas">Historieta</a>
                        <a class="anchor_links2" href="?sec=categorias&categ=manga">Manga</a>
                        <a class="anchor_links2" href="?sec=categorias&categ=marvel">Marvel</a>
                        <a class="anchor_links2" href="?sec=categorias&categ=pre_ventas">Pre Ventas</a>
                        <a class="anchor_links2" href="?sec=categorias&categ=trading_cards">Trading cards</a>
                    </p>
                </div>
                <p class="d-md-none fw-bold m-0">Categorias principales</p>
                <div class="d-md-none d-flex slider-container mb-4">
                <div class="d-md-none d-flex cuadrado my-2"><a class="anchor_links" href="?sec=categorias&categ=dc_comics">DC Comics</a></div>
                    <div class="d-md-none d-flex cuadrado my-2"><a class="anchor_links" href="?sec=categorias&categ=gift_cards">Gift Card</a> </div>
                    <div class="d-md-none d-flex cuadrado my-2"><a class="anchor_links" href="?sec=categorias&categ=historietas">Historieta</a></div>
                    <div class="d-md-none d-flex cuadrado my-2"><a class="anchor_links" href="?sec=categorias&categ=manga">Manga</a> </div>
                    <div class="d-md-none d-flex cuadrado my-2"><a class="anchor_links" href="?sec=categorias&categ=marvel">Marvel</a> </div>
                    <div class="d-md-none d-flex cuadrado my-2"><a class="anchor_links" href="?sec=categorias&categ=pre_ventas">Pre Ventas</a></div>
                    <div class="d-md-none d-flex cuadrado my-2"><a class="anchor_links" href="?sec=categorias&categ=trading_cards">Trading cards</a></div>
                </div>
            </div>


            <!-- Publicaciones -->

            <div class="col-md-9">
                <div class="album">
                    <div class="container">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">
                            <?php foreach($productos as $producto){ ?>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="linea-superior"></div>
                                        <a href="#">
                                            <img class="bd-placeholder-img  img-fluid" src="<?php echo $producto["portada"] . "1.png"; ?>"
                                                alt="manga">
                                        </a>
                                        <div class="card-body">
                                            <p class="card-text text-center">
                                                <a href="?sec=producto&prodId=<?php echo $producto["id"] ?>" class="no-deco"><?php echo $producto["titulo"]; ?></a>
                                                <br>
                                                <?php echo "$" . $producto["precio"]; ?>
                                                <br>
                                                <button class="btn btn-success btn-block">AGREGAR AL CARRITO</button>
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="centrar-boton">
                            <button class="btn btn-dark btn-block btn-primary mx-autos">MOSTRAR MAS PRODUCTOS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once "modelos/home.php";
?>

<!-- Carrusel -->
<div class="">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/WhatsApp Image 2023-04-27 at 10.50.30 AM.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/WhatsApp Image 2023-04-27 at 10.50.30 AM.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/WhatsApp Image 2023-04-27 at 10.50.30 AM.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

<br>

<!-- Categorias -->

<div class="album py-5 ">
    <div class="container">
        <div class="row">
            <h1 class="text-center pb-md-5"> NUESTRAS PUBLICACIONES </h1>
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
                            <button class="btn btn-dark btn-block btn-primary mx-autos">VER TODOS LOS
                                PRODUCTOS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- OFERTAS  -->

<div class="container">
    <div class="row ">
        <div class="col">
            <h2 class="text-center ">OFERTAS</h2>
            <div class="album py-5">
                <div class="container">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card border-0">
                                <div class="linea-superior"></div>
                                <a href="#">
                                    <img class="bd-placeholder-img card-img-top img-fluid" src="img/demon10.png"
                                        alt="manga">
                                </a>
                                <div class="card-body">
                                    <p class="card-text text-center">
                                        <a href="#" class="no-deco"> KAKETSU NO MIERDA VOL.10 </a><br>
                                        $2.500 <br>
                                        <button class="btn btn-dark btn-block">Agregar al Carrito</button>

                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-0">
                                <div class="linea-superior"></div>
                                <a href="#">
                                    <img class="bd-placeholder-img card-img-top img-fluid" src="img/demon10.png"
                                        alt="manga">
                                </a>
                                <div class="card-body">
                                    <p class="card-text text-center">
                                        <a href="#" class="no-deco"> KAKETSU NO MIERDA VOL.10 </a><br>
                                        $2.500 <br>
                                        <button class="btn btn-dark btn-block">Agregar al Carrito</button>

                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0">
                                <div class="linea-superior"></div>
                                <a href="#">
                                    <img class="bd-placeholder-img card-img-top img-fluid" src="img/demon10.png"
                                        alt="manga">
                                </a>
                                <div class="card-body">
                                    <p class="card-text text-center">
                                        <a href="#" class="no-deco"> KAKETSU NO MIERDA VOL.10 </a><br>
                                        $2.500 <br>
                                        <button class="btn btn-dark btn-block">Agregar al Carrito</button>

                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
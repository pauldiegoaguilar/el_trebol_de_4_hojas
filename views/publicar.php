<div class="container"><!--
    <p class="text-muted fw-light"><a href="?sec=home" class="text-muted fw-light text-decoration-none">Inicio</a> / <a href="?sec=categorias&categ=<?php echo ($producto['nombreCate']); ?>" class="text-muted fw-light text-decoration-none"><?php echo ucwords($producto['nombreCate']); ?></a> / <a href="?sec=categorias&categ=<?php echo ($producto['nombreCate']) . '&sub_categ=' . $producto['nombreEdit']; ?>" class="text-muted fw-light text-decoration-none"><?php echo ucwords($producto['nombreEdit']); ?></a> / <a class="text-black fw-bold text-decoration-none"><?php echo $producto['titulo']; ?></a></p>
-->
</div>

<div class="album pt-2">
    <div class="container">
        <div class="row">
            <div id="portada-contenedor" style="max-height: 550px; min-height: 400px;" class="col-md-7 d-flex p-0 px-md-3">
                <div id="portada" class="w-100 portada" style="background-repeat: no-repeat; background-size:contain; background-position: 50% 50%;">
                    <input type="file" class="d-none" name="imgUploader" id="imgUploader" accept="image/png, image/gif, image/jpeg, image/webp">
                </div>
            </div>

            <div class="col-md-5">
                <div class="album">
                    <div class="row">
                        <div style="max-height: 550px; min-height: 400px;">
                            <div class="mt-4 mt-md-0">
                                <h6 class="fw-lighter">TITULO:</h6>
                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="KIMETSU NO YAIBA VOL.01">
                                <br>
                                <h6 class="fw-lighter">PRECIO:</h6>
                                <div class="input-group">
                                    <span class="input-group-text text-success">$</span>
                                    <input type="number" class="form-control text-success" name="precio" id="precio" min="1" placeholder="3000">
                                </div>
                                <br>
                                <h6 class="fw-lighter">CATEGORIA:</h6>
                                <select class="form-select" id="categSelector">
                                    <option value="0" selected>Seleccione una categoria...</option>
                                    <option value="1" class="optionSelect">Manga</option>
                                    <option value="2" class="optionSelect">Revista</option>
                                    <option value="3" class="optionSelect">Marvel</option>
                                    <option value="4" class="optionSelect">DC Comics</option>
                                    <option value="5" class="optionSelect">Trading Cards</option>
                                    <option value="6" class="optionSelect">Pre-ventas</option>
                                </select>
                                <br>
                                <h6 class="fw-lighter">EDITORIAL:</h6>
                                <select class="form-select" id="editSelector" disabled>
                                    <option value="0" selected>Seleccione una editorial...</option>
                                </select>
                                <br>
                                <h6 class="fw-lighter">STOCK:</h6>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" value="1" placeholder="0" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mt-4">
                <h4 class="fw-bold">Descripcion:</h4>
                <textarea class="form-control fw-lighter" placeholder="Descripcion" style="resize: none;" id="descripcion" maxlength="2000" rows="13"></textarea>
            </div>
            <div class="my-3 d-flex justify-content-center">
                <input type="button" class="mx-3 btn rounded btn-secondary" value="CANCELAR">
                <input type="button" class="mx-3 btn rounded btn-success" value="PUBLICAR">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <p class="text-start">Inicio / Publicaciones</p>
    <div class="row justify-content-center">
        <div class="col-5">
            <div class=" d-flex justify-content-center align-items-center position-relative" style="max-width: 1000px; min-height: 330px;" id="fileDisplayer">
                <input id="fileSelector" name="fileSelector" type="file" class="opacity-0 w-75 h-50" onchange="previousView(this);" accept="image/*" required>
                <label for="fileSelector" class="position-absolute text-center rounded border border-dark w-100 h-75">
                    <p class="display-2 my-4 text-muted">+</p>
                    <p class="text-dark">Seleccione una imagen</p>
                </label>
            </div>
            <div class="move">
                <div class="d-block align-items-center">
                    <p class="my-2 mx-2">PRODUCTO</p>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Revista</option>
                        <option value="1">Manga</option>
                        <option value="2">Libro</option>
                        <option value="3">Cuento</option>
                        <option value="4">Comics</option>
                    </select>
                </div>
                <div class="d-block align-items-center my-3">
                    <p class="my-2 mx-2">EDITORIAL</p>
                    <input type="text" class="form-control border-dark border-2">
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="d-block">
                <div class="d-block my-4">
                    <p class="my-1">TITULO</p>
                    <input type="text" class="form-control border-dark border-2">
                </div>
                <div class="d-block my-4">
                    <p class="my-1">PRECIO</p>
                    <input type="number" placeholder="0" min="0" max="1000000" class="form-control border-dark border-2">
                </div>
                <div class="d-block my-4">
                    <p class="my-1">STOCKS</p>
                    <input type="number" placeholder="0" min="0" max="1000000" class="form-control border-dark border-2">
                </div>
                <div class="form-group">
                    <p class="my-1">DESCRIPCION</p>
                    <textarea name="descripcion" class="form-control" rows="5" placeholder="TANJIRO FUE UN NORTEÑO QUE LE GUSTA SU HERMANA [...]"></textarea>
                </div>

            </div>
        </div>
        <div class="d-flex my-4 align-items-center">
            <button type="button" class="btn btn-success">PUBLICAR</button>
            <button type="button" class="btn btn-danger">CANCELAR</button>
        </div>
    </div>


</div>
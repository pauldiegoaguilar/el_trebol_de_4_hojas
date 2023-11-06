<div class="container h-100 text-center form-group ">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <form class="p-4 rounded mb-4" action="modelos/sign-up.php" method="POST">
                <div class="form-group text-start">
                    <label for="email">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="name" placeholder="Ej: elmasprokespro" required>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" required>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="phoneNumber">Telefono (Opcional)</label>
                    <input type="tel" class="form-control rounded-0" id="phoneNumber" name="tel" placeholder="Ejemplo: XX XXXX-XXXX" pattern="[0-9]{2} [0-9]{4}-[0-9]{4}">
                </div>
                <div class="form-group my-2 text-start">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="pass" required>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="password">Repita la contraseña</label>
                    <input type="password" class="form-control" id="password" name="passVerif" required>
                </div>
                <button class="btn btn-dark " type="button" aria-expanded="false">Crear Cuenta</button>
                <p class="mt-3">¿Ya tienes una Cuenta? <a href="?sec=login" class="delate-a">Inicia Sesion</a></p>
            </form>
        </div>
    </div>
</div>
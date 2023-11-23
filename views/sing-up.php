<div class="container h-100 text-center form-group ">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <form class="p-4 rounded mb-4" action="modelos/sign-up.php" id="formSignUp" method="POST">
                <div class="form-group text-start">
                    <label for="nameSign">Nombre</label>
                    <input type="text" class="form-control" id="nameSign" name="name" placeholder="Ej: TorreZ297" required>
                </div>
                <div class="form-group text-start">
                    <label for="lastNameSign">Apellido</label>
                    <input type="text" class="form-control" id="lastNameSign" name="lastName" placeholder="Ej: PlasCencia" required>
                </div>
                <div class="form-group my-2 text-start">
                    <label for="emailSign">Correo Electrónico</label>
                    <input type="email" class="form-control" id="emailSign" name="email" placeholder="email@email.com" required>
                    <p class="text-danger my-0" id="errorEmail" hidden>El correo electronico esta en un formato incorrecto.</p> 
                </div>
                <div class="form-group my-2 text-start">
                    <label for="phoneSign">Telefono (Opcional)</label>
                    <input type="tel" class="form-control rounded-0" id="phoneSign" name="tel"  placeholder="Ejemplo: 11 6477-5839">
                    <p class="text-danger my-0" id="errorPhone" hidden>El numero de telefono esta en un formato incorrecto.</p> 
                </div>
                <div class="form-group my-2 text-start">
                    <label for="passSign">Contraseña</label>
                    <input type="password" class="form-control" id="passSign" name="pass" autocomplete="off" required>
                    <p class="text-danger my-0" id="errorPassFormat" hidden>La contraseña esta en un formato incorrecto.(una mayuscula, un numero, un caracter especial, longitud mayor a 8 caracteres).</p> 
                </div>
                <div class="form-group my-2 text-start">
                    <label for="passVerifSign">Repita la contraseña</label>
                    <input type="password" class="form-control" id="passVerifSign" autocomplete="off" required>
                    <p class="text-danger my-0" id="errorVerifPass" hidden>Las contraseñas no coinciden.</p> 
                </div>
                <button class="btn btn-dark" type="button" onclick="verifRegistro()" aria-expanded="false">Crear Cuenta</button>
                <p class="mt-3">¿Ya tienes una Cuenta? <a href="?sec=login" class="delate-a">Inicia Sesion</a></p>
            </form>
        </div>
    </div>
</div>
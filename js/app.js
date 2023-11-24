/* --------------- PRODUCTO - IMAGEN ZOOM --------------- */

try {
    var portada_contenedor = document.getElementById('portada-contenedor');
    var portada = portada_contenedor.querySelector('#portada');

    portada_contenedor.addEventListener('mousemove', (e) => {
        if (window.innerWidth < 768) { return; }

        var offsetX = e.offsetX ? e.offsetX : 0;
        var offsetY = e.offsetY ? e.offsetY : 0;
        var x = offsetX / portada.offsetWidth * 100;
        var y = offsetY / portada.offsetHeight * 100;

        portada.style.backgroundPosition = x + '% ' + y + '%';
        portada.style.backgroundSize = "120%";
        portada.style.cursor = "zoom-in";
    })

    portada_contenedor.addEventListener('mouseout', () => {
        if (window.innerWidth < 768) { return; }

        portada.style.backgroundPosition = '50% 50%';
        portada.style.backgroundSize = "contain";
        portada.style.cursor = "default";
    })

} catch (error) {
    console.log("no selecciono un producto");
}

/* --------------- AGREGAR/EDITAR PRODUCTO - VISUALIZAR IMAGEN --------------- */

try {
    const imgUploader = document.getElementById('imgUploader');

    portada.addEventListener('click', () => {
        imgUploader.click();
    })

    imgUploader.addEventListener('change', function () {
        displayPicture(this);
        portada.setAttribute('class', 'removePortadaAfter w-100 portada');
    });

    function displayPicture(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                portada.setAttribute('style', "background-image: url('" + e.target.result + "'); ; background-repeat: no-repeat; background-size:contain; background-position: 50% 50%;");
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
} catch (error) {
    console.log("no esta agregando/editando un producto");
}

/* --------------- AGREGAR/EDITAR PRODUCTO - SELECTOR DE CATEGORIA Y EDITORIAL --------------- */


function removeList(options) {
    options.forEach(option => {
        option.remove();
    });
}

function fillList(options) {
    for (index in options) {
        editSelector.options[index] = new Option(options[index], index);
        editSelector.options[index].classList.add("optionSelect");
    }
}

try {
    const categSelector = document.getElementById('categSelector');
    const editSelector = document.getElementById('editSelector');
    
    categSelector.addEventListener('change', () => {
        editSelector.removeAttribute('disabled');
    
        let categVal = parseInt(categSelector.value);
    
        switch (categVal) {
            case 1:
                console.log("Manga");
                removeList(editSelector.querySelectorAll('.optionSelect'));
    
                let manga_array = {
                    1: 'Ivrea',
                    2: 'Ovni Press',
                    3: 'Panini',
                    4: 'Kemuri',
                    5: 'Planeta',
                    6: 'Distrito',
                    7: 'Utopia'
                };
    
                fillList(manga_array);
    
                break;
            case 2:
                console.log("Revista");
                removeList(editSelector.querySelectorAll('.optionSelect'));
    
                let revista_array = {
                    1: 'Ohlala!',
                    2: 'Cosa',
                    3: 'Fierro',
                    4: 'Lugares',
                    5: 'Rolling Stone'
                };
    
                fillList(revista_array);
    
                break;
            case 3:
                console.log("Marvel");
                removeList(editSelector.querySelectorAll('.optionSelect'));
    
                break;
            case 4:
                console.log("DC Comics");
                removeList(editSelector.querySelectorAll('.optionSelect'));
    
                break;
            case 5:
                console.log("Trading Cards");
                removeList(editSelector.querySelectorAll('.optionSelect'));
    
                break;
            case 6:
                console.log("Pre-ventas");
                removeList(editSelector.querySelectorAll('.optionSelect'));
    
                break;
            default:
                console.log("Nada");
                removeList(editSelector.querySelectorAll('.optionSelect'));
                editSelector.setAttribute('disabled', true);
    
                break;
        }
    
    })
    
} catch (error) {
    console.log("no se agrega producto");
}


/* --------------- PRODUCTO - BUSQUEDA --------------- */

function buscar(input) {
    var buscador = document.getElementById(`buscador${input}`);

    //console.log(buscador);
    var buscar = buscador.value;

    console.log(buscar);
    window.location.href = "?sec=search&q=" + buscar;
}

function enter(e) {
    if (e.key === 'Enter') {
        buscar(0);
    }
}


/* --------------- REGISTRO - VERIFICACION --------------- */

function verifRegistro() {
    function verifAge(texto){
        return parseInt(texto) > 12;
    }
    function verifDNI(texto){
        return parseInt(texto) > 10000000 && parseInt(texto) < 99999999;
    }
    function verifEmail(texto) {// verifica si el email contiene solo un "@" y termine con ".com"
        var expresionRegular = /^.*@.*\.com$/;
        var contadorArroba = (texto.match(/@/g) || []).length;
        return contadorArroba === 1 && expresionRegular.test(texto);
    }
    function phoneFormat(texto) {//verifica el formato del numero de telefono
        if(texto === ""){
            return true;
        }
        var expresionRegular = /^\d{2} \d{4}-\d{4}$/;
        return expresionRegular.test(texto);
    }
    function verifPass(texto) {//verifica la contraseña
        const requisitos = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]).{8,}$/;
        return requisitos.test(texto);
    }
    function SamePassVerif(pass1, pass2){
        return pass1 === pass2;
    }
    var name = document.getElementById("nameSign").value
    var lastName = document.getElementById("lastNameSign").value
    var email = document.getElementById("emailSign").value;
    var phone = document.getElementById("phoneSign").value;
    var age = document.getElementById("ageSign").value;
    var dni = document.getElementById("dniSign").value;
    var pass = document.getElementById("passSign").value;
    var passVerif = document.getElementById("passVerifSign").value;
    if (name !== "" && lastName !== "" && verifEmail(email) && phoneFormat(phone) && verifAge(age) && verifDNI(dni) && verifPass(pass) && SamePassVerif(pass, passVerif)) {
        document.getElementById("formSignUp").submit();
    }else{
        if(name === ""){
            document.getElementById("errorName").removeAttribute("hidden");
        }else{
            document.getElementById("errorName").setAttribute("hidden", true);
        }
        if(lastName === ""){
            document.getElementById("errorLastName").removeAttribute("hidden");
        }else{
            document.getElementById("errorLastName").setAttribute("hidden", true);
        }
        if(!verifEmail(email)){
            document.getElementById("errorEmail").removeAttribute("hidden");
        }else{
            document.getElementById("errorEmail").setAttribute("hidden", true);
        }
        if(!phoneFormat(phone)){
            document.getElementById("errorPhone").removeAttribute("hidden");
        }else{
            document.getElementById("errorPhone").setAttribute("hidden", true);
        }
        if(!verifAge(age)){
            document.getElementById("errorAge").removeAttribute("hidden");
        }else{
            document.getElementById("errorAge").setAttribute("hidden", true);
        }
        if(!verifDNI(dni)){
            document.getElementById("errorDni").removeAttribute("hidden");
        }else{
            document.getElementById("errorDni").setAttribute("hidden", true);
        }
        if(!SamePassVerif(pass, passVerif)){
            document.getElementById("errorVerifPass").removeAttribute("hidden");
        }else{
            document.getElementById("errorVerifPass").setAttribute("hidden", true);
        }
    }
}


/* --------------- PRODUCTOS - AGREAR AL CARRITO --------------- */

function agregarCarrito(idProd, idUser, cant){
    $.ajax({
        url: 'modelos/agregarCarrito.php',
        data: {prodID: idProd, userID: idUser, cantProd: cant},
        type: 'POST',
        success: function(response){
            if(response == 1){
                showAlert("El producto fue añadido al carrito correctamente", 1);
                actualizarCarrito();
            }else if(response == 0){
                errorAgregarCarrito();
            }else if(response == 3){
                showAlert("No fue posible agregar el producto al carrito por falta de stock", 2);
            }else{
                showAlert("Este producto ya fue añadido al carrito", 2);
            }
        },
        error: function(){
            errorAgregarCarrito();
        }
    })
}

function errorAgregarCarrito(){
    showAlert("No fue posible agregar el producto al carrito, debe iniciar sesion", 2);
}

function showAlert(message, iconNum){
    let contentModal = document.getElementById('contentModal');
    let modal = $("#msgModal");
    let HTMLmsg = "";

    if(iconNum == 1){
        HTMLmsg += `<span class="material-symbols-outlined text-success" style="font-size: 100px">check_circle</span><p class="text-success text-center fs-4">${message}</p>`;

    }else{
        HTMLmsg += `<span class="material-symbols-outlined text-warning" style="font-size: 100px">error</span><p class="text-warning text-center fs-4">${message}</p>`;
    }

    contentModal.innerHTML = HTMLmsg;

    modal.modal("show");

    setTimeout(() => {
        modal.modal('hide');
    }, 2500)

}

function actualizarCarrito(){
    let cartContent = document.getElementById('cartBody');
    
    var offcanvasElement = document.getElementById("offcanvasScrollingCarrito"); 
    var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

    let valor = 1;
    
    console.log('estoy actualizando el carrito');

    $.ajax({
        url: 'modelos/carrito.php',
        data: {get: valor},
        type: 'POST',
        dataType: 'json',
        success: function(cartProds){
            console.log(cartProds);

            let cartHTML = "";
            let totalPrice = 0;

            for (let i = 0; i < cartProds.length; i++) {
                totalPrice += cartProds[i]['precio'] * cartProds[i]['cantidad'];

                cartHTML += '<div class="row border border-1">';
                    cartHTML += '<div class="col-4 p-0">';
                        cartHTML += `<img class="w-100" src="${cartProds[i]['portada']}1.png">`;
                    cartHTML += '</div>';
                    cartHTML += '<div class="col-6">';
                        cartHTML += '<div class="row h-50 p-3">';
                            cartHTML += `<p class="p-0 m-0">${cartProds[i]['titulo']}</p>`;
                        cartHTML += '</div>';
                        cartHTML += '<div class="row h-50 align-items-end p-3">';
                            cartHTML += '<div class="d-flex p-0 justify-content-start">';
                                cartHTML += `<button type="button" ${cartProds[i]['cantidad'] < 2 ? '' : 'onclick="cambiarCantCarrito(-1, ' + cartProds[i]['cartId'] +')"'} class="px-2 py-1 bg-success text-white border-success rounded-start border border-3">-</button>`;
                                    cartHTML += `<p class="px-2 py-1 m-0 border-success border border-start-0 border-end-0 border-3">${cartProds[i]['cantidad']}</p>`;
                                cartHTML += `<button type="button" onclick="cambiarCantCarrito(1, ${cartProds[i]['cartId']})" class="px-2 py-1 bg-success text-white border-success rounded-end border border-3">+</button>`;
                            cartHTML += '</div>';
                        cartHTML += '</div>';
                    cartHTML += '</div>';
                    cartHTML += '<div class="col-2">';
                        cartHTML += '<div class="row h-50 align-items-top p-3">';
                            cartHTML += '<div class="d-flex p-0 justify-content-end">';
                                cartHTML += `<button type="button" onclick="borrarProdCart(${cartProds[i]['cartId']})" class="bg-white border-0">`;
                                    cartHTML += '<span class="material-symbols-outlined">delete</span>';
                                cartHTML += '</button>';
                            cartHTML += '</div>';
                        cartHTML += '</div>';
                        cartHTML += '<div class="row h-50 align-items-end p-3">';
                            cartHTML += `<p class="p-0 m-0">$${(cartProds[i]['precio'] * cartProds[i]['cantidad'])}</p>`;
                        cartHTML += '</div>';
                    cartHTML += '</div>';
                cartHTML += '</div>';
            }

            cartHTML += '<hr class="my-2">';
            cartHTML += '<div class="row">';
                cartHTML += '<div class="col-12 p-0">';
                    cartHTML += '<div class="h-50 d-flex justify-content-between">';
                        cartHTML += '<p class="fs-4">Total:</p>';
                        cartHTML += `<p class="fs-4" id="totalPriceCart">$${totalPrice}</p>`;
                    cartHTML += '</div>';
                    cartHTML += '<div class="h-50">';
                        cartHTML += '<button type="button" class="w-100 btn btn-dark btn-primary m-0">INICIAR COMPRA</button>';
                    cartHTML += '</div>';
                cartHTML += '</div>';
            cartHTML += '</div>';

            cartContent.innerHTML = cartHTML;
            setTimeout(() => {
                offcanvas.toggle();
            }, 2500)
            
        },
        error: function(){
            console.log('Error de Consulta');
        }
    })

    console.log("Carrito actualizado");
}

function cambiarCantCarrito(cantNum, cartId){
    $.ajax({
        url: 'modelos/cambiarCantCarrito.php',
        data: {CANT: cantNum, CartID: cartId},
        type: 'POST',
        success: function(res){
            if(res == 1){
                actualizarCarrito();
            }
        }
    })
}

function borrarProdCart(prodCartId){
    $.ajax({
        url: 'modelos/borrarProdCart.php',
        data: {CARTID: prodCartId},
        type: 'POST',
        success: function(res){
            if(res == 1){
                actualizarCarrito();
            }
        }
    })
}

function comprar(){
    
}
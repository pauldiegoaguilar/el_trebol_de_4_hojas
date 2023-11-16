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


const categSelector = document.getElementById('categSelector');
const editSelector = document.getElementById('editSelector');

categSelector.addEventListener('change', () => {

    editSelector.removeAttribute('disabled');
    //console.log("cambio de categ");
    //console.log(categSelector.value);
    let categ = parseInt(categSelector.value);

    switch(categ){
        case 1:
            console.log("Manga");
            mangaOptHTML = '<option value="1" class="optionSelect">Ivrea</option>';
            mangaOptHTML =+ '<option value="2" class="optionSelect">Ovni Press</option>';
            mangaOptHTML =+ '<option value="3" class="optionSelect">Panini</option>';
            mangaOptHTML =+ '<option value="4" class="optionSelect">Kemuri</option>';
            mangaOptHTML =+ '<option value="5" class="optionSelect">Planeta</option>';
            mangaOptHTML =+ '<option value="6" class="optionSelect">Distrito Manga</option>';
            mangaOptHTML =+ '<option value="7" class="optionSelect">Utopia</option>';

            editSelector.append(mangaOptHTML);

            break;
        case 2:
            console.log("Revista");
            break;
        case 3:
            console.log("Marvel");
            break;
        case 4:
            console.log("DC Comics");
            break;
        case 5:
            console.log("Trading Cards");
            break;
        case 6:
            console.log("Pre-ventas");
            break;
        default:
            console.log("Nada");
            break;
    }

})


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
    var name = '';
}
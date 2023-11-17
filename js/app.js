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

function removeList(options){
    options.forEach(option => {
        option.remove();
    });
}

function fillList(options){
    for(index in options) {
        editSelector.options[index] = new Option(options[index], index);
        editSelector.options[index].classList.add("optionSelect");
    }
}

categSelector.addEventListener('change', () => {
    editSelector.removeAttribute('disabled');

    let categVal = parseInt(categSelector.value);

    switch(categVal){
        case 1:
            console.log("Manga");
            removeList(editSelector.querySelectorAll('.optionSelect'));

            let manga_array = {
                1 : 'Ivrea',
                2 : 'Ovni Press',
                3 : 'Panini',
                4 : 'Kemuri',
                5 : 'Planeta',
                6 : 'Distrito',
                7 : 'Utopia'
            };

            fillList(manga_array);

            break;
        case 2:
            console.log("Revista");
            removeList(editSelector.querySelectorAll('.optionSelect'));

            let revista_array = {
                1 : 'Ohlala!',
                2 : 'Cosa',
                3 : 'Fierro',
                4 : 'Lugares',
                5 : 'Rolling Stone'
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
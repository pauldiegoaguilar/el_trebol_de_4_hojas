/* --------------- PRODUCTO - IMAEGEN ZOOM --------------- */

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



/* --------------- PRODUCTO - BUSQUEDA --------------- */

function buscar(input){
    var buscador = document.getElementById(`buscador${input}`);

    //console.log(buscador);
    var buscar = buscador.value;

    console.log(buscar);
    window.location.href = "?sec=search&q=" + buscar;
}

function enter(e){
    if(e.key === 'Enter'){
        buscar(0);
    }
}

/* --------------- REGISTRO - VERIFICACION --------------- */

function verifRegistro(){
    var name = 
}
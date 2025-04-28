const FormularioHN = document.querySelector('#formHn');


FormularioHN.addEventListener('submit', (e) => {
    e.preventDefault();

    let Xhr = new XMLHttpRequest();
    let datosFormulario =  new FormData(FormularioHN);

    Xhr.open('POST', './php/persona.php', true);

    Xhr.onreadystatechange = function () {
        if ( Xhr.readyState == 4 && Xhr.status == 200 ) {
            if (Xhr.responseText == 1) {
                console.log(Xhr.responseText);
                
                alert('Registrado');
                FormularioHN.reset();
            } else {
                alert('No se ha registrado');
                console.log(Xhr.responseText);
            }
        }
    }

    Xhr.send(datosFormulario);

});
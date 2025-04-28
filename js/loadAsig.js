function LoadAsignacion() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '../php/empleados.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            let empleados = JSON.parse(xhr.responseText);
            let tableBody = document.getElementById('tablaCuerpoAsignar');
            tableBody.innerHTML = ''; // Limpiar el contenido actual

            empleados.forEach(empleado => {
                let row = document.createElement('tr');
                row.innerHTML = `
                    <td>${empleado.id}</td>
                    <td>${empleado.nombre}</td>
                    <td>${empleado.apellidos}</td>
                    <td><button type="button" class="btn btn-asignar" data-id="${empleado.id}">Asignar</button></td>
                `;
                tableBody.appendChild(row);
            });

            // Agregar eventos a los botones después de que se generen
            let botonesAsignar = document.querySelectorAll('.btn-asignar');
            botonesAsignar.forEach(boton => {
                boton.addEventListener('click', function () {
                    let id = this.getAttribute('data-id');
                    console.log(`Empleado seleccionado: ${id}`);
                    asignar(id);
                    let formulario = document.getElementById('formDepart');
                    formulario.style.visibility = 'visible'; // Mostrar el formulario
                });
            });
        }
    };
    xhr.send();
}

function asignar(id) {
    let formulario = document.getElementById('formDepart');
    formulario.addEventListener('submit', function (e) {
        e.preventDefault();

  
        let departamento = document.getElementById('depart').value;

        console.log(`Asignando empleado con ID: ${id} al departamento: ${departamento}`);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/asignarDepartamento.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log('Respuesta del servidor:', xhr.responseText);
                alert('Empleado asignado correctamente');
                formulario.style.visibility = 'hidden'; 
                formulario.reset(); // Limpiar el formulario después de asignar
                // Ocultar el formulario después de asignar
            }
        };
        xhr.send(`id=${id}&departamento=${departamento}`);
    });
}

LoadAsignacion();
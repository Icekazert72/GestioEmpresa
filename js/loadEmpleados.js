function LoadEmpleados () {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', './php/empleados.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);  
            let empleados = JSON.parse(xhr.responseText);
            let tableBody = document.getElementById('tablaCuerpo');
            tableBody.innerHTML = ''; // Limpiar el contenido actual

            empleados.forEach(empleado => {
                let row = document.createElement('tr');
                row.innerHTML = `
                    <td>${empleado.imagen}</td>
                    <td>${empleado.id}</td>
                    <td>${empleado.nombre}</td>
                    <td>${empleado.apellidos}</td>
                    <td>${empleado.nomina}</td>
                    <td>${empleado.fecha_contrato}</td>
                    <td>${empleado.fecha_alta}</td>
                `;
                tableBody.appendChild(row);
            });
        }
    };
    xhr.send();
}


LoadEmpleados();
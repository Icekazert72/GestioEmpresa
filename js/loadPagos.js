document.addEventListener("DOMContentLoaded", function () {
    // Cargar empleados al cargar la página
    cargarEmpleados();

    function cargarEmpleados() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "../php/empleados.php", true);
        xhr.onload = function () {
            if (this.status === 200) {
                const empleados = JSON.parse(this.responseText);
                const tablaCuerpo = document.getElementById("tablaCuerpoPago");
                tablaCuerpo.innerHTML = ""; // Limpiar tabla

                empleados.forEach((empleado) => {
                    const fila = document.createElement("tr");
                    fila.innerHTML = `
                        <td>${empleado.id}</td>
                        <td>${empleado.nombre}</td>
                        <td>${empleado.apellidos}</td>
                        <td>
                            <button class="btn btn-primary btn-pagar" data-id="${empleado.id}">Pagar</button>
                        </td>
                    `;
                    tablaCuerpo.appendChild(fila);
                });

                // Agregar eventos a los botones "Pagar"
                document.querySelectorAll(".btn-pagar").forEach((boton) => {
                    boton.addEventListener("click", function () {
                        const empleadoId = this.getAttribute("data-id");
                        efectuarPago(empleadoId);
                    });
                });
            }
        };
        xhr.send();
    }

    function efectuarPago(empleadoId) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../api/efectuarPago.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onload = function () {
            if (this.status === 200) {
                const respuesta = JSON.parse(this.responseText);
                if (respuesta.success) {
                    Swal.fire("Éxito", "Pago efectuado correctamente", "success");
                } else {
                    Swal.fire("Error", respuesta.message, "error");
                }
            }
        };
        xhr.send(`empleadoId=${empleadoId}`);
    }
});
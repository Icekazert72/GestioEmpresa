<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prod</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/sweetalert2.css">
    <link rel="stylesheet" href="../css/st.css">
</head>

<header>
    <div class="container nav">
        <div class="p">
            <a href="../index.php">Inicio</a>
        </div>
        <div class="p">
            <a href="../nav/departamentos.php">Departamentos</a>
        </div>
        <div class="p">
            <a href="#">Pagos</a>
        </div>
        <div class="p">
            <a href="">Permisos</a>
        </div>
        <div class="p">
            <a href="">Vacaciones</a>
        </div>
    </div>
</header>

<body>
    <div class="container caja">
        <div class="credencial fluid mb-5">
            <div class="form">
                <form action="" method="post" id="formPagos" style="visibility: hidden;">
                    <h5>Asignar Departamento</h5>
                    <div class="form-label">
                        <label for="">PAgo mensual</label>
                        <select name="pagoMensual" id="pago">
                            <option value="1000">1000</option>
                            <option value="2000">2000</option>
                            <option value="3000">3000</option>
                        </select>
                    </div>
                    <div class="form-button">
                        <button type="submit" class="btn btn-success">Pagar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5 mb-5">.</div>
        <div class="tabla container mt-5">
            <div class="table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody id="tablaCuerpoPago">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.esm.min.js"></script>
    <script src="../js/sweetalert2.js"></script>
    <script src="../js/loadPagos.js"></script>
</body>

</html>
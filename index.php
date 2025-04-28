<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prod</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/st.css">
</head>

<header>
    <div class="container nav">
        <div class="p">
            <a href="">Empleados</a>
        </div>
        <div class="p">
            <a href="nav/departamentos.php">Departamento</a>
        </div>
        <div class="p">
            <a href="nav/pagos.php">Pagos</a>
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
                <form action="" method="post" enctype="multipart/form-data" id="formHn">
                    <h5>Nuevo contrato</h5>
                    <div class="form-label">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nom" id="nom">
                    </div>
                    <div class="form-label">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="apell" id="apell">
                    </div>
                    <div class="form-label">
                        <label for="">Nomina mensual</label>
                        <input type="text" class="form-control" name="nomina" id="nomina">
                    </div>
                    <div class="form-label">
                        <label for="">Fecha de alta</label>
                        <input type="date" class="form-control" name="fal" id="fal">
                    </div>
                    <div class="form-label">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="form-button">
                        <button type="submit" class="btn btn-success">Guardar</button>
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
                            <th>imagen</th>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Nomina</th>
                            <th>Fecha/Contracion</th>
                            <th>Fecha/Alta</th>
                        </tr>
                    </thead>
                    <tbody id="tablaCuerpo">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/sweetalert2.js"></script>
    <script src="js/controller.js"></script>
    <script src="js/loadEmpleados.js"></script>
</body>

</html>
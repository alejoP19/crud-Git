<?php
include_once 'main/partials/header.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e3c1a575a3.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <div class="text-center mb-3">
        <div class="row">
            <div class="col">
                <h1>Bienvenido</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid row">
        <form class="col-6" action="" method="POST">
            <h3 class="text-center text-secondary mb-3">Registro De Alumnos</h3>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellidos</label>
                <input type="email" class="form-control" name="apellido" id="apellido" placeholder="Apellidos">
            </div>

            <div class="mb-3">
                <label for="Fecha Nacimiento" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="Fecha Nacimiento" id="Fecha Nacimiento" placeholder="Fecha Nacimiento">
            </div>
            <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="email" class="form-control" id="" placeholder="">
                </div> -->
            <div class="mb-3">
                <h4>Selecciona tipo de documento</h4>
                <select>
                    <option value="Tarjeta de indentidad">Tarjeta de indentidad</option>
                    <option value="Cedula ciudadania">Cedula ciudadania</option>
                    <option value="Cedula Extranjera">Cedula Extranjera</option>

                </select>
            </div>

            <div class="mb-3">
                <label for="Numero documento" class="form-label">Numero documento</label>
                <input type="number" class="form-control" name="Numero documento" id="Numero documento" placeholder="Numero documento">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="emial" id="email" placeholder="Email">
            </div>

            <div class="mb-3">
                <label for="grado" class="form-label">Grado</label>
                <input type="text" class="form-control" name="grado" id="grado" placeholder="grado">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>








        <div class="col-10 p-4 ">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apelidos</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Tipo Documento</th>
                        <th scope="col">Numero Documento</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opciones</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once ('../Models/conexionModel.php');
                        $sql = $conexion->query("SELECT * FROM alumnos");
                        while ($datos = $sql->fetch_object()) {
                    ?>

                        <tr>
                            <td <?php echo $datos->id ?>></td>
                            <td <?php echo $datos->nombres ?>></td>
                            <td <?php echo $datos->apellidos ?>></td>
                            <td <?php echo $datos->fecha_nacimiento ?>></td>
                            <td><?php echo $datos->tipo_documento ?></td>
                            <td> <?php echo $datos->email ?></td>
                            <td <?php echo $datos->grado ?>></td>
                            <td>
                                <a href="" class="btn btn-small btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>

                        </tr>

                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>

<!-- Content -->
<?php
include_once 'views/main/partials/footer.php';
?>
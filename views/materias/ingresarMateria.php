<?php
require_once("../../Database/conexion.php");
$message = '';
if (!empty($_POST['materia']) && !empty($_POST['alumno_id']) && !empty($_POST['profesor_id'])) {

    $sql = "INSERT INTO materias (materia,alumno_id,profesor_id) VALUES (:materia,:null,:null)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':materia', $_POST['materia']);

    $stmt->bindParam(':null', $_POST['alumno_id']);
    $stmt->bindParam(':null', $_POST['profesor_id']);

    if ($stmt->execute()) {
        $message = ' New user created Successfully';
    } else {
        $message = 'Sorry there must have been an issue creating your account';
    }
}




?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo One&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
    include_once '../../views/main/partials/header.php';
    ?>


    <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
    <?php endif; ?>


    <form action="ingresarMateria.php" method="post">
        <section class="vh-100 gradient-custom">
            <div class="container py-3 h-95">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-3 text-center ">

                                <div class="mb-md-4 mt-md-4 mt-5 pb-8">

                                    <h2 class="fw-bold mb-2 text-uppercase" style="font-size:25px">Ingresar Materia</h2>
                                    <p class="text-white-50 mb-3">
                                        <br>

                                        <a class="btn btn-outline-light btn-lg px-2" href="../../index.php">Inicio</a>
                                    </p>

                                    <br><br> <br>

                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <div class="form-outline form-white mb-4 mt-0">
                                            <input type="text" name="materia" placeholder="Nombre de la materia"
                                                class="form-control form-control-lg" />

                                        </div>
                                        <div class="mb-md-5 mt-md-4 pb-5">
                                            <div class="form-outline form-white mb-4 mt-0">
                                                <input type="number" name="alumno_id" placeholder="Ingrese un nùmero"
                                                    class="form-control form-control-lg" />

                                            </div>
                                            <div class="mb-md-5 mt-md-4 pb-5">
                                                <div class="form-outline form-white mb-4 mt-0">
                                                    <input type="number" name="profesor_id"
                                                        placeholder="Ingrese un nùmero"
                                                        class="form-control form-control-lg" />

                                                </div>


                                                <!-- <div class="form-outline form-white mb-4">
                                            <input type="password" name="password" placeholder="Enter Your Password"
                                                class="form-control form-control-lg" />

                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            <input type="password" name="confirmpassword"
                                                placeholder="Confirm Your Password"
                                                class="form-control form-control-lg" />

                                        </div> -->

                                                <button class="btn btn-outline-light btn-lg px-3" type="submit"
                                                    style="margin-top:5%">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section>
    </form>


</body>

</html>


<?php
include_once '../main/partials/footer.php';
?>
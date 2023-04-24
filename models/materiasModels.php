<?php


require_once("../Database/conexion.php");
// include_once("../views/materias/ingresarMateria.php");
$message = '';


if (!empty($_POST['materia'])) {

    $sql = "INSERT INTO materias (materia) VALUES (:materia)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':materia', $_POST['materia']);


    if ($stmt->execute()) {
        $message = ' New user created Successfully';
    } else {
        $message = 'Sorry there must have been an issue creating your account';
    }
}

if (!empty($message)) {
    echo  $message;
}

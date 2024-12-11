<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre_user'];
    $apellido = $_POST['apellido_user'];
    $correo = $_POST['correo_user'];
    $password = password_hash($_POST['password_user'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nombre_user, apellido_user, correo_user, password_user) VALUES ('$nombre', '$apellido', '$correo', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. <a href='index.html'>Iniciar sesión</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo_user'];
    $password = $_POST['password_user'];

    $sql = "SELECT * FROM usuarios WHERE correo_user='$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password_user'])) {
            echo "¡Bienvenido, " . $user['nombre_user'] . " " . $user['apellido_user'] . "!";
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>

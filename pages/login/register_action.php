<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($username) || empty($email) || empty($password)) {
    echo "Por favor, complete todos los campos. <a href='register.php'>Volver al registro</a>";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email no válido. <a href='register.php'>Volver al registro</a>";
    exit();
}

include 'datos.php';

if (isset($users[$username])) {
    echo "El usuario ya existe. <a href='register.php'>Volver al registro</a>";
    exit();
}

$users[$username] = $password;

$data = '<?php $users = ' . var_export($users, true) . '; ?>';
file_put_contents('datos.php', $data);

echo "Registro exitoso. <a href='index.php'>Iniciar sesión</a>";
?>

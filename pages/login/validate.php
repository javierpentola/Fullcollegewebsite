<?php
session_start();
include 'datos.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['loggedin'] = true;
    $_SESSION['loggedin_time'] = time();
    header('Location: /College%20campus/index.php');
    exit();
} else {
    echo "Usuario o contraseña incorrectos. <a href='index.php'>Volver al login</a>";
}
?>

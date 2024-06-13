<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../login/checklogin.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Obtener datos del formulario
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Guardar la información en un archivo JSON (temporal)
    $data = [
        'email' => $email,
        'phone' => $phone,
        'address' => $address
    ];
    file_put_contents('contact_info.json', json_encode($data));

    // Redirigir de nuevo a la página de información de contacto
    header('Location: contact_info.php');
    exit();
} else {
    echo "USER_NOT_LOGIN";
    exit();
}
?>

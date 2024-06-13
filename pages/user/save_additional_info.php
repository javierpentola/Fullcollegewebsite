<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../login/checklogin.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Obtener datos del formulario
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];
    $languages = $_POST['languages'];

    // Guardar la información en un archivo JSON (temporal)
    $data = [
        'address' => $address,
        'nationality' => $nationality,
        'languages' => $languages
    ];
    file_put_contents('additional_info.json', json_encode($data));

    // Redirigir de nuevo a la página de información adicional
    header('Location: additional_info.php');
    exit();
} else {
    echo "USER_NOT_LOGIN";
    exit();
}
?>

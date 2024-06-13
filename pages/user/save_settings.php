<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../login/checklogin.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Obtener datos del formulario
    $language = $_POST['language'];
    $time_zone = $_POST['time_zone'];
    $notifications = $_POST['notifications'];

    // Guardar la información en un archivo JSON (temporal)
    $data = [
        'language' => $language,
        'time_zone' => $time_zone,
        'notifications' => $notifications
    ];
    file_put_contents('settings.json', json_encode($data));

    // Redirigir de nuevo a la página de configuración
    header('Location: settings.php');
    exit();
} else {
    echo "USER_NOT_LOGIN";
    exit();
}
?>

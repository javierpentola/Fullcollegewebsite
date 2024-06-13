<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Establecer la duración de la sesión en segundos (1 hora = 3600 segundos)
$session_duration = 3600;

// Verificar si la sesión está configurada y si ha expirado
if (isset($_SESSION['loggedin_time']) && (time() - $_SESSION['loggedin_time'] > $session_duration)) {
    // Si la sesión ha expirado, destruirla
    session_unset();
    session_destroy();
    header('Location: /College%20campus/pages/login/index.php');
    exit();
} else {
    // Si la sesión no ha expirado, actualizar el tiempo de sesión
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        $_SESSION['loggedin_time'] = time();
    } else {
        // Redirigir al login si no está logeado
        header('Location: /College%20campus/pages/login/index.php');
        exit();
    }
}
?>

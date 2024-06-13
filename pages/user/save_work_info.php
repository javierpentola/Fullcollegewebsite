<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../login/checklogin.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Obtener datos del formulario
    $company = $_POST['company'];
    $position = $_POST['position'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];

    // Guardar la información en un archivo JSON (temporal)
    $data = [
        'company' => $company,
        'position' => $position,
        'experience' => $experience,
        'skills' => $skills
    ];
    file_put_contents('work_info.json', json_encode($data));

    // Redirigir de nuevo a la página de información laboral
    header('Location: work_info.php');
    exit();
} else {
    echo "USER_NOT_LOGIN";
    exit();
}
?>

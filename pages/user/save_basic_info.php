<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('../login/checklogin.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Obtener datos del formulario
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $student_id = $_POST['student_id'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Guardar la información en un archivo JSON (temporal)
    $data = [
        'name' => $name,
        'dob' => $dob,
        'gender' => $gender,
        'student_id' => $student_id,
        'course' => $course,
        'email' => $email,
        'phone' => $phone
    ];
    file_put_contents('basic_info.json', json_encode($data));

    // Redirigir de nuevo a la página de información básica
    header('Location: basic_info.php');
    exit();
} else {
    echo "USER_NOT_LOGIN";
    exit();
}
?>

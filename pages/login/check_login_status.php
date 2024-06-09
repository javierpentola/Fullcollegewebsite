<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "Estás logeado.";
} else {
    echo "No estás logeado";
}
?>

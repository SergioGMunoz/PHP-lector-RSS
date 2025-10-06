<?php

$Repit = false;
$host = "localhost";
$user = "root";  // Cambia esto por tu usuario de MySQL en Ubuntu
$password = "root"; // Cambia esto por tu contraseña de MySQL en Ubuntu

$link = mysqli_connect($host, $user, $password, 'periodicos');

// Verificar conexión
if (!$link) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Configurar charset para manejar caracteres especiales
mysqli_set_charset($link, "utf8");

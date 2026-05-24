<?php
session_start();

// En una aplicación real, esto vendría de una base de datos (usando password_verify)
$usuario_correcto = "admin";
$pass_correcto = "jempyc2026";

if ($_POST['usuario'] == $usuario_correcto && $_POST['password'] == $pass_correcto) {
    $_SESSION['admin_logueado'] = true;
    header("Location: admin.php");
} else {
    echo "Credenciales incorrectas. <a href='login.php'>Volver</a>";
}
?>
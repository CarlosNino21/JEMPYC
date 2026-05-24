<?php
session_start();
if (!isset($_SESSION['admin_logueado']) || $_SESSION['admin_logueado'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<body>
    <h1>Bienvenido al Panel de Administración JEMPYC</h1>
    <a href="logout.php">Cerrar Sesión</a>
    </body>
</html>

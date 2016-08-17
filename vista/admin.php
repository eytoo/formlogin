<?php
session_start();
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["privilegio"] == 1) {

    } else {
        header("Location: user.php");
    }
} else {
    header("Location: index.php");
}
?>

<h1>Hola Bienvenido al panel de administración</h1>
<a href='cerrarsesion.php'>cerrar session</a>

<?php
session_start();
if(isset($_SESSION["usuario"])){
		if($_SESSION["privilegio"] == 0){

		}else{
			header("Location: admin.php");	
		}

}else{
    header("Location: index.php");
}
?>

<h1>Hola Bienvenido Usuario</h1>
<a href='cerrarsesion.php'>cerrar session</a>
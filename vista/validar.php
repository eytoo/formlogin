<?php

include "../controlador/usuariosControlador.php";

if(isset($_POST["usuario"]) || isset($_POST["pass"])){
    if(trim($_POST["usuario"]) == "" || trim($_POST["pass"]) == ""){
        echo "false";
    }else{
        $usuariosCon = new usuariosControlador();
        $usuario = $usuariosCon->validar($_POST["usuario"],$_POST["pass"]);

        if(count($usuario) > 0){

            session_start();
            $_SESSION["id"] = $usuario["id"];
            $_SESSION["usuario"] = $usuario["usuario"];
            $_SESSION["privilegio"] = $usuario["privilegio"];
            echo "true";

        }else{
            echo "false";
        }
    }
}else{
    echo "false";
}


?>
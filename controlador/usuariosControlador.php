<?php

include "../datos/usuariosDatos.php";

class usuariosControlador
{

    public function insertarUsuarios($usuario, $pass)
    {
        $obj = new usuariosDatos();
        return $obj->insertarUsuarios($usuario, $pass);
    }

    public function validar($usuario, $pass)
    {
        $obj = new usuariosDatos();
        return $obj->validar($usuario, $pass);
    }

    public function getId($usuario, $pass)
    {
        $obj = new usuariosDatos();
        return $obj->getId($usuario, $pass);
    }

}

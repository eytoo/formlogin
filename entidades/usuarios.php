<?php

 class usuarios{
	public $id;
	function get_id(){
		return $this->id;
	}
	function set_id($id){
		$this->id = $id;
	}
	public $usuario;
	function get_usuario(){
		return $this->usuario;
	}
	function set_usuario($usuario){
		$this->usuario = $usuario;
	}
	public $contrasena;
	function get_contrasena(){
		return $this->contrasena;
	}
	function set_contrasena($contrasena){
		$this->contrasena = $contrasena;
	}
	public $privilegio;
	function get_privilegio(){
		return $this->privilegio;
	}
	function set_privilegio($privilegio){
		$this->privilegio = $privilegio;
	}
 }


?>
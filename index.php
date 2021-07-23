<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql ->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);
//Carrega uma usuario
// $usuario = new Usuario();
// $usuario->loadByid(3);

// echo $usuario;

//carrega uma lista de usuario

// $lista = Usuario::getList();

// var_dump(json_encode($lista));

//carrega uma lista de usuario buscando pelo login

// $search = Usuario::search('rog');

// var_dump(json_encode($search));

//valida usuario senha
$valida = new Usuario();
$valida->login('rogerio', '12345');

echo $valida;

?>
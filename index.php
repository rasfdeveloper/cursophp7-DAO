<?php 

require_once ("config.php");

//Traz 1 usuário pelo Id
/*
$user = new Usuario();
$user->loadbyId("3");
echo $user; 
*/

//Traz uma lista de usuários 
/*
$list = Usuario::getList();
echo json_encode($list);
*/

//Traz uma lista de usuários buscando pelo login
/*
$search = Usuario::search("u");
echo json_encode($search);
*/

//Traz um usuário usando um login e a senha
/*
$usuario = new Usuario();
$usuario->login("user","123456");
echo $usuario;
*/

 ?>
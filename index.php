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

//Criando um novo usuário
/*
$aluno = new Usuario("Renato","923801947");
$aluno->insert();
echo $aluno;
*/

//Alterar um usuário
/*
$usuario = new Usuario();
$usuario->loadbyId(8);
$usuario->update("professor", "senhadoprofessor");
echo $usuario;
*/


$usuario = new Usuario();
$usuario->loadbyId(10);

$usuario->delete();

echo $usuario;








 ?>
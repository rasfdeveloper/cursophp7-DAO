<?php 

require_once ("config.php");

$user = new Usuario();

$user->loadbyId("3");

echo $user;

 ?>
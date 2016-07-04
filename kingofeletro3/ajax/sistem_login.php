<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');

$login = $_POST["login"];
$senha = $_POST["senha"];

$db = new Database();
$db->connect();
$db->sql("SELECT * FROM sistem_user WHERE usuario = '$login' AND senha = '$senha'");
$res = $db->getResult();
foreach ($res as $output) {
  $userid   = $output["guid"];
  $usernome = $output["nome"];
}
$res = $db->getResult();
$res = $db->numRows();


if ($res >= 1) {
      echo 1;
      if(!isset($_SESSION)) 	//verifica se há sessão aberta
		  session_start();		//Inicia seção
		  //Abrindo seções
	  	$_SESSION['usuarioID']    = $userid;
	  	$_SESSION['nomeUsuario']  = $usernome;
		  $_SESSION['email']        = $login;
		exit;
} else
{
  echo 0;
}

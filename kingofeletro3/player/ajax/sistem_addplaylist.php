<?php
header('content-type: application/json; charset=utf-8');

// Funções para não exibir alguns erros de conexao
ini_set( 'display_errors', true );
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

include('../class/mysql_crud.php');
include('../class/eguid-generator.php');

$nome_playlist = $_POST["nome"];
$usuario       = $_POST["user"];

$eguid = geraEguid(12);

$db = new Database();
$db->connect();
$db->insert('sistem_playlist',array('nomeplaylist'=>$nome_playlist,'guiduser'=>$usuario,'eguid'=>$eguid));
$res = $db->getResult();

$db->sql("SELECT * FROM sistem_playlist WHERE nomeplaylist = '$nome_playlist' AND guiduser = '$usuario' AND eguid ='$eguid'");
foreach ($res as $output) {
  $guid_playlist = $output["guid"];
}
$res = $db->getResult();
//$linha = "<li><a href='musicas.php?musicas=$guid_playlist' class='hvr-bounce-to-right'><i class='fa fa-headphones nav_icon'></i>", $nome_playlist. "</a></li>";

//$linha = $nome_playlist;
echo json_encode($res);

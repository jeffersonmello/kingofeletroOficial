<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid3"];

$ud_nome = mysql_real_escape_string($_POST["nome3"]);
$ud_usuario = mysql_real_escape_string($_POST["user3"]);
$ud_senha = mysql_real_escape_string($_POST["senha3"]);
$ud_tipo = mysql_real_escape_string($_POST["tipo3"]);
$ud_job = mysql_real_escape_string($_POST["job3"]);
$ud_nivel = mysql_real_escape_string($_POST["nivel3"]);



$query="UPDATE usuario SET nome= '$ud_nome', usuario= '$ud_usuario', senha='$ud_senha', tipo='$ud_tipo', job='$ud_job', nivel='$ud_nivel' WHERE guid='$ud_guid'";
mysql_query($query)or die(mysql_error());
mysql_close($conexao);

header("Location: cad_usuarios.php?accao=update");
exit();

?>

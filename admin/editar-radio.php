<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid2"];

$ativo= mysql_real_escape_string($_POST["ativo"]);
$embed= mysql_real_escape_string($_POST["embed"]);

if ($ativo == 'Desativada'){
  mysql_select_db($bd, $conexao);
  mysql_query("UPDATE radio SET ativo= '$ativo', embed='$embed' where guid = '$ud_guid'");
} else {
  mysql_select_db($bd, $conexao);
  mysql_query("UPDATE radio SET ativo= 'Desativada'");
  mysql_query("UPDATE radio SET ativo= '$ativo', embed='$embed' where guid = '$ud_guid'");
}

mysql_close($conexao);

header("Location: ligaradio.php?accao=update");
exit();

?>

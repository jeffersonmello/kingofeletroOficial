<?php
ob_start();
include('config.php');

$ativo= $_POST["ativo3"];
$embed= $_POST["embed3"];

if ($ativo == 'Desativada'){
  mysql_select_db($bd, $conexao);
  mysql_query("INSERT INTO radio (ativo, embed) VALUES ('$ativo', '$embed')");
} else {
  mysql_select_db($bd, $conexao);
  mysql_query("UPDATE radio SET ativo= 'Desativada'");
  mysql_query("INSERT INTO radio (ativo, embed) VALUES ('$ativo', '$embed')");
}


mysql_close($conexao);

header("Location: ligaradio.php?accao=newradio");
exit();

?>

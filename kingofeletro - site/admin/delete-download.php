<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid"];



$query="delete from downloads WHERE guid='$ud_guid'";
mysql_query($query)or die(mysql_error());
mysql_close($conexao);

header("Location: cad_download.php?accao=delete");
exit();

?>

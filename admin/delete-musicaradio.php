<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid"];



$query="delete from songs WHERE song_id='$ud_guid'";
mysql_query($query)or die(mysql_error());
mysql_close($conexao);

header("Location: cad-musicaradio.php?accao=delete");
exit();

?>

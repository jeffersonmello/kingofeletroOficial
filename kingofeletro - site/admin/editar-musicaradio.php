<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid"];

$ud_titulo = mysql_real_escape_string($_POST["titulo"]);
$ud_artista = mysql_real_escape_string($_POST["artista"]);
$ud_url = mysql_real_escape_string($_POST["URL"]);



$query="UPDATE songs SET title='$ud_titulo', artist='$ud_artista', url='$ud_url' WHERE song_id='$ud_guid'";
mysql_query($query)or die(mysql_error());
mysql_close($conexao);

header("Location: cad-musicaradio.php?accao=update");
exit();

?>

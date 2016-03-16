<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid2"];
$ud_titulo = mysql_real_escape_string($_POST["musica2"]);
$ud_artista = mysql_real_escape_string($_POST["artista2"]);
$ud_download = mysql_real_escape_string($_POST["download2"]);
$ud_downloadtorrent = mysql_real_escape_string($_POST["download22"]);



$query="UPDATE downloads SET titulo= '$ud_titulo', artista='$ud_artista', downloadlink= '$ud_download', downloadtorrente='$ud_downloadtorrent' WHERE guid='$ud_guid'";
mysql_query($query)or die(mysql_error());
mysql_close($conexao);

header("Location: cad_download.php?accao=update");
exit();

?>

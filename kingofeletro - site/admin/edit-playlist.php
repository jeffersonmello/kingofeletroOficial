<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid"];
$ud_arte = mysql_real_escape_string($_POST["arte"]);
$ud_titulo = mysql_real_escape_string($_POST["titulo"]);
$ud_artista = mysql_real_escape_string($_POST["artista"]);
$ud_album = mysql_real_escape_string($_POST["album"]);
$ud_linkplay = mysql_real_escape_string($_POST["musicalink"]);
$ud_linkdownload = mysql_real_escape_string($_POST["download"]);




$query="UPDATE musicas_playlist SET arte_album= '$ud_arte', titulo= '$ud_titulo', artista='$ud_artista', album='$ud_album', linkplay='$ud_linkplay', linkdownload='$ud_linkdownload' WHERE guid='$ud_guid'";
mysql_query($query)or die(mysql_error());
mysql_close($conexao);

header("Location: cad_playlist.php?accao=update");
exit();

?>

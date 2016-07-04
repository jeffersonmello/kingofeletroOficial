<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid"];
$ud_arte = mysql_real_escape_string($_POST["arte"]);
$ud_titulo = mysql_real_escape_string($_POST["titulo"]);
$ud_artista = mysql_real_escape_string($_POST["artista"]);
$ud_album = mysql_real_escape_string($_POST["album"]);
$ud_linkplay = mysql_real_escape_string($_POST["linkplay"]);
$ud_linkdownload = mysql_real_escape_string($_POST["downloadlink"]);



mysql_select_db($bd, $conexao);
mysql_query("INSERT INTO musicas_playlist (titulo, arte_album, artista, album, linkplay,linkdownload) VALUES ('$ud_titulo', '$ud_arte', '$ud_artista','$ud_album','$ud_linkplay','$ud_linkdownload')");


mysql_close($conexao);

header("Location: cad_playlist.php?accao=add");
exit();

?>

<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_titulo = mysql_real_escape_string($_POST["titulo3"]);
$ud_artista = mysql_real_escape_string($_POST["artista3"]);
$ud_download = mysql_real_escape_string($_POST["downloadlink3"]);
$ud_downloadtorrent = mysql_real_escape_string($_POST["torrent"]);



mysql_select_db($bd, $conexao);
mysql_query("INSERT INTO downloads (titulo, artista, downloadlink, downloadtorrente) VALUES ('$ud_titulo','$ud_artista', '$ud_download','$ud_downloadtorrent')");


mysql_close($conexao);

header("Location: cad_download.php?accao=add");
exit();

?>

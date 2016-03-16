<?php
ob_start();
include('config.php');

$titulo= $_POST["titulo"];
$artista= $_POST["artista"];
$url = $_POST["URL"];





mysql_select_db($bd, $conexao);
mysql_query("INSERT INTO songs (title, artist, url) VALUES ('$titulo', '$artista', '$url')");


mysql_close($conexao);

header("Location: cad-musicaradio.php?accao=musicahome");
exit();

?>

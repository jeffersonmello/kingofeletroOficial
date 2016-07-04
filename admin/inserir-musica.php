<?php
ob_start();
include('config.php');

$titulo= $_POST["titulo"];
$texto= $_POST["texto"];
$downloadlink = $_POST["downloadlink"];
$nomearquivo= $_POST["nomearquivo"];
$musicalink= $_POST["musicalink"];




mysql_select_db($bd, $conexao);
mysql_query("INSERT INTO musicas_home (titulo, texto, downloadlink, nomearquivo, embed) VALUES ('$titulo', '$texto', '$downloadlink','$nomearquivo','$musicalink')");


mysql_close($conexao);

header("Location: cad_musicahome.php?accao=musicahome");
exit();

?>

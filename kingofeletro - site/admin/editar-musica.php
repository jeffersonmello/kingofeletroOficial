<?php
ob_start();
include('config.php');
mysql_select_db($bd, $conexao);

$ud_guid = (int)$_POST["guid"];

$ud_titulo = mysql_real_escape_string($_POST["titulo"]);
$ud_texto = mysql_real_escape_string($_POST["texto"]);
$ud_downloadlink = mysql_real_escape_string($_POST["downloadlink"]);
$ud_nomearquivo = mysql_real_escape_string($_POST["nomearquivo"]);
$ud_musicalink = mysql_real_escape_string($_POST["musicalink"]);



$query="UPDATE musicas_home SET titulo='$ud_titulo', texto='$ud_texto', downloadlink='$ud_downloadlink', nomearquivo='$ud_nomearquivo', embed='$ud_musicalink' WHERE guid='$ud_guid'";
mysql_query($query)or die(mysql_error());
mysql_close($conexao);

header("Location: cad_musicahome.php?accao=update");
exit();

?>

<?php
ob_start();
include('config.php');

$nome= $_POST["nome2"];
$usuario= $_POST["usuario2"];
$senha = md5($_POST["senha2"]);
$tipo= $_POST["tipo2"];
$job= $_POST["job2"];
$nivel= $_POST["nivel2"];




mysql_select_db($bd, $conexao);
mysql_query("INSERT INTO usuario (nome, usuario, senha, tipo, job, nivel) VALUES ('$nome', '$usuario', '$senha','$job','$nivel','$nivel')");


mysql_close($conexao);

header("Location: cad_usuarios.php?accao=newuser");
exit();

?>

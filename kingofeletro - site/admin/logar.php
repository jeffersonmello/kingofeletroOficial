<?php ob_start();
		include "config.php";

		$usuario = mysql_real_escape_string($_POST["usuario"]);
		$senha = mysql_real_escape_string($_POST["senha"]);

		$sql = mysql_query("select * from usuario where usuario='$usuario' AND senha='$senha'");
		$busca = mysql_num_rows($sql);
		$array = mysql_fetch_array($sql);
		$usuario = $array["usuario"];
		$senha = $array["senha"];

		$usuarioMD5 = md5($usuario);
		$senhaMD5	= md5($senha);

		if(($busca > 0) && ($array > 0)){
			setcookie("usuariologado", $usuarioMD5);
			setcookie("senhalogado", $senhaMD5);
			header("location: index.php");
			exit();
		}
		else{
			header("location: loginerro.php");
			exit();
			}
?>

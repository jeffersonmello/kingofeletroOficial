<?php ob_start();
		include "config.php";

		$usuario = mysql_real_escape_string($_POST["usuario"]);
		$senha = mysql_real_escape_string($_POST["senha"]);

		$sql = mysql_query("select * from usuario where usuario='$usuario' AND senha=md5('$senha')");
		$busca = mysql_num_rows($sql);
		$array = mysql_fetch_array($sql);
		$usuario = $array["usuario"];
		$senha = $array["senha"];



		if(($busca > 0) && ($array > 0)){
			setcookie("usuariologado", $usuario);
			setcookie("senhalogado", $senha);
			header("location: index.php");
			exit();
		}
		else{
			header("location: loginerro.php");
			exit();
			}
?>

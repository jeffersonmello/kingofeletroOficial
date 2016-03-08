<?

	// declarando as variáveis de conexão.

	$host = "localhost";
	$bduser = "root";
	$bdsenha = "840854";
	$bd = "pristons_king";

	// fim da declaração de variaveis.


	// inicio da conexão com o banco de dados.

		$conexao = mysql_connect($host, $bduser, $bdsenha) // conecto o banco de dados.
			or die("Erro: " .  mysql_error()); //verifico se há erro na conexão.

		mysql_select_db($bd, $conexao) //após conectar, seleciono o bd a ser usado.
			or die("Erro: " .  mysql_error());

	//fim da conexao com o bd.

?>

<?

/* autor: Jefferson Mello Olynyki <tico254@gmail.com> */


Class omegaframework{

public $sql;
public $table;
public $propriedade;
public $valor;
public $host = "localhost";
public $bduser = "pristons_user2";
public $bdsenha = "gamabeta";
public $bd = "pristons_king";


public function selectWhere($table, $propriedade, $valor)
{
  $conexao = mysql_connect($host, $bduser, $bdsenha) // conecto o banco de dados.
    or die("Erro: " .  mysql_error()); //verifico se há erro na conexão.

  mysql_select_db($bd, $conexao) //após conectar, seleciono o bd a ser usado.
    or die("Erro: " .  mysql_error());

    $sql = mysql_query("SELECT * FROM "+$table+" where "+$propriedade+" = "+$valor+"");
}






}
?>

<?php
ob_start();
ini_set( 'display_errors', true );
error_reporting( E_ALL );

$guidEdit;
$guidDelete;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Admin King of Eletro</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Scripts Data Tables
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" media="screen" charset="utf-8">
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>
                    &nbsp;&nbsp;
                    <strong>Support: </strong>
                </div>

            </div>
        </div>
    </header>
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                </a>

            </div>

<script>
function get_rnd_iv($iv_len)
{
   $iv = '';
   while ($iv_len-- > 0) {
	   $iv .= chr(mt_rand() & 0xff);
   }
   return $iv;
}

function md5_encrypt($plain_text, $password, $iv_len = 16)
{
   $plain_text .= "\x13";
   $n = strlen($plain_text);
   if ($n % 16) $plain_text .= str_repeat("\0", 16 - ($n % 16));
   $i = 0;
   $enc_text = get_rnd_iv($iv_len);
   $iv = substr($password ^ $enc_text, 0, 512);
   while ($i < $n) {
	   $block = substr($plain_text, $i, 16) ^ pack('H*', md5($iv));
	   $enc_text .= $block;
	   $iv = substr($block . $iv, 0, 512) ^ $password;
	   $i += 16;
   }
   return base64_encode($enc_text);
}

function md5_decrypt($enc_text, $password, $iv_len = 16)
{
   $enc_text = base64_decode($enc_text);
   $n = strlen($enc_text);
   $i = $iv_len;
   $plain_text = '';
   $iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
   while ($i < $n) {
	   $block = substr($enc_text, $i, 16);
	   $plain_text .= $block ^ pack('H*', md5($iv));
	   $iv = substr($block . $iv, 0, 512) ^ $password;
	   $i += 16;
   }
   return preg_replace('/\\x13\\x00*$/', '', $plain_text);
}
</script>

<?php
  include('config.php');
  $userlogadon = ($_COOKIE['usuariologado']);
  $senhalogadon = ($_COOKIE['senhalogado']);


  //$userlogadon = md5_decrypt($userlogadon);
 //$senhalogadon = md5_decrypt($senhalogadon);

  mysql_select_db($bd, $conexao);
  $sql = mysql_query("select * from usuario where usuario='$userlogadon' AND senha='$senhalogadon'");
  while($linha = mysql_fetch_array($sql)){
  $nomeLog= $linha["nome"];
  $tipoLog= $linha["tipo"];
  $jobLog= $linha["job"];
  $nivelLog= $linha["nivel"];
}
?>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/user.png" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $nomeLog?></h4>
                                        <h5><?php echo $jobLog?></h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Nivel : </strong></h5>
                                <?php echo $nivelLog?>
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Perfil</a>&nbsp; <a href="logout.php" class="btn btn-danger btn-sm">Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="index.php">Dashboard</a></li>
                            <li class="dropdown">
                              <a class="dropdown-toggle menu-top-active" data-toggle="dropdown" href="#">Cadastros
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a class="menu-section" href="cad_musicahome.php">Cadastro de Música Home</a></li>
                                <li><a class="menu-section" href="cad_playlist.php">Cadastro de PlayList</a></li>
                                <li><a class="menu-section" href="cad_download.php">Cadastro de Downloads</a></li>
                                <li><a class="menu-section menu-top-active" href="cad_usuarios.php">Cadastro de Usuários</a></li>
                                <li><a class="menu-section" href="#">Cadastro de Noticias</a></li>
                              </ul>
                              <li><a href="ligaradio.php">Ligar Radio</a></li>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Cadstro de Usuários</h4>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                  <div class="panel-body">
                    <div id="main" class="container-fluid">
                        <div id="top" class="row">
                          <div class="col-md-3">
                                 <h2>Usuários</h2>
                             </div>


                    <form name="pesquisa" id="pesquisa" method="post" action="">
                             <div class="col-md-6">
                                 <div class="input-group h2">
                                     <input name="search" class="form-control" id="search" type="text" placeholder="Pesquisar" onchange="mainInfo(this.value);">
                                     <span class="input-group-btn">
                                         <button class="btn btn-primary" type="submit">
                                             <span class="glyphicon glyphicon-search"></span>
                                         </button>
                                     </span>
                                 </div>
                             </div>
                    </form>

                             <div class="col-md-3">
                              <a href="add.html" class="btn btn-primary pull-right h2" data-toggle="modal" data-target="#myModal" >Novo Usuário</a>
                             </div>
                        </div> <!-- /#top -->

                        <hr />



                              <div class="table-responsive col-md-12">
                                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Nome</th>
                                              <th>Login</th>
                                              <th>Senha</th>
                                              <th>Tipo</th>
                                              <th>Job</th>
                                              <th>Nivel</th>
                                              <th class="actions">Ações</th>
                                           </tr>
                                      </thead>
                                      <tbody>
<?
                    include "config.php";


                    $guidEdit = "0";
                    $guidDelete = "0";

                    $inicio = $pc - 1;
                    $inicio = $inicio * $total_reg;

                    $sql = mysql_query("SELECT * FROM usuario ");
                    $tr = mysql_num_rows($sql); // verifica o número total de registros


                    while($linha = mysql_fetch_array($sql)){
                    $guid1= $linha["guid"];
                    $nome1= $linha["nome"];
                    $usuario1= $linha["usuario"];
                    $senha1= $linha["senha"];
                    $tipo1= $linha["tipo"];
                    $job1= $linha["job"];
                    $nivel1= $linha["nivel"];

                    $guidEdit = ($guid1 +50);
                    $guidDelete = ($guid1 +100);

// Tabela
                    echo  "<tr>";
                    echo  "<td>$guid1</td>";
                    echo  "<td>$nome1</td>";
                    echo  "<td>$usuario1</td>";
                    echo  "<td>$senha1</td>";
                    echo  "<td>$tipo1</td>";
                    echo  "<td>$job1</td>";
                    echo  "<td>$nivel1</td>";
                    echo  "<td class='actions'>";
                    echo  "<a class='btn btn-success btn-xs glyphicon glyphicon-eye-open' href='view.html' data-toggle='modal' data-target='#$guid1'></a>";
                    echo  "<a> </a>";
                    echo  "<a class='btn btn-warning btn-xs glyphicon glyphicon-pencil' href='edit.html' data-toggle='modal' data-target='#$guidEdit'></a>";
                    echo  "<a> </a>";
                    echo  "<a class='btn btn-danger btn-xs glyphicon glyphicon-minus'  href='#' data-toggle='modal' data-target='#$guidDelete'></a>";
                    echo  "</td>";
                    echo  "</tr>";


// Modal View
echo "<div class='modal fade' id='$guid1' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>";
echo    "<div class='modal-dialog'>";
echo        "<div class='modal-content'>";
echo            "<div class='modal-header'>";
echo                "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
echo                "<h4 class='modal-title' id='myModalLabel'>Visualizar Usuario</h4>";
echo            "</div>";
echo            "<div class='modal-body'>";
echo              "<form name='inserir' id='inserir' method='post' action=''>";
echo                "<fieldset disabled>";
echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Nome</label>";
echo                  "<input name='nome' type='text' class='form-control' id='nome' value='$nome1' placeholder='Titulo da Música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Usuário</label>";
echo                  "<input name='user' type='text' class='form-control' id='user' value='$usuario1' placeholder='Faça o download ou ouça esta música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Senha</label>";
echo                  "<input name='senha' type='text' class='form-control' id='senha' value='$senha1' placeholder='Link de download' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Tipo de Usuario</label>";
echo                  "<input name='tipo' type='text' class='form-control' id='tipo' value='$tipo1' placeholder='Ex: avicii.mp3' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Cargo</label>";
echo                  "<input name='job' type='text' class='form-control' id='job' value='$job1' placeholder='Link ou diretorio aonde a musica está' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Nivel de Usuário</label>";
echo                  "<input name='nivel' type='text' class='form-control' id='nivel' value='$nivel1' placeholder='Link ou diretorio aonde a musica está' />";
echo                "</div>";
echo                  "</fieldset>";
echo                   "<button type='button'  class='btn btn-default glyphicon glyphicon-remove-circle' data-dismiss='modal'  > Fechar</button>";
echo                  "</form>";
echo            "</div>";
echo            "<div class='modal-footer'>";
echo            "</div>";
echo        "</div>";
echo   "</div>";
echo "</div>";

// Modal edit
echo "<div class='modal fade' id='$guidEdit' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>";
echo    "<div class='modal-dialog'>";
echo        "<div class='modal-content'>";
echo            "<div class='modal-header'>";
echo                "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
echo                "<h4 class='modal-title' id='myModalLabel'>Editar Usuário</h4>";
echo            "</div>";
echo            "<div class='modal-body'>";
echo              "<form name='inserir' id='inserir' method='post' action='editar-usuario.php'>";

echo                "<div style='display:none' class='form-group'>";
echo                  "<label for='inputError1'>guid</label>";
echo                  "<input name='guid3' type='text' class='form-control' id='guid3' value='$guid1' placeholder='Titulo da Música' required=''/>";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Nome</label>";
echo                  "<input name='nome3' type='text' class='form-control' id='nome3' value='$nome1' placeholder='Titulo da Música' required='' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Usuário</label>";
echo                  "<input name='user3' type='text' class='form-control' id='user3' value='$usuario1' placeholder='Faça o download ou ouça esta música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Senha</label>";
echo                  "<input name='senha3' type='text' class='form-control' id='senha3' value='$senha1' placeholder='Link de download' required='' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Tipo de Usuario</label>";
echo                  "<input name='tipo3' type='text' class='form-control' id='tipo3' value='$tipo1' placeholder='Ex: avicii.mp3'  required=''/>";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Cargo</label>";
echo                  "<input name='job3' type='text' class='form-control' id='job3' value='$job1' placeholder='Link ou diretorio aonde a musica está' required='' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Nivel de Usuário</label>";
echo                  "<input name='nivel3' type='text' class='form-control' id='nivel3' value='$nivel1' placeholder='Link ou diretorio aonde a musica está' required='' />";
echo                "</div>";
echo                   "<button type='submit' name='Submit' id='button' class='btn btn-default glyphicon glyphicon-ok-sign'  data-toggle='modal' data-target='#$guidEdit' > Salvar</button>";
echo                   "<a> </a>";
echo                   "<button type='button'  class='btn btn-default glyphicon glyphicon-remove-circle' data-dismiss='modal'  > Cancelar</button>";
echo                  "</form>";
echo            "</div>";
echo            "<div class='modal-footer'>";
echo            "</div>";
echo        "</div>";
echo   "</div>";
echo "</div>";

// Modal delete

echo "<div class='modal fade' id='$guidDelete' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>";
echo    "<div class='modal-dialog'>";
echo        "<div class='modal-content'>";
echo            "<div class='modal-header'>";
echo                "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>";
echo                "<h4 class='modal-title' id='myModalLabel'>Deseja deletar este Usuário ?</h4>";
echo            "</div>";
echo            "<div class='modal-body'>";
echo              "<form name='inserir' id='inserir' method='post' action='delete-usuario.php'>";
echo                "<div style='display:none' class='form-group'>";
echo                  "<label for='exampleInputEmail1'>guid</label>";
echo                  "<input name='guid' type='text' class='form-control' id='guid' value='$guid1' placeholder='Titulo da Música' />";
echo                "</div>";
echo                   "<button type='submit' name='Submit' id='button' class='btn btn-default glyphicon glyphicon-ok-sign'  data-toggle='modal' data-target='#$guidDelete' > Deletar</button>";
echo                   "<a> </a>";
echo                   "<button type='button'  class='btn btn-default glyphicon glyphicon-remove-circle' data-dismiss='modal'  > Cancelar</button>";
echo                  "</form>";
echo            "</div>";
echo            "<div class='modal-footer'>";
echo            "</div>";
echo        "</div>";
echo   "</div>";
echo "</div>";

}
mysql_close($conexao);
?>

</tbody>
</table>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="assets/js/dataTables.editor.min.js"></script>
<script type="text/javascript" charset="utf-8" src="assets/js/editor.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    } );
</script>



                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                     <h4 class="modal-title" id="myModalLabel">Cadastro de Usuário</h4>
                                 </div>
                                 <div class="modal-body">
                                   <form name="inserir" id="inserir" method="post" action="inserir-usuario.php">
                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Nome</label>
                                       <input name="nome2" type="text" class="form-control" id="nome2" placeholder="Nome" required="" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Usuário</label>
                                       <input name="usuario2" type="text" class="form-control" id="usuario2" placeholder="login" required="" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Senha</label>
                                       <input name="senha2" type="text" class="form-control" id="senha2" placeholder="Senha" required=""/>
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Tipo de Usuário</label>
                                       <input name="tipo2" type="text" class="form-control" id="tipo2" placeholder="0 padrao, 1 Admin" required=""/>
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Job</label>
                                       <input name="job2" type="text" class="form-control" id="job2" placeholder="Cargo do usuário" required=""/>
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Nível</label>
                                       <input name="nivel2" type="text" class="form-control" id="nivel2" placeholder="nivel" required=""/>
                                     </div>
                                        <button type="submit" name="Submit" id="button" class="btn btn-default glyphicon glyphicon-ok-sign"  data-toggle="modal" data-target="#myModal" > Salvar</button>
                                        <a> </a>
                                        <button type="button"  class="btn btn-default glyphicon glyphicon-remove-circle" data-dismiss="modal"  > Cancelar</button>
                                       </form>
                                 </div>
                                 <div class="modal-footer">
                                 </div>
                             </div>
                         </div>
                     </div>





                   </div>
               </div>

           </div>
       </div>
   </div>
</div>
</div>

    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2016 King of Eletro | Framework : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

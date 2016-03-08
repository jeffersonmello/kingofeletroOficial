<!DOCTYPE html>
<?php
ini_set( 'display_errors', true );
error_reporting( E_ALL );
$pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$pc = $pagina;
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
    <!-- HEADER END-->
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
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

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
                            <li><a  href="index.html">Dashboard</a></li>
                            <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a class="menu-section" href="cad_musicahome.php">Cadastro de Música Home</a></li>
                                <li><a class="menu-section" href="cad_playlist.php">Cadastro de PlayList</a></li>
                                <li><a class="menu-section" href="cad_download.php">Cadastro de Downloads</a></li>
                                <li><a class="menu-section" href="#">Cadastro de Noticias</a></li>
                              </ul>
                            </li>
                            <li><a href="ui.html">UI Elements</a></li>
                            <li><a href="table.html">Data Tables</a></li>
                            <li><a href="forms.html">Forms</a></li>

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
                    <h4 class="page-head-line">Playlist</h4>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                  <div class="panel-body">
                    <div id="main" class="container-fluid">
                        <div id="top" class="row">
                          <div class="col-md-3">
                                 <h2>Músicas</h2>
                             </div>


  <!-- Search class like   -->
  <?php
    if(isset($_GET['search'])){
        $search=($_POST['search']);
    }
?>
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
                              <a href="add.html" class="btn btn-primary pull-right h2" data-toggle="modal" data-target="#myModal" >Nova Música</a>
                             </div>
                        </div> <!-- /#top -->

                        <hr />


                        <div id="list" class="row">
                          <div id="list" class="row">

                              <div class="table-responsive col-md-12">
                                  <table class="table table-hover" cellspacing="0" cellpadding="0">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Titulo</th>
                                              <th>Texto</th>
                                              <th>Link de Download</th>
                                              <th>Nome do Arquivo</th>
                                              <th>Local da Musica</th>
                                              <th class="actions">Ações</th>
                                           </tr>
                                      </thead>
                                      <tbody>
<?
                    include "config.php";
                    $total_reg = "30";

                    $guidEdit = "0";
                    $guidDelete = "0";

                    $inicio = $pc - 1;
                    $inicio = $inicio * $total_reg;

                    $sql = mysql_query("SELECT * FROM musicas_home LIMIT $inicio,$total_reg");
                    $tr = mysql_num_rows($sql); // verifica o número total de registros
                    $tp = $tr / $total_reg; // verifica o número total de páginas


                    while($linha = mysql_fetch_array($sql)){
                    $guid1= $linha["guid"];
                    $titulo1= $linha["titulo"];
                    $texto1= $linha["texto"];
                    $downloadlink1 = $linha["downloadlink"];
                    $nomearquivo1= $linha["nomearquivo"];
                    $musicalink1= $linha["musicalink"];

                    $guidEdit = ($guid1 +50);
                    $guidDelete = ($guid1 +100);

// Tabela
                    echo  "<tr>";
                    echo  "<td>$guid1</td>";
                    echo  "<td>$titulo1</td>";
                    echo  "<td>$texto1</td>";
                    echo  "<td>$downloadlink1</td>";
                    echo  "<td>$nomearquivo1</td>";
                    echo  "<td>$musicalink1</td>";
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
echo                "<h4 class='modal-title' id='myModalLabel'>Visualizar Musica</h4>";
echo            "</div>";
echo            "<div class='modal-body'>";
echo              "<form name='inserir' id='inserir' method='post' action=''>";
echo                "<fieldset disabled>";
echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Titulo</label>";
echo                  "<input name='titulo' type='text' class='form-control' id='titulo' value='$titulo1' placeholder='Titulo da Música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Texto da Musica</label>";
echo                  "<input name='texto' type='text' class='form-control' id='texto' value='$texto1' placeholder='Faça o download ou ouça esta música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Link para download</label>";
echo                  "<input name='downloadlink' type='text' class='form-control' id='downloadlink' value='$downloadlink1' placeholder='Link de download' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Nome do arquivo</label>";
echo                  "<input name='nomearquivo' type='text' class='form-control' id='nomearquivo' value='$nomearquivo1' placeholder='Ex: avicii.mp3' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Link da musica</label>";
echo                  "<input name='musicalink' type='text' class='form-control' id='musicalink' value='$musicalink1' placeholder='Link ou diretorio aonde a musica está' />";
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
echo                "<h4 class='modal-title' id='myModalLabel'>Editar Musica</h4>";
echo            "</div>";
echo            "<div class='modal-body'>";
echo              "<form name='inserir' id='inserir' method='post' action='editar-musica.php'>";

echo                "<div style='display:none' class='form-group'>";
echo                  "<label for='inputError1'>guid</label>";
echo                  "<input name='guid' type='text' class='form-control' id='guid' value='$guid1' placeholder='Titulo da Música'/>";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Titulo</label>";
echo                  "<input name='titulo' type='text' class='form-control' id='titulo' value='$titulo1' placeholder='Titulo da Música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Texto da Musica</label>";
echo                  "<input name='texto' type='text' class='form-control' id='texto' value='$texto1' placeholder='Faça o download ou ouça esta música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Link para download</label>";
echo                  "<input name='downloadlink' type='text' class='form-control' id='downloadlink' value='$downloadlink1' placeholder='Link de download' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Nome do arquivo</label>";
echo                  "<input name='nomearquivo' type='text' class='form-control' id='nomearquivo' value='$nomearquivo1' placeholder='Ex: avicii.mp3' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Link da musica</label>";
echo                  "<input name='musicalink' type='text' class='form-control' id='musicalink' value='$musicalink1' placeholder='Link ou diretorio aonde a musica está' />";
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
echo                "<h4 class='modal-title' id='myModalLabel'>Deletar Musica</h4>";
echo            "</div>";
echo            "<div class='modal-body'>";
echo              "<form name='inserir' id='inserir' method='post' action='delete-musica.php'>";
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
</div>
</div>


<?
                	   $anterior = $pc -1;
                	   $proximo = $pc +1;


                   if ($pc>1) {
                   echo  "<li<a><a href='?pagina=$anterior'>&lt; Anterior</a></li>";
                      }
                  if ($pc<$tp) {
                  echo  "<ul class='pagination'>";
                  echo  "<li <a class='next'><a href='?pagina=$proximo'  rel='next'>Próximo &gt;</a></li>";
                      }
                  if ($pc=$tp) {
                  echo  "<ul class='pagination'>";
                  echo  "<li <a class='next'><a  href='?pagina=$proximo' rel='next'>Próximo &gt;</a></li>";
                          }

?>
                    </ul><!-- /.pagination -->

                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                     <h4 class="modal-title" id="myModalLabel">Cadastro de Musica</h4>
                                 </div>
                                 <div class="modal-body">
                                   <form name="inserir" id="inserir" method="post" action="inserir-musica.php">
                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Titulo</label>
                                       <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Titulo da Música" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Texto da Musica</label>
                                       <input name="texto" type="text" class="form-control" id="texto" placeholder="Faça o download ou ouça esta música" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Link para download</label>
                                       <input name="downloadlink" type="text" class="form-control" id="downloadlink" placeholder="Link de download" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Nome do arquivo</label>
                                       <input name="nomearquivo" type="text" class="form-control" id="nomearquivo" placeholder="Ex: avicii.mp3" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Link da musica</label>
                                       <input name="musicalink" type="text" class="form-control" id="musicalink" placeholder="Link ou diretorio aonde a musica está" />
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
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

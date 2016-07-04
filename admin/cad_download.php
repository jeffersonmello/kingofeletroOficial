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
                    <strong>Email: tico254@gmail.com </strong>
                    &nbsp;&nbsp;
                    <strong>Suporte: omegainc.tk</strong>
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

            <?php
              include('config.php');
              $userlogadon = ($_COOKIE['usuariologado']);
              $senhalogadon = ($_COOKIE['senhalogado']);

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
                                <li><a class="menu-section menu-top-active" href="cad_download.php">Cadastro de Downloads</a></li>
                                <li><a class="menu-section" href="cad_usuarios.php">Cadastro de Usuários</a></li>
                                <li><a class="menu-section" href="cad-musicaradio.php">Cadastro de Musicas da Rádio</a></li>
                                <li><a class="menu-section" href="#">Cadastro de Noticias</a></li>
                              </ul>
                            </li>
                            <li><a href="ligaradio.php">Ligar Radio</a></li>
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
                    <h4 class="page-head-line">Downloads</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                  <div class="panel-body">
                    <div id="main" class="container-fluid">
                        <div id="top" class="row">
                          <div class="col-md-3">
                                 <h2>Cadastro de Downloads</h2>
                             </div>



                             <div class="col-md-3">
                              <a href="add.html" class="btn btn-primary pull-right h2" data-toggle="modal" data-target="#myModal" >Novo Download</a>
                             </div>
                        </div> <!-- /#top -->

                        <hr />
                              <div class="table-responsive col-md-12">
                                  <table id="example" class="table table-hover table-bordered" cellspacing="0" cellpadding="0">
                                      <thead>
                                          <tr>
                                              <th width="45px">#</th>
                                              <th>Titulo</th>
                                              <th>Artista</th>
                                              <th>Link de Download</th>
                                              <th>Link de Download Torrent</th>
                                              <th width="65px" class="actions">Ações</th>
                                           </tr>
                                      </thead>
                                      <tbody>
<?
                    include "config.php";


                    $guidEdit = "0";
                    $guidDelete = "0";



                    $sql = mysql_query("SELECT * FROM downloads");
                    $tr = mysql_num_rows($sql); // verifica o número total de registros


                    while($linha = mysql_fetch_array($sql)){
                    $guid1= $linha["guid"];
                    $titulo1= $linha["titulo"];
                    $downloadlink1 = $linha["downloadlink"];
                    $downloadtorrent1= $linha["downloadtorrente"];
                    $artista1= $linha["artista"];

                    $guidEdit = ($guid1 +50);
                    $guidDelete = ($guid1 +100);

// Tabela
                    echo  "<tr>";
                    echo  "<td width='45px'>$guid1</td>";
                    echo  "<td>$titulo1</td>";
                    echo  "<td>$artista1</td>";
                    echo  "<td>$downloadlink1</td>";
                    echo  "<td>$downloadtorrent1</td>";
                    echo  "<td width='65px' class='actions'>";
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
echo                "<h4 class='modal-title' id='myModalLabel'>Visualizar Download</h4>";
echo            "</div>";
echo            "<div class='modal-body'>";
echo              "<form name='inserir' id='inserir' method='post' action=''>";
echo                "<fieldset disabled>";
echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Música</label>";
echo                  "<input name='musica' type='text' class='form-control' id='musica' value='$titulo1' placeholder='Titulo da Música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Artista</label>";
echo                  "<input name='musica' type='text' class='form-control' id='musica' value='$artista1' placeholder='Titulo da Música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Link de Download</label>";
echo                  "<input name='download' type='text' class='form-control' id='download' value='$downloadlink1' placeholder='Faça o download ou ouça esta música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Link de Download Torrent</label>";
echo                  "<input name='download' type='text' class='form-control' id='download' value='$downloadtorrent1' placeholder='Faça o download ou ouça esta música' />";
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
echo              "<form name='inserir' id='inserir' method='post' action='editar-download.php'>";

echo                "<div style='display:none' class='form-group'>";
echo                  "<label for='inputError1'>guid</label>";
echo                  "<input name='guid2' type='text' class='form-control' id='guid2' value='$guid1' placeholder='Titulo da Música'/>";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Música</label>";
echo                  "<input name='musica2' type='text' class='form-control' id='musica2' value='$titulo1' placeholder='Titulo da Música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Artista</label>";
echo                  "<input name='artista2' type='text' class='form-control' id='artista2' value='$artista1' placeholder='Titulo da Música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Link de Download</label>";
echo                  "<input name='download2' type='text' class='form-control' id='download2' value='$downloadlink1' placeholder='Faça o download ou ouça esta música' />";
echo                "</div>";

echo                "<div class='form-group'>";
echo                  "<label for='exampleInputEmail1'>Link de Download Torrent</label>";
echo                  "<input name='download22' type='text' class='form-control' id='download22' value='$downloadtorrent1' placeholder='Faça o download ou ouça esta música' />";
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
echo                "<h4 class='modal-title' id='myModalLabel'>Deletar este download ?</h4>";
echo            "</div>";
echo            "<div class='modal-body'>";
echo              "<form name='inserir' id='inserir' method='post' action='delete-download.php'>";
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

<script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "language": {
          "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar",
      "oPaginate": {
          "sNext": "Próximo",
          "sPrevious": "Anterior",
          "sFirst": "Primeiro",
          "sLast": "Último"
      },
      "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
      }
        }
      });
    } );
</script>




                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                     <h4 class="modal-title" id="myModalLabel">Cadastro de Download</h4>
                                 </div>
                                 <div class="modal-body">
                                   <form name="inserir" id="inserir" method="post" action="inserir-download.php">
                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Titulo</label>
                                       <input name="titulo3" type="text" class="form-control" id="titulo3" placeholder="Titulo da Música" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Artista</label>
                                       <input name="artista3" type="text" class="form-control" id="artista3" placeholder="Artista" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Link de Download</label>
                                       <input name="downloadlink3" type="text" class="form-control" id="downloadlink3" placeholder="download link encurtado" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Download Torrent</label>
                                       <input name="torrent" type="text" class="form-control" id="torrent" placeholder="torrent link magnetic" />
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
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

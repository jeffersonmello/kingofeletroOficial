<?php
ob_start();

error_reporting( E_ALL );

function __autoload($class_name){
		require_once 'class/' . $class_name . '.php';
	}

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
            <?php
              include('config.php');
              $userlogadon = ($_COOKIE['usuariologado']);
              $senhalogadon = ($_COOKIE['senhalogado']);


            //  $userlogadon = decryptIt($userlogadon);
            // $senhalogadon = decryptIt($senhalogadon);

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
                            <li><a  href="index.html">Dashboard</a></li>
                            <li class="dropdown">
                              <a class="dropdown-toggle menu-top-active" data-toggle="dropdown" href="#">Cadastros
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a class="menu-section" href="cad_musicahome.php">Cadastro de Música Home</a></li>
                                <li><a class="menu-section" href="cad_playlist.php">Cadastro de PlayList</a></li>
                                <li><a class="menu-section" href="cad_download.php">Cadastro de Downloads</a></li>
                                <li><a class="menu-section" href="cad_usuarios.php">Cadastro de Usuários</a></li>
                                <li><a class="menu-section" href="cad-musicaradio.php">Cadastro de Musicas da Rádio</a></li>
                                <li><a class="menu-section menu-top-active" href="cad_noticias.php">Cadastro de Noticias</a></li>
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
                    <h4 class="page-head-line">Noticias</h4>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                  <div class="panel-body">
                    <div id="main" class="container-fluid">
                        <div id="top" class="row">
                          <div class="col-md-3">
                                 <h2>Noticias</h2>
                             </div>


                             <div class="col-md-3 pull-right">
                              <a href="add.html" class="btn btn-primary pull-right h2" data-toggle="modal" data-target="#myModal" >Nova Música</a>
                             </div>
                        </div> <!-- /#top -->
                        <hr />


                                             <div class="modal fade" id="att" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                 <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                             <h4 class="modal-title" id="myModalLabel">Atualizar Noticia</h4>
                                                         </div>
                                                         <div class="modal-body">
                                                           <form name="atualizar" id="atualizar" method="post" action="">
                                                             <div class="form-group">
                                                               <label for="exampleInputEmail1">Titulo</label>
                                                               <input name="titulo" type="text" class="form-control" id="titulo" value="<?php echo $resultado->titulo; ?>" placeholder="Titulo da Noticia" />
                                                             </div>

                                                             <div class="form-group">
                                                               <label for="exampleInputEmail1">Data</label>
                                                               <input name="data" type="text"  class="form-control" id="data"  value="<?php echo $resultado->data; ?>" placeholder="01/01/2016" />
                                                             </div>

                                                             <div class="form-group">
                                                               <label for="exampleInputEmail1">Notica</label>
                                                               <textarea rows="5" name="noticia" type="text" class="form-control" id="noticia" placeholder="Noticia" ><?php echo $resultado->noticia; ?>"</textarea>
                                                             </div>

                                                             <input type="hidden" name="guid" value="<?php echo $resultado->guid; ?>">

                                                                <input  type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados"/>
                                                                <a> </a>
                                                                <button type="button"  class="btn btn-default glyphicon glyphicon-remove-circle" data-dismiss="modal"  > Cancelar</button>
                                                               </form>
                                                         </div>
                                                         <div class="modal-footer">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>


                                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog">
                                                       <div class="modal-content">
                                                           <div class="modal-header">
                                                               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                               <h4 class="modal-title" id="myModalLabel">Cadastrar Noticia</h4>
                                                           </div>
                                                           <div class="modal-body">
                                                             <form name="atualizar" id="atualizar" method="post" action="inserir-noticia.php">
                                                               <div class="form-group">
                                                                 <label for="exampleInputEmail1">Titulo</label>
                                                                 <input name="titulo1" type="text" class="form-control" id="titulo1"  placeholder="Titulo da Noticia" />
                                                               </div>

                                                               <div class="form-group">
                                                                 <label for="exampleInputEmail1">Data</label>
                                                                 <input name="data1" type="text" class="form-control" id="data1"  placeholder="01/01/2016" />
                                                               </div>

                                                               <div class="form-group">
                                                                 <label for="exampleInputEmail1">Notica</label>
                                                                 <textarea rows="5" name="noticia1" type="text" class="form-control" id="noticia1" placeholder="Noticia" ></textarea>
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

                              <div class="table-responsive col-md-12">
                                <table class="table table-hover">

			                               <thead>
				                                   <tr>
					                                        <th>#</th>
					                                        <th>Titulo</th>
					                                        <th>Data</th>
                                                  <th>Noticia</th>
					                                        <th>Ações</th>
				                                  </tr>
			                              </thead>

			                            <?php
																		$noticia = new Noticias();
																		foreach($noticia->findAll() as $key => $value):

																	?>

                                    <tbody>
  				                                <tr>
  					                                     <td><?php echo $value->guid; ?></td>
  					                                     <td><?php echo $value->titulo; ?></td>
  					                                     <td><?php echo $value->data; ?></td>
                                                 <td><?php echo $value->noticia; ?></td>
  					                                    <td>
  						                                        <?php echo "<a href='cad_noticias.php?acao=editar&id=" . $value->guid . "' data-toggle='modal' data-target='#att' >Editar</a>"; ?>
  						                                        <?php echo "<a href='cad_noticias.php?acao=deletar&id=" . $value->guid . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
  					                                   </td>
  				                              </tr>
  			                          </tbody>

  			                        <?php endforeach; ?>

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

<!DOCTYPE HTML>
<?php
/**
  * Script Criado por Jefferson Mello Olynyki
  * Player KOE - King of Eletro - 2016
  * Site King of Eletro Versão 3.0
*/
ob_start();// Inicia Buffer

session_start(); 	//A seção deve ser iniciada em todas as páginas
if (!isset($_SESSION['usuarioID'])) {		//Verifica se há seções
        session_destroy();						//Destroi a seção por segurança
       	header("Location: http://kingofeletro.com.br/login.php"); exit;	//Redireciona o visitante para login
}

// Funções para não exibir alguns erros de conexao
ini_set( 'display_errors', true );
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);



// Dados do usuario logado
$id_usuario 		= $_SESSION["usuarioID"];
$nome_usuario 	= $_SESSION["nomeUsuario"];
$email_usuario 	= $_SESSION["email"];




// Inclui as classes
include('../class/mysql_crud.php');
include('../class/eguid-generator.php')

// Cria o objeto Database
$db = new Database();
?>
<html>
<head>
<title>King of Eletro | Player :: Músicas</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>

<!--DataTable-->
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>

<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- KOE JS
<script src="js/koeplayer.js"> </script> -->

<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
<script>
// Carrega DataTables
$(document).ready(function(){
 $('#playlist').DataTable({
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
},
"bLengthChange": false,
'sDom': '<"top">rt<"bottom"lp><"clear">' ,
  });

	  $('#formNewPlaylist').submit(function(){
		var playlist = document.getElementById('namePlaylist').value;
    var usuario  = document.getElementById('guidUsuario').value;

        $.ajax({
  			url:"ajax/sistem_addplaylist.php",
  			type:"POST",
  			data: {"nome": playlist, "user": usuario},
     			success: function (result){
                    $.each(result, function(index){
                                    $("#criaPlaylist").remove();
                          					$("#ulmenu").append("<li><a href='musicas.php?musicas="+result[index].guid+"' class='hvr-bounce-to-right'><i class='fa fa-headphones nav_icon'></i>"+result[index].nomeplaylist+"</a></li>");
                                    $("#ulmenu").append('<li><a id="criaPlaylist" href="" data-toggle="modal" data-target="#newPlaylist" class="hvr-bounce-to-right"><i class="fa fa-plus-circle nav_icon"></i><b>Nova Playlist</b></a></li>');
                                  });
                    $('#newPlaylist').modal('hide');
              		}
  		})
  		return false;
  	})


} );
</script>

<script>
function search(){
  var table = $('#playlist').DataTable();

$('#searchBar').on( 'keyup', function () {
  table.search( this.value ).draw();
})
}

		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
			if (!screenfull.enabled) {
				return false;
			}

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});

		});
    </script>

<!-- Custom Style -->
<style>
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
</style>
<!-- Custom Style -->

</head>
<body>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php">King of Eletro</a></h1>
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">

      <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
			</section>

<!-- Barra de Pesquisa -->
			<div class=" navbar-left-right">
              <input id="searchBar" type="text"  value="Pesquisar..." onkeyup="search()" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pesquisar...';}">
              <i class="fa fa-search"></i>
      </div>
            <div class="clearfix"> </div>
        </div>



		    <div class="drop-men" >
		        <ul class=" nav_1">

					<li class="dropdown">
            <!-- Dados do Usuario
                Por enqunato apenas o nome e será impresso um indentificador para edição dos dados do usuário
           -->
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $nome_usuario; ?><i class="caret"></i></span><img  class="image-responsive" width="60px" height="60px"  src="../images/source/user-default.png"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="perfil.php"><i class="fa fa-user"></i>Editar Perfil</a></li>
                    <li><a href="sair.php"><i class="fa fa-exit"></i>Sair</a></li>
		              </ul>
		      </li>
		    </ul>
	 </div><!-- /.navbar-collapse -->

			<div class="clearfix">
      </div>

		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.php" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon "></i><span class="nav-label">Home</span> </a>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Playlists</span><span class="fa arrow"></span></a>
                        <ul id="ulmenu" class="nav nav-second-level">
                          <!-- Lista com as playlists
                            Todas playlists são abertas na mesma página mudando apenas seu identificador
                         -->
                            <li><a href="musicas.php?musicas=all" class=" hvr-bounce-to-right"> <i class="fa fa-headphones nav_icon"></i>Músicas King of Eletro</a></li>
                            <li><a href="musicas.php?musicas=favorites" class=" hvr-bounce-to-right"><i class="fa fa-star nav_icon"></i>Favoritas</a></li>
                            <!-- Populado o menu com as playlists relacionadas ao usuario -->
                            <?php
															$db->connect();
															$db->sql("SELECT a.guid AS guid_playlist,
																							 a.nomeplaylist,
																							 a.guiduser AS usuario_playlist
																							 FROM sistem_playlist AS a
																							 WHERE guiduser = $id_usuario");
															$res = $db->getResult();
															foreach($res as $output)
															{
																$nome_playlistLista = $output["nomeplaylist"];
																$usuario_playlist 	= $output["usuario_playlist"];
																$guid_playlist			= $output["guid_playlist"];

                                // Imprimi as playlists
																echo "<li><a href='musicas.php?musicas=$guid_playlist' class='hvr-bounce-to-right'><i class='fa fa-headphones nav_icon'></i>", $nome_playlistLista. "</a></li>";
															}


                              //Pegar variavel da playlist
                              $current_playlist = $_GET['musicas'];

                              if ($current_playlist == 'all'){
                                $nome_playlist = 'Músicas';
                                $guid_playlist =  1;
                              } elseif ($current_playlist == 'favorites') {
                                $favorite_active = 1;
                                $nome_playlist = 'Minhas Favoritas';
                              } else {
                                $db->connect();
  															$db->sql("SELECT * FROM sistem_playlist WHERE guid = $current_playlist");
                                $res = $db->getResult();
  															foreach($res as $output)
                                {
                                  $nome_playlist = $output["nomeplaylist"];
                                }
                              }
														 ?>
                             <!-- Botão que abre o modal para criar uma nova playlist -->
                             <li><a id="criaPlaylist" href="" data-toggle="modal" data-target="#newPlaylist" class="hvr-bounce-to-right"><i class="fa fa-plus-circle nav_icon"></i><b>Nova Playlist</b></a></li>
					              </ul>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Configurações</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="sair.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

 	<!--banner-->
<div class="banner">
<h2>
  <!-- Exibido o Nome da Playlist -->
	<span><?php echo $nome_playlist; ?>  </span>
  <?php
    if (($current_playlist != 'all') and ($current_playlist != 'favorites')) {
      echo '<button type="button" class="btn btn-danger btn-sm pull-right">Excluir Playlist</button>';
    }
  ?>
</h2>
</div>
		<!--//banner-->

 	 <!--faq-->
 	<div class="blank">


			<div class="blank-page">
        <!-- Tabela com as músicas da determinada playlist selecionada -->
				<table id="playlist" class="table table-hover">
				  <thead>
				    <tr>
				      <th width="15px" ><i class="fa fa-play" aria-hidden="true"></i></th>
							<th width="35px"></th>
				      <th>Música</th>
				      <th>Artista</th>
				      <th width="15px"><i class="fa fa-clock-o" aria-hidden="true"></i></th>
				    </tr>
				  </thead>
				  <tbody>
            <?php

              // Se a playlist selecionada nao for a favoritas ou todas as músicas ele faz o select com forme um guid pelo método $_GET
              if ( ($current_playlist != 'all') && ($current_playlist != 'favorites') ){
                $db->connect();
                $db->sql("SELECT a.guid as guid_playlist,
		                              a.guiduser as guid_userplaylist,
		                              b.guid as guid_listasong,
		                              b.guid_music as guid_musica,
                                  b.guid_playlist as guid_playlistlistsong,
		                              c.guid as guid_song,
		                              c.numero as numero_song,
		                              c.duration as duracao_song,
		                              c.directory as diretorio_song,
		                              c.artista as artista_song,
		                              c.titulo as titulo_song
		                              FROM sistem_playlist AS a
		                              INNER JOIN sistem_listsongs AS b
		                              ON b.guid_playlist = a.guid
		                              INNER JOIN sistem_musics AS c
		                              ON c.guid = b.guid_music WHERE a.guid = $current_playlist");
               $res = $db->getResult();
               foreach($res as $output)
               {
                  $diretorio_play     = $output["diretorio_song"];
                  $artista_song       = $output["artista_song"];
                  $titulo_song        = $output["titulo_song"];
                  $duracao_song       = $output["duracao_song"];
                  $guid_listasong     = $output["guid_song"];
                  $numero_song        = $output["numero_song"];
                  $guid_playlistlista = $output["guid_playlist"];

                  echo '<tr>'
                  ,'<th width="15px" ><button type="button" class="btn btn-default btn-circle"><i class="fa fa-play"></i></button></th>'
                  ,'<td width="35px">'
                  ,'<div class="dropdown">'
                  ,'<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-secondary" data-target="#" href="/page.html">'
                  ,'<i class="material-icons">more_vert</i>'
                  ,'</a>'
                  ,'<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">'
                  ,'<li><a href="#">Some action</a></li>'
                  ,'<li><a href="#">Some othe action</a></li>'
                  ,'<li class="divider"></li>'
                  ,'<li class="dropdown-submenu">'
                  ,'<a tabindex="-1" href="#">Adicionar a Playlist</a>'
                  ,' <ul class="dropdown-menu">';
                  $db->connect();
                  $db->sql("SELECT a.guid AS guid_playlist,
                                   a.nomeplaylist,
                                   a.guiduser AS usuario_playlist
                                   FROM sistem_playlist AS a
                                   WHERE guiduser = $id_usuario");
                  $res = $db->getResult();
                  foreach($res as $output)
                  {
                    $nome_playlist 			= $output["nomeplaylist"];
                    $usuario_playlist 	= $output["usuario_playlist"];
                    $guid_playlist			= $output["guid_playlist"];

                    if ($guid_playlist != $guid_playlistlista ){
                    echo '<li><a tabindex="-1" href="#">', $nome_playlist. '</a></li>';
                  }
                  }
                  echo '</ul>'
                  ,'</li>'
                  ,'</ul>'
                  ,'</div>'
                  ,'</td>'
                  ,'<td>'; echo $titulo_song; echo '</td>'
                  ,'<td>'; echo $artista_song; echo '</td>'
                  ,'<td width="15px">'; echo $duracao_song; echo '</td>'
                  ,'</tr>'
                  ;
              }
            } elseif ($current_playlist != 'all') {

            }

             ?>
				  </tbody>
				</table>

	    </div>
	</div>

	<!--//faq-->
		<!---->
<div class="copy">
            <p>King Of Eletro - 2016 | Made With <i style="color: red" class="fa fa-heart" aria-hidden="true"></i></p>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>

       <!-- Modal New Playlist -->
       <div class="modal fade" id="newPlaylist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
               <h4 class="modal-title" id="myModalLabel">Nova Playlist</h4>
             </div>
             <div class="modal-body">
              <form id="formNewPlaylist">
                <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-2 form-control-label">Nome: </label>
                   <div class="col-sm-10">
                     <input type="text" name="namePlaylist" class="form-control" id="namePlaylist" placeholder="Nova Playlist" required>
                   </div>
                 </div>

                 <div class="form-group" style="display: none">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">guidusuario: </label>
                    <div class="col-sm-10">
                      <input type="text" name="namePlaylist" value="<?php echo $id_usuario; ?>" class="form-control" id="guidUsuario" placeholder="Nova Playlist" required>
                    </div>
                  </div>

             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
               <button type="submit" class="btn btn-primary">Salvar</button>
             </div>
             </form>
           </div>
         </div>
       </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

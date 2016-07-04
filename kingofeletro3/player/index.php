<!DOCTYPE HTML>
<?php
ob_start();// Inicia Buffer

session_start(); 	//A seção deve ser iniciada em todas as páginas
if (!isset($_SESSION['usuarioID'])) {		//Verifica se há seções
        session_destroy();						//Destroi a seção por segurança
       	header("Location: http://kingofeletro.com.br/login.php"); exit;	//Redireciona o visitante para login
}

// Dados do usuario logado
$id_usuario 		= $_SESSION["usuarioID"];
$nome_usuario 	= $_SESSION["nomeUsuario"];
$email_usuario 	= $_SESSION["email"];


// Funções para não exibir alguns erros de conexao
ini_set( 'display_errors', true );
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

// Inclui a classe de CRUD mysql
include('../class/mysql_crud.php');

// Cria o objeto Database
$db = new Database();
?>
<html>
<head>
<title>King of Eletro | Player :: Home</title>
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

<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
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

			<form class=" navbar-left-right">
              <input type="text"  value="Pesquisar..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pesquisar...';}">
              <input type="submit" value="" class="fa fa-search">
      </form>
            <div class="clearfix"> </div>
           </div>


            <!-- Brand and toggle get grouped for better mobile display -->

		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">

					<li class="dropdown">
						<!-- Populate User fields -->

		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $nome_usuario; ?><i class="caret"></i></span><img src="images/wo.jpg"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="perfil.php"><i class="fa fa-user"></i>Editar Perfil</a></li>
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
                        <ul class="nav nav-second-level">
                            <li><a href="musicas.php?musicas=all" class=" hvr-bounce-to-right"> <i class="fa fa-headphones nav_icon"></i>Músicas King of Eletro</a></li>
                            <li><a href="musicas.php?musicas=favorites" class=" hvr-bounce-to-right"><i class="fa fa-star nav_icon"></i>Favoritas</a></li>
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
														 ?>
					              </ul>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Configurações</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="signin.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Sair</a></li>
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
	<span>Home</span>
</h2>
</div>
		<!--//banner-->

 	 <!--faq-->
 	<div class="blank">


			<div class="blank-page">

	        	<p>Bem vindo ao sistema player de músicas online do site King of Eletro, aqui você poderá montar playlist's e ouvir onde quiser quando quiser.
            O Sistema ainda está em desenvolvimento, falhas podem ocorrer.</p>
	        </div>
	</div>

	<!--//faq-->
		<!---->
<div class="copy">
            <p> &copy; 2016 King of Eletro. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>

<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

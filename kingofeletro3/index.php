<script data-cfasync="false" src="//dvnafl0qtqz9k.cloudfront.net/?fanvd=606799"></script>

<script data-cfasync="false" type="text/javascript"src="http://pl117310.puhtml.com/f9/99/7b/f9997b8a786b9370a3853ff34c040f3f.js"></script>

<!DOCTYPE html>
<?php
ob_start();// Inicia Buffer

// Funções para não exibir alguns erros de conexao
ini_set( 'display_errors', true );
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);


// Variaveis de Paginação
$pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$pc = $pagina;

// Inclui a classe de CRUD mysql
include('class/mysql_crud.php');

// Cria o objeto Database
$db = new Database();
?>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="King of Eletro, Rádio Online, ouça músicas online e download das melhores músicas">
		<meta name="author" content="Jefferson Mello Olynyki">

		<link rel="icon" type="image/png" href="favicon.png" />
		<title>King of Eletro - Oficial</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap-social.css" rel="stylesheet">



		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/theme-scripts.js"></script>


<!--javascript-->
<script type="text/javascript" charset="utf8">
// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
	if (Notification.permission !== "granted")
		Notification.requestPermission();
});

window.onload = function(){
	var contador = 1;
	$.ajax({
		url:("ajax/contador.php"),
		type: "POST",
		data: {"conta": contador},
		success:function(data){
			$("#visit").html(data);
		}})}


function notifyMe(nome) {
	if (!Notification) {
		alert('Desktop notifications not available in your browser. Try Chromium.');
		return;
	}

	if (Notification.permission !== "granted")
		Notification.requestPermission();
	else {
		var notification = new Notification(nome, {
			icon: 'http://kingofeletro.com.br/favicon.png',
			body: ("Você está ouvindo "+nome),
		});

	}

}

function tocar(mus,nome,botao) {
	var arquivo_de_midia=document.getElementById('audio');
	var musicativa = nome;

if (arquivo_de_midia.paused){
	$("#"+botao+"").removeClass("fa fa-play").addClass("fa fa-pause");
	notifyMe(nome);
	nextSong = mus;
	arquivo_de_midia.src = nextSong;
	arquivo_de_midia.play();
} else {
	$(".fa-pause").removeClass("fa fa-pause").addClass("fa fa-play");
	arquivo_de_midia.pause();
}

}

function curti(codigo,identify){
	$.ajax({
		url:("ajax/curtir.php"),
		type: "POST",
		data: {"udid": codigo},
		success:function(data){
			$("#"+identify).html("("+data+")");
		}})}

function ncurti(codigo,identify){
			$.ajax({
				url:("ajax/ncurtir.php"),
				type: "POST",
				data: {"udid": codigo},
				success:function(data){
					$("#"+identify).html("("+data+")");
				}})}
</script>


<!--Style Custom-->
<style>
body
.glyphicon { margin-right:5px;}
.section-box h2 { margin-top:0px;}
.section-box h2 a { font-size:15px; }
.separator { padding-right:5px;padding-left:5px; }
.section-box hr {margin-top: 0;margin-bottom: 5px;border: 0;border-top: 1px solid rgb(199, 199, 199);}
</style>

	</head>
	<body id="page-top">
		<!-- Navigation -->


		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top"><img src="images/logo.png" alt="Lattes theme logo"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>

						<li>
							<a class="page-scroll" href="#about">Sobre</a>
						</li>

						<li>
							<a class="page-scroll" href="#team">Equipe</a>
						</li>

						<li>
							<a class="page-scroll" href="#contact">Contato</a>
						</li>

						<li>
							<a class="page-scroll" href="login.php">Músicas</a>
						</li>

						<li>
							<a class="page-scroll" href="downloads.php">Downloads</a>
						</li>

						<li>
							<a class="page-scroll" href="radio.php">Rádio</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->

		<header>
			<div class="container">
				<div class="slider-container">
					<div class="intro-text">
						<div class="intro-lead-in">Bem vindo a </div>
						<div class="intro-heading">King of Eletro</div>
						<a href="radio.php" class="page-scroll btn btn-xl">Radio Online</a>
					</div>
				</div>
			</div>
		</header>

		<section id="about" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Sobre</h2>
							<p>O site King of Eletro visa compartilhar downloads de músicas, de uma forma simples, onde você pode ouvir online, baixar e também ouvir as melhores na rádio online.</p>
							<div class="alert alert-warning alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
							  <strong>Atenção!</strong> O Site kingofeletro.com.br é apenas um agregador de links, apenas buscamos os downloads na internet e agrupamos no site, não somos responsáveis pelos arquivos disponibilizados para download.
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-cloud-download ot-circle"></i>
							<h3>Download</h3>
							<p>Baixe as melhores músicas</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-music ot-circle"></i>
							<h3>Ouça Músicas Online</h3>
							<p>Ouça músicas online de alta qualidade.</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-play ot-circle"></i>
							<h3>Web Rádio</h3>
							<p>Web rádio online com as melhores músicas, fique por dentro das novidades do mundo da música</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-asterisk ot-circle"></i>
							<h3>Novidades</h3>
							<p>As melhores novidades do mundo da música eletrônica você encontra aqui.</p>
						</div>
					</div>
					<!-- end about module -->
				</div>
			</div>
			<!-- /.container -->
		</section>




		<!-- Meio aonde vai ficar as músicas -->
		<section>



			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="skills-text">
							<h2>Novas Músicas <button type="button" class="btn btn-secondary btn-sm fa fa-question-circle-o" data-toggle="modal" data-target="#question"></button></h2>
							<p>Ouça ou baixe as melhores músicas.</p>
							<div class="container hidden">
								<audio id="audio"  src="" controls="controls" onended="playall()" align=""> </audio>
							</div>
					</div>

<script>
function playall(){
	$(".fa-pause").removeClass("fa fa-pause").addClass("fa fa-play");
}
</script>
					<?php

					$total_reg = "10";


					$inicio = $pc - 1;
					$inicio = $inicio * $total_reg;

					$db->connect();
					$db->sql("SELECT * FROM musicas_home LIMIT $inicio,$total_reg");
					$res = $db->getResult();
					foreach($res as $output)
					{
						$guid 		= $output["guid"];
						$titulo 	= $output["titulo"];
						$texto		= $output["texto"];
						$download = $output["downloadlink"];
						$linkplay = $output["embed"];
						$curtir		= $output["curtir"];
						$ncurtir	= $output["ncurtir"];

						$guidcurti  = ($guid + 15);
						$guidncurti = ($guid + 10);

						echo "<div class='col-md-6 skills-text'>";
						echo "<div class='well well-sm'>";
						echo "<div class='row'>";
						echo "<div class='col-xs-12 col-md-12 section-box'>";
						echo "<h3>", $titulo. "</h3>";
						echo "<p>", $texto. "</p><hr />";



							echo "<div class='row rating-desc'>";
							echo "<div class='col-xs-12 col-md-12'>";
							echo "<a target='_blank' class='btn btn-default fa fa-download' href='$download' role='button'> Baixar</a>";
							echo "<div class='btn-group' role='group' aria-label='...'>";
							echo "<a id='$guid'role='button' onClick='tocar(\"$linkplay\",\"$titulo\",$guid)' class='btn btn-default fa fa-play'></a>";
							echo "<button id='$guidcurti' role='button' onClick='curti($guid,$guidcurti)' class='btn btn-default fa fa-thumbs-o-up'>($curtir)</button>";
							echo "<button id='$guidncurti' role='button'onClick='ncurti($guid,$guidncurti)' class='btn btn-default fa fa-thumbs-o-down'>($ncurtir)</button>";

						echo "</div>";
						echo "	<span>    </span>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
}
$res = $db->numRows();
?>


<?php
           $tr = $res;
           $tp = $tr / $total_reg;

           $anterior = $pc -1;
         	 $proximo = $pc +1;



echo "<div class='btn-group' role='group' aria-label='Basic example'>";

  if ($pc>1)
  {
    echo "<a href='?pagina=$anterior'' class='btn btn-secondary fa fa-chevron-left'></a>";
  }

  if ($pc<$tp){
      echo "<a href='?pagina=$proximo'  class='btn btn-secondary fa fa-chevron-right'></a>";
  }

  if ($pc=$tp) {
    echo         "<a href='?pagina=$pagina'  class='btn btn-secondaryt'>$pagina</a>";
    $pagina = $pagina +1;
    if ($pagina < $tp) {
    echo          "<a href='?pagina=$pagina'  class='btn btn-secondaryt'>$pagina</a>";
    }
    if ($pagina < $tp) {
    $pagina = $pagina +1;
    echo          "<a href='?pagina=$pagina'  class='btn btn-secondaryt'>$pagina</a>";
    }
    echo   "<a href='?pagina=$proximo'  class='btn btn-secondary fa fa-chevron-right'></a>";

  }

?>
</div>

					</div>
				</div>
			</div>
</section>
<!-- Modal como baixar -->
		<div class="modal fade bd-example-modal-lg" id="question">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Como Baixar</h4>
				</div>
				<div class="modal-body">
					<p>Para baixar uma música é muita simples, basta clicar em baixar
						<br>
						<img class="img-responsive" src="http://mobile.kingofeletro.com.br/imagens/downloadbutton.png" >

						<br>
						Irá abrir uma página espere 5 segundos e clique no botão Fechar anuncio
						<br>
						<img class="img-responsive" src="http://2.bp.blogspot.com/-EJDmHgshOtE/VTgWUAyyJFI/AAAAAAAACBU/Hj_-WwhSakk/s1600/Adfly.png" >
						<br>
						Um Player irá aparecer, clicar sobre o botão play com o botão direto do mouse e selecionar Salvar como.
						<br>
						<img class="img-responsive" src="http://mobile.kingofeletro.com.br/imagens/download.png" >
						<br>
						Pronto sua música será baixada.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

		<!-- NUMEROS -->
<?php
$db->connect();
$db->sql("SELECT * FROM musicas_home");
$res = $db->getResult();
$musicashome = $db->numRows();

$db->connect();
$db->sql("SELECT * FROM usuario");
$res = $db->getResult();
$usuarios = $db->numRows();

$db->connect();
$db->sql("SELECT * FROM musicas_playlist");
$res = $db->getResult();
$playlist = $db->numRows();

$db->connect();
$db->sql("SELECT * FROM songs");
$res = $db->getResult();
$radiosongs = $db->numRows();

$db->connect();
$db->sql("SELECT * FROM visit");
$res = $db->getResult();
foreach($res as $output)
{
	$visitas = $output["cont"];
}
?>

		<section class="overlay-dark bg-img1 dark-bg short-section">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4 mb-sm-40">
						<div class="counter-item">
							<h2 data-count="<?php echo ($radiosongs + $playlist + $musicashome) ?>"><?php echo ($radiosongs + $playlist + $musicashome) ?></h2>
							<h6>Músicas</h6>
						</div>
					</div>

					<div class="col-md-4 mb-sm-40">
						<div class="counter-item">
							<h2 data-count="<?php echo $usuarios ?>"><?php echo $usuarios ?></h2>
							<h6>Colaboradores</h6>
						</div>
					</div>
					<div class="col-md-4 mb-sm-40">
						<div class="counter-item">
							<h2 id="visit" data-count="<?php echo $visitas; ?>"><?php echo $visitas; ?></h2>
							<h6>Visualizações</h6>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Parceiros</h2>
							<p>Parceiros que ajudam a manter o site online. seja você também um parceiro</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="owl-carousel">

							<div class="item">
								<div class="partner-logo"><img src="/images/paterns/loucosporrebaixados.png" alt="Loucos por Rebaixados - CM/PR"></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="team" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Nossa Equipe</h2>
							<p>Conheça nossa equipe que mantem nosso site, tanto em desenvolvimento quanto em busca das melhores músicas</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- team member item -->
					<div class="col-md-3">
						<div class="team-item">
							<div class="team-image">
								<img src="http://santetotal.com/wp-content/uploads/2014/05/default-user.png" class="img-responsive" alt="author">
							</div>
							<div class="team-text">
								<h3>JEFFERSON</h3>
								<div class="team-location">Campo Mourão, Brasil</div>
								<div class="team-position">– CEO, Web Design & Developer –</div>
								<p>Fundador do projeto, o nome King of Eletro foi idealizado por Jefferson Mello Olynyki em 2014, onde visava em que pessoas poderiam encontrar músicas de qualidade facilmente,
								onde poderiam baixar músicas sem frescuras... sem propagandas.</p>
							</div>
						</div>
					</div>
					<!-- end team member item -->
					<!-- team member item -->
					<div class="col-md-3">
						<div class="team-item">
							<div class="team-image">
								<img src="http://santetotal.com/wp-content/uploads/2014/05/default-user.png" class="img-responsive" alt="author">
							</div>
							<div class="team-text">
								<h3>ALAN</h3>
								<div class="team-location">Campo Mourão, Brasil</div>
								<div class="team-position">– Buscador de Conteudo –</div>
								<p>Worsa dona namet, cons uectetur dipiscing adon elit. Aliquam vitae fringilla unda mir.</p>
							</div>
						</div>
					</div>
					<!-- end team member item -->
					<!-- team member item -->
					<div class="col-md-3">
						<div class="team-item">
							<div class="team-image">
								<img src="http://santetotal.com/wp-content/uploads/2014/05/default-user.png" class="img-responsive" alt="author">
							</div>
							<div class="team-text">
								<h3>RENAN</h3>
								<div class="team-location">Campo Mourão, Brasil</div>
								<div class="team-position">– Buscador de Conteudo –</div>
								<p>Aradan bes namet, cons uectetur moiscing adon elit. Aliquam vitae fringilla unda augue.</p>
							</div>
						</div>
					</div>
					<!-- end team member item -->


				</div>
			</div>
		</section>


		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Contato</h2>
							<p>Se você tem alguma dúvida, problema ou ideia entre em contato conosco.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h3>Onde Estamos</h3>
						<p>Campo Mourão, Paraná - Brasil</p>
						<p><i class="fa fa-envelope"></i> mail@kingofeletro.com.br</p>
					</div>

					<div class="col-md-6">
						<form name="sentMessage" id="contactForm" novalidate="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Seu Nome *" id="name" required="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Seu Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Sua Mensagem *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn">Enviar Mensagem</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<iframe src="//dvnafl0qtqz9k.cloudfront.net/br?fanvd=606797" width="300" height="250" scrolling="no" frameborder="0" sandbox="allow-same-origin allow-scripts allow-popups allow-forms"></iframe>

		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		<footer>
			<div class="container text-center">
				<p>King Of Eletro - 2016 | Made With <i style="color: red" class="fa fa-heart" aria-hidden="true"></i></p>
			</div>
		</footer>


		<!--Document Ready-->
		<script>
		  $( document ).ready(function(){
				$(".alert").alert()
		})
		</script>
	</body>
</html>

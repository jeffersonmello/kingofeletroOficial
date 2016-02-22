<!DOCTYPE html>
<?php

ini_set( 'display_errors', true );
error_reporting( E_ALL );
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>King of Eletro - Oficial</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">king of eletro</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="musicas.php">Músicas</a></li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="radio.php" class="button special">Rádio</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Bem vindo a King of Eletro.</h2>
				<p>Music for your life</p>
				<ul class="actions">
					<!--<li>
						<a href="#" class="button big">Lorem ipsum dolor</a>
					</li>-->
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Novas Músicas ou mais tocadas</h2>
						<p>Faça download das melhores músicas do momento</p>
					<!--	<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>-->
					</header>

					<!-- <div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color1 fa-cloud"></i>
								<h3>Lorem ipsum dolor</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>Consectetur adipisicing</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam consequatur repellat debitis maxime.</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3>Adipisicing elit totam</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
							</section>
						</div>
					</div>
				</div> -->
			</section>

			<section id="main" class="wrapper">
			<div class="container">

<?
					include "config.php";

					$sql = mysql_query("SELECT * FROM musicas_home order by guid desc limit 10");
					while($linha = mysql_fetch_array($sql)){
						$titulo= $linha["titulo"];
						$texto= $linha["texto"];
						$downloadlink = $linha["downloadlink"];
						$nomearquivo= $linha["nomearquivo"];
						$musicalink= $linha["musicalink"];



		echo	"<header>";
		echo	"<h3>$titulo</h3>";
		echo	"<p>$texto</p>";
		echo	"<ul class='actions'>";
		echo  "<li><a href='$downloadlink' class='button icon fa-download'>Download</a></li>";
		echo	"<li><audio controls='controls' preload='preload' title='Abaçaiado - O Teatro Mágico'> <source type='audio/ogg' src='$musicalink' /> <source type='audio/mpeg' src='$musicalink' /> <a href='$musicalink'>ue</a> </audio></li>";
		echo	"</ul>";
		echo	"<hr />";
		echo	"</header>";

	}

mysql_close($conexao);
?>
		</div>
	</section>


		<!-- Two
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Lorem ipsum dolor sit</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p>
					</header>
					<section class="profiles">
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Lorem ipsum</h4>
								<p>Lorem ipsum dolor</p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Voluptatem dolores</h4>
								<p>Ullam nihil repudi</p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Doloremque quo</h4>
								<p>Harum corrupti quia</p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
								<img src="images/profile_placeholder.gif" alt="" />
								<h4>Voluptatem dicta</h4>
								<p>Et natus sapiente</p>
							</section>
						</div>
					</section> -->
					<footer>
						<div>
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- novokingteste -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3917397657053754"
     data-ad-slot="9144337227"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
						</div>
					</footer>


		<!-- Three
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Consectetur adipisicing elit</h2>
						<p>Lorem ipsum dolor sit amet. Delectus consequatur, similique quia!</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Send Message" class="special big" type="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section> -->

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="3u 6u(medium) 12u$(small)">
								<h3>King of Eletro</h3>
								<ul class="unstyled">
									<li><a href="#">Rádio Online</a></li>
									<li><a href="#">Pedir uma música</a></li>
									<li><a href="#">Músicas</a></li>
									<li><a href="#">Download</a></li>
									<li><a href="#">Sobre</a></li>
								</ul>
							</section>
				<!--			<section class="3u 6u$(medium) 12u$(small)">
								<h3>Culpa quia, nesciunt</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Reiciendis dicta laboriosam enim</a></li>
									<li><a href="#">Corporis, non aut rerum</a></li>
									<li><a href="#">Laboriosam nulla voluptas, harum</a></li>
									<li><a href="#">Facere eligendi, inventore dolor</a></li>
								</ul>
							</section>
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Neque, dolore, facere</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Distinctio, inventore quidem nesciunt</a></li>
									<li><a href="#">Explicabo inventore itaque autem</a></li>
									<li><a href="#">Aperiam harum, sint quibusdam</a></li>
									<li><a href="#">Labore excepturi assumenda</a></li>
								</ul>
							</section>
							<section class="3u$ 6u$(medium) 12u$(small)">
								<h3>Illum, tempori, saepe</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Recusandae, culpa necessita nam</a></li>
									<li><a href="#">Cupiditate, debitis adipisci blandi</a></li>
									<li><a href="#">Tempore nam, enim quia</a></li>
									<li><a href="#">Explicabo molestiae dolor labore</a></li>
								</ul>
							</section> -->
						</div>
					</section>
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; King of Eletro. All rights reserved.</li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

	</body>
</html>

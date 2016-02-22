<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
	<body>

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

		<!-- Main -->

				<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Lista de Músicas</h2>
						<p>Ouça e baixe a música que quiser !</p>
					</header>

					<a href="#" class="image fit"><img width="100px" height="600px"src="http://www.dudesnews.com/wp-content/uploads/2013/10/EDM-croud-playlist.jpg" alt="" /></a>




<?
					include "config.php";

					$sql = mysql_query("SELECT * FROM musicas_home limit 50");
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
		echo	"<li><audio controls='controls' loop preload='preload title='Abaçaiado - O Teatro Mágico'> <source type='audio/ogg' src='$musicalink' /> <source type='audio/mpeg' src='$musicalink' /> <a href='$musicalink'>$nomearquivo</a> </audio></li>";
		echo	"</ul>";
		echo	"<hr />";
		echo	"</header>";

	}

mysql_close($conexao);
?>
		</div>
	</section>

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
							<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
							<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
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

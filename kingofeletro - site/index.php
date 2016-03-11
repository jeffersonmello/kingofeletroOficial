<!DOCTYPE html>
<?php
ini_set( 'display_errors', true );
error_reporting( E_ALL );
$pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$pc = $pagina;
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>King of Eletro - Oficial</title>
		<link rel="icon" type="image/png" href="favicon.png" />
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
				<h1><a href="index.php">king of eletro</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="musicas.php">Músicas</a></li>
						<li><a href="pedirmusica.php">Contato</a></li>
						<li><a href="radio.php" target="_blank" class="button special">Rádio</a></li>
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


			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Novas Músicas ou mais tocadas</h2>
						<p>Faça download das melhores músicas do momento</p>
					</header>

			</section>
	<div class="row">
		<hr>
	</div>

<div class="row">
	<div class="one columns major" style="margin-bottom:100%; margin-right: 45px;">
		<section style="margin-bottom:25px" >
		</section>
	</div>

	<div class="eight columns major">
			<section  class="box major">
				<header class="major">
				<p>Aqui você pode ouvir ou baixar as músicas mais tocadas do momento, só na King of Eletro !!!    </p>
				</header>
<?
					include "config.php";
					$total_reg = "5";


					$inicio = $pc - 1;
  				$inicio = $inicio * $total_reg;

					$sql = mysql_query("SELECT * FROM musicas_home order by guid desc LIMIT $inicio,$total_reg");
					$tr = mysql_num_rows($sql); // verifica o número total de registros
					$tp = $tr / $total_reg; // verifica o número total de páginas


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
	$anterior = $pc -1;
	$proximo = $pc +1;

	echo  "<ul class='actions'>";

	if ($pc>1) {
		echo "<li><a href='?pagina=$anterior' class='button alt small'>Anterior</a></li> ";
	}

	 if ($pc<$tp) {
		echo "<li><a href='?pagina=$proximo'class='button alt small'>Próxima</a></li> ";

	}

//	if ((!empty($pc)) and ($pc!=$tp)){
//		echo "<li><a href='?pagina=$proximo'class='button alt small'>Próxima</a></li> ";
//		echo "</ul>";
//	}

if ($pc=$tp) {
echo "<li><a href='?pagina=$proximo'class='button alt small'>Próxima</a></li> ";
echo "</ul>";
echo "</ul>";
}


mysql_close($conexao);
?>

	</section>

	</div>
	<div class="two column">
		<section  class="box">
			<header class="major">
			<h2>Anúncios</h2>
			</header>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

			<section  class="box">
				<header class="major">
				<h4>Include</h4>
				</header>
			</section>

	</section>
</div>

</div>
					<footer>
						<div>
							<header class="major">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- wordpress -->
							<ins class="adsbygoogle"
							     style="display:block"
							     data-ad-client="ca-pub-3917397657053754"
							     data-ad-slot="4746746424"
							     data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
							</header>
						</div>
					</footer>

					<!--Start of Zopim Live Chat Script-->
					<script type="text/javascript">
					window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
					d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
					_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
					$.src="//v2.zopim.com/?2QjOCzEbJREjXQlGyZlMOA6AUhFdVdvd";z.t=+new Date;$.
					type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
					</script>
					<!--End of Zopim Live Chat Script-->

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="3u 6u(medium) 12u$(small)">
								<h3>King of Eletro</h3>
								<ul class="unstyled">
									<li><a href="radio.php">Rádio Online</a></li>
									<li><a href="pedirmusica.php">Pedir uma música</a></li>
									<li><a href="musicas.php">Músicas</a></li>
									<li><a href="pedirmusica.php">Sobre</a></li>
								</ul>
							</section>


								</body>
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
									<a href="https://plus.google.com/b/108172637382157928790/108172637382157928790/posts?gmbpt=true&pageId=108172637382157928790&hl=pt-BR"  target="_blank" class="icon rounded fa-google-plus"><span  class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
</html>

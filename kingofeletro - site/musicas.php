<!DOCTYPE html>
<?php
$playertitulo = "";
$playermusica = "";
 ?>
<html lang="en">
	<head>
		<!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta charset="UTF-8">
		<title>King of Eletro - Oficial</title>
    <link rel="icon" type="image/png" href="favicon.png" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<!-- Mobile Specific Metas
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

	 <!-- Scripts
 –––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
    <script src="js/jquery.js"></script>
    <script src="skeleton-tabs.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body onselectstart="return false">

	<!-- Header
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
			<header id="header">
				<h1><a href="index.php">king of eletro</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="musicas.php">Músicas</a></li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="radio.php" target="_blank" class="button special">Rádio</a></li>
					</ul>
				</nav>
			</header>

		<!-- Principal Main
		 –––––––––––––––––––––––––––––––––––––––––––––––––– -->
				<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Lista de Músicas</h2>
						<p>Ouça e baixe a música que quiser !</p>

					</header>

					<a href="#" class="image fit"><img width="600px" height="193px"src="images/playlist.png" alt="" /></a>

			<!-- Player Principal
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
						<header class="major">
							<?php 	echo	"<p><audio style='display:none' id='principal' controls='controls' loop preload='preload title='$playertitulo'> <source type='audio/ogg' src='$playermusica' /> <source type='audio/mpeg' src='$playermusica' /> <a href='$musicalink'></a> </audio></p>"; ?>
						</header>

		 <!-- Scripts do Player
							–––––––––––––––––––––––––––––––––––––––––––––––––– -->
				<script>
				function tocar(id_do_audio) {
					var arquivo_de_midia=document.getElementById(id_do_audio);
					arquivo_de_midia.play();
				}
				function pausar(id_do_audio) {
					var arquivo_de_midia=document.getElementById(id_do_audio);
					arquivo_de_midia.pause();
				}
				function tela_cheia(id_do_audio) {
					var arquivo_de_midia=document.getElementById(id_do_audio);
					arquivo_de_midia.webkitEnterFullScreen();
				}
				function aumentar_vomume(id_do_audio) {
					var arquivo_de_midia=document.getElementById(id_do_audio);
					arquivo_de_midia.volume += 0.1;
				}
				function diminuir_volume(id_do_audio) {
					var arquivo_de_midia=document.getElementById(id_do_audio);
					arquivo_de_midia.volume -= 0.1;
				}
				function duracao(id_do_audio) {
					var arquivo_de_midia=document.getElementById(id_do_audio);
					alert("Duração: " + arquivo_de_midia.duration + " e tempo trancorrido: " + arquivo_de_midia.currentTime);
				}
				</script>

        <!-- Começo das Tabs
  				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
          <div class="container">
              <div class="row">
                <div class="twelve columns" >
                  <ul class="tab-nav">
                    <li>
                      <a class="button alt active" href="#one">Playlist's</a>
                    </li>
                    <li>
                      <a class="button alt" href="#two">Spotify</a>
                    </li>
                    <li>
                      <a class="button alt" href="#three">Downloads</a>
                    </li>
                  </ul>

			<!-- Tabela de Musicas
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="tab-content">
        <div class="tab-pane active" id="one">
										<div class="table-wrapper">
											<table>
													<thead>
															<tr>
																<th>#</th>
																<th>Titulo</th>
																<th>Artista</th>
																<th>Album</th>
																<th style='display:none'>Player</th>
																<th class="actions">Ações</th>
																<th>Download</th>
														  	</tr>
														</thead>
															<tbody>
<?
					include "config.php";

					$sql = mysql_query("SELECT * FROM musicas_playlist limit 50");
					while($linha = mysql_fetch_array($sql)){
						$guid=$linha["guid"];
						$arte= $linha["arte_album"];
						$titulo= $linha["titulo"];
						$artista= $linha["artista"];
						$album = $linha["album"];
						$linkplay= $linha["linkplay"];
						$download= $linha["download"];



		echo	"<tr>";
		echo	"<td width='160px'><span class='image left'><img src='arte/$arte' alt='' /></td>";
		echo	"<td>$titulo</td>";
		echo	"<td>$artista</td>";
		echo	"<td>$album</td>";
		echo	"<td style='display:none'><audio id='$guid' controls='controls' loop preload='preload title='$titulo'> <source type='audio/ogg' src='$linkplay' /> <source type='audio/mpeg' src='$linkplay' /> <a href='$musicalink'></a> </audio></td>";
		echo  "<td class='actions'>";
		echo  "<a class='button small icon fa-play' onClick='tocar($guid);' > Play</a>";
		echo  "<a> </a>";
		echo  "<a class='button small icon fa-pause' onClick='pausar($guid)'> Pause</a>";
		echo  "<a> </a>";
		echo  "<a class='button small icon fa-volume-up' onClick='aumentar_vomume($guid)'> Vol +</a>";
		echo  "<a> </a>";
		echo  "<a class='button small icon fa-volume-down' onClick='diminuir_volume($guid)'> Vol -</a>";
		echo  "</td>";
		echo  "<td><a href='$downloadlink' class='button icon fa-download'>Download</a></td>";
		echo 	"</tr>";


	}

mysql_close($conexao);
?>

</tbody>
</table>
			</div>

</div>

<div class="tab-pane" id="two">
		<iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3A12149943521%3Aplaylist%3A2Kj4ph6Hi2Uo51jyx8jtuL" width="100%" height="380" frameborder="0" allowtransparency="true"></iframe>
</div>

<div class="tab-pane" id="three">
           <h5>Tab 3</h5>
           <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
         </div>
</div>

</section>


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
								<li><a href="#">Rádio Online</a></li>
								<li><a href="#">Pedir uma música</a></li>
								<li><a href="#">Músicas</a></li>
								<li><a href="#">Download</a></li>
								<li><a href="#">Sobre</a></li>
							</ul>
						</section>
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

	</body>
</html>

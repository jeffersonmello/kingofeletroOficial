<!DOCTYPE html>
<?php
$playertitulo = "";
$playermusica = "";
 ?>
<html lang="pt-br">
	<head>
		<!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="King of Eletro, Rádio Online, ouça músicas online e download das melhores músicas">
  <meta name="author" content="Jefferson Mello Olynyki">
		<title>King of Eletro | Músicas</title>
    <link rel="icon" type="image/png" href="favicon.png" />

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
    <!-- Scripts Data Tables
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>

  <script>
  $(document).ready( function () {
    $('#downloads').DataTable();
} );
  </script>
	<body onselectstart="return false">

	<!-- Header
	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
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

		<!-- Principal Main
		 –––––––––––––––––––––––––––––––––––––––––––––––––– -->
				<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Lista de Músicas</h2>
						<p>Ouça e baixe a música que quiser !</p>

					</header>

					<a href="#" class="image fit"><img width="600px" height="193px"src="images/playlist.png" alt="Playlists King of Eletro" /></a>

			<!-- Player Principal
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div class="container" width="100%" height="100%">
						<header class="major">
							<audio id="audio"  src="musicas/0.mp3" controls="controls" autoplay="autoplay"  onended="proxima('audio')" align=""> </audio>
            <div class="table-wrapper major">
              <table>
                <thead>
                    <tr>
                      <th class="actions"></th>
                    </tr>
                </thead>
                  <tbody>
                    <tr>
                      <td class="actions">
                        <a class="button small icon fa-play" onClick="resume()"> Resume</a>
                        <a class="button small icon fa-pause" onClick="pausar('audio')"> Pause</a>
                        <a class="button small icon fa-step-backward" onClick="anterior('audio')"> Anterior</a>
                        <a class="button small icon fa-step-forward" onClick="proxima('audio')"> Próximo</a>
                        <a class="button small icon fa-volume-up" onClick="aumentar_vomume('audio')"> + </a>
                        <a class="button small icon fa-volume-down" onClick="diminuir_volume('audio')"> - </a>
                      </td>
                    </tr>
                  </tbody>
                  </table>
                </div>
						</header>
        </div>

		 <!-- Scripts do Player
							–––––––––––––––––––––––––––––––––––––––––––––––––– -->
				<script>
        var i;
				function tocar(mus) {
          var arquivo_de_midia=document.getElementById('audio');
          i= mus;
          nextSong = "musicas/"+mus+".mp3";;
					arquivo_de_midia.src = nextSong;
					arquivo_de_midia.play();
				}
        function proxima(id_do_audio) {
					var arquivo_de_midia=document.getElementById(id_do_audio);
					i = i+1;
					nextSong = "musicas/"+i+".mp3";
					arquivo_de_midia.src = nextSong;
					arquivo_de_midia.play();
				}
        function anterior(id_do_audio) {
					var arquivo_de_midia=document.getElementById(id_do_audio);
					i = i-1;
					nextSong = "musicas/"+i+".mp3";
					arquivo_de_midia.src = nextSong;
					arquivo_de_midia.play();
				}
        function resume(id_do_audio) {
          var arquivo_de_midia=document.getElementById('audio');
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
                      <a class="button alt" href="#three">Downloads</a>
                    </li>
                  </ul>

			<!-- Tabela de Musicas
				–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="tab-content">
        <div class="tab-pane active"  id="one">
          <div class="container" width="100%" height="100%">
										<div class="table-wrapper major">
											<table>
													<thead>
															<tr>
																<th>Titulo</th>
																<th>Artista</th>
																<th>Album</th>
																<th class="actions">Ações</th>
																<th>Download</th>
														  	</tr>
														</thead>
															<tbody>
<?
					include "config.php";

					$sql = mysql_query("SELECT * FROM musicas_playlist order by guid asc limit 50");
					while($linha = mysql_fetch_array($sql)){
            $linkplay= $linha["linkplay"];
						$download= $linha["download"];
						$guid=$linha["guid"];
						$arte= $linha["arte_album"];
						$titulo= $linha["titulo"];
						$artista= $linha["artista"];
						$album = $linha["album"];

            //$guid33 = $guid;
            //$guid = $linkplay;
            $mus = $linkplay;

		echo	"<tr>";
		echo	"<td>$titulo</td>";
		echo	"<td>$artista</td>";
		echo	"<td>$album</td>";
		echo  "<td class='actions'>";
		echo  "<a class='button small icon fa-play' onClick='tocar($mus)' > Play</a>";
		echo  "<a> </a>";
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
</div>



<div class="tab-pane" id="three">
  <div class="container" width="100%" height="100%">
    <h3 class="major"> Download de Músicas </h3>
  <iframe src="admin/tabeladownloads.php" width="100%" height="800px"></iframe>
  </div>
</div>

</section>


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
                <a href="https://www.facebook.com/Kingofeletro/" target="_blank" class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
              </li>
              <li>
                  <a href="https://plus.google.com/b/108172637382157928790/108172637382157928790/posts?gmbpt=true&pageId=108172637382157928790&hl=pt-BR"  target="_blank" class="icon rounded fa-google-plus"><span  class="label">Google+</span></a>
              </li>
            </ul>
          </div>
				</div>
			</div>
		</footer>

	</body>
</html>

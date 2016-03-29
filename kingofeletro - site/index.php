<!DOCTYPE html>
<?php
ini_set( 'display_errors', true );
error_reporting( E_ALL );
$pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$pc = $pagina;
?>
<html lang="pt-br">
	<head>
		<!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="King of Eletro, Rádio Online, ouça músicas online e download das melhores músicas">
  <meta name="author" content="Jefferson Mello Olynyki">
		<title>King of Eletro - Oficial</title>
    <link rel="icon" type="image/png" href="favicon.png" />
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
		<script src='http://yourjavascript.com/01114252230/jquery-min.js'></script>
<script src="http://yourjavascript.com/18530532124/jquery-colorbox-min.js"></script>
<script type="text/javascript">
function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*2*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    createCookie(name,"",-1);
}
jQuery(document).ready(function() {
    var visited = readCookie('visited');
    if (!visited || visited !== "true") {
        createCookie('visited', "true", 1);
        $.colorbox({width:"400px", inline:true, href:"#subscribe"});
    }
});
</script>
<script type="text/javascript" src="http://yourjavascript.com/14222701305/google-jquery-min.js"></script>
<script type="text/javascript">
// JavaScript Document
 var $q = jQuery.noConflict();
$q(document).ready(function()
{
$q("#lightbox, #lightboxContent").click(function(){
$q("#lightbox, #lightboxContent").hide();
})});
</script>
<style type="text/css">
#lightbox {
    background-color: #000;
    float: left;
    height: 100%;
    opacity: 0.9;
    -moz-opacity: 0.90;
    filter: alpha(opacity=90);
    position: fixed;
    width: 100%;
	z-index:998;
}

#lightboxContent {
    background-image: url("https://4.bp.blogspot.com/-3DNa84iiLNQ/Vm2X4uDnUTI/AAAAAAAAAQo/ew0nwwJLGWY/s1600/box7.png");
	background-repeat:no-repeat;
    margin: 0 auto;
    opacity: 997;
    padding-top: 43px;
    width: 331px;
    height: 343px;
    z-index:999;
    cursor:pointer;
    margin-left: -157px; /* metade da largura */
    margin-top: -145px; /* metade da altura */
    position: fixed;
    top: 60%;
    left: 50%;
    text-align: center;
}
#fechar {
z-index:10;
}
</style>
<style type="text/css">
<!--
#curtir {
z-index:998;
}
-->
</style>
<script language="JavaScript" type="text/javascript">
if (document.all){}
else document.captureEvents(Event.MOUSEMOVE);
document.onmousemove=mouse;
function mouse(e)
{
if (navigator.appName == 'Netscape'){
xcurs = e.pageX;
ycurs = e.pageY;
} else {
xcurs = event.clientX;
ycurs = event.clientY;
}
document.getElementById('position').style.left = (xcurs-150)+'px';
document.getElementById('position').style.top = (ycurs-125)+'px';
}
</script>
<style type="text/css">
<!--
#position {
position: absolute;
z-index:999999;
filter:alpha(opacity=0);
opacity:0.0;
}
-->
</style>
<div style='display:none' mobile='no'>
<div id='subscribe' mobile='no'>
<div id="position">
<div id="samuellins">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- kingofeletro -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-3917397657053754"
     data-ad-slot="5277589229"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
</div>
<div id="lightbox"></div>
<div id="lightboxContent"><div id="curtir"><iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FKingofeletro/?ref=tn_tnmn1&amp;width=315&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23ffffff&amp;stream=false&amp;header=false&amp;height=290" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:315px; height:290px;" allowtransparency="true" onclick="document.getElementByID('lightboxContent').style.display='none';"></iframe><div id="fechar" onclick="document.getElementByID('lightboxContent').style.display='none';"><b>Clique no X para fechar!</b></div></div></div>
</div></div>

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
						<p>Download de Músicas</p>
					</header>

			</section>
	<div class="row">
		<hr>
	</div>


	<div class="twelve columns major">
			<section  class="box major">
				<header class="major">
				<p>Faça o downloads de músicas que você mais gosta</p>
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
						$embed= $linha["embed"];



		echo	"<header>";
		echo	"<h3>$titulo</h3>";
		echo	"<p>$texto</p>";
		echo	"<ul class='actions'>";
		echo  "<li><a target='_blank' href='$downloadlink' class='button small icon fa-download'>Download</a></li>";
		echo	"<li>$embed</li>";
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


if ($pc=$tp) {
echo "<li><a href='?pagina=$proximo'class='button alt small'>Próxima</a></li> ";
echo "</ul>";
echo "</ul>";
}


mysql_close($conexao);
?>

	</section>
	</div>
</div>
					<footer>

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
</html>

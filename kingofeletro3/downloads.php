<!DOCTYPE html>
<?php
ob_start();// Inicia Buffer

// Funções para não exibir alguns erros de conexao
ini_set( 'display_errors', true );
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);


// Inclui a classe de CRUD mysql
include('class/mysql_crud.php');

// Cria o objeto Database
$db = new Database();
?>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
    <script src="js/cbpAnimatedHeader.js"></script>



<!--Document Ready-->
<script type="text/javascript" charset="utf8">
$(document).ready(function(){
    $('#errolog').hide(); //Esconde o elemento com id errolog
	  $('#formlogin').submit(function(){ 	//Ao submeter formulário
		var login = document.getElementById('email').value;
		var senha = document.getElementById('senha').value;
		$.ajax({			//Função AJAX
			url:"ajax/sistem_login.php",			//Arquivo php
			type:"POST",				//Método de envio
			data: "login="+login+"&senha="+senha,	//Dados
   			success: function (result){			//Sucesso no AJAX
                		if(result==1){
                			location.href='player/index.php'	//Redireciona
                		}else{
                			$('#errolog').show();		//Informa o erro
                		}
            		}
		})
		return false;	//Evita que a página seja atualizada
	})
})
</script>

<!--javascript-->
<script type="text/javascript" charset="utf8">
// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
	if (Notification.permission !== "granted")
		Notification.requestPermission();
});


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
							<a class="page-scroll" href="index.php">Home</a>
						</li>

						<li>
							<a class="page-scroll" href="player/login.php">Músicas</a>
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
					</div>
				</div>
			</div>
		</header>





		<!-- Meio aonde vai ficar as músicas -->
		<section>

			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="skills-text">
							<h2>Downloads</h2>
							<p>Faça o download de Músicas</p>
							<div class="container">



                <div class="container table-responsive col-md-12">
                    <table id="example" class="table table-hover table-bordered" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Artista</th>
                                <th width="35px">Download</th>
                             </tr>
                        </thead>
                        <tbody>
                          <?php
                            $db->connect();
                            $db->sql("SELECT * FROM downloads");
                            $res = $db->getResult();
                            foreach($res as $output)
                            {
                              $titulo     = $output["titulo"];
                              $artista    = $output["artista"];
                              $downloads  = $output["downloadlink"];
                              echo '<tr>';
                              echo   '<td><h4>'; echo $titulo; echo '</h4></td>';
                              echo   '<td><h4>'; echo $artista; echo '</h4></td>';
                              echo   '<td width="35px"><a target="_blank" href="'; echo $downloads; echo '" role="button" class="btn btn-primary fa fa-download"> Download</a></td>'
                               ,'</tr>'
                               ;
                            }
                            ?>
                        </tbody>
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
                            },

                              });
                            } );
                        </script>
                        </div>
							</div>
					</div>
					</div>
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

		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>

		<footer>
			<div class="container text-center">
				<p>King Of Eletro - 2016 | Made With <i style="color: red" class="fa fa-heart" aria-hidden="true"></i></p>
			</div>
		</footer>


	</body>
</html>

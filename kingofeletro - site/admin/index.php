<?php
ob_start();
if(isset($_COOKIE["usuariologado"]) && isset($_COOKIE["senhalogado"])){
} else {
  header("Location: login.php");
  exit();
}
$countMusics;
$countMusicPlay;
$countUsers;
$countDownloads;

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Admin King of Eletro</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Scripts Data Tables
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
        $('#test').DataTable();
    } );
    </script>
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->

     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: tico254@gmail.com</strong>
                    &nbsp;&nbsp;
                    <strong>Support: omegainc.tk </strong>
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                </a>

            </div>

            <?php
              include('config.php');
              $userlogadon = ($_COOKIE['usuariologado']);
              $senhalogadon = ($_COOKIE['senhalogado']);


             //$userlogadon = decryptIt($userlogadon);
            //$senhalogadon = decryptIt($senhalogadon);

              mysql_select_db($bd, $conexao);
              $sql = mysql_query("select * from usuario where usuario='$userlogadon' AND senha='$senhalogadon'");
              while($linha = mysql_fetch_array($sql)){
              $nomeLog= $linha["nome"];
              $tipoLog= $linha["tipo"];
              $jobLog= $linha["job"];
              $nivelLog= $linha["nivel"];
            }
            ?>

                        <div class="left-div">
                            <div class="user-settings-wrapper">
                                <ul class="nav">

                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                            <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-settings">
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="assets/img/user.png" alt="" class="img-rounded" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><?php echo $nomeLog?></h4>
                                                    <h5><?php echo $jobLog?></h5>

                                                </div>
                                            </div>
                                            <hr />
                                            <h5><strong>Nivel : </strong></h5>
                                            <?php echo $nivelLog?>
                                            <hr />
                                            <a href="#" class="btn btn-info btn-sm">Perfil</a>&nbsp; <a href="logout.php" class="btn btn-danger btn-sm">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                      <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a class="menu-top-active"   href="index.php">Dashboard</a></li>
                          <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a class="menu-section" href="cad_musicahome.php">Cadastro de Música Home</a></li>
        <li><a class="menu-section" href="cad_playlist.php">Cadastro de PlayList</a></li>
        <li><a class="menu-section" href="cad_download.php">Cadastro de Downloads</a></li>
        <li><a class="menu-section" href="cad_usuarios.php">Cadastro de Usuários</a></li>
      </ul>
    </li>
                          <li><a href="ligaradio.php">Ligar Radio</a></li>
                      </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>
                </div>
            </div>

            <div class="row">
<?
          include "config.php";

          $sql = mysql_query("SELECT * FROM musicas_home");
          $trMH = mysql_num_rows($sql); // verifica o número total de registros
          mysql_close($conexao);
  ?>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					           <div class="info-box blue-bg">
						                 <i class="fa fa-music"></i>
						                       <div class="count"><?php echo $trMH ?></div>
						                        <div class="title">Músicas Home</div>
					            </div><!--/.info-box-->
				      </div><!--/.col-->

<?
                            include "config.php";

                            $sql = mysql_query("SELECT * FROM musicas_playlist");
                            $trPlay = mysql_num_rows($sql); // verifica o número total de registros
                            mysql_close($conexao);
?>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="info-box" style="background:#66bab7">
                             <i class="fa fa-list"></i>
                                   <div class="count"><?php echo $trPlay ?></div>
                                    <div class="title">Playlist</div>
                      </div><!--/.info-box-->
              </div><!--/.col-->

<?
                        include "config.php";

                        $sql = mysql_query("SELECT * FROM downloads");
                        $trDS = mysql_num_rows($sql); // verifica o número total de registros
                        mysql_close($conexao);
?>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="info-box" style="background:#5691db">
                             <i class="fa fa-cloud-download"></i>
                                   <div class="count"><?php echo $trDS ?></div>
                                    <div class="title">Downloads</div>
                      </div><!--/.info-box-->
              </div><!--/.col-->

<?
                        include "config.php";

                        $sql = mysql_query("SELECT * FROM usuario");
                        $trUR = mysql_num_rows($sql); // verifica o número total de registros
                        mysql_close($conexao);
?>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="info-box" style="background:#00c3a6">
                             <i class="fa fa-user"></i>
                                   <div class="count"><?php echo $trUR ?></div>
                                    <div class="title">Users</div>
                      </div><!--/.info-box-->
              </div><!--/.col-->


            </div>

            <div class="row">
                <div class="col-md-6">
                      <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                           Active  Notice Panel
                                <div class="pull-right" >
                                    <div class="dropdown">
  <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    <span class="glyphicon glyphicon-cog"></span>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Refresh</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li>
  </ul>
</div>
                                </div>
                            </div>
                            <div class="panel-body">

                                <ul >

                                     <li>
                                            <a href="#">
                                     <span class="glyphicon glyphicon-align-left text-success" ></span>
                                                  Lorem ipsum dolor sit amet ipsum dolor sit amet
                                                 <span class="label label-warning" > Just now </span>
                                            </a>
                                    </li>
                                     <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-info-sign text-danger" ></span>
                                          Lorem ipsum dolor sit amet ipsum dolor sit amet
                                          <span class="label label-info" > 2 min chat</span>
                                            </a>
                                    </li>
                                     <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-comment  text-warning" ></span>
                                          Lorem ipsum dolor sit amet ipsum dolor sit amet
                                          <span class="label label-success" >GO ! </span>
                                            </a>
                                    </li>
                                    <li>
                                          <a href="#">
                                     <span class="glyphicon glyphicon-edit  text-danger" ></span>
                                          Lorem ipsum dolor sit amet ipsum dolor sit amet
                                          <span class="label label-success" >Let's have it </span>
                                            </a>
                                    </li>
                                   </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-repeat"></i> Just A Small Footer Button</a>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="text-center alert alert-warning">
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>

                    <hr />


                                <table class="table table-striped table-bordered" id="test" name="test">
                                    <thead>
                                        <tr>
                                            <th>Ref. No.</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Delivery On </th>
                                            <th># #</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td># 2501</td>
                                            <td>01/22/2015 </td>
                                            <td>
                                                <label class="label label-info">300 USD </label>
                                            </td>
                                            <td>
                                                <label class="label label-success">Delivered</label></td>
                                            <td>01/25/2015</td>
                                             <td> <a href="#"  class="btn btn-xs btn-danger"  >View</a> </td>
                                        </tr>
                                        <tr>
                                            <td># 15091</td>
                                            <td>12/12/2014 </td>
                                            <td>
                                                <label class="label label-danger">7000 USD </label>
                                            </td>
                                            <td>
                                                <label class="label label-warning">Shipped</label></td>
                                            <td>N/A</td>
                                             <td> <a href="#"  class="btn btn-xs btn-success"  >View</a> </td>
                                        </tr>
                                        <tr>
                                            <td># 11291</td>
                                            <td>12/03/2014 </td>
                                            <td>
                                                <label class="label label-warning">7000 USD </label>
                                            </td>
                                            <td>
                                                <label class="label label-success">Delivered</label></td>
                                            <td>01/23/2015</td>
                                             <td> <a href="#"  class="btn btn-xs btn-primary"  >View</a> </td>
                                        </tr>
                                        <tr>
                                            <td># 1808</td>
                                            <td>11/10/2014 </td>
                                            <td>
                                                <label class="label label-success">2000 USD </label>
                                            </td>
                                            <td>
                                                <label class="label label-info">Returned</label></td>
                                            <td>N/A</td>
                                             <td> <a href="#"  class="btn btn-xs btn-danger"  >View</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-danger">
                        This is a simple admin template that can be used for your small project or may be large projects. This is free for personal and commercial use.
                    </div>
                    <hr />
                     <div class="Compose-Message">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Compose New Message
                    </div>
                    <div class="panel-body">

                        <label>Enter Recipient Name : </label>
                        <input type="text" class="form-control" />
                        <label>Enter Subject :  </label>
                        <input type="text" class="form-control" />
                        <label>Enter Message : </label>
                        <textarea rows="9" class="form-control"></textarea>
                        <hr />
                        <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-envelope"></span> Send Message </a>&nbsp;
                      <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-tags"></span>  Save To Drafts </a>
                    </div>
                    <div class="panel-footer text-muted">
                        <strong>Note : </strong>Please note that we track all messages so don't send any spams.
                    </div>
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

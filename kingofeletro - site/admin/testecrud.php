<!DOCTYPE html>
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
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
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
                    <strong>Email: </strong>
                    &nbsp;&nbsp;
                    <strong>Support: </strong>
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
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

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
                            <li><a  href="index.html">Dashboard</a></li>
                            <li class="dropdown">
        <a class="menu-top-active" class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="menu-top-active" href="cad_musicahome.php">Cadastro de Música Home</a></li>
          <li><a class="menu-section" href="#">Page 1-2</a></li>
          <li><a class="menu-section" href="#">Page 1-3</a></li>
        </ul>
      </li>
                            <li><a href="ui.html">UI Elements</a></li>
                            <li><a href="table.html">Data Tables</a></li>
                            <li><a href="forms.html">Forms</a></li>
                             <li><a href="login.html">Login Page</a></li>
                            <li><a href="blank.html">Blank Page</a></li>

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
                    <h4 class="page-head-line">Visualizar</h4>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                  <div class="panel-body">
                    <div id="main" class="container-fluid">
                        <div id="top" class="row">
                          <div class="col-md-3">
                                 <h2>Itens</h2>
                             </div>

                             <div class="col-md-6">
                                 <div class="input-group h2">
                                     <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                                     <span class="input-group-btn">
                                         <button class="btn btn-primary" type="submit">
                                             <span class="glyphicon glyphicon-search"></span>
                                         </button>
                                     </span>
                                 </div>
                             </div>

                             <div class="col-md-3">
                                 <a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>
                             </div>
                        </div> <!-- /#top -->

                        <hr />
                        <div id="list" class="row">
                          <div id="list" class="row">

                              <div class="table-responsive col-md-12">
                                  <table class="table table-striped" cellspacing="0" cellpadding="0">
                                      <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>Header 1</th>
                                              <th>Header 2</th>
                                              <th>Header 3</th>
                                              <th class="actions">Ações</th>
                                           </tr>
                                      </thead>
                                      <tbody>

                                          <tr>
                                              <td>1001</td>
                                              <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                                              <td>Jes</td>
                                              <td>01/01/2015</td>
                                              <td class="actions">
                                                  <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                                                  <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                                                  <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                              </td>
                                          </tr>

                                      </tbody>
                                   </table>

                               </div>
                        </div> <!-- /#list -->

                        <div id="bottom" class="row">
                          <div id="bottom" class="row">
                              <div class="col-md-12">

                                  <ul class="pagination">
                                      <li class="disabled"><a>&lt; Anterior</a></li>
                                      <li class="disabled"><a>1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
                                  </ul><!-- /.pagination -->

                              </div>
                        </div> <!-- /#bottom -->
                    </div>  <!-- /#main -->

                     <button id="button" class="btn btn-default"  data-toggle="modal" data-target="#myModal" >Cadastrar</button>

                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                     <h4 class="modal-title" id="myModalLabel">Cadastro de Musica Lightbox teste</h4>
                                 </div>
                                 <div class="modal-body">
                                   <form name="inserir" id="inserir" method="post" action="inserir-musica.php">
                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Titulo</label>
                                       <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Titulo da Música" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Texto da Musica</label>
                                       <input name="texto" type="text" class="form-control" id="texto" placeholder="Faça o download ou ouça esta música" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Link para download</label>
                                       <input name="downloadlink" type="text" class="form-control" id="downloadlink" placeholder="Link de download" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Nome do arquivo</label>
                                       <input name="nomearquivo" type="text" class="form-control" id="nomearquivo" placeholder="Ex: avicii.mp3" />
                                     </div>

                                     <div class="form-group">
                                       <label for="exampleInputEmail1">Link da musica</label>
                                       <input name="musicalink" type="text" class="form-control" id="musicalink" placeholder="Link ou diretorio aonde a musica está" />
                                     </div>
                                     <button type="submit" name="Submit" id="button" class="btn btn-default"  data-toggle="modal" data-target="#myModal" >Cadastrar</button>
                                       </form>
                                 </div>
                                 <div class="modal-footer">
                                 </div>
                             </div>
                         </div>
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
                    &copy; 2016 King of Eletro | Framework : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
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

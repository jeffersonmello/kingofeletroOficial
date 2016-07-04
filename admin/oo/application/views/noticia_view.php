<?php
ob_start();
error_reporting( E_ALL );
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
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
    <!-- Scripts Data Tables
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" media="screen" charset="utf-8">
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
                                                    <img src="assets/img/user.png" alt="" class="img-rounded" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"></h4>
                                                    <h5></h5>

                                                </div>
                                            </div>
                                            <hr />
                                            <h5><strong>Nivel : </strong></h5>
                                            
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
                            <li><a  href="index.html">Dashboard</a></li>
                            <li class="dropdown">
                              <a class="dropdown-toggle menu-top-active" data-toggle="dropdown" href="#">Cadastros
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a class="menu-section" href="cad_musicahome.php">Cadastro de Música Home</a></li>
                                <li><a class="menu-section" href="cad_playlist.php">Cadastro de PlayList</a></li>
                                <li><a class="menu-section" href="cad_download.php">Cadastro de Downloads</a></li>
                                <li><a class="menu-section" href="cad_usuarios.php">Cadastro de Usuários</a></li>
                                <li><a class="menu-section" href="cad-musicaradio.php">Cadastro de Musicas da Rádio</a></li>
                                <li><a class="menu-section menu-top-active" href="cad_noticias.php">Cadastro de Noticias</a></li>
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
                    <h4 class="page-head-line">Noticias</h4>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                  <div class="panel-body">
                    <div id="main" class="container-fluid">
                        <div id="top" class="row">
                          <div class="col-md-3">
                                 <h2>Noticias</h2>
                             </div>


                             <div class="col-md-3 pull-right">
                              <a class="btn btn-primary pull-right h2" onclick="add_noticia()"> >Nova Música</a>
                             </div>
                        </div> <!-- /#top -->
                        <hr />

                              <div class="table-responsive col-md-12">
                                <table class="table table-hover table-bordered" id="table">

			                               <thead>
				                                   <tr>
															<th>#</th>
					                                        <th>Titulo</th>
					                                        <th>Data</th>
															<th>Noticia</th>
					                                        <th style="width:125px;" >Ações</th>
				                                  </tr>
			                              </thead>
                                    <tbody>

  			                           </tbody>

  		                          </table>


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript">

   var save_method; //for save method string
   var table;
   $(document).ready(function() {
     table = $('#table').DataTable({

       "processing": true, //Feature control the processing indicator.
       "serverSide": true, //Feature control DataTables' server-side processing mode.

       // Load data for the table's content from an Ajax source
       "ajax": {
           "url": "<?php echo site_url('noticia/ajax_list')?>",
           "type": "POST"
       },

       //Set column definition initialisation properties.
       "columnDefs": [
       {
         "targets": [ -1 ], //last column
         "orderable": false, //set not orderable
       },
       ],
		
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
        }
     });
   });

   function add_noticia()
   {
     save_method = 'add';
     $('#form')[0].reset(); // reset form on modals
     $('#modal_form').modal('show'); // show bootstrap modal
     $('.modal-title').text('Cadastrar Noticia'); // Set Title to Bootstrap modal title
   }

   function edit_noticia(guid)
   {
     save_method = 'update';
     $('#form')[0].reset(); // reset form on modals

     //Ajax Load data from ajax
     $.ajax({
       url : "<?php echo site_url('noticia/ajax_edit/')?>/" + guid,
       type: "GET",
       dataType: "JSON",
       success: function(data)
       {

           $('[name="guid"]').val(data.guid);
           $('[name="titulo"]').val(data.titulo);
           $('[name="data"]').val(data.data);
           $('[name="noticia"]').val(data.noticia);


           $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
           $('.modal-title').text('Editar Noticia'); // Set title to Bootstrap modal title

       },
       error: function (jqXHR, textStatus, errorThrown)
       {
           alert('Error get data from ajax');
       }
   });
   }

   function reload_table()
   {
     table.ajax.reload(null,false); //reload datatable ajax
   }

   function save()
   {
     var url;
     if(save_method == 'add')
     {
         url = "<?php echo site_url('noticia/ajax_add')?>";
     }
     else
     {
       url = "<?php echo site_url('noticia/ajax_update')?>";
     }

      // ajax adding data to database
         $.ajax({
           url : url,
           type: "POST",
           data: $('#form').serialize(),
           dataType: "JSON",
           success: function(data)
           {
              //if success close modal and reload ajax table
              $('#modal_form').modal('hide');
              reload_table();
           },
           error: function (jqXHR, textStatus, errorThrown)
           {
               alert('Error adding / update data');
           }
       });
   }

   function delete_noticia(guid)
   {
     if(confirm('Are you sure delete this data?'))
     {
       // ajax delete data to database
         $.ajax({
           url : "<?php echo site_url('noticia/ajax_delete')?>/"+guid,
           type: "POST",
           dataType: "JSON",
           success: function(data)
           {
              //if success reload ajax table
              $('#modal_form').modal('hide');
              reload_table();
           },
           error: function (jqXHR, textStatus, errorThrown)
           {
               alert('Error adding / update data');
           }
       });

     }
   }

 </script>

 <!-- Bootstrap modal -->
 <div class="modal fade" id="modal_form" role="dialog">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h3 class="modal-title">Noticia Form</h3>
     </div>
     <div class="modal-body form">
       <form action="#" id="form" class="form-horizontal">
         <input type="hidden" value="" name="id"/>
         <div class="form-body">
           <div class="form-group">
             <label class="control-label col-md-3">Titulo</label>
             <div class="col-md-9">
               <input name="titulo" placeholder="Titulo" class="form-control" type="text">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3">Data</label>
             <div class="col-md-9">
               <input name="data" placeholder="01/01/2016" class="form-control" type="text">
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3">Noticia</label>
             <div class="col-md-9">
               <textarea name="noticia" placeholder="Noticia"class="form-control"></textarea>
             </div>
           </div>
         </div>
       </form>
         </div>
         <div class="modal-footer">
           <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         </div>
       </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
 <!-- End Bootstrap modal -->

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
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>


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
                              <div class="table-responsive col-md-12">
                                  <table id="example" class="table table-hover" cellspacing="0" cellpadding="0" width="100%">
                                      <thead>
                                          <tr>
                                              <th>Artista</th>
                                              <th>Titulo</th>
                                              <th>Download</th>
                                              <th>Torrent</th>
                                           </tr>
                                      </thead>
                                      <tbody>
<?
                    include "config.php";


                    $guidEdit = "0";
                    $guidDelete = "0";



                    $sql = mysql_query("SELECT * FROM downloads");
                    $tr = mysql_num_rows($sql); // verifica o número total de registros


                    while($linha = mysql_fetch_array($sql)){
                    $guid1= $linha["guid"];
                    $titulo1= $linha["titulo"];
                    $downloadlink1 = $linha["downloadlink"];
                    $downloadtorrent1= $linha["downloadtorrente"];
                    $artista1= $linha["artista"];


// Tabela
                    echo  "<tr>";
                    echo  "<td>$artista1</td>";
                    echo  "<td>$titulo1</td>";
                    echo  "<td><a href='$downloadlink1'  target='_blank' height='10px' class='btn btn-primary btn-lg active center-block glyphicon glyphicon-download-alt'> Download</a></td>";
                    echo  "<td><a href='$downloadtorrent1'target='_blank' height='10px' class='btn btn-success btn-lg active center-block glyphicon glyphicon-cloud-download'> Torrent</a></td>";
                    echo  "</tr>";
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
    responsive: true
      });
    } );
</script>
</div>

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

<?php
ob_start();
function __autoload($class_name){
		require_once 'class/' . $class_name . '.php';
	}

  $titulo  = $_POST['titulo1'];
  $data = $_POST['data1'];
  $noticia = $_POST['noticia1'];

  $noticia->setTitulo($titulo);
  $noticia->setData($titulo);
  $noticia->setNoticia($noticia);

  header("Location: cad_noticias.php?accao=notica");
exit();

?>

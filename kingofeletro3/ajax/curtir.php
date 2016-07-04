<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$id = (isset($_POST['udid'])) ? (int)$_POST['udid'] : 0;
$db = new Database();
$db->connect();
$db->sql("SELECT * FROM musicas_home WHERE guid = $id");
$res = $db->getResult();
foreach($res as $output){
  $curtirv = $output["curtir"];
}
$curtir = ($curtirv + 1);
$db->update('musicas_home',array('curtir'=>$curtir),'guid='.$id);

echo json_encode($curtir);

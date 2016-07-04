<?php
header('content-type: application/json; charset=utf-8');
include('../class/mysql_crud.php');
$conta = (isset($_POST['conta'])) ? (int)$_POST['conta'] : 1;
$db = new Database();
$db->connect();
$db->sql("SELECT * FROM visit WHERE guid = 1");
$res = $db->getResult();
foreach($res as $output){
  $cont = $output["cont"];
}
$cont = ($cont + $conta);
$db->update('visit',array('cont'=>$cont),'guid=1');

echo json_encode($cont);

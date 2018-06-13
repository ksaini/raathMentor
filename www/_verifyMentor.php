<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
include_once("./mvariables.php");

$uname = $_GET['uname'];
$pswd = $_GET['pswd'];
$res = getDB($_GET['key']);

if($res!=null){
	include_once("./variables.php");
	$sql = runQuery("SELECT mid,mname,cid from m_mentor_tbl where mid= '$uname' and mid= '$pswd' and active=1; ");
	echo json_encode($sql);
}	

?>
<?php 
require_once("./db.php");
//header('Content-type: application/json');
$some = "months";

$query = "SELECT {$some} FROM `months` ORDER BY `ser` LIMIT 0 , 30";
$json = array();
	$result= $mysqli->query($query);
	while($row = $result->fetch_assoc()){
    $json[]= $row;}
  echo json_encode($json);
?>
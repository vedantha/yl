<?php 
	require_once("./db.php");
	$months = $_POST['month'];
	//$months = 'August';
	$query = "SELECT `lat`,`lng` FROM `locations` WHERE `months` LIKE '".$months."' LIMIT 0 , 30";
	$result = $mysqli->query($query);
	$json = array();
	while($row = $result->fetch_assoc()){
		$json[] = $row;}
		echo json_encode($json);
	
?>
<?php 
	require_once("./db.php");
	$months = $_POST['month'];
	$continent = $_POST['continent'];
	if($continent == "Null"){
			$query = "SELECT `lat` , `lng`
						FROM `locations`
						WHERE `months` LIKE '".$months."'
						LIMIT 0 , 30";
						
	}
	else{
		$query = "SELECT `lat` , `lng`
				FROM `locations`
				WHERE `months` LIKE '".$months."' 
				AND `continent` LIKE '".$continent."' 
				LIMIT 0 , 30";
	}
		$result = $mysqli->query($query);
	
	$json = array();
	while($row = $result->fetch_assoc()){
		$json[] = $row;}
		echo json_encode($json);
?>
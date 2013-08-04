<!DOCTYPE html>
<html>
	<head>
		<title>PlanMy.Travel</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	<body>
		<div id="gMap"></div>
		<div id="sel" name="sel"><select id="input">
			<option selected="selected">Choose a month</option>
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
		</select>
	<button id="btn">Submit</button>
	<p></p>
</div>
<script type="text/javascript" src="./map.js"></script>
</body>
</html>
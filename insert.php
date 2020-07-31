<?php
	require './php/connection.php';
	$conn = OpenCon();


	$query="SELECT name FROM talents";
	$resultset = $conn->query($query);

	echo(mysqli_num_rows($resultset));

	while($rows = $resultset->fetch_assoc()){

	echo($rows['name']);
	foreach ($rows as $row){
		echo($row);
	}
	}
	?>
	
	<html>
	<head>
	    <title>Castle Clash Wiki</title>
		<link rel="stylesheet" href="../../css/style.css" type="text/css">
		<script src="../js/index.js"></script>
		
	</head>

	<body>
	    <h1>INSERT HEROES</h1> </br>
		<form action="/action_page.php">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <?php
	$query="SELECT name FROM talents";
	$result = $conn->query($query);
	?> <option value="<?php  ?>" >   <?php ?>


  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>


		
	</body>
</html>




	<?php
	CloseCon($conn);
?>
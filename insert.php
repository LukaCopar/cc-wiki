<?php
	require './php/connection.php';
	$conn = OpenCon();


	$query="SELECT name FROM talents";
	$resultset = $conn->query($query);

	//echo(mysqli_num_rows($resultset));
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
  <label for="cars">Talent:</label>
  <select name="cars" id="cars">

  <?php 
	 while($rows = $resultset->fetch_assoc()){
	foreach ($rows as $row){
	?>
	 <option value="<?php echo($row); ?>" > <?php echo($row);} ?></option> <?php } ?>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>


		
	</body>
</html>




	<?php
	CloseCon($conn);
?>
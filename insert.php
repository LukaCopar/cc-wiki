<?php
	require './php/connection.php';

	
	?>
	
	<html>
	<head>
	    <title>Castle Clash Wiki</title>
		<link rel="stylesheet" href="../../css/style.css" type="text/css">
		<script src="../js/index.js"></script>
		
	</head>

	<body>
	   <h1>INSERT HEROES</h1> </br>

		<form action="./insert_b.php" method="post" enctype="multipart/form-data">

  <label>Talent:</label>
  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>

  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>


  <select name="talent" id="talent">
  <?php 
  $query = "SELECT name FROM talents";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="talent" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>



  <br><br>
  <input type="submit" value="submit">
</form>


		
	</body>
</html>




	<?php
?>
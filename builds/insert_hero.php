<?php
	require '../php/connection.php';

	
	?>
	
	<html>
	<head>
	    <title>Insert Hero</title>
		<link rel="stylesheet" href="../css/style.css" type="text/css">
		<script src="../js/index.js"></script>


	</head>

	<body>
	   <h1>INSERT HEROES</h1> </br>
	   <div class="insert-field">
	<form action="./insert_hero_b.php" method="post" enctype="multipart/form-data">

  <input name="name" type="text" placeholder="name"/>
  <input name="bio" type="text" placeholder="biography"/>
  <select name="skill" id="skill">
  <?php 
  $query = "SELECT name FROM hero_skills";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="skill" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>
  <input name="url" type="text" placeholder="url slike"/>
  <input name="url2" type="text" placeholder="url slike evo"/>

  <select name="warden" id="warden">
  <?php 
  $query = "SELECT name FROM wardens";
  $stmt = $pdo ->query($query);
	foreach ($stmt as $row){
	?>
	 <option name="warden" value="<?php echo($row['name']); ?>" > <?php echo($row['name']);} 
	 ?></option>
  </select>

  <input name="movspd" type="text" placeholder="movement speed"/>

  <input name="atkspd" type="text" placeholder="atk speed"/>

  
  <br><br>
  <input class="submit" type="submit" value="submit">
</form>
</div>

		
		<?php

		 $query = "SELECT name,biography FROM heros";
		 $stmt = $pdo ->query($query);
		 foreach($stmt as $row){
		 ?>
		 <div>
		 <?php
		 echo $row['name'];
		 echo " | ";
		 echo $row['biography'];
		 ?>
		 </div>
		 <hr>
		 <?php
		 }



		?>




	</body>
</html>




	<?php
?>
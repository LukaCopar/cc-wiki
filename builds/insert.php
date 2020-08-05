<?php
require '../php/connection.php';


?>

<html>

<head>
	<title>Insert Hero Build</title>
	<link rel="stylesheet" href="../../css/style.css" type="text/css">
	<script src="../js/index.js"></script>

</head>

<body>
	<h1>INSERT HEROES</h1> </br>
	<div>
		<form action="./insert_b.php" method="post" enctype="multipart/form-data">

			<label>Hero Build:</label>
			<select name="talent" id="talent">
				<?php
				$query = "SELECT name FROM talents";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['name']); ?>"> <?php echo ($row['name']);
																			}
																				?></option>
			</select>

			<select name="brakethrough" id="brakethrough">
				<?php
				$query = "SELECT level FROM brakethroughs";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['level']); ?>"> <?php echo ($row['level']);
																				}
																					?></option>
			</select>


			<select name="destiny" id="destiny">
				<?php
				$query = "SELECT level FROM destinys";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['level']); ?>"> <?php echo ($row['level']);
																				}
																					?></option>
			</select>


			<select name="enchantment" id="enchantment">
				<?php
				$query = "SELECT name FROM enchantments";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['name']); ?>"> <?php echo ($row['name']);
																			}
																				?></option>
			</select>


			<select name="equipment" id="equipment">
				<?php
				$query = "SELECT name FROM equipment";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['name']); ?>"> <?php echo ($row['name']);
																			}
																				?></option>
			</select>


			<select name="hero_lvl" id="hero_lvl">
				<?php
				$query = "SELECT level FROM hero_lvl";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['level']); ?>"> <?php echo ($row['level']);
																				}
																					?></option>
			</select>


			<select name="inscription" id="inscription">
				<?php
				$query = "SELECT level FROM inscriptions";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['level']); ?>"> <?php echo ($row['level']);
																				}
																					?></option>
			</select>


			<select name="superior_trait" id="superior_trait">
				<?php
				$query = "SELECT name FROM superior_traits";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['name']); ?>"> <?php echo ($row['name']);
																			}
																				?></option>
			</select>


			<select name="trait_build" id="trait_build">
				<?php
				$query = "SELECT name FROM trait_builds";
				$stmt = $pdo->query($query);
				foreach ($stmt as $row) {
				?>
					<option name="talent" value="<?php echo ($row['name']); ?>"> <?php echo ($row['name']);
																			}
																				?></option>
			</select>


			<br><br>
			<input type="submit" value="submit">
		</form>
	</div>


</body>

</html>




<?php
?>
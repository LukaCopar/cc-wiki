<?php
	include_once './php/connection.php';
?>

<html>

<head>
	<title id="title">Heros</title>

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="js/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	
	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="./favicon.ico" />
	<!-- Compressed JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
	<script src="js/classes/heroes.js"></script>
	<script src="js/classes/talents.js"></script>
	<script src="js/classes/builds.js"></script>
	<script src="js/classes/slider.js"></script>
	<script src="js/index.js"></script>
	<script type='application/javascript' src='./js/fastclick.js'></script>
	<link rel="stylesheet" href="./css/main.css" type="text/css">
	<link rel="manifest" href="./manifest.webmanifest">

</head>

<body>
	<div class="wrapper style1">
		<!-- Header -->
		<div id="header" class="navbar">
			<div id="logo">
				<h1><a style="background-color: none;" href="index.php">CC Calculator</a></h1>
				<span class="tag">by Gašper and Luka</span>
			</div>
		</div>
		<!-- Extra -->

	<div id="build">
<div>a</div>
<div>b</div>
<div>c</div>
<div>d</div>

	</div>

	</div>
	<div id="navbar">
		<?php
		require 'inc/nav.html';

		?>
		<div id="content">
			<div class="container-heros">
				<?php
				//require 'php/heroes.php'
				?>
			</div>
		</div>
	</div>
</body>

</html>
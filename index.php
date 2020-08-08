<html>

<head>
	<title id="title">Heros</title>

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	
	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

	<!-- Compressed JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
	<script src="js/classes/heroes.js"></script>
	<script src="js/classes/talents.js"></script>
	<script src="js/classes/builds.js"></script>
	<script src="js/classes/slider.js"></script>
	<script src="js/index.js"></script>
	<script type='application/javascript' src='./js/fastclick.js'></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="manifest" href="./manifest.webmanifest">

</head>

<body>
	<div class="wrapper style1">
		<!-- Header -->
		<div id="header" class="navbar">
			<div id="logo">
				<h1><a href="index.php">CC Calculator</a></h1>
				<span class="tag">by Gašper and Luka</span>
			</div>
		</div>
		<!-- Extra -->

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
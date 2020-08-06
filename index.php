<html>

<head>
	<title id="title">Heros</title>

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

	<!-- Compressed JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

	<script src="js/index.js"></script>

	<link rel="stylesheet" href="css/style.css" type="text/css">

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
		<div id="content">
			<div class="container-heros">
				<?php
				require 'php/heroes.php'
				?>
			</div>
		</div>
	</div>

	<?php
	require 'inc/nav.html';

	?>
</body>

</html>
<html>
	<head>
	    <title>Castle Clash Wiki</title>
		
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>

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
					<h1><a href="index.html">Phase Shift</a></h1>
					<span class="tag">by TEMPLATED</span>
				</div>
				<ul id="navbar" class="menu align-center">
					<li><a class="nav-item active" href="#">Heroes</a></li>
					<li><a class="nav-item" href="#">Talents</a></li>
					<li><a class="nav-item" href="#">Pets</a></li>
					<li><a class="nav-item" href="#">IDK smthn</a></li>
				</ul>
			</div>
			<!-- Extra -->
			<div id="content">
				<div class="container">
					<div class="row">
						<?php 
							require 'php/heroes.php'
						?>					
					</div>
				</div>
			</div>

		</div>
	</body>
</html>
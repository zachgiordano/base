<html>
	<head>
		<title><?= $title ?></title>
		<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="">base</a>
				</div>
				<div class="navbar">
					<ul class="nav nav-tabs">
						<li class="nav-item"><a class="nav-link" href="<?php echo $this->config->base_url(); ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo $this->config->base_url(); ?>about">About</a></li>
					</ul>
				</div>
			</div>
		</nav>
<!DOCTYPE html>
<html lang="hu"
	xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>PHP Blog App</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	
	<!-- Query -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<?php require_once __DIR__ .'/globals.php';?>

	<?= '<style>' ?>
		<?php include  __DIR__ . '/style.css' ?>
	<?= '</style>' ?>

</head>

<body>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-collapse-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= ROOT ?>">dJani97 blogja</a>
			</div>

			<div class="collapse navbar-collapse" id="my-collapse-navbar">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?= ROOT ?>">Kezdőlap</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle"
							data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Bejegyzések <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?= ROOT ?>/posts/">Összes</a></li>
							<li><a href="<?= ROOT ?>/posts/new.php">Új bejegyzés</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle"
							data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Szerzők <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?= ROOT ?>/authors/">Összes</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<?php
	require 'shared/cnx.php';
	if(!isset($_GET['idArt'])) header('location:index.php');

	$sql = "select * from cmsdb.article where idArt=".$_GET['idArt'];
	$res = mysql_query($sql) or die(mysql_error($cnx));
	$art = mysql_fetch_array($res);
	if(!isset($art)) header('location:index.php');

	 ?>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php echo $art['Titre']; ?></title>

		<!-- Bootstrap CSS file -->
		<link href="css/bootstrap-3.0.3/css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/bootstrap-3.0.3/css/bootstrap-theme.min.css" rel="stylesheet" />
		<link href="css/blog.css" rel="stylesheet" />
	</head>

	<body>

		<!-- Header -->
		<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand">Astrospace</a>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<form class="navbar-form navbar-right" role="search">
				      <div class="form-group">
				        <input type="text" class="form-control" placeholder="Search">
				      </div>
				      <button type="submit" class="btn btn-default">Submit</button>
				    </form>
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<!-- Body -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<article>
						<h1><a href=""><?php echo $art['Titre']; ?></a></h1>

				        <div class="row">

				          	<div class="col-sm-6 col-md-6">
				          		&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <?php echo $art['date']; ?>
				          	</div>
				          </div>

				          <hr>

				          <img src=<?php echo $art['imgPath'];?> class="img-responsive" style="margin: auto">

				          <br />

				          <p class="lead"><?php echo $art['Description']; ?></p>

				          <p><?php echo $art['FullDescr']; ?></p>

				          <hr>
					</article>

					<ul class="pager">
						<li class="previous"><a href="index.php">&larr; Back to posts</a></li>
					</ul>
					<hr />
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer>
			<div class="container">
				<hr />
				<p class="text-center">Copyright &copy; GOUMEHRI_ELHADIM 2017. All rights reserved.</p>
			</div>
		</footer>

		<!-- Bootstrap Script file -->
		<script src="js/jquery-2.0.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>

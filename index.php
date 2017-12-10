<?php
	require 'shared/cnx.php';
	if(isset($_GET['squery'])){
		extract($_GET);
		$sql = "select * from cmsdb.article where Titre like (\"%$squery%\") or Description like (\"%$squery%\") or FullDescr like (\"%$squery%\");";
	}else  $sql = "select * from cmsdb.article;";
	$res=mysql_query($sql) or die(mysql_error());
	$r = mysql_fetch_array($res);
 ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A Bootstrap Blog Template">
	<meta name="author" content="Vijaya Anand">

	<title>Home</title>

	<!-- Bootstrap CSS file -->
	<link href="css/bootstrap-3.0.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-3.0.3/css/bootstrap-theme.min.css" rel="stylesheet" />
	<link href="css/blog.css" rel="stylesheet" />
	<style>
	p.emsg{
		margin-bottom: : 10%;
		margin-top : 5%;
		text-align: center;
	}
	</style>

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
				<a href="index.php" class="navbar-brand">Astrospace</a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<form class="navbar-form navbar-right" role="search">
			      <div class="form-group">
			        <input type="text" class="form-control" name="squery" placeholder="Search">
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

				<h1>Latest Posts</h1>
<?php
	while($row=mysql_fetch_array($res)){

?>
				<article>
					<h2><a href="singlepost.php"> <?php echo $row['Titre']; ?> </a></h2>

			        <div class="row">
			          	<div class="col-sm-6 col-md-6">
			          		&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <?php echo $row['date']; ?>
			          	</div>
			          </div>

			          <hr>

			          <img src="<?php echo $row['imgPath']; ?>" class="img-responsive" style="margin: auto">

			          <br />

			          <p class="lead"><?php echo $row['Description']; ?></p>

			          <p>The symbol of Aries is the Ram, and that's both good and bad news. Impulsive Aries might be tempted to ram their ideas down everyone's throats without even bothering to ask if they want to know. It's these times when you may wish Aries' symbol were a more subdued creature, more lamb than ram perhaps. You're not likely to convince the Ram to soften up; these folks are blunt and to the point. Along with those qualities comes the sheer force of the Aries nature, a force that can actually accomplish a great deal. Much of Aries' drive to compete and to win comes from its Cardinal Quality. Cardinal Signs love to get things going, and Aries exemplifies this even better than Cancer, Libra or Capricorn.</p>

					  <p class="text-right">
				          <a href="singlepost.php?idArt=<?php echo $row['idArt'];?>">
				          	continue reading...
				          </a>
				      </p>

			          <hr>
				</article>
<?php }

if(!isset($r)) echo '<p class="emsg"><i><b>No articles available for know</b></i></p>';
else{
?>
				<ul class="pager">
					<li class="previous"><a href="#">&larr; Previous</a></li>
					<li class="next"><a href="#">Next &rarr;</a></li>
				</ul>
<?php
}
 ?>
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

	<!-- Jquery and Bootstrap Script files -->
	<script src="js/jquery-2.0.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

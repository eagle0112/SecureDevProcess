<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap-3.0.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <?php 
			session_start();
			if (!isset($_SESSION['id'])) {
				header('location:login.php');
			}else{
                require '../shared/cnx.php';
                $page = 'backup';
                include 'includes/menu.php';
		?>

		<?php
			} 
		?>	
	</div>
</body>
</html>
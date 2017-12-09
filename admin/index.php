<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class = "container">
		<div class="wrapper">
			<form action="" method="post" name="Login_Form" class="form-signin">       
			    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
				  <hr class="colorgraph"><br>
				  
				  <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
				  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
				 
				  <button class="btn btn-lg btn-primary btn-block"  name="submit" value="Login" type="Submit">Login</button>  			
			</form>			
		</div>
	</div>
	<?php 
		extract($_POST);
		if (isset($submit)) {
			require 'commun.php';
			// $query="select * from comptes where login='$username' and password='$password'";
			// $res=mysql_query($query)or die(mysql_error());
			// $row=mysql_fetch_array($res);
			// if($row){
			// 	session_start();
			// 	$id=$row['id'];
			// 	$nom=$row['nom'];
			// 	$_SESSION['nom']=$nom;
			// 	$_SESSION['id']=$id;
			// 	header('location: debut.php');
			// }else{
			// 	echo "Requete réussie mais vide";
			// }
		}
	?>
</body>
</html>
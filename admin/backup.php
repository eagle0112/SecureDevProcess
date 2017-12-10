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
            extract($_POST);
			session_start();
			if (!isset($_SESSION['id'])) {
				header('location:login.php');
			}else{
                require '../shared/cnx.php';
                $page = 'backup';
                include 'includes/menu.php';
                if (isset($submit)) {
                    $project_dir = "../../SecureDevProcess";
                    $backup_dir = "backup/";
                    $backup_file = $backup_dir . $fileName;
                    $err = exec("zip -r $backup_file $project_dir");
                }
		?>
            <div class="col-md-offset-2 col-md-6 col-sm-6">
                <form method="post" action="backup.php">
                    <div class="form-group">
                        <label class="col-form-label" for="fileName">File name</label>
                        <input type="text" class="form-control" id="fileName" placeholder="File name" name="fileName">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">BackUp</button>
                </form>
            </div>
		<?php
			} 
		?>	
	</div>
</body>
</html>
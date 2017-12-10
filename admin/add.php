<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap-3.0.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <div class="row">
            <?php 
                session_start();
                if (!isset($_SESSION['id'])) {
                    header('location:login.php');
                }else{
                    require '../shared/cnx.php';
                    $page = 'add';
                    include 'includes/menu.php';
                    extract($_POST);
                    if (isset($submit)) {
                        $file=$_FILES['img'];
                        $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/SecureDevProcess/images/uploads/";
                        $target_file = $target_dir . basename($file["name"]);
                        // $today = date("F j, Y g:i a");
                        $today = date("Y-m-d");
                        $adminId = $_SESSION['id'];
                        if (move_uploaded_file($file['tmp_name'], $target_file)) {
                            $sql="INSERT INTO article (Titre, Description, FullDescr, imgPath, date, IdPoster) VALUES ('$title', '$initDesc', '$fullDesc', '$target_file','$today', $adminId)";
                            if (mysql_query($sql)) {
                                 header("location: index.php");
                           } else {
                               echo "Error: " . $sql . "<br>" . mysql_error();
                           }
                        }
                        
                    }
            ?>
            <div class="col-md-offset-2 col-md-6 col-sm-6">
                <form method="post" action="add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-form-label" for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="desc">Initial Description</label>
                        <textarea class="form-control" id="desc" rows="3" name="initDesc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fullDesc">Full Description</label>
                        <textarea class="form-control" id="fullDesc" rows="5" name="fullDesc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Article Image</label>
                        <input type="file" class="form-control-file" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Add Article</button>
                </form>
            </div>
            
            <?php
                } 
            ?>	
        </div>

	</div>
</body>
</html>
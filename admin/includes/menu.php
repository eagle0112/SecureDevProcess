<div class="row menu">
    <div class="page-header text-center">
        <h1>Admin <?php echo $_SESSION['name']; ?></h1>      
    </div>
    <div class="col-md-2 col-sm-2">
        <nav class="nav-sidebar">
            <ul class="nav">
                <li <?php if($page == 'home'){ ?>class="active"<?php } ?>><a href="index.php">Home</a></li>
                <li <?php if($page == 'add'){ ?>class="active"<?php } ?>><a href="add.php">Add arcticle</a></li>
                <li <?php if($page == 'backup'){ ?>class="active"<?php } ?>><a href="backup.php">Backup</a></li>
                <li class="nav-divider"></li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
        </nav>
    </div>
</div>
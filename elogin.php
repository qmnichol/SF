<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Log In</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 offset-md-4">
                <?php
                if (isset($msg)) {
                    ?>
                    <div class="alert alert-danger">
                        <b>Error!</b> Invalid Username and Password, Please enter the correct password
                    </div>
                <?php
                }
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="card">
                        <div class="card-header bg-primary">
                        <li class="nav text-right" sytle=""><a href="index.php"><span class="fa fa-times btn-sm btn-primary"></span></a></li>
                            <h1 class="align-item-center" style="text-align:center;">Sign In</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter text" required="require"> </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter text" required="require">
                            </div>
                        </div>
                        <div class="card-footer form-group">
                            <input type="submit" class="btn btn-primary btn-center" value="Login" name="submit">
                        </div>
                        <div class="card-footer text-warning form-group">
                            <li class="nav">
                                <p></p>
                                <p1 style="color:black">If you are not registered please register.<a href="signup.php" class="btn nav-link">Click here</a></p1>
                            </li>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
</body>
</html>
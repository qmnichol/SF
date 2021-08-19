<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 offset-md-4">
                <?php
                if (isset($_POST["submit"])) {
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    $connection = mysqli_connect("localhost", "root", "", "sf");

                    $sql = "INSERT INTO signup(username,password) VALUES('$username', '$password')";
                    if (mysqli_query($connection, $sql)) {
                        ?>
                        <div class="alert alert-success">
                            <b>Success!</b> Your account has been created, you can Log in.
                        </div>
                    <?php
                        } else {
                            ?>
                        <div class="alert alert-danger">
                            <b>Error!</b> Wrong Username or Password, Please try another account.
                        </div>
                <?php
                    }
                }
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="card">
                        <div class="card-header bg-primary">
                            Signup Form
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter text" required="require">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter text" required="require">
                            </div>
                        </div>
                        <div class="card-footer text-warning form-group">
                            <input type="submit" value="Create new Account" class="btn btn-primary" name="submit">
                            <li class="nav">
                                <p1>If you already have an account please Login</p1>
                                <a href="login.php" class="nav-link">Log In</a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="dist/js/jquery-3.4.1.min.js"></script>
<script src="dist/js/bootstrap.js"></script>

</html>
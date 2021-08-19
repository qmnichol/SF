<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: userindex.php");
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $connection = mysqli_connect("localhost", "root", "", "sf");

    $sql = "SELECT * FROM signup WHERE Email = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $sql);
    if ($row = mysqli_fetch_array($result)) {
        $_SESSION["username"] = $username;

        header("Location: userindex.php");
    } else {
        $msg = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="dist/css/style.css"> -->
    <!-- <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="dist/css/style.css"> -->
</head>
<style>
    /* box centererererere */
    .box {
    width: 400px;
    padding: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 24px
}
.X {
  float: right;
}
</style>
<body class="bg-dark">
    <!-- start header -->
    <!-- <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="nav navbar-nav navbar-brand navbar-left" href="#">ServiceFinder</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="fa fa-user-plus btn-sm btn-primary">Sign Up</span></a></li>
                    <li><a href="login.php"><span class="fa fa-window-close-o">Login</span></a></li>
                </ul>
            </div>
        </nav>
    </header> -->
    <!-- end header -->


    <div class="container">
        <div class="row">
            <div class="box ">
                <?php
                if (isset($msg)) {
                    ?>
                     <div class="alert alert-danger"> <!--col-12 col-sm-12 col-md-4 offset-md-4 -->
                        <b>Error!</b> Invalid Username and Password, Please enter the correct password
                    </div>
                <?php
                }
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="X" >
                                <li class="nav text-right" ><a href="index.php"><span class="fa fa-times btn-sm btn-primary"></span></a></li>
                            </div>
                            <h1 class="align-item-center" style="text-align:center;">Sign In</h1>
                            <p><a href="login.php" class="nav-link " style="color:black; text-align:center;">Already have an account? Please Login</a></p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control" name="username" placeholder="Please enter email" required="require"> </div>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="password" class="form-control" name="password" placeholder="Please enter password" required="require">
                            </div>
                        </div>
                        <div class="card-footer form-group">
                            <input type="submit" class="btn btn-primary btn-center" value="Login" name="submit">
                        </div>
                        <div class="card-footer text-warning form-group">
                            <li class="nav">
                                <p></p>
                                <p1 style="color:black">If you are not registered please register.<a href="signup.php" class="nav-link">Click here</a></p1>
                            </li>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
<script src="dist/js/jquery-3.4.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery.min.js"></script>

</html>
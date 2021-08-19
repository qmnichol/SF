<!DOCTYPE html>
<html lang="en">

<head>
    <title>ExampleLogin</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
    
</head>
<style>
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

</style>
<body class="bg-dark">
    <header>
        <div class="topnav">
            <a class="navbar-brand" style="font-size: 200%" href="#">ServiceFinder</a>
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <div class="topnav-right">
                <a href="signup.php"><span class="fa fa-user-plus btn-sm btn-primary">Sign Up</span></a>
                <a href="login.php"><span class="fa fa-user btn-sm btn-primary">Login</span></a>
            </div>
        </div>
    </header>

      <!-- modal for login -->
 <!-- Trigger the modal with a button -->
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>






    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 offset-md-4">
                <?php
                if (isset($_POST["submit"])) {
                    $fname = $_POST["fname"];
                    $lname = $_POST["lname"];
                    $Email = $_POST["Email"];
                    $password = $_POST["password"];
                    $cnum = $_POST["cnum"];

                    $connection = mysqli_connect("localhost", "root", "", "last_db");

                    $sql = "INSERT INTO users(fname,lname,Email,cnum,password) VALUES('$fname', '$lname','$Email', '$cnum', '$password')";
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
                                <label for=""></label>
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required="require">
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control" name="lname" placeholder="Last name" required="require">
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control" name="Email" placeholder="Email" required="require">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password" required="require">
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control" name="cnum" placeholder="Enter text" required="require">
                            </div>
                        </div>
                        <div class="card-footer text-warning form-group">
                            <input type="submit" value="Create new Account" class="btn btn-primary" name="submit">
                            <li class="nav">
                                <a href="loginsite.php" class="nav-link">Sign in</a>
                            </li>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="dist/js/bootstrap.js"></script>

</html>
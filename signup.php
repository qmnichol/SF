<!DOCTYPE html>
<html lang="en">

<head>
    <title>PikoyBuan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .card { height: 100%;
}
/* .raw {
height: 200px;
background: #CCCCCC;
display: flex;
align-items: center;
justify-content: center;
}
.child {
background-color: #FFFF00;
width: 100px;
height: 100px;
} */
/* para sa profile */
/* .upload-profile-image{
    position: relative;
    width: 10%;
    margin-left: auto;
    margin-right: auto;
    transition: filter .8s ease;
}

.upload-profile-image:hover{
    filter: drop-shadow(1px 1px 22px #7584bb);
}

#upload-profile{
    position: absolute;
    top: 0;
    z-index: 10;
    width: 200px;
    margin-top: 0px;
    opacity: 0;
}

#upload-profile::-webkit-file-upload-button{
    visibility: hidden;
}

#upload-profile::before{
    content: ' ';
    display: inline-block;
    width: 200px;
    height: 200px;
    cursor: pointer;
    border-radius: 50%;
}*/
/* camera icon */
.camera-icon{
    position: absolute;
    top: 20px;
    width: 20px !important;
    filter: invert(30%) !important;
}

.camera-icon{
    filter: invert(100%) !important;
}
.img-placeholder {
  width: 55%;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height:200px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 40%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}
/* style for fname Lname to align horizontally */

    .card-body {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
 
    .card-body {
        width: 100%;
    }
 
    /* replace "1" with the number of the first field that you want to align horizontally */
    .card-body>*:nth-child(2),
    /* replace "2" with the number of the second field that you want to align horizontally */
    .card-body>*:nth-child(1){
        width: 47%;
    }
    .cards{
        width:100%;
    }
    .date{
        width: 50%;
    }
    .X {
  float: right;
}
</style>
<body class="bg-dark">
    <div class="container" id="card">
        <div class="row" id="raw">
            <div class="col-12 col-sm-12 col-md-4 offset-md-4" id="child">
                <?php
                if (isset($_POST["submit"])) {
                    $fname = $_POST["fname"];
                    $lname = $_POST["lname"];
                    $Email = $_POST["Email"];
                    $password = $_POST["password"];
                    $cnum = $_POST["cnum"];
                    $date = $_POST["date"];
                    $gender = $_POST["gender"];
                    $ValidID = $_POST["ValidID"];
                    $profileImage = $_POST["image"];
                    

                    $connection = mysqli_connect("localhost", "root", "", "last_db");

                    $sql = "INSERT INTO users(fname, lname, Email, cnum, gender, ValidID, image, password, date) VALUES('$fname', '$lname', '$Email', '$cnum', '$gender', '$ValidID', '$profileImage', '$password', '$date')";
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
                            <div class="X" >
                                <li class="nav text-right" ><a href="index.php"><span class="fa fa-times btn-sm btn-primary"></span></a></li>
                            </div>
                                <h1 class="align-item-center" style="text-align:center;">Sign In</h1>
                                <p><a href="login.php" class="nav-link " style="color:black; text-align:center;">Already have an account? Please Login</a></p> 
                        </div>
                        <!-- /*?php
                        // $files = $_FILES['profileUpload'];
                        // $profileImage = upload_profile('image/', $files);

                        // function upload_profile($path, $file){
                        //     $targetDir = $path;
                        //     $default = "beard.png";
                        
                        //     // get the filename
                        //     $filename = basename($file['name']);
                        //     $targetFilePath = $targetDir . $filename;
                        //     $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                        
                        //     If(!empty($filename)){
                        //         // allow certain file format
                        //         $allowType = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                        //         if(in_array($fileType, $allowType)){
                        //             // upload file to the server
                        //             if(move_uploaded_file($file['tmp_name'], $targetFilePath)){
                        //                 return $targetFilePath;
                        //             }
                        //         }
                        //     }
                        
                        //     // return default image
                        //     return $path . $default;
                        // }
                        ?> -->

                        <!----------------------------------------------profile----------------------------------------------------------->
                        <!-- <span class="border border-da">asdfas</span>

                        <div class="upload-profile-image d-flex justify-content-center pb-5">
                            <div class="text-center">
                                <div class="d-flex justify-content-center">
                                    <img class="camera-icon" src="image/camera.png" alt="camera">
                                </div>
                                <img src="image/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                                <small class="form-text text-black-50">Choose Image</small>
                                <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                            </div>
                        </div> -->
                                 <!-- Profile image -->
                        <div class="form-group text-center" style="position: relative;" >
                                <div class="d-flex justify-content-center">
                                    <img class="camera-icon" src="image/camera.png" alt="camera">
                                </div>
                            <span class="img-div">
                                <div class="text-center img-placeholder"  onClick="triggerClick()">
                                    <h4>Upload image</h4>
                                </div>
                                <img src="image/beard.png" onClick="triggerClick()" id="profileDisplay" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                            </span>
                            <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
                        </div>


                        <!-- improfile end ------------------------------------------------------------------------------------------------------->
                        <div class="card-body">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required="require">
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" required="require">
                            </div>
                            <div class="form-group cards">
                                <label for=""></label>
                                <input type="text" class="form-control" name="Email" placeholder="Email address" required="require" maxlenth="10">
                            </div>
                            <div class="form-group cards">
                                <label for=""></label>
                                <input type="password" class="form-control" name="password" placeholder="password" required="require">
                            </div>
                            <div class="form-group cards">
                                <label for=""></label>
                                <input type="text" class="form-control" name="cnum" placeholder="Phone Number" required="require">
                            </div>
                            <div class="form-group"> 
                                <label for="">Please enter Birthdate</label>
                                <input class="form-control" type="date" name="date" id="date"> 
                            </div>
                            <!-- Gender -->
                            <div class="form-group cards">
                                <label>
                                    <input type="radio" name="gender" value="Male" /> Male
                                </label>                        
                                <label>
                                    <input type="radio" name="gender" value="Female" /> Female
                                </label>
                                <label>
                                    <input type="radio" name="gender" value="Other" /> Other
                                </label>
                                <label for="">Please provide a valid ID: 
                                    <input type="file" name="ValidID" id="vid">
                                </label>
                            </div>
       
                            <!-- end for card body -->
                        </div>
                        <div class="card-footer text-warning form-group">
                            <input type="submit" value="Create new Account" class="btn btn-primary" name="submit">
                            <li class="nav">
                                <p></p>
                                <p1 style="color:black">If you already have an account please Login. <a href="login.php" class="nav-link">Log In</a></p1>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function triggerClick(e) {
        document.querySelector('#profileImage').click();
        }
        function displayImage(e) {
                    if (e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                        }
                    reader.readAsDataURL(e.files[0]);
                }
         }
    </script>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="dist/js/jquery-3.4.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery.min.js"></script>

</html>
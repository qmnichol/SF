<!DOCTYPE html>
<html lang="en">

<head>
    <title>ServiceFinder</title>
    <!-- <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css"> ka paningit bagang ikaw -->
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css"> -->
</head>

<style type="text/css">
        /* start card style */
*{
    margin: 0px;
    padding: 0px;
   }
   body{
    font-family: arial;
   }
   .main{
   
    margin: 2%;
   }
   
   .card{
        width: 20%;
        display: inline-block;
        box-shadow: 2px 2px 20px black;
        border-radius: 5px; 
        margin: 2%;
       }
   
   .image img{
     width: 100%;
     border-top-right-radius: 5px;
     border-top-left-radius: 5px;
     
   
    
    }
   
   .title{
    
     text-align: center;
     padding: 10px;
     
    }
   
   h1{
     font-size: 20px;
    }
   
   .dex{
     padding: 3px;
     text-align: center;
    
     padding-top: 10px;
           border-bottom-right-radius: 5px;
     border-bottom-left-radius: 5px;
   }
   button{
     margin-top: 40px;
     margin-bottom: 10px;
     background-color: white;
     border: 1px solid black;
     border-radius: 5px;
     padding:10px;
   }
   button:hover{
     background-color: black;
     color: white;
     transition: .5s;
     cursor: pointer;
   }
   body{
       margin: 0;
       padding: 0;
   }
   /* .header-search{
       height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image/image.jfif);
        background-size:cover;
        background-position:center;
        display:flex;
        justify-content:center;
        align-items:center;
        font-family: sans-serif;
   } */
   .serch-field{
       height:40px;
       padding:10px;
       border:none;
       border-radius: 25px;
       outline:none;

   }
   .btn{
    transistion-duration: 0.4s;
    }
    .btn:hover{
    background-color: black; /* Green */
    color: white;
    }
    /* serch btn nav */

    /* align button so risghgt */
    .topnav-right {
  float: right;
}
.nic:hover{
    
     background-color: DodgerBlue;
     color: powderblue;
     transition: .5s;
     cursor: pointer;
   
}

</style>

<body>
        <!-- start navbar header?? -->
    <header>
        <nav class="navbar navbar-default" style="background-color:powderblue;">
            <div class="container-fluid ">
                <div class="topnav" style="">
                    <a class="navbar-brand" style="font-size: 200%; " href="#">ServiceFinder</a>
                    <a class="nic btn-lg " style="border-width: 2px; border-style: solid;border-radius: 25px; text-decoration: none; font-size: 100%" href="#">Service Finder</a>
                    <a class="navbar-brand" style="font-size: 100%;" href="#"></a>
                    <a class="navbar-brand" style="font-size: 100%;" href="#">About</a>
                    <!-- <a class="navbar-brand" style=" " href="#">Reviews</a> -->
                    <!-- <button class="SSx"  style="border-radius: 24px; padding: 4px 10px;"> Search Services</button> -->
                </div>

                <div class="topnav-right">
                    <a href="signup.php"><span class="fa fa-user-plus btn-sm btn-primary">Sign Up</span></a> |
                    <a href="login.php"><span class="fa fa-user btn-sm btn-primary">Login</span></a>
                </div>
            </div>
        </nav>
    </header>
        <!-- end navbar header?? -->

        <!-- start search button center -->
    <div class="header-search" style="text-align:center">
        <h1> Content fasdfasdf</h1>
        <div class="form-box">
            <input type="text" class="serch-field business" placeholder="Servicesssss" style="border-color: black">
        </div>
    </div>
        <!-- end search button center -->

                        <!-- start card main class -->
    <div class="main">
        <!-- start card1 -->
        <div class="card">
            <div class="image">
                <img src="image/img_avatar1.png">
            </div>
            <div class="title">
                <h1>Girl G. Gurl</h1>
                <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
            </div>
            <div class="dex">
                <p>here you can add description.... </p>
                <button onclick="document.location='login.php'">Hire...</button>
                
            </div>
        </div>
    
        <!-- end card1 -->

        <!-- start card2 -->
    
        <div class="card">
            <div class="image">
                <img src="image/avatar2.png">
            </div>
            <div class="title">
                <h1>Fname M. Lastname</h1>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="dex">
                <p>You can Add Desccription Here...</p>
                <button onclick="document.location='login.php'">Hire...</button>
            </div>
        </div>
    
        <!-- end card2 -->

        <!-- start card3 -->
    
        <div class="card">
            <div class="image">
                <img src="image/img_avatar1.png">
            </div>
            <div class="title">
                <h1>Write title Here</h1>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="dex">
                <p>You can Add Desccription Here...</p>
                <button onclick="document.location='login.php'">Hire...</button>
            </div>
        </div>
   
        <!-- end card3 -->
        <div class="card">
            <div class="image">
                <img src="image/img_avatar1.png">
            </div>
            <div class="title">
                <h1>Write title Here</h1>
                <div class="stars">
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="dex">
                <p>You can Add Desccription Here...</p>
                <button onclick="document.location='login.php'">Hire...</button>
            </div>
        </div>
    </div>
                            <!-- Card Main ends heere -->
    <!-- <div class="card-body">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter text" required="require"> </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter text" required="require">
            </div>
        </div>
        <div class="card-footer form-group">
            <input type="submit" class="btn btn-primary btn-center" value="Login" name="submit">
        </div>
    </div> -->

  </div>
</div>                           
</body>

<script src="dist/js/jquery-3.4.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/jquery.min.js"></script>

</html>
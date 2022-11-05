<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>.:: Cyberbullying | Sign Up ::.</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <script>  
function validateform(){  
var name=document.myform.username.value;  
var fullname=document.myform.fullname.value;
var city=document.myform.city.value; 
var password=document.myform.password.value;
var x=document.myform.email.value;
  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
 else if (fullname==null || fullname==""){  
  alert("Fullname can't be blank");  
  return false;  
}


    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	

else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
  else if (city==null || city==""){  
  alert("city can't be blank");  
  return false;  
}
}  
</script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Cyberbullying</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <?php  session_start(); if(isset($_SESSION['login_user']) == null || isset($_SESSION['login_user']) == '' ){ ?>
                    <li class="active">
                        <a href="signup.php">Sign Up</a>
                    </li>
                    <li>
                        <a href="signin.php">Sign In</a>
                    </li>
                    <?php } ?>
                    <?php   if(isset($_SESSION['login_user']) != null || isset($_SESSION['login_user']) != '' ){ ?>
                    <li >
                        <a href="complaint.php">Add Complaint</a>
                    </li>
                      <li class="active">
                        <a href="view_complaint.php">View Complaints</a>
                    </li>
                    <?php } ?>
                   
                    <?php   if(isset($_SESSION['login_user']) != null || isset($_SESSION['login_user']) != '' ){ ?>
                    <li>
                    <?php $login_session=isset($_SESSION['login_user']);?></h1><a href="logout.php" > Logout </a>
                    </li>
                   <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
	<br>
    <br>
    <br>
    <div class="container">
	<div class="row">
    	<div class="col-md-3">
        </div>
            <div class="col-md-6">
                <h3>Create Account</h3>
                
                 <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
           $dbpass = '';
            $mysql_database = 'reservation';
                     //$dbuser = 'coml_users';
                     //$dbpass = 'Aqq1020';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$mysql_database);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $username = addslashes ($_POST['username']);
			   $fullname = addslashes ($_POST['fullname']);
               $email = addslashes ($_POST['email']);
			   $city = addslashes ($_POST['city']);
			    $password = addslashes ($_POST['password']);
            }else {
               $username = $_POST['username'];
			   $fullname = $_POST['fullname'];
               $email = $_POST['email'];
			   $city = $_POST['city'];
			   $password = $_POST['password'];
            }
            
            
            $sql = "INSERT INTO users ". "(username,password, fullname,email,city 
               ) ". "VALUES('$username','$password','$fullname','$email','$city' )";
               
           // mysqli_select_db('reservation');
            //$retval = mysqli_query( $sql );
                     $retval =       mysqli_query($conn, $sql, MYSQLI_STORE_RESULT );

            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            ?> <div style="width:500px; text-align:center; color:red"> <?php echo "Entered data successfully\n"; ?> </div>
            <?php
            
            mysqli_close($conn);
         }else {
            ?>
            
            
            
                <form method = "post"  action = "<?php $_PHP_SELF ?>" name="myform" onsubmit="return validateform()">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="username" id="username" >
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email </label>
                            <input type="email" name="email" class="form-control" id="email"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>City </label>
                            <input type="text" name="city" class="form-control" id="city"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password </label>
                            <input type="password" name="password" class="form-control" id="password"  >
                        </div>
                    </div>
                    
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                      <input name = "add" type = "submit" class="btn btn-primary" id = "add"  value = "Add Client" />                </form>
            </div>
		<div class="col-md-3">
        </div>
        </div>
         <?php
         }
      ?>
        <hr>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Cyberbullying 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    

</body>

</html>

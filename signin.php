<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>.:: Cyberbullying | Home Page ::.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Cyberbullying</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li >
                        <a href="services.php">Services</a>
                    </li>
                    <?php  session_start(); if(isset($_SESSION['login_user']) == null || isset($_SESSION['login_user']) == '' ){ ?>
                    <li>
                        <a href="signup.php">Sign Up</a>
                    </li>
                    <li class="active">
                        <a href="signin.php">Sign In</a>
                    </li>
                    <?php } ?>
                    <?php   if(isset($_SESSION['login_user']) != null || isset($_SESSION['login_user']) != '' ){ ?>
                    <li >
                        <a href="complaint.php">Add Complaint</a>
                    </li>
                      <li >
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    

    <!-- Page Content -->
    <div class="container">
		<br><br><br>
		<div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5">
                <h3>Login To Website</h3>
                <form  method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username:</label>
                            <input type="text" name="username" class="form-control" id="name" required data-validation-required-message="Username">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            <input type="tel" class="form-control" name="password" id="phone" required data-validation-required-message="Password">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <input type="submit" name="submit" class="btn btn-primary" value="Login">
                    <input type="reset" name="reset" class="btn btn-primary" value="reset">
                </form>
            </div>
			<div class="col-md-3">
            </div>
        </div>
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
    

<?php
if (isset($_POST['submit']))
	{	  
include("config.php");

session_start();


        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $mysql_database = 'reservation';
        //$dbuser = 'coml_users';
        //$dbpass = 'Aqq1020';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$mysql_database);

$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['login_user']=$username;
 
$query = mysqli_query($conn,"SELECT username FROM users WHERE username='$username' and password='$password'", MYSQLI_STORE_RESULT);

 if (mysqli_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";	
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}

}
    
?>

</body>

</html>

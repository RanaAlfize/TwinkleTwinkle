<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>.:: Cyberbullying | Service ::.</title>
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
                    <li  class="active">
                        <a href="services.php">Services</a>
                    </li>
                    <?php  session_start(); if(isset($_SESSION['login_user']) == null || isset($_SESSION['login_user']) == '' ){ ?>
                    <li>
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
        </div>
    </nav>
	<br>
    <br>
    <br>
    <div class="container">
	<div class="row">
    <br>
    <br>

<br>
<br>
 
     <?php
$servername = "localhost";
$username = "coml_users";
$password = "Aqq1020";

$dbname = "compl_dbs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM service";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	?>
        <div class="container">
        			<div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8"> 
                        <h2 style="width:100%; text-align:center"> Service </h2>
                        <br>
            <?php             
    while($row = $result->fetch_assoc()) {
        
        
        echo  $row["details"]. "<br><br>";
		
    }
} else {
    echo "0 results";
}
?>
        </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
            	</div>
              </div>
			</div>
        <?php
$conn->close();
?> 
    
    	</div>
        </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


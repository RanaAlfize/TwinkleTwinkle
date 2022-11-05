<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>.:: Cyberbullying | Sign Up ::.</title>

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
                    <li>
                        <a href="signup.php">Sign Up</a>
                    </li>
                    <li>
                        <a href="signin.php">Sign In</a>
                    </li>
                    <?php } ?>
                    <?php   if(isset($_SESSION['login_user']) != null || isset($_SESSION['login_user']) != '' ){ ?>
                    <li class="active">
                        <a href="complaint.php">Add Complaint</a>
                    </li>
                      <li >
                        <a href="view_complaint.php">View Complaints</a>
                    </li>
                    <?php } ?>
                    <?php   if(isset($_SESSION['login_user']) != null || isset($_SESSION['login_user']) != '' ){ ?>
                    <li>
                    <?php 

 

$login_session=isset($_SESSION['login_user']);

?></h1>
<a href="logout.php" > Logout </a>
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
                <h3>Add Complaint</h3>
                
<form action="upload.php" method="post" enctype="multipart/form-data" >
<div class="control-group form-group">
                        <div class="controls">
                            <label>File Attach </label>
	<input type="file" name="file" id="file" class="form-control"/>
    </div>
    </div>
    <div class="control-group form-group">
                        <div class="controls">
                            <label>Description </label>
    <textarea name="complaint_text" id="complaint_text" class="form-control"></textarea>
    </div>
    </div>
	<button type="submit" class="btn btn-primary"  name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>        <hr>


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

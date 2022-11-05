<?php session_start();
if(isset($_SESSION['first_name']) == null || isset($_SESSION['first_name']) == '' ){ ?>
    echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
<?php } ?>
<!DOCTYPE html>
<html lang="en">
    <head>

         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>

         <link rel="stylesheet" type="text/css" href="css/Style.css">

    </head>
    
    <body style="background-color:whitesmoke ;">
    
    
        <header>
            <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
            <nav class="navagation">
           
                <a id="aHedear"  href="ParentHomePage.php#faql" > about Twinkle </a>
                <a id="aHedear" href="ParentHomePage.php#faq" > FAQ </a>
                <a id="aHedear" href="index.php">Home</a>
                <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
                   
            </nav>
        </header>
    
        <div>
            <h1 class="mytitle2"> Wellcome, <?php echo $_SESSION['full_name'];?> !</h1>
            <h3 class="mytitle3"> Twinkle misses you </h3>  
        </div> 
    
        <section class="main content">
    
            <div class="card">
                <a href="ParentProfilePage.php"><h4 class="mytitle2 makeE">My Profile</h4></a>
            </div>
    
            <div class="card">
                <a href="OffersParentSide.php"><h4 class="mytitle2 makeE">My OfferList</h4></a>
            </div>
    
            <div class="card">
                
                <div class="dropdown">
                    <a href="#"><h4 class="mytitle2 makeE">My Requests</h4></a>
                    <!-- <button class="dropbtn">My Requests</button> -->
                    <div class="dropdown-content">
                      <a href="NewRequest.php">New Request</a>
                      <a href="OldRequest.php">Old Request</a>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <a href="ParentBookingPage.php"><h4 class="mytitle2 makeE">My Bookings</h4></a>
            </div>
    
    
        </section>
        <section class="cardFAQ fixCol" id="faq">
            <h2 class="title" id="commenQs"></h2>
            <div class="content">
                <div class="card fixcol">
                    <div class="icon">
                        <img src="img/q.png" alt="machine icon">
                    </div>
                    <div class="info">
                        <h3> Why Twinkle?</h3>
                        <p>
                            Between running after our professional and family dreams we may need some help, 
                            taking care of young children is difficult and we cannot always do it, we may feel pressure and tired and sometimes collapse, Twinkle is there to solve this problem, 
                            when you want to go a little and leave the kids no problem you can be very confident Your children are perfectly fine.
                        </p>
                    </div>
                    
                </div>
                <!---------------------------------------------->
                <div class="card fixcol">
                        <div class="icon">
                            <img src="img/workIcon.jpg" alt="machine icon">
                    </div>
                    <div class="info">
                        <h3>How Do We Wrok?</h3>
                        <p>
                            <strong>Parents:</strong>
                            Parents can log in and view offers from babysitters, 
                            read their profile and ratings, 
                            choose the right babysitter and contact them for coordination.
                            <br>
                            <br>
                            <strong>Babysitters:</strong>
    
                            The babysitter can look at the request submitted by the parents, 
                            choose the application that matches her skills, 
                            and then present the offer to the family, and upon their approval, 
                            communication will be made for coordination
                        </p>
                    </div>
                    
                </div>
    
        </section>

    </body>
</html>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">

  
</head>




    <body style="background-color:whitesmoke ;">


        <header>
          <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
           <nav class="navagation">
       
              <a  id="aHedear"href="BabySitterHome.php#commenQs" > about Twinkle </a>
               <a  id="aHedear" href="BabySitterHome.php#commenQs" > FAQ </a>
                <a id="aHedear" href="BabySitterHome.php">Home</a>
                <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>

               
           </nav>
       </header>



<section class="main center">
    <h1 class="mytitle" style="top: 0em ;"> MY PROFILE </h1>
    <?php
    include("config.php");
    $user_id= $_SESSION["user_id"];
    $sql="SELECT * FROM users where user_id='$user_id'";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $i = 1;
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class=" lightCard">
                <img src="uploads/<?php echo $row['photo'];?>" class="profilepic">
                <h5>Name : <span><?php echo $row['first_name'].' '.$row['last_name'];?></span></h5>
                <h5>Age :<span> <?php echo $row['age'];?></span></h5>
                <h5 class="whitetcard">About Me : </span style="color: #ffffff"> <?php echo $row['bio'];?>.</span></h5>
<!--                <h5> Experience :<span> 12 years of experience</span></h5>-->
        <?php }
    } ?>
    </div>
    <div >
        <a href="EditBabysitterProfile.php" ><button class="main-btn2"type="button">Edit my profile</button></a>
        <button button class="main-btndel "type="button">Delete Profile</button> 
     
     </div> 
</section>





<section class="main center cont">
    <h1 class="mytitle" style="top:0em; right: 0em;">  CONTACT </h1>
    <div class="lightCard">
<h5> Email : <span> bestNanny@gmail.com </span></h5>
<h5> Phone No. : <span> 96654321765</span></h5>
    </div>
</section>

    <section class="main center cont">
    <h1 class="mytitle" style="top:0em; right: 0em;">MY REVIEWS </h1>
    <div class=" lightCard">
        <img src="1_PvoG2ZWSd5Z-a3k2jdM55A-removebg-preview.png" style="max-width:70% ;padding: 2em; margin-left: 3em;"> 
       <a href="ViewMyReviews.html"> <button button class="main-btn2 "type="button" style="    position: relative;top: -31px;left: 105px ;max-width: 40%;max-height: 40%;">All Reviews</button> </a>
    </section>


    </div>


    </section>

    <footer class="footer">
        <h5>contact us:</h5>  
        <div >
            <a href="mailto:Twinkle@hotmail.com"> 
                <img  id="mailIcon" src="mail.png"  alt="mail icon"  class="contactIcons">
                </a>
        </div>
    </footer>

</body>
</html>
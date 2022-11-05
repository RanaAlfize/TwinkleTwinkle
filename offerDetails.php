<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OfferDetails</title>
        <link rel="stylesheet" type="text/css" href="css/Style.css">
    </head>
    <body>
        <header>
            <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
             <nav class="navagation">
         
                <a  id="aHedear" href="BabySitterHome.php#faq" > about Twinkle </a>
                 <a id="aHedear"  href="BabySitterHome.php#faq" > FAQ </a>
                  <a id="aHedear" href="BabySitterHome.php">Home</a>
                  <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
             </nav>
         </header>

         <h2 class="JRLTitle">Offer Details</h2>
         <div class="detailsBox">
             <?php
             include("config.php");
             $user_id= $_SESSION["user_id"];
             $id=$_GET['id'];
             //users.*,requests.*,requests.age re_age,offers.offer_id,offer.price
             $sql="SELECT * FROM offers  INNER JOIN requests 
ON requests.id = offers.request_id INNER JOIN users 
ON users.user_id = requests.parentName where offer_id='$id'";
             $result = $mysqli->query($sql);
             if ($result->num_rows > 0) {
             $i = 1;
             while ($row = $result->fetch_assoc()) {
             ?>
             <div class="parentBox">
                 <p class="reqID">RequestID: #<?php echo $row['offer_id'];?></p>
                 <h3 class="category">Parent:</h3>
                 <img src="uploads/<?php echo $row['photo'] ?>" class="detailsPic">
                 <div class="infoBox">
                     <p><span class="att">Name: </span><span class="value"><?php echo $row['first_name'].' '.$row['last_name'];?>.</span></p>
                     <p><span class="att">Email: </span><span class="value"><a href="mailto:<?php echo $row['email'];?>"></a><?php echo $row['email'];?>
                     </p></span>
                     <p><span class="att">Location: </span><span class="value"><?php echo $row['location'];?></span>
                     </p>
                 </div><!--infoBox-->
             </div>

             <div class="babyBox">
                 <h3 class="category">Baby:</h3>
                 <div class="infoBox">
                     <p><span class="att">Name: </span><span class="value"><?php echo $row['kidsName'];?>.</span></p>
                     <p><span class="att">Gender: </span><span class="value"><?php echo $row['Gender'];?>.</span></p>
                     <p><span class="att">Age: </span><span class="value"><?php echo $row['age'];?>.</span></p>
                     <p><span class="att">Date&Time Of Service: </span><span class="value"><?php echo $row['startDate'];?></span></p>
                     <p><span class="att">Duration: </span><span class="value"><?php echo $row['Duration'];?></span></p>
                     <p><span class="att">Type Of Service: </span><span class="value"><?php echo $row['TypeOfServese'];?></span>
                     </p>
                     <p><span class="att">Price: </span><span class="value"><?php echo $row['price'];?> SR</span></p>
                 </div><!--infoBox-->
             </div>
<?php }
} ?>
            <a class="back" href="myOffers.php">Back</a>
        </div><!--outer-->



        <footer class="footer">
            <h5>contact us:</h5>  
            <div >
                <a href="mailto:Twinkle@hotmail.com"> 
                    <img  id="mailIcon" src="mail.png"  alt="mail icon"  class="contactIcons">
                    </a>
            </div>
        </footer>
    </body>
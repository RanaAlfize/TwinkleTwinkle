<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyOffers</title>
        <link rel="stylesheet" type="text/css" href="css/Style.css">
    </head>
    <body>
        <header>
            <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
             <nav class="navagation">
         
                <a id="aHedear"  href="BabySitterHome.php#faq" > about Twinkle </a>
                 <a  id="aHedear" href="BabySitterHome.php#faq" > FAQ </a>
                  <a id="aHedear" href="BabySitterHome.php">Home</a>
                  <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
                 
             </nav>
         </header>

        <h2 class="JRLTitle">My Offers</h2>

        <div class="JRsContent">
            <?php
            include("config.php");
            $user_id= $_SESSION["user_id"];
            $sql="SELECT requests.*,offers.status as status_offer,offers.offer_id  FROM offers INNER JOIN requests
ON offers.request_id = requests.id";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
            $i = 1;
            while ($row = $result->fetch_assoc()) {
            ?>

            <div class="req-container">       
            <p><?php echo $row['kidsName'] ?>, <?php echo $row['Gender'] ?>, <?php echo $row['age'] ?>, <?php echo $row['TypeOfServese'] ?>,</p>
            <p><?php echo $row['startDate'] ?>, <?php echo $row['Duration'] ?></p>
            <p><span class="att">Status:</span><span class="pending"> <?php echo $row['status_offer'] ?></span></p>
            <a href="offerDetails.php?id=<?php echo $row['offer_id'];?>" class="OfferDetailsBut">Details</a>
            </div>
        
           <?php }
           } ?>
        </div>


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
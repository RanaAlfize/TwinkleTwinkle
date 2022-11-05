<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>job requests</title>
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

        <h2 class="JRLTitle">Job Requests</h2>

        <div class="JRsContent">
            <?php
            include("config.php");
            $user_id= $_SESSION["user_id"];
            $sql="SELECT * FROM requests INNER JOIN users
ON requests.parentName = users.user_id";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
            $i = 1;
            while ($row = $result->fetch_assoc()) {
            ?>
            <div class="req-container">
                <div class="info"><h3>Request <?php echo $i;?></h3></div><!--adding div to get the css style .info h3-->
                <div class="req-info">
                    <p><?php echo $row['kidsName'] ?>, <?php echo $row['Gender'] ?>, <?php echo $row['age'] ?></p>
                    <p><?php echo $row['TypeOfServese'] ?>, <?php echo $row['startDate'] ?>, <?php echo $row['Duration'] ?></p>
                    <a class="details" href="requestDetails.php?id=<?php echo $row['id'] ?>">details</a></div>
            </div>
<?php $i++; }
} ?>

    </div><!--JRsContent-->
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

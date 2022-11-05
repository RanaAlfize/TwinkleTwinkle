<?php session_start();?>
<!DOCTYPE html><html>
    <head>
        <meta charset="utf-8">
        <title>request details</title>
        <link rel="stylesheet" type="text/css" href="css/Style.css">
    </head>
    <body>
        <header>
            <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
             <nav class="navagation">
         
                <a id="aHedear" href="BabySitterHome.php#faq" > about Twinkle </a>
                 <a id="aHedear" href="BabySitterHome.php#faq" > FAQ </a>
                  <a id="aHedear" href="BabySitterHome.php">Home</a>
                  <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
                 
             </nav>
         </header>
        <h2 class="JRLTitle">Request Details</h2>

        <div class="detailsBox">
            <?php
            include("config.php");
            $user_id= $_SESSION["user_id"];
            $id=$_GET['id'];
            $sql="SELECT users.*,requests.*,requests.age re_age FROM requests  INNER JOIN users 
ON requests.parentName = users.user_id where id='$id'";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
            $i = 1;
            while ($row = $result->fetch_assoc()) {
            ?>
            <div class="parentBox">
                <p class="reqID">RequestID: #<?php echo $row['id'] ?></p>
                <h3 class="category">Parent:</h3>
                <img src="uploads/<?php echo $row['photo'] ?>" class="detailsPic">
                <div class="infoBox">
                    <p><span class="att">Name: </span><span
                                class="value"><?php echo $row['first_name'] . ' ' . $row['last_name'] ?></span></p>
                    <p><span class="att">Email: </span><span class="value"><a
                                    href="mailto:NORAH3@HOTMAIL.COM"></a><?php echo $row['email'] ?></p></span>
                </div><!--infoBox-->
            </div>

            <div class="babyBox">
                <h3 class="category">Baby:</h3>
                <div class="infoBox">
                    <p><span class="att">Name: </span><span class="value"><?php echo $row['kidsName'] ?>.</span></p>
                    <p><span class="att">Gender: </span><span class="value"><?php echo $row['Gender'] ?>.</span></p>
                    <p><span class="att">Age: </span><span class="value"><?php echo $row['re_age'] ?>.</span></p>
                    <p><span class="att">Date&Time Of Service: </span><span
                                class="value"><?php echo $row['startDate'] ?></span></p>
                    <p><span class="att">Duration: </span><span class="value"><?php echo $row['Duration'] ?></span></p>
                    <p><span class="att">Type Of Service: </span><span
                                class="value"><?php echo $row['TypeOfServese'] ?></span></p>
                    <p><span class="att">Location: </span><span class="value"><?php echo $row['location'] ?></span></p>

                    <?php
                    if (isset($_POST['add'])) {

                        $price = addslashes($_POST['price']);


                        $user_id = $_SESSION["user_id"];
                        $request_id= $row['id'];

                        $sql = "INSERT INTO offers " . "(request_id,user_id, price,status 
               ) " . "VALUES('$request_id','$user_id','$price','PENDING')";

                        /*if ($mysqli->query($sql) === TRUE) {
                              echo "New record created successfully";
                        } else {
                               echo "Error: " . $sql . "<br>" . $mysqli->error;
                        }*/

                        ?>
                        <div style="width:500px; text-align:center; color:red"> <?php echo "Entered data successfully\n"; ?> </div>
                        <?php

                        mysqli_close($mysqli);
                    } else { ?>

                        <p><span class="att">Send Offer: </span>
                        <form method = "post"  action = "<?php $_PHP_SELF ?>">
                            <input type="text" name="price" style="width: 186px; border-radius:8px;">
                            <input
                                    type="submit" name="add" value="send">
                        </form></p>
                    <?php
                    } ?>
                    </div><!--infoBox-->
                </div>
            <?php }
            } ?>

                <div class="reqD-buttons">
                <a class="back" href="jobRequests.php">Back</a></div>
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
</html>